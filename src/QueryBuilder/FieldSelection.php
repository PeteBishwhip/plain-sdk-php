<?php

declare(strict_types=1);

namespace Plain\QueryBuilder;

/**
 * Helper class for building field selections with a fluent API.
 */
final class FieldSelection
{
    /**
     * @var array<int, Field>
     */
    private array $fields = [];

    /**
     * Add a field to the selection.
     */
    public function field(string $name, ?callable $callback = null): self
    {
        $field = Field::create($name);

        if ($callback !== null) {
            $field = $field->selectFields($callback);
        }

        $this->fields[] = $field;
        return $this;
    }

    /**
     * Add a field with an alias.
     */
    public function fieldAs(string $alias, string $name, ?callable $callback = null): self
    {
        $field = Field::create($name)->alias($alias);

        if ($callback !== null) {
            $field = $field->selectFields($callback);
        }

        $this->fields[] = $field;
        return $this;
    }

    /**
     * Add multiple simple fields by name.
     *
     * @param array<int, string> $names
     */
    public function fields(array $names): self
    {
        foreach ($names as $name) {
            $this->field($name);
        }
        return $this;
    }

    /**
     * Add a field with arguments.
     *
     * @param array<string, mixed> $arguments
     */
    public function fieldWithArgs(string $name, array $arguments, ?callable $callback = null): self
    {
        $field = Field::create($name)->arguments($arguments);

        if ($callback !== null) {
            $field = $field->selectFields($callback);
        }

        $this->fields[] = $field;
        return $this;
    }

    /**
     * Add a custom Field instance.
     */
    public function addField(Field $field): self
    {
        $this->fields[] = $field;
        return $this;
    }

    /**
     * Get all fields.
     *
     * @return array<int, Field>
     */
    public function getFields(): array
    {
        return $this->fields;
    }
}
