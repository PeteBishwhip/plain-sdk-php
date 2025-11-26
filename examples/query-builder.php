<?php

/**
 * QueryBuilder examples for the Plain SDK.
 *
 * This example demonstrates:
 * - Building queries with the fluent API
 * - Using variables
 * - Nested field selection
 * - Mutations
 * - Fragments
 */

declare(strict_types=1);

require_once __DIR__ . '/../vendor/autoload.php';

use Plain\PlainSDK;
use Plain\QueryBuilder\{Field, Fragment, MutationBuilder, QueryBuilder, Variable};

// Create SDK instance
$sdk = new PlainSDK([
    'api_key' => getenv('PLAIN_API_KEY') ?: 'pk_test_1234567890abcdefghij',
]);

echo "Plain SDK QueryBuilder Examples\n";
echo "================================\n\n";

// Example 1: Simple query
echo "Example 1: Simple Query\n";
echo "-----------------------\n";

$query = QueryBuilder::create()
    ->field(
        Field::create('customer')
            ->argument('customerId', 'c_123')
            ->selectMany(['id', 'email', 'fullName'])
    );

echo "Generated Query:\n";
echo $query->build() . "\n\n";

// Example 2: Query with variables
echo "Example 2: Query with Variables\n";
echo "-------------------------------\n";

$query = QueryBuilder::create('GetCustomer')
    ->variable(Variable::create('id', 'ID!'))
    ->field(
        Field::create('customer')
            ->argument('customerId', '$id')
            ->selectMany(['id', 'email', 'fullName'])
    );

echo "Generated Query:\n";
echo $query->build() . "\n\n";

// Example 3: Nested field selection with callback
echo "Example 3: Nested Fields with Callback\n";
echo "---------------------------------------\n";

$query = QueryBuilder::create('GetCustomerWithThreads')
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
                            $n->field('createdAt', function ($date) {
                                $date->field('iso8601');
                            });
                        });
                        $e->field('cursor');
                    });
                    $t->field('pageInfo', function ($p) {
                        $p->fields(['hasNextPage', 'endCursor']);
                    });
                });
            })
    );

echo "Generated Query:\n";
echo $query->build() . "\n\n";

// Example 4: Mutation with input
echo "Example 4: Mutation with Input\n";
echo "-------------------------------\n";

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
    );

echo "Generated Mutation:\n";
echo $mutation->build() . "\n\n";

// Example 5: Using fragments
echo "Example 5: Using Fragments\n";
echo "--------------------------\n";

$customerFragment = Fragment::create('CustomerFields', 'Customer')
    ->selectFields(function ($builder) {
        $builder->fields(['id', 'email', 'fullName']);
        $builder->field('createdAt', function ($date) {
            $date->field('iso8601');
        });
    });

$query = QueryBuilder::create('GetMultipleCustomers')
    ->fragment($customerFragment)
    ->field(
        Field::create('customer1')
            ->alias('firstCustomer')
            ->argument('customerId', 'c_123')
            ->selectFields(function ($builder) use ($customerFragment) {
                // Spread the fragment
                $builder->addField(
                    Field::create($customerFragment->buildSpread())
                );
            })
    )
    ->field(
        Field::create('customer')
            ->alias('secondCustomer')
            ->argument('customerId', 'c_456')
            ->selectFields(function ($builder) use ($customerFragment) {
                $builder->addField(
                    Field::create($customerFragment->buildSpread())
                );
            })
    );

echo "Generated Query:\n";
echo $query->build() . "\n\n";

// Example 6: Field with directives
echo "Example 6: Fields with Directives\n";
echo "----------------------------------\n";

$includeEmail = true;
$skipPhone = false;

$query = QueryBuilder::create()
    ->field(
        Field::create('customer')
            ->argument('customerId', 'c_123')
            ->select('id')
            ->select(
                Field::create('email')->includeIf($includeEmail)
            )
            ->select(
                Field::create('phone')->skipIf($skipPhone)
            )
    );

echo "Generated Query:\n";
echo $query->build() . "\n\n";

// Example 7: Complex nested query
echo "Example 7: Complex Nested Query\n";
echo "--------------------------------\n";

$query = $sdk->query('GetCustomerDetails')
    ->variable(Variable::create('customerId', 'ID!'))
    ->field(
        Field::create('customer')
            ->argument('customerId', '$customerId')
            ->selectFields(function ($c) {
                // Customer fields
                $c->fields(['id', 'email', 'fullName', 'shortName']);

                // Email
                $c->field('emailAddress', function ($email) {
                    $email->fields(['email', 'isVerified']);
                });

                // Labels
                $c->field('labels', function ($labels) {
                    $labels->field('edges', function ($edges) {
                        $edges->field('node', function ($node) {
                            $node->fields(['id', 'name', 'color']);
                        });
                    });
                });

                // Status history
                $c->field('statusChanges', function ($history) {
                    $history->field('edges', function ($edges) {
                        $edges->field('node', function ($node) {
                            $node->fields(['previousStatus', 'newStatus']);
                            $node->field('changedAt', function ($date) {
                                $date->field('iso8601');
                            });
                        });
                    });
                });
            })
    );

echo "Generated Query:\n";
echo $query->build() . "\n\n";

// Example 8: Executing a query with the SDK
echo "Example 8: Executing with SDK\n";
echo "------------------------------\n";

try {
    $query = $sdk->query('GetCustomer')
        ->variable(Variable::create('id', 'ID!'))
        ->field(
            Field::create('customer')
                ->argument('customerId', '$id')
                ->selectMany(['id', 'email'])
        );

    // Execute the query directly with builder
    $response = $sdk->execute($query, ['id' => 'c_123']);

    echo "Query executed (would fail with test key):\n";
    echo "Has errors: " . ($response->hasErrors() ? 'Yes' : 'No') . "\n";

} catch (\Exception $e) {
    echo "Expected error with test key: " . $e->getMessage() . "\n";
}

echo "\n================================\n";
echo "Examples completed!\n";
