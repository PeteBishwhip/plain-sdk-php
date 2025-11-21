<?php

declare(strict_types=1);

namespace Plain\Tests\Integration;

use PHPUnit\Framework\TestCase;

class SchemaDownloadTest extends TestCase
{
    private string $schemaUrl;
    private string $schemaPath;

    protected function setUp(): void
    {
        parent::setUp();
        $this->schemaUrl = $_ENV['PLAIN_SCHEMA_URL'] ?? 'https://core-api.uk.plain.com/graphql/v1/schema.graphql';
        $this->schemaPath = __DIR__ . '/../../schema/schema.graphql';
    }

    public function testSchemaUrlIsAccessible(): void
    {
        $this->markTestSkipped('Network access may not be available in test environment');
    }

    public function testSchemaCanBeDownloaded(): void
    {
        $this->markTestSkipped('Network access may not be available in test environment');
    }

    public function testDownloadedSchemaIsValidGraphQL(): void
    {
        if (!file_exists($this->schemaPath)) {
            $this->markTestSkipped('Schema file does not exist. Run: php generate.php');
        }

        $schema = file_get_contents($this->schemaPath);

        $this->assertNotFalse($schema, 'Schema file should be readable');
        $this->assertStringContainsString('type ', $schema, 'Schema should contain GraphQL types');
        $this->assertStringContainsString('Query', $schema, 'Schema should contain Query type');
        $this->assertStringContainsString('Mutation', $schema, 'Schema should contain Mutation type');
    }

    public function testSchemaContainsExpectedTypes(): void
    {
        if (!file_exists($this->schemaPath)) {
            $this->markTestSkipped('Schema file does not exist. Run: php generate.php');
        }

        $schema = file_get_contents($this->schemaPath);

        // Test for some key Plain types
        $expectedTypes = [
            'type User',
            'type Customer',
            'type Thread',
            'type Workspace',
            'input UpsertCustomerOnCreateInput',
            'enum UserStatus',
        ];

        foreach ($expectedTypes as $expectedType) {
            $this->assertStringContainsString(
                $expectedType,
                $schema,
                "Schema should contain: {$expectedType}"
            );
        }
    }
}
