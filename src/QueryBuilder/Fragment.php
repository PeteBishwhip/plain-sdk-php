<?php

declare(strict_types=1);

namespace Plain\QueryBuilder;

/**
 * Represents a named GraphQL fragment.
 */
final class Fragment
{
    /**
     * @param array<int, Field> $selections
     */
    private function __construct(
        private readonly string $name,
        private readonly string $typeName,
        private readonly array $selections = [],
    ) {
    }

    /**
     * Create a new fragment.
     *
     * @param string $name Fragment name
     * @param string $typeName Type the fragment is on
     */
    public static function create(string $name, string $typeName): self
    {
        return new self($name, $typeName);
    }

    /**
     * Add a field to the fragment.
     */
    public function select(Field|string $field): self
    {
        $selections = $this->selections;
        $selections[] = is_string($field) ? Field::create($field) : $field;

        return new self($this->name, $this->typeName, $selections);
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
            $this->name,
            $this->typeName,
            array_merge($this->selections, $builder->getFields())
        );
    }

    /**
     * Build the fragment definition.
     */
    public function buildDefinition(): string
    {
        $selectionStrings = array_map(
            fn(Field $field) => $field->build(),
            $this->selections
        );

        return 'fragment ' . $this->name . ' on ' . $this->typeName
            . ' { ' . implode(' ', $selectionStrings) . ' }';
    }

    /**
     * Build the fragment spread (for use in queries).
     */
    public function buildSpread(): string
    {
        return '...' . $this->name;
    }

    public function getName(): string
    {
        return $this->name;
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
