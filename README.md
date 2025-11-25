# Plain SDK for PHP

A PHP SDK for the [Plain](https://www.plain.com/) customer support platform, featuring strongly-typed GraphQL objects generated from Plain's schema.

## Features

- **Strongly-typed PHP objects** - All Plain GraphQL types are generated as PHP classes and interfaces
- **Full type safety** - Compatible with PHPStan and Psalm for static analysis
- **Auto-generated from schema** - Types are automatically generated from Plain's official GraphQL schema
- **PHP 8.1+** - Modern PHP with constructor property promotion and readonly properties
- **HTTP Client** - Full-featured GraphQL client with authentication and error handling
- **Query Builder** - Fluent API for building type-safe GraphQL queries and mutations
- **Automatic retries** - Exponential backoff for connection failures
- **Comprehensive error handling** - Typed exceptions for all error scenarios
- **PSR compatible** - Works with any PSR-18 HTTP client and PSR-3 logger

## Installation

```bash
composer require peteb/plain-sdk-php
```

## GraphQL Type Generation

This project uses [arxy/graphql-codegen](https://github.com/Warxcell/graphql-codegen) to generate PHP types from Plain's GraphQL schema.

### Manual Generation

To manually generate types from the latest Plain schema:

```bash
# Download the latest schema
mkdir -p schema
curl -o schema/schema.graphql https://core-api.uk.plain.com/graphql/v1/schema.graphql

# Generate PHP types
php generate.php
```

The generated types will be in `src/Generated/`.

### Automated Generation via GitHub Actions

A GitHub Action workflow is configured to automatically update types. You can:

1. **Manually trigger** the workflow from the Actions tab in GitHub
2. **Scheduled updates** - The workflow runs weekly on Sundays at midnight (optional)

The workflow will:
- Download the latest Plain GraphQL schema
- Generate updated PHP types
- Create a pull request with the changes

## Generated Code Structure

The code generator creates:

- **Input types** - For mutations and queries (e.g., `CreateCustomerInput`)
- **Object types** - For GraphQL objects (e.g., `Customer`, `Thread`)
- **Enum types** - For GraphQL enums (e.g., `CustomerStatus`)
- **Interface types** - For GraphQL interfaces (e.g., `ThreadChannelAssociation`)

All generated classes are in the `Plain\Generated` namespace.

## Quick Start

```php
<?php

require_once 'vendor/autoload.php';

use Plain\PlainSDK;

// Create SDK instance
$sdk = new PlainSDK([
    'api_key' => 'pk_test_1234567890abcdefghij',
]);

// Execute a GraphQL query
$response = $sdk->execute('
    query {
        customer(customerId: "c_123") {
            id
            email
            fullName
        }
    }
');

// Access the response data
$customer = $response->getData()['customer'];
echo $customer['email']; // customer@example.com
```

## Usage Examples

### Basic Query Execution

```php
use Plain\PlainSDK;

$sdk = new PlainSDK(['api_key' => 'pk_test_...']);

// Simple query
$response = $sdk->execute('
    query {
        customers(first: 10) {
            edges {
                node {
                    id
                    email
                    fullName
                }
            }
        }
    }
');

// Query with variables
$response = $sdk->execute('
    query GetCustomer($customerId: ID!) {
        customer(customerId: $customerId) {
            id
            email
            fullName
        }
    }
', [
    'customerId' => 'c_123',
]);
```

### Error Handling

```php
use Plain\PlainSDK;
use Plain\Exceptions\{
    AuthenticationException,
    RateLimitException,
    GraphQLException
};

$sdk = new PlainSDK(['api_key' => 'pk_test_...']);

try {
    $response = $sdk->execute($query);

    // Check for GraphQL errors
    if ($response->hasErrors()) {
        foreach ($response->getErrors() as $error) {
            echo "GraphQL Error: " . $error['message'] . "\n";
        }
    }

    // Or throw if errors exist
    $response->throwIfHasErrors();

    // Access data
    $data = $response->getData();

} catch (AuthenticationException $e) {
    // Invalid API key
    echo "Authentication failed: " . $e->getMessage();

} catch (RateLimitException $e) {
    // Rate limit exceeded
    $retryAfter = $e->getRetryAfter(); // seconds to wait
    echo "Rate limited. Retry after {$retryAfter} seconds";

} catch (GraphQLException $e) {
    // GraphQL errors in response
    foreach ($e->getErrors() as $error) {
        echo "Error: " . $error['message'];
    }
}
```

### Advanced Configuration

```php
use Plain\PlainSDK;
use Plain\Client\Config;
use Plain\Auth\ApiKey;
use Psr\Log\LoggerInterface;

// Using array configuration
$sdk = new PlainSDK([
    'api_key' => 'pk_test_...',
    'timeout' => 60,
    'retry_attempts' => 5,
    'base_url' => 'https://custom-instance.plain.com/graphql/v1',
]);

// Using Config object for more control
$config = new Config(
    apiKey: ApiKey::from('pk_test_...'),
    timeout: 45,
    retryAttempts: 3,
    logger: $myLogger, // PSR-3 logger
);

$sdk = new PlainSDK($config);

// Immutable configuration updates
$newConfig = $config
    ->withTimeout(60)
    ->withRetryAttempts(5);
```

### Using Generated Types

```php
use Plain\Generated\UpsertCustomerInput;
use Plain\Generated\CustomerIdentifierInput;
use Plain\Generated\CustomerOnCreateInput;
use Plain\Generated\EmailInput;

// Create strongly-typed input
$input = new UpsertCustomerInput(
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
);

// Use in mutation (requires manual GraphQL construction for now)
// Query builder coming in Phase 2
$mutation = '
    mutation UpsertCustomer($input: UpsertCustomerInput!) {
        upsertCustomer(input: $input) {
            customer {
                id
                email
                fullName
            }
            error {
                message
                code
            }
        }
    }
';

$response = $sdk->execute($mutation, ['input' => $input]);
```

### Using Query Builder

The Query Builder provides a fluent, type-safe API for constructing GraphQL queries and mutations without writing raw GraphQL strings.

```php
use Plain\PlainSDK;
use Plain\QueryBuilder\{Field, Variable};

$sdk = new PlainSDK(['api_key' => 'pk_test_...']);

// Build a query
$query = $sdk->query('GetCustomer')
    ->variable(Variable::create('id', 'ID!'))
    ->field(
        Field::create('customer')
            ->argument('customerId', '$id')
            ->selectFields(function ($c) {
                $c->fields(['id', 'email', 'fullName']);
                $c->field('threads', function ($t) {
                    $t->fieldWithArgs('edges', ['first' => 10], function ($e) {
                        $e->field('node', function ($n) {
                            $n->fields(['id', 'title', 'status']);
                        });
                    });
                });
            })
    );

// Execute the query
$response = $sdk->execute($query, ['id' => 'c_123']);

// Or execute directly without storing
$response = $sdk->execute(
    $sdk->query('GetCustomer')
        ->field(Field::create('customer')->selectMany(['id', 'email'])),
    []
);
```

### Building Mutations

```php
use Plain\QueryBuilder\{MutationBuilder, Variable, Field};

$mutation = $sdk->mutation('UpsertCustomer')
    ->variable(Variable::create('input', 'UpsertCustomerInput!'))
    ->field(
        Field::create('upsertCustomer')
            ->argument('input', '$input')
            ->selectFields(function ($builder) {
                $builder->field('customer', function ($c) {
                    $c->fields(['id', 'email', 'fullName']);
                });
                $builder->field('error', function ($e) {
                    $e->fields(['message', 'code']);
                });
            })
    );

$response = $sdk->execute($mutation, [
    'input' => [
        'identifier' => ['emailAddress' => 'customer@example.com'],
        'onCreate' => [
            'fullName' => 'Jane Doe',
            'email' => ['email' => 'customer@example.com', 'isVerified' => false],
        ],
        'onUpdate' => [],
    ],
]);
```

### Advanced Query Builder Features

```php
use Plain\QueryBuilder\{QueryBuilder, Field, Variable, Fragment};

// Using fragments
$customerFields = Fragment::create('CustomerFields', 'Customer')
    ->selectMany(['id', 'email', 'fullName']);

$query = QueryBuilder::create()
    ->fragment($customerFields)
    ->field(
        Field::create('customer')
            // Spread the fragment in the field selection
    );

// Field aliases
$query = QueryBuilder::create()
    ->field(
        Field::create('customer')
            ->alias('mainCustomer')
            ->argument('customerId', 'c_123')
            ->selectMany(['id', 'email'])
    );

// Directives
$includeEmail = true;
$field = Field::create('email')->includeIf($includeEmail);
$field = Field::create('phone')->skipIf(false);

// Nested selections with callbacks
$query = QueryBuilder::create()
    ->selectFields(function ($root) {
        $root->field('customer', function ($customer) {
            $customer->fields(['id', 'email']);
            $customer->field('labels', function ($labels) {
                $labels->field('edges', function ($edges) {
                    $edges->field('node', function ($node) {
                        $node->fields(['id', 'name']);
                    });
                });
            });
        });
    });
```

See `examples/query-builder.php` for more comprehensive examples.

## Requirements

- PHP 8.1 or higher
- Composer

## Development

### Setup

```bash
# Install dependencies
composer install

# Apply patch to graphql-codegen (required for interface support)
php patch-codegen.php

# Generate types
php generate.php
```

### Testing

This project includes comprehensive PHPUnit tests:

```bash
# Run all tests
composer test

# Run tests with detailed output
vendor/bin/phpunit --testdox

# Run specific test suite
vendor/bin/phpunit tests/Unit
vendor/bin/phpunit tests/Integration
```

The test suite includes:

- **Unit Tests** - Test generated type structures, properties, and methods
- **Integration Tests** - Test code generation process and schema validation

Tests automatically run on all pushes and pull requests via GitHub Actions across PHP 8.1, 8.2, and 8.3.

### Known Issues

The `arxy/graphql-codegen` library has a bug where interfaces aren't registered before object types are processed. This project includes a `patch-codegen.php` script that automatically patches the library to handle this correctly. The patch is automatically applied in both GitHub Actions workflows and must be run locally after `composer install`.

## Roadmap

See [PLAN.md](PLAN.md) for the complete development roadmap.

### Completed (v0.3.0)
- ✅ HTTP Client with authentication (Phase 1)
- ✅ Automatic retries and error handling (Phase 1)
- ✅ Response parsing (Phase 1)
- ✅ Comprehensive exception hierarchy (Phase 1)
- ✅ GraphQL query builder (Phase 2)
- ✅ Mutation builder (Phase 2)
- ✅ Fragment support (Phase 2)
- ✅ Variables and directives (Phase 2)

### Coming Soon
- 🚧 High-level resource APIs (Phase 3)
- 🚧 Pagination helpers (Phase 3)
- 🚧 Webhook verification (Phase 4)
- 🚧 Laravel integration (Phase 5)

## License

MIT

## Contributing

Contributions are welcome! Please feel free to submit a Pull Request.