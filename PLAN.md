# Plain SDK PHP - Development Plan

This document outlines the roadmap to transform this type library into a fully-featured Plain API SDK for PHP.

## Current State

- ✅ Auto-generated strongly-typed GraphQL objects from Plain schema
- ✅ Full PHP 8.1+ type safety with readonly properties
- ✅ Automated type generation via GitHub Actions
- ✅ PHPStan/Psalm compatible

## Goal

A fully-installable Composer package that makes querying Plain's GraphQL API easy and type-safe in PHP.

---

## Phase 1: HTTP Client & Authentication

### 1.1 Plain API Client

**Purpose**: Core HTTP client for communicating with Plain's GraphQL API.

**Location**: `src/Client/PlainClient.php`

**Features**:
- Constructor accepts API key and optional configuration
- Base URL: `https://core-api.uk.plain.com/graphql/v1`
- Automatic authentication header injection (`Authorization: Bearer <api_key>`)
- PSR-18 HTTP client interface support (allow users to bring their own HTTP client)
- Default implementation using Guzzle (optional dependency)
- Request/response logging support
- Configurable timeout and retry logic

**Configuration Options**:
```php
[
    'api_key' => 'required',
    'base_url' => 'optional', // Default: Plain production URL
    'timeout' => 30,
    'retry_attempts' => 3,
    'http_client' => null, // PSR-18 client instance
    'logger' => null, // PSR-3 logger instance
]
```

**Example Usage**:
```php
$client = new PlainClient([
    'api_key' => 'pk_live_...',
]);

$response = $client->execute($query, $variables);
```

**Dependencies to Add**:
- `psr/http-client` (interface)
- `psr/http-factory` (interface)
- `psr/log` (interface)
- `guzzlehttp/guzzle` (suggested, not required)

### 1.2 Authentication Helper

**Purpose**: Validate and manage API keys.

**Location**: `src/Auth/ApiKey.php`

**Features**:
- Validate API key format
- Distinguish between test (`pk_test_`) and live (`pk_live_`) keys
- Provide environment detection
- Prevent accidental use of test keys in production

**Example**:
```php
$apiKey = ApiKey::from('pk_live_...');
$apiKey->isLive(); // true
$apiKey->isTest(); // false
$apiKey->validate(); // throws if invalid format
```

---

## Phase 2: GraphQL Query Builder

### 2.1 Query Builder

**Purpose**: Fluent API for building GraphQL queries with full type safety.

**Location**: `src/QueryBuilder/QueryBuilder.php`

**Key Design Principles**:
- Type-safe field selection using generated types
- Support for nested selections
- Support for aliases
- Support for fragments
- Support for variables
- Support for directives (@include, @skip)
- Auto-generate operation names

**Example Usage**:
```php
$query = QueryBuilder::query('myCustomers')
    ->field('customers', function ($customers) {
        $customers
            ->arguments(['first' => 10])
            ->field('edges', function ($edges) {
                $edges->field('node', function ($node) {
                    $node->fields(['id', 'email', 'fullName']);
                    $node->field('labels', function ($labels) {
                        $labels->field('edges', function ($edges) {
                            $edges->field('node', function ($node) {
                                $node->fields(['id', 'name']);
                            });
                        });
                    });
                });
            });
    })
    ->build();

// Generates:
// query myCustomers {
//   customers(first: 10) {
//     edges {
//       node {
//         id
//         email
//         fullName
//         labels {
//           edges {
//             node {
//               id
//               name
//             }
//           }
//         }
//       }
//     }
//   }
// }
```

**Advanced Features**:
- Variable support:
  ```php
  $query = QueryBuilder::query('getCustomer')
      ->variable('id', 'ID!')
      ->field('customer', function ($customer) {
          $customer->argument('customerId', '$id')
              ->fields(['id', 'email']);
      })
      ->build();
  ```

- Fragments:
  ```php
  $fragment = Fragment::on('Customer')
      ->fields(['id', 'email', 'fullName']);

  $query = QueryBuilder::query()
      ->field('customer', function ($c) use ($fragment) {
          $c->spread($fragment);
      })
      ->build();
  ```

### 2.2 Mutation Builder

**Purpose**: Specialized builder for mutations with input type support.

**Location**: `src/QueryBuilder/MutationBuilder.php`

**Features**:
- Use generated input types
- Automatic input serialization
- Return type selection
- Error handling structure

**Example Usage**:
```php
$mutation = MutationBuilder::mutation('createCustomer')
    ->field('upsertCustomer', function ($upsert) {
        $upsert
            ->input(new UpsertCustomerInput(
                identifier: new CustomerIdentifierInput(
                    emailAddress: 'customer@example.com'
                ),
                onCreate: new CustomerOnCreateInput(
                    fullName: 'Jane Doe',
                    email: new EmailInput(
                        email: 'customer@example.com',
                        isVerified: false
                    )
                ),
                onUpdate: new CustomerOnUpdateInput()
            ))
            ->field('customer', function ($customer) {
                $customer->fields(['id', 'fullName', 'email']);
            })
            ->field('error', function ($error) {
                $error->fields(['message', 'code']);
            });
    })
    ->build();
```

---

## Phase 3: Response Handling & Type Mapping

### 3.1 Response Parser

**Purpose**: Parse GraphQL responses into generated types.

**Location**: `src/Response/ResponseParser.php`

**Features**:
- Map JSON responses to generated PHP objects
- Handle errors and partial responses
- Support for union types and interfaces
- Null safety
- Type validation

**Example**:
```php
$response = $client->execute($query);
$parser = new ResponseParser();

/** @var Customer $customer */
$customer = $parser->parse($response->data['customer'], Customer::class);

// Strongly typed access
echo $customer->fullName; // string
echo $customer->email->email; // string
```

### 3.2 Error Handling

**Purpose**: Structured error handling for GraphQL responses.

**Location**: `src/Exceptions/`

**Exception Hierarchy**:
```
PlainException (base)
├── AuthenticationException (401, invalid API key)
├── ValidationException (GraphQL validation errors)
├── RateLimitException (429)
├── ServerException (5xx)
└── GraphQLException (GraphQL errors in response)
    ├── field errors[]
    ├── path
    └── extensions
```

**Example**:
```php
try {
    $customer = $sdk->customers()->create($input);
} catch (ValidationException $e) {
    foreach ($e->getErrors() as $error) {
        echo $error->getMessage();
        echo $error->getPath(); // ['upsertCustomer', 'email']
    }
} catch (RateLimitException $e) {
    $retryAfter = $e->getRetryAfter();
    // Wait and retry
}
```

---

## Phase 4: High-Level API Wrappers

### 4.1 Resource Classes

**Purpose**: Convenient resource-based API for common operations.

**Locations**: `src/Resources/`

**Resources**:
- `CustomersResource`
- `ThreadsResource`
- `LabelsResource`
- `UsersResource`
- etc.

**Example**:
```php
$sdk = new PlainSDK(['api_key' => '...']);

// Customers
$customer = $sdk->customers()->get('c_123');
$customer = $sdk->customers()->findByEmail('user@example.com');
$customer = $sdk->customers()->create($input);
$customer = $sdk->customers()->update('c_123', $input);

// Threads
$thread = $sdk->threads()->get('th_123');
$threads = $sdk->threads()->list(['customerId' => 'c_123']);
$thread = $sdk->threads()->create($input);
$thread = $sdk->threads()->addMessage($threadId, $message);

// Labels
$labels = $sdk->labels()->list();
$label = $sdk->labels()->create($input);
$sdk->labels()->assign($customerId, $labelId);
```

**Implementation Pattern**:
Each resource class:
- Uses QueryBuilder/MutationBuilder internally
- Returns typed responses using ResponseParser
- Handles pagination automatically
- Provides method documentation with examples

### 4.2 Pagination Helper

**Purpose**: Simplify cursor-based pagination.

**Location**: `src/Support/Paginator.php`

**Features**:
- Automatic page fetching
- Iterator interface
- Configurable page size
- Total count tracking

**Example**:
```php
$paginator = $sdk->customers()->paginate(['first' => 50]);

foreach ($paginator as $customer) {
    echo $customer->email;
}

// Or manually
while ($paginator->hasMore()) {
    $page = $paginator->next();
    foreach ($page as $customer) {
        // ...
    }
}
```

---

## Phase 5: Webhook Support

### 5.1 Webhook Verification

**Purpose**: Verify incoming webhook signatures from Plain.

**Location**: `src/Webhooks/WebhookVerifier.php`

**Features**:
- Signature verification using webhook secret
- Timestamp validation (prevent replay attacks)
- Configurable tolerance window

**Example**:
```php
$verifier = new WebhookVerifier('whsec_...');

$payload = file_get_contents('php://input');
$signature = $_SERVER['HTTP_PLAIN_SIGNATURE'] ?? '';
$timestamp = $_SERVER['HTTP_PLAIN_TIMESTAMP'] ?? '';

if ($verifier->verify($payload, $signature, $timestamp)) {
    $event = json_decode($payload);
    // Process webhook
}
```

### 5.2 Webhook Event Parser

**Purpose**: Parse webhook payloads into typed events.

**Location**: `src/Webhooks/WebhookEventParser.php`

**Features**:
- Parse event type from payload
- Map to generated types
- Type-safe event handling

**Example**:
```php
$parser = new WebhookEventParser();
$event = $parser->parse($payload);

match ($event->type) {
    'customer.created' => handleCustomerCreated($event->data),
    'thread.thread_created' => handleThreadCreated($event->data),
    default => logUnknownEvent($event),
};
```

---

## Phase 6: Developer Experience

### 6.1 Facade/Service Container Integration

**Purpose**: Easy integration with Laravel and other frameworks.

**Location**: `src/Integrations/Laravel/PlainServiceProvider.php`

**Features**:
- Laravel service provider
- Facade for global access
- Configuration file
- Environment variable support

**Example**:
```php
// config/plain.php
return [
    'api_key' => env('PLAIN_API_KEY'),
    'timeout' => 30,
];

// Usage
use Plain\Facades\Plain;

$customer = Plain::customers()->get('c_123');
```

### 6.2 Testing Utilities

**Purpose**: Make testing Plain integrations easy.

**Location**: `src/Testing/`

**Features**:
- Mock client for testing
- Fake response builders
- Webhook payload generators

**Example**:
```php
use Plain\Testing\PlainFake;

$fake = PlainFake::create();
$fake->customers()->shouldReturn(new Customer(...));

// Use fake in tests
$app->instance(PlainClient::class, $fake);
```

### 6.3 CLI Tools

**Purpose**: Command-line utilities for development.

**Location**: `bin/plain`

**Commands**:
```bash
# Validate API key
./bin/plain auth:test

# Introspect schema
./bin/plain schema:introspect

# Test webhook signature
./bin/plain webhook:verify --secret=whsec_... --payload='{...}'
```

---

## Implementation Order

### Milestone 1: Basic Functionality (v0.2.0)
1. ✅ Generated types (complete)
2. HTTP Client + Authentication
3. Basic query execution
4. Response parsing
5. Error handling

**Deliverable**: Execute raw GraphQL queries with type-safe responses

### Milestone 2: Query Building (v0.3.0)
1. Query builder
2. Mutation builder
3. Fragment support
4. Variable support

**Deliverable**: Build queries programmatically instead of writing GraphQL strings

### Milestone 3: High-Level API (v0.4.0)
1. Resource classes for major entities
2. Pagination helper
3. Common operations (CRUD)

**Deliverable**: Simple, intuitive API for common tasks

### Milestone 4: Production Ready (v0.5.0)
1. Webhook verification
2. Webhook event parsing
3. Rate limiting handling
4. Retry logic
5. Comprehensive error handling

**Deliverable**: Production-ready SDK with webhook support

### Milestone 5: DX & Ecosystem (v1.0.0)
1. Laravel integration
2. Testing utilities
3. CLI tools
4. Comprehensive documentation
5. Example applications

**Deliverable**: v1.0 release with full ecosystem support

---

## Code Organization

```
src/
├── Generated/          # Move generated types here (namespace: Plain\Generated)
├── Client/
│   ├── PlainClient.php
│   └── Config.php
├── Auth/
│   └── ApiKey.php
├── QueryBuilder/
│   ├── QueryBuilder.php
│   ├── MutationBuilder.php
│   ├── Fragment.php
│   └── Field.php
├── Response/
│   ├── ResponseParser.php
│   ├── Response.php
│   └── PageInfo.php
├── Resources/
│   ├── Resource.php (base)
│   ├── CustomersResource.php
│   ├── ThreadsResource.php
│   └── ...
├── Exceptions/
│   ├── PlainException.php
│   ├── AuthenticationException.php
│   ├── ValidationException.php
│   └── ...
├── Webhooks/
│   ├── WebhookVerifier.php
│   └── WebhookEventParser.php
├── Support/
│   └── Paginator.php
├── Testing/
│   ├── PlainFake.php
│   └── Concerns/
├── Integrations/
│   └── Laravel/
│       ├── PlainServiceProvider.php
│       └── Facades/
└── PlainSDK.php        # Main SDK class
```

---

## Testing Strategy

### Unit Tests
- Each component in isolation
- Mock HTTP responses
- Test error conditions
- Type safety validation

### Integration Tests
- Real API calls (with test API key)
- End-to-end workflows
- Pagination edge cases
- Webhook signature verification

### Type Tests (PHPStan)
- Level 9 strict mode
- No mixed types
- Generic type support

---

## Documentation Requirements

1. **README.md**: Installation, quick start, basic examples
2. **USAGE.md**: Detailed usage guide for all features
3. **API_REFERENCE.md**: Complete API documentation
4. **WEBHOOKS.md**: Webhook integration guide
5. **EXAMPLES.md**: Real-world examples and recipes
6. **MIGRATION.md**: Version upgrade guides

---

## Non-Goals

- ❌ REST API support (Plain is GraphQL-only)
- ❌ Real-time subscriptions (not supported by Plain API)
- ❌ Client-side rate limiting prediction (rely on API headers)
- ❌ Caching layer (leave to users to implement)

---

## Open Questions

1. **Generated types organization**: Keep in `src/` or move to `src/Generated/`?
   - Recommendation: Move to `src/Generated/` for clarity

2. **HTTP client dependency**: Require Guzzle or stay PSR-18 only?
   - Recommendation: PSR-18 interfaces, suggest Guzzle in docs

3. **Async support**: Should we support async HTTP clients?
   - Recommendation: Phase 2+ feature, not MVP

4. **Query builder auto-completion**: Can we generate PHPDoc for IDE support?
   - Recommendation: Investigate generating field helpers from schema

5. **Versioning**: How to handle Plain schema changes?
   - Recommendation: Document regeneration process, semver for SDK
