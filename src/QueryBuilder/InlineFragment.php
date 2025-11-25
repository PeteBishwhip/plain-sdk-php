<?php

declare(strict_types=1);

namespace Plain\QueryBuilder;

/**
 * Represents a GraphQL inline fragment.
 */
final class InlineFragment
{
    /**
     * @param array<int, Field> $selections
     */
    private function __construct(
        private readonly string $typeName,
        private readonly array $selections = [],
    ) {
    }

    /**
     * Create a new inline fragment for a specific type.
     */
    public static function on(string $typeName): self
    {
        return new self($typeName);
    }

    /**
     * Add a field to the fragment.
     */
    public function select(Field|string $field): self
    {
        $selections = $this->selections;
        $selections[] = is_string($field) ? Field::create($field) : $field;

        return new self($this->typeName, $selections);
    }

    /**
     * Add multiple fields to the fragment.
     *
     * @param array<int, Field|string> $fields
     */
    public function selectMany(array $fields): self
    {
        $instance = $this;
        foreach ($fields as $field) {
            $instance = $instance->select($field);
        }
        return $instance;
    }

    /**
     * Add fields using a callback.
     *
     * @param callable(FieldSelection): void $callback
     */
    public function selectFields(callable $callback): self
    {
        $builder = new FieldSelection();
        $callback($builder);

        return new self(
            $this->typeName,
            array_merge($this->selections, $builder->getFields())
        );
    }

    /**
     * Build the GraphQL string representation.
     */
    public function build(): string
    {
        $selectionStrings = array_map(
            fn(Field $field) => $field->build(),
            $this->selections
        );

        return '... on ' . $this->typeName . ' { ' . implode(' ', $selectionStrings) . ' }';
    }

    public function getTypeName(): string
    {
        return $this->typeName;
    }

    /**
     * @return array<int, Field>
     */
    public function getSelections(): array
    {
        return $this->selections;
    }
}
