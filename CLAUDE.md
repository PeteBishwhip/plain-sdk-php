# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Project Overview

This is a PHP SDK library for the Plain customer support platform. The SDK provides strongly-typed PHP objects auto-generated from Plain's GraphQL schema using `arxy/graphql-codegen`. The codebase does NOT contain a GraphQL client implementation - it only provides type definitions.

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
src/              # Source directory - currently all generated types
                  # Future: Will contain Client, QueryBuilder, etc.
tests/
  Unit/          # Tests for generated type structures
  Integration/   # Tests for generation process and schema validation
schema/          # Downloaded GraphQL schema (gitignored)
generate.php     # Code generation configuration
patch-codegen.php # Vendor library patch script
```

**Note**: All files in `src/` are currently auto-generated GraphQL types. As the SDK evolves, handwritten code (client, builders, helpers) will be added to `src/` with a clear separation from generated types.

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

- This is a **type library only** - no HTTP client, query builder, or API interaction code exists yet
- Future plans include adding GraphQL query builder, mutation helpers, HTTP client, auth helpers, and webhook verification
- Never manually edit generated GraphQL type files - they should only be updated via code generation
- When adding new SDK features (client, builders, etc.), clearly separate handwritten code from generated types
- The patch is a workaround until the upstream library is fixed
