<?php

declare(strict_types=1);

namespace Plain\Tests\Unit\QueryBuilder;

use PHPUnit\Framework\TestCase;
use Plain\QueryBuilder\Fragment;
use Plain\QueryBuilder\Field;

class FragmentTest extends TestCase
{
    public function test_creates_fragment(): void
    {
        $fragment = Fragment::create('CustomerFields', 'Customer');

        $this->assertEquals('CustomerFields', $fragment->getName());
        $this->assertEquals('Customer', $fragment->getTypeName());
    }

    public function test_builds_fragment_definition(): void
    {
        $fragment = Fragment::create('CustomerFields', 'Customer')
            ->selectMany(['id', 'email', 'fullName']);

        $this->assertEquals(
            'fragment CustomerFields on Customer { id email fullName }',
            $fragment->buildDefinition()
        );
    }

    public function test_builds_fragment_spread(): void
    {
        $fragment = Fragment::create('CustomerFields', 'Customer');

        $this->assertEquals('...CustomerFields', $fragment->buildSpread());
    }

    public function test_selects_fields_as_strings(): void
    {
        $fragment = Fragment::create('CustomerFields', 'Customer')
            ->select('id')
            ->select('email');

        $this->assertStringContainsString('id email', $fragment->buildDefinition());
    }

    public function test_selects_fields_as_objects(): void
    {
        $fragment = Fragment::create('CustomerFields', 'Customer')
            ->select(Field::create('id'))
            ->select(Field::create('email'));

        $this->assertStringContainsString('id email', $fragment->buildDefinition());
    }

    public function test_selects_many_fields(): void
    {
        $fragment = Fragment::create('CustomerFields', 'Customer')
            ->selectMany(['id', 'email', 'fullName']);

        $this->assertCount(3, $fragment->getSelections());
    }

    public function test_selects_fields_with_callback(): void
    {
        $fragment = Fragment::create('CustomerFields', 'Customer')
            ->selectFields(function ($builder) {
                $builder->fields(['id', 'email']);
                $builder->field('address', function ($addr) {
                    $addr->fields(['street', 'city']);
                });
            });

        $definition = $fragment->buildDefinition();
        $this->assertStringContainsString('id email', $definition);
        $this->assertStringContainsString('address', $definition);
    }

    public function test_handles_nested_fields(): void
    {
        $fragment = Fragment::create('CustomerDetails', 'Customer')
            ->select('id')
            ->select(
                Field::create('labels')
                    ->selectMany(['id', 'name'])
            );

        $this->assertStringContainsString('labels { id name }', $fragment->buildDefinition());
    }

    public function test_is_immutable(): void
    {
        $fragment1 = Fragment::create('CustomerFields', 'Customer');
        $fragment2 = $fragment1->select('id');

        $this->assertNotSame($fragment1, $fragment2);
        $this->assertEmpty($fragment1->getSelections());
        $this->assertCount(1, $fragment2->getSelections());
    }
}
