<?php

declare(strict_types=1);

namespace Plain\Tests\Unit\QueryBuilder;

use PHPUnit\Framework\TestCase;
use Plain\QueryBuilder\Field;
use Plain\QueryBuilder\Fragment;
use Plain\QueryBuilder\QueryBuilder;
use Plain\QueryBuilder\Variable;

class QueryBuilderTest extends TestCase
{
    public function test_builds_simple_query(): void
    {
        $query = QueryBuilder::create()
            ->field('customer')
            ->build();

        $this->assertEquals('query { customer }', $query);
    }

    public function test_builds_query_with_operation_name(): void
    {
        $query = QueryBuilder::create('GetCustomer')
            ->field('customer')
            ->build();

        $this->assertEquals('query GetCustomer { customer }', $query);
    }

    public function test_builds_query_with_variable(): void
    {
        $query = QueryBuilder::create('GetCustomer')
            ->variable(Variable::create('id', 'ID!'))
            ->field(
                Field::create('customer')
                    ->argument('customerId', '$id')
            )
            ->build();

        $this->assertEquals(
            'query GetCustomer($id: ID!) { customer(customerId: $id) }',
            $query
        );
    }

    public function test_builds_query_with_multiple_variables(): void
    {
        $query = QueryBuilder::create()
            ->variable(Variable::create('first', 'Int!'))
            ->variable(Variable::create('after', 'String'))
            ->field('customers')
            ->build();

        $this->assertStringContainsString('$first: Int!', $query);
        $this->assertStringContainsString('$after: String', $query);
    }

    public function test_builds_query_with_nested_fields(): void
    {
        $query = QueryBuilder::create()
            ->field(
                Field::create('customer')
                    ->select('id')
                    ->select('email')
                    ->select(
                        Field::create('labels')
                            ->selectMany(['id', 'name'])
                    )
            )
            ->build();

        $this->assertStringContainsString('customer { id email labels { id name } }', $query);
    }

    public function test_builds_query_with_callback_fields(): void
    {
        $query = QueryBuilder::create()
            ->selectFields(function ($builder) {
                $builder->field('customer', function ($customer) {
                    $customer->fields(['id', 'email', 'fullName']);
                });
            })
            ->build();

        $this->assertStringContainsString('customer { id email fullName }', $query);
    }

    public function test_builds_query_with_multiple_root_fields(): void
    {
        $query = QueryBuilder::create()
            ->field('customer')
            ->field('thread')
            ->build();

        $this->assertStringContainsString('customer thread', $query);
    }

    public function test_builds_query_with_fragment(): void
    {
        $fragment = Fragment::create('CustomerFields', 'Customer')
            ->selectMany(['id', 'email']);

        $query = QueryBuilder::create()
            ->fragment($fragment)
            ->field('customer')
            ->build();

        $this->assertStringContainsString('fragment CustomerFields on Customer { id email }', $query);
        $this->assertStringContainsString('query { customer }', $query);
    }

    public function test_builds_query_with_variable_default_value(): void
    {
        $query = QueryBuilder::create()
            ->variable(Variable::create('first', 'Int')->default(10))
            ->field('customers')
            ->build();

        $this->assertStringContainsString('$first: Int = 10', $query);
    }

    public function test_adds_fields_as_strings(): void
    {
        $query = QueryBuilder::create()
            ->field('id')
            ->field('email')
            ->build();

        $this->assertStringContainsString('id email', $query);
    }

    public function test_adds_fields_via_fields_method(): void
    {
        $query = QueryBuilder::create()
            ->fields(['id', 'email', 'fullName'])
            ->build();

        $this->assertStringContainsString('id email fullName', $query);
    }

    public function test_adds_variables_via_variables_method(): void
    {
        $query = QueryBuilder::create()
            ->variables([
                Variable::create('id', 'ID!'),
                Variable::create('name', 'String'),
            ])
            ->field('customer')
            ->build();

        $this->assertStringContainsString('$id: ID!', $query);
        $this->assertStringContainsString('$name: String', $query);
    }

    public function test_builds_empty_query(): void
    {
        $query = QueryBuilder::create()->build();

        $this->assertEquals('query { }', $query);
    }

    public function test_get_variable_types_returns_map(): void
    {
        $builder = QueryBuilder::create()
            ->variable(Variable::create('id', 'ID!'))
            ->variable(Variable::create('name', 'String'));

        $types = $builder->getVariableTypes();

        $this->assertEquals(['id' => 'ID!', 'name' => 'String'], $types);
    }

    public function test_get_operation_name_returns_name(): void
    {
        $builder = QueryBuilder::create('GetCustomer');

        $this->assertEquals('GetCustomer', $builder->getOperationName());
    }

    public function test_get_variables_returns_variables(): void
    {
        $var = Variable::create('id', 'ID!');
        $builder = QueryBuilder::create()->variable($var);

        $this->assertCount(1, $builder->getVariables());
        $this->assertSame($var, $builder->getVariables()[0]);
    }

    public function test_get_fields_returns_fields(): void
    {
        $field = Field::create('customer');
        $builder = QueryBuilder::create()->field($field);

        $this->assertCount(1, $builder->getFields());
        $this->assertSame($field, $builder->getFields()[0]);
    }

    public function test_get_fragments_returns_fragments(): void
    {
        $fragment = Fragment::create('CustomerFields', 'Customer');
        $builder = QueryBuilder::create()->fragment($fragment);

        $this->assertCount(1, $builder->getFragments());
        $this->assertSame($fragment, $builder->getFragments()[0]);
    }

    public function test_is_immutable(): void
    {
        $builder1 = QueryBuilder::create();
        $builder2 = $builder1->field('customer');

        $this->assertNotSame($builder1, $builder2);
        $this->assertEmpty($builder1->getFields());
        $this->assertCount(1, $builder2->getFields());
    }

    public function test_builds_complex_plain_query(): void
    {
        $query = QueryBuilder::create('GetCustomerThreads')
            ->variable(Variable::create('customerId', 'ID!'))
            ->variable(Variable::create('first', 'Int')->default(10))
            ->field(
                Field::create('customer')
                    ->argument('customerId', '$customerId')
                    ->selectFields(function ($c) {
                        $c->fields(['id', 'email', 'fullName']);
                        $c->field('threads', function ($t) {
                            $t->fieldWithArgs('edges', ['first' => '$first'], function ($e) {
                                $e->field('node', function ($n) {
                                    $n->fields(['id', 'title', 'status']);
                                });
                            });
                        });
                    })
            )
            ->build();

        $this->assertStringContainsString('query GetCustomerThreads', $query);
        $this->assertStringContainsString('$customerId: ID!', $query);
        $this->assertStringContainsString('$first: Int = 10', $query);
        $this->assertStringContainsString('customer(customerId: $customerId)', $query);
        $this->assertStringContainsString('threads', $query);
        $this->assertStringContainsString('edges', $query);
    }
}
