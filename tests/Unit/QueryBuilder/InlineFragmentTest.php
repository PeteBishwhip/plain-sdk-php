<?php

declare(strict_types=1);

namespace Plain\Tests\Unit\QueryBuilder;

use PHPUnit\Framework\TestCase;
use Plain\QueryBuilder\InlineFragment;
use Plain\QueryBuilder\Field;

class InlineFragmentTest extends TestCase
{
    public function test_creates_inline_fragment(): void
    {
        $fragment = InlineFragment::on('EmailActor');

        $this->assertEquals('EmailActor', $fragment->getTypeName());
    }

    public function test_builds_inline_fragment(): void
    {
        $fragment = InlineFragment::on('EmailActor')
            ->selectMany(['email', 'name']);

        $this->assertEquals(
            '... on EmailActor { email name }',
            $fragment->build()
        );
    }

    public function test_selects_fields_as_strings(): void
    {
        $fragment = InlineFragment::on('EmailActor')
            ->select('email')
            ->select('name');

        $this->assertStringContainsString('email name', $fragment->build());
    }

    public function test_selects_fields_as_objects(): void
    {
        $fragment = InlineFragment::on('EmailActor')
            ->select(Field::create('email'))
            ->select(Field::create('name'));

        $this->assertStringContainsString('email name', $fragment->build());
    }

    public function test_selects_many_fields(): void
    {
        $fragment = InlineFragment::on('EmailActor')
            ->selectMany(['email', 'name', 'verified']);

        $this->assertCount(3, $fragment->getSelections());
    }

    public function test_selects_fields_with_callback(): void
    {
        $fragment = InlineFragment::on('EmailActor')
            ->selectFields(function ($builder) {
                $builder->fields(['email', 'name']);
            });

        $this->assertStringContainsString('email name', $fragment->build());
    }

    public function test_handles_nested_fields(): void
    {
        $fragment = InlineFragment::on('CustomerActor')
            ->select('id')
            ->select(
                Field::create('customer')
                    ->selectMany(['id', 'email'])
            );

        $this->assertStringContainsString('customer { id email }', $fragment->build());
    }

    public function test_is_immutable(): void
    {
        $fragment1 = InlineFragment::on('EmailActor');
        $fragment2 = $fragment1->select('email');

        $this->assertNotSame($fragment1, $fragment2);
        $this->assertEmpty($fragment1->getSelections());
        $this->assertCount(1, $fragment2->getSelections());
    }
}
