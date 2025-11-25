<?php

declare(strict_types=1);

namespace Plain\Tests\Unit\QueryBuilder;

use PHPUnit\Framework\TestCase;
use Plain\QueryBuilder\Field;
use Plain\QueryBuilder\InlineFragment;

class FieldTest extends TestCase
{
    public function test_creates_simple_field(): void
    {
        $field = Field::create('id');

        $this->assertEquals('id', $field->build());
    }

    public function test_adds_alias(): void
    {
        $field = Field::create('email')->alias('primaryEmail');

        $this->assertEquals('primaryEmail:email', $field->build());
    }

    public function test_adds_single_argument(): void
    {
        $field = Field::create('customer')->argument('id', 'c_123');

        $this->assertEquals('customer(id: "c_123")', $field->build());
    }

    public function test_adds_multiple_arguments(): void
    {
        $field = Field::create('customers')
            ->argument('first', 10)
            ->argument('after', 'cursor_123');

        $this->assertEquals('customers(first: 10, after: "cursor_123")', $field->build());
    }

    public function test_adds_arguments_via_array(): void
    {
        $field = Field::create('customers')->arguments([
            'first' => 10,
            'after' => 'cursor_123',
        ]);

        $this->assertEquals('customers(first: 10, after: "cursor_123")', $field->build());
    }

    public function test_selects_nested_field_as_string(): void
    {
        $field = Field::create('customer')->select('id')->select('email');

        $this->assertEquals('customer { id email }', $field->build());
    }

    public function test_selects_nested_field_as_object(): void
    {
        $field = Field::create('customer')
            ->select(Field::create('id'))
            ->select(Field::create('email'));

        $this->assertEquals('customer { id email }', $field->build());
    }

    public function test_selects_many_fields(): void
    {
        $field = Field::create('customer')->selectMany(['id', 'email', 'fullName']);

        $this->assertEquals('customer { id email fullName }', $field->build());
    }

    public function test_selects_fields_with_callback(): void
    {
        $field = Field::create('customer')->selectFields(function ($builder) {
            $builder->fields(['id', 'email', 'fullName']);
        });

        $this->assertEquals('customer { id email fullName }', $field->build());
    }

    public function test_builds_nested_structure(): void
    {
        $field = Field::create('customer')
            ->argument('customerId', '$id')
            ->select(
                Field::create('labels')
                    ->select('id')
                    ->select('name')
            );

        $this->assertEquals(
            'customer(customerId: $id) { labels { id name } }',
            $field->build()
        );
    }

    public function test_formats_string_arguments(): void
    {
        $field = Field::create('customer')->argument('name', 'John Doe');

        $this->assertStringContainsString('"John Doe"', $field->build());
    }

    public function test_formats_integer_arguments(): void
    {
        $field = Field::create('customers')->argument('first', 10);

        $this->assertStringContainsString('first: 10', $field->build());
    }

    public function test_formats_boolean_arguments(): void
    {
        $field = Field::create('customers')->argument('active', true);

        $this->assertStringContainsString('active: true', $field->build());
    }

    public function test_formats_null_arguments(): void
    {
        $field = Field::create('customers')->argument('after', null);

        $this->assertStringContainsString('after: null', $field->build());
    }

    public function test_formats_array_as_list(): void
    {
        $field = Field::create('items')->argument('ids', ['a', 'b', 'c']);

        $this->assertStringContainsString('ids: ["a", "b", "c"]', $field->build());
    }

    public function test_formats_array_as_object(): void
    {
        $field = Field::create('create')->argument('input', [
            'name' => 'John',
            'age' => 30,
        ]);

        $this->assertStringContainsString('input: { name: "John", age: 30 }', $field->build());
    }

    public function test_preserves_variable_references(): void
    {
        $field = Field::create('customer')->argument('customerId', '$id');

        $this->assertEquals('customer(customerId: $id)', $field->build());
    }

    public function test_adds_include_directive(): void
    {
        $field = Field::create('email')->includeIf(true);

        $this->assertEquals('email @include(if: true)', $field->build());
    }

    public function test_adds_skip_directive(): void
    {
        $field = Field::create('email')->skipIf(false);

        $this->assertEquals('email @skip(if: false)', $field->build());
    }

    public function test_adds_custom_directive(): void
    {
        $field = Field::create('email')->directive('deprecated', true);

        $this->assertEquals('email @deprecated(if: true)', $field->build());
    }

    public function test_combines_alias_arguments_and_selections(): void
    {
        $field = Field::create('customer')
            ->alias('mainCustomer')
            ->argument('id', 'c_123')
            ->select('email');

        $this->assertEquals('mainCustomer:customer(id: "c_123") { email }', $field->build());
    }

    public function test_handles_deep_nesting(): void
    {
        $field = Field::create('customer')
            ->select(
                Field::create('threads')
                    ->select(
                        Field::create('edges')
                            ->select(
                                Field::create('node')
                                    ->select('id')
                                    ->select('title')
                            )
                    )
            );

        $this->assertEquals(
            'customer { threads { edges { node { id title } } } }',
            $field->build()
        );
    }

    public function test_adds_inline_fragment(): void
    {
        $fragment = InlineFragment::on('EmailActor')->selectMany(['email', 'name']);

        $field = Field::create('actor')
            ->select('id')
            ->inlineFragment($fragment);

        $this->assertEquals(
            'actor { id ... on EmailActor { email name } }',
            $field->build()
        );
    }

    public function test_escapes_string_arguments(): void
    {
        $field = Field::create('search')->argument('query', 'test "quoted" text');

        $this->assertStringContainsString('query: "test \\"quoted\\" text"', $field->build());
    }

    public function test_is_immutable(): void
    {
        $field1 = Field::create('customer');
        $field2 = $field1->argument('id', 'c_123');

        $this->assertNotSame($field1, $field2);
        $this->assertEquals('customer', $field1->build());
        $this->assertEquals('customer(id: "c_123")', $field2->build());
    }

    public function test_get_name_returns_field_name(): void
    {
        $field = Field::create('customer');

        $this->assertEquals('customer', $field->getName());
    }

    public function test_get_alias_returns_alias(): void
    {
        $field = Field::create('customer')->alias('mainCustomer');

        $this->assertEquals('mainCustomer', $field->getAlias());
    }

    public function test_get_arguments_returns_arguments(): void
    {
        $field = Field::create('customer')->arguments(['id' => 'c_123', 'active' => true]);

        $this->assertEquals(['id' => 'c_123', 'active' => true], $field->getArguments());
    }

    public function test_get_selections_returns_selections(): void
    {
        $field = Field::create('customer')->selectMany(['id', 'email']);

        $this->assertCount(2, $field->getSelections());
    }
}
