<?php

declare(strict_types=1);

namespace Plain\Tests\Unit\QueryBuilder;

use PHPUnit\Framework\TestCase;
use Plain\QueryBuilder\Field;
use Plain\QueryBuilder\Fragment;
use Plain\QueryBuilder\MutationBuilder;
use Plain\QueryBuilder\Variable;

class MutationBuilderTest extends TestCase
{
    public function test_builds_simple_mutation(): void
    {
        $mutation = MutationBuilder::create()
            ->field('createCustomer')
            ->build();

        $this->assertEquals('mutation { createCustomer }', $mutation);
    }

    public function test_builds_mutation_with_operation_name(): void
    {
        $mutation = MutationBuilder::create('CreateCustomer')
            ->field('createCustomer')
            ->build();

        $this->assertEquals('mutation CreateCustomer { createCustomer }', $mutation);
    }

    public function test_builds_mutation_with_variable(): void
    {
        $mutation = MutationBuilder::create('CreateCustomer')
            ->variable(Variable::create('input', 'CreateCustomerInput!'))
            ->field(
                Field::create('createCustomer')
                    ->argument('input', '$input')
            )
            ->build();

        $this->assertEquals(
            'mutation CreateCustomer($input: CreateCustomerInput!) { createCustomer(input: $input) }',
            $mutation
        );
    }

    public function test_builds_mutation_with_nested_response_fields(): void
    {
        $mutation = MutationBuilder::create()
            ->field(
                Field::create('createCustomer')
                    ->selectFields(function ($builder) {
                        $builder->field('customer', function ($c) {
                            $c->fields(['id', 'email']);
                        });
                        $builder->field('error', function ($e) {
                            $e->fields(['message', 'code']);
                        });
                    })
            )
            ->build();

        $this->assertStringContainsString('customer { id email }', $mutation);
        $this->assertStringContainsString('error { message code }', $mutation);
    }

    public function test_builds_mutation_with_multiple_variables(): void
    {
        $mutation = MutationBuilder::create()
            ->variable(Variable::create('customerId', 'ID!'))
            ->variable(Variable::create('labelId', 'ID!'))
            ->field('assignLabel')
            ->build();

        $this->assertStringContainsString('$customerId: ID!', $mutation);
        $this->assertStringContainsString('$labelId: ID!', $mutation);
    }

    public function test_builds_mutation_with_fragment(): void
    {
        $fragment = Fragment::create('CustomerFields', 'Customer')
            ->selectMany(['id', 'email']);

        $mutation = MutationBuilder::create()
            ->fragment($fragment)
            ->field('createCustomer')
            ->build();

        $this->assertStringContainsString('fragment CustomerFields on Customer { id email }', $mutation);
        $this->assertStringContainsString('mutation { createCustomer }', $mutation);
    }

    public function test_adds_fields_as_strings(): void
    {
        $mutation = MutationBuilder::create()
            ->field('createCustomer')
            ->field('updateCustomer')
            ->build();

        $this->assertStringContainsString('createCustomer updateCustomer', $mutation);
    }

    public function test_adds_fields_via_fields_method(): void
    {
        $mutation = MutationBuilder::create()
            ->fields(['createCustomer', 'updateCustomer'])
            ->build();

        $this->assertStringContainsString('createCustomer updateCustomer', $mutation);
    }

    public function test_adds_variables_via_variables_method(): void
    {
        $mutation = MutationBuilder::create()
            ->variables([
                Variable::create('input', 'CreateCustomerInput!'),
                Variable::create('options', 'Options'),
            ])
            ->field('createCustomer')
            ->build();

        $this->assertStringContainsString('$input: CreateCustomerInput!', $mutation);
        $this->assertStringContainsString('$options: Options', $mutation);
    }

    public function test_builds_empty_mutation(): void
    {
        $mutation = MutationBuilder::create()->build();

        $this->assertEquals('mutation { }', $mutation);
    }

    public function test_get_variable_types_returns_map(): void
    {
        $builder = MutationBuilder::create()
            ->variable(Variable::create('input', 'CreateCustomerInput!'));

        $types = $builder->getVariableTypes();

        $this->assertEquals(['input' => 'CreateCustomerInput!'], $types);
    }

    public function test_get_operation_name_returns_name(): void
    {
        $builder = MutationBuilder::create('CreateCustomer');

        $this->assertEquals('CreateCustomer', $builder->getOperationName());
    }

    public function test_is_immutable(): void
    {
        $builder1 = MutationBuilder::create();
        $builder2 = $builder1->field('createCustomer');

        $this->assertNotSame($builder1, $builder2);
        $this->assertEmpty($builder1->getFields());
        $this->assertCount(1, $builder2->getFields());
    }

    public function test_builds_complex_plain_mutation(): void
    {
        $mutation = MutationBuilder::create('UpsertCustomer')
            ->variable(Variable::create('input', 'UpsertCustomerInput!'))
            ->field(
                Field::create('upsertCustomer')
                    ->argument('input', '$input')
                    ->selectFields(function ($builder) {
                        $builder->field('customer', function ($c) {
                            $c->fields(['id', 'email', 'fullName']);
                            $c->field('createdAt', function ($date) {
                                $date->field('iso8601');
                            });
                        });
                        $builder->field('error', function ($e) {
                            $e->fields(['message', 'code', 'type']);
                            $e->field('fields', function ($f) {
                                $f->fields(['field', 'message']);
                            });
                        });
                    })
            )
            ->build();

        $this->assertStringContainsString('mutation UpsertCustomer', $mutation);
        $this->assertStringContainsString('$input: UpsertCustomerInput!', $mutation);
        $this->assertStringContainsString('upsertCustomer(input: $input)', $mutation);
        $this->assertStringContainsString('customer { id email fullName', $mutation);
        $this->assertStringContainsString('error { message code type', $mutation);
    }

    public function test_select_fields_method(): void
    {
        $mutation = MutationBuilder::create()
            ->selectFields(function ($builder) {
                $builder->field('createCustomer', function ($c) {
                    $c->fields(['id', 'email']);
                });
            })
            ->build();

        $this->assertStringContainsString('createCustomer { id email }', $mutation);
    }
}
