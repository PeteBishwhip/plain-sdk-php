# Plain SDK for PHP

A PHP SDK for the [Plain](https://www.plain.com/) customer support platform, featuring strongly-typed GraphQL objects generated from Plain's schema.

## Features

- **Strongly-typed PHP objects** - All Plain GraphQL types are generated as PHP classes and interfaces
- **Full type safety** - Compatible with PHPStan and Psalm for static analysis
- **Auto-generated from schema** - Types are automatically generated from Plain's official GraphQL schema
- **PHP 8.1+** - Modern PHP with constructor property promotion and readonly properties

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

### Example Usage

```php
<?php

use Plain\Generated\CreateCustomerInput;

$input = new CreateCustomerInput(
    email: 'customer@example.com',
    fullName: 'Jane Doe'
);

// Use with your GraphQL client...
```

## Requirements

- PHP 8.1 or higher
- Composer

## Development

### Setup

```bash
# Install dependencies
composer install

# Generate types
php generate.php
```

### Known Issues

The `arxy/graphql-codegen` library has a bug where interfaces aren't registered before object types are processed. This project includes a patch in the GitHub Actions workflow and the local vendor files to handle this correctly.

## Future Plans

- Add GraphQL query builder
- Add mutation helpers
- Add HTTP client for Plain API
- Add authentication helpers
- Add webhook verification

## License

MIT

## Contributing

Contributions are welcome! Please feel free to submit a Pull Request.