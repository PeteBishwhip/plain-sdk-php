# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Project Overview

This is a PHP SDK library for the Plain customer support platform. The SDK provides:
1. **Auto-generated types**: Strongly-typed PHP objects from Plain's GraphQL schema using `arxy/graphql-codegen`
2. **HTTP Client**: Full-featured GraphQL client with authentication, retry logic, and error handling
3. **Type-safe responses**: Parse GraphQL responses into strongly-typed PHP objects

**Development Status**: Phase 1 (HTTP Client) and Phase 2 (Query Builder) are complete. See PLAN.md for roadmap.

**Key constraint**: The generated types (in `src/Generated/`) are auto-generated and should never be manually edited. All generated code is excluded from source coverage.

## Essential Commands

### Initial Setup
```bash
composer install
php patch-codegen.php  # Required after composer install - see "Critical Patch" section
php generate.php       # Generate types from schema
```

### Testing
```bash
composer test                    # Run all tests
vendor/bin/phpunit --testdox     # Run with detailed output
vendor/bin/phpunit tests/Unit    # Run only unit tests
vendor/bin/phpunit tests/Integration  # Run only integration tests
composer test:coverage           # Generate HTML coverage report
```

### Code Generation
```bash
# Download latest schema and generate types
mkdir -p schema
curl -o schema/schema.graphql https://core-api.uk.plain.com/graphql/v1/schema.graphql
php generate.php
```

Or use the composer script:
```bash
composer generate
```

## Architecture

### Code Generation Pipeline

1. **Schema Source**: GraphQL schema downloaded from `https://core-api.uk.plain.com/graphql/v1/schema.graphql`
2. **Generator**: `generate.php` configures `arxy/graphql-codegen` to create PHP classes
3. **Output**: All generated types go to `src/` with namespace `Plain\Generated`
4. **Types Generated**:
   - Input types for mutations/queries (e.g., `CreateCustomerInput`)
   - Object types for GraphQL objects (e.g., `Customer`, `Thread`)
   - Enum types (e.g., `CustomerStatus`)
   - Interface types (e.g., `ThreadChannelAssociation`)

**Current Structure**: Generated files are placed directly in `src/`. Future non-generated code (client, builders, etc.) will be organized alongside or in subdirectories.

### Critical Patch Requirement

**IMPORTANT**: The `arxy/graphql-codegen` library has a bug where interface types aren't registered before object types that reference them. This causes generation failures.

**Solution**: `patch-codegen.php` patches the vendor library's `Generator.php` to:
1. Register interface types in the initial visitor pass
2. Populate interfaces with their implementing types in a second pass

**This patch MUST be run**:
- After every `composer install`
- Before running `generate.php`
- It's included in all GitHub Actions workflows

The patch uses string replacement on specific code sections in `vendor/arxy/graphql-codegen/src/Generator.php`.

### Project Structure

```
src/
  Generated/     # Auto-generated GraphQL types (never edit manually)
  Auth/          # API key validation and environment detection
  Client/        # HTTP client and configuration
  Response/      # Response parsing and handling
  Exceptions/    # Exception hierarchy
  PlainSDK.php   # Main SDK entry point
tests/
  Unit/          # Unit tests for all components
    Auth/
    Client/
    Exceptions/
    Response/
  Integration/   # Integration tests (code generation, schema)
schema/          # Downloaded GraphQL schema (gitignored)
generate.php     # Code generation configuration
patch-codegen.php # Vendor library patch script
PLAN.md          # Development roadmap and feature specifications
```

**Key Files**:
- `src/PlainSDK.php` - Main entry point with QueryBuilder support
- `src/Client/PlainClient.php` - HTTP client with retry logic and error handling
- `src/Client/Config.php` - Immutable configuration with builder pattern
- `src/Auth/ApiKey.php` - API key validation (live vs test)
- `src/Response/Response.php` - GraphQL response parsing
- `src/QueryBuilder/*` - Complete query/mutation builder system
- `src/Exceptions/*` - Complete exception hierarchy

### PHP Configuration

- **Minimum PHP**: 8.1
- **Features Used**: Constructor property promotion, readonly properties
- **Static Analysis**: Compatible with PHPStan and Psalm
- **Autoloading**: PSR-4
  - `Plain\` → `src/`
  - `Plain\Tests\` → `tests/`

## Testing

The test suite has two distinct purposes:

1. **Integration Tests**: Verify the code generation process works correctly
   - `CodeGenerationTest.php`: Tests the generation process
   - `SchemaDownloadTest.php`: Tests schema download from Plain API

2. **Unit Tests**: Validate generated type structures
   - `GeneratedTypesTest.php`: Tests generated classes have correct properties/methods

Coverage currently excludes generated types (see `phpunit.xml`).

## CI/CD

### GitHub Actions Workflows

1. **tests.yml**: Runs on all PRs and workflow_dispatch
   - Matrix: PHP 8.1, 8.2, 8.3
   - Downloads schema → Patches → Generates → Tests
   - Validates generated code syntax

2. **generate-types.yml**: Updates types from latest schema
   - Manual trigger via workflow_dispatch
   - Weekly schedule (Sunday midnight)
   - Creates PR with regenerated types

Both workflows follow the same generation steps and require the patch to be applied.

## Development Notes

- **Phase 1 Complete**: HTTP client, authentication, response parsing, and error handling
- **Phase 2 Complete**: Query builder, mutation builder, fragments, variables, and directives
- **Next Steps**: See PLAN.md for Phase 3 (Resource APIs) and beyond
- Never manually edit files in `src/Generated/` - they should only be updated via code generation
- All handwritten code lives outside `src/Generated/` in organized subdirectories
- The patch is a workaround until the upstream library is fixed
- Test coverage: 178 tests with 378 assertions (excluding generated code)

## Phase 1 Implementation Details

### Authentication & Configuration
- `ApiKey::from()` validates API keys and detects environment (live vs test)
- `Config` is immutable with `with*()` methods for creating variations
- Supports custom HTTP clients (PSR-18), loggers (PSR-3)
- Default timeout: 30s, default retry attempts: 3

### HTTP Client Features
- Automatic authentication header injection
- Exponential backoff retry on connection failures
- Proper error handling for 401, 429, 5xx responses
- PSR-18 compatible (can use any HTTP client)
- Optional PSR-3 logging support

### Error Handling
All exceptions extend `Plain\Exceptions\PlainException`:
- `AuthenticationException` - 401 errors, invalid API keys
- `RateLimitException` - 429 errors, includes retry-after duration
- `ServerException` - 5xx errors
- `GraphQLException` - GraphQL errors in response
- `ValidationException` - GraphQL validation errors
- `NetworkException` - Connection failures, timeouts

### Response Handling
- `Response` class parses GraphQL responses
- `hasErrors()` / `hasData()` for checking response state
- `throwIfHasErrors()` for strict error handling
- Access data via `getData()`, `get($key)`, or array conversion

## Phase 2 Implementation Details

### Query Builder Architecture
The QueryBuilder system provides a fluent, immutable API for building GraphQL queries without writing raw strings.

**Core Components**:
- `Field` - Represents a GraphQL field with arguments, alias, selections, and directives
- `FieldSelection` - Helper for callback-based field building
- `Variable` - Variable definitions with type and optional default value
- `Fragment` - Named fragments for reusable field sets
- `InlineFragment` - Inline fragments for union/interface types
- `QueryBuilder` - Builds query operations
- `MutationBuilder` - Builds mutation operations

**Key Features**:
- Fully immutable - all methods return new instances
- Type-safe argument formatting (strings, numbers, booleans, arrays, objects)
- Variable reference preservation (values starting with '$')
- Directive support (@include, @skip, custom)
- Fragment support (named and inline)
- Deep nesting with callbacks or chaining
- Alias support for field renaming

**Usage Patterns**:
```php
// Simple query
$query = QueryBuilder::create()
    ->field(Field::create('customer')->selectMany(['id', 'email']));

// With variables
$query = QueryBuilder::create('GetCustomer')
    ->variable(Variable::create('id', 'ID!'))
    ->field(Field::create('customer')->argument('customerId', '$id'));

// Nested with callbacks
$query = QueryBuilder::create()->selectFields(function ($root) {
    $root->field('customer', function ($c) {
        $c->fields(['id', 'email']);
    });
});

// Execute directly
$response = $sdk->execute($query, ['id' => 'c_123']);
```

**PlainSDK Integration**:
- `$sdk->query($name)` - Create QueryBuilder
- `$sdk->mutation($name)` - Create MutationBuilder
- `$sdk->execute()` - Accepts string, QueryBuilder, or MutationBuilder

See `examples/query-builder.php` for comprehensive usage examples.
