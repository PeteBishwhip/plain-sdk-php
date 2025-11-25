<?php

declare(strict_types=1);

namespace Plain\Tests\Unit\QueryBuilder;

use PHPUnit\Framework\TestCase;
use Plain\QueryBuilder\Variable;

class VariableTest extends TestCase
{
    public function test_creates_variable(): void
    {
        $var = Variable::create('id', 'ID!');

        $this->assertEquals('id', $var->getName());
        $this->assertEquals('ID!', $var->getType());
        $this->assertEquals('$id', $var->getReference());
    }

    public function test_builds_definition_without_default(): void
    {
        $var = Variable::create('id', 'ID!');

        $this->assertEquals('$id: ID!', $var->buildDefinition());
    }

    public function test_builds_definition_with_string_default(): void
    {
        $var = Variable::create('name', 'String')->default('John');

        $this->assertEquals('$name: String = "John"', $var->buildDefinition());
        $this->assertTrue($var->hasDefaultValue());
        $this->assertEquals('John', $var->getDefaultValue());
    }

    public function test_builds_definition_with_integer_default(): void
    {
        $var = Variable::create('count', 'Int')->default(10);

        $this->assertEquals('$count: Int = 10', $var->buildDefinition());
    }

    public function test_builds_definition_with_boolean_default(): void
    {
        $var = Variable::create('active', 'Boolean')->default(true);

        $this->assertEquals('$active: Boolean = true', $var->buildDefinition());
    }

    public function test_builds_definition_with_null_default(): void
    {
        $var = Variable::create('optional', 'String')->default(null);

        $this->assertEquals('$optional: String = null', $var->buildDefinition());
    }

    public function test_builds_definition_with_array_default(): void
    {
        $var = Variable::create('ids', '[ID]')->default(['a', 'b', 'c']);

        $this->assertEquals('$ids: [ID] = ["a", "b", "c"]', $var->buildDefinition());
    }

    public function test_builds_definition_with_object_default(): void
    {
        $var = Variable::create('input', 'InputType')->default([
            'name' => 'John',
            'age' => 30,
        ]);

        $this->assertEquals('$input: InputType = { name: "John", age: 30 }', $var->buildDefinition());
    }

    public function test_handles_list_types(): void
    {
        $var = Variable::create('ids', '[ID!]!');

        $this->assertEquals('$ids: [ID!]!', $var->buildDefinition());
    }

    public function test_handles_nullable_types(): void
    {
        $var = Variable::create('name', 'String');

        $this->assertEquals('$name: String', $var->buildDefinition());
    }

    public function test_is_immutable(): void
    {
        $var1 = Variable::create('id', 'ID!');
        $var2 = $var1->default('test');

        $this->assertNotSame($var1, $var2);
        $this->assertFalse($var1->hasDefaultValue());
        $this->assertTrue($var2->hasDefaultValue());
    }

    public function test_escapes_string_defaults(): void
    {
        $var = Variable::create('text', 'String')->default('test "quoted" value');

        $this->assertStringContainsString('"test \\"quoted\\" value"', $var->buildDefinition());
    }
}
