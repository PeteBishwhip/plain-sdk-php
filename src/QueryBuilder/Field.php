<?php

declare(strict_types=1);

namespace Plain\QueryBuilder;

use Plain\Exceptions\PlainException;

/**
 * Represents a GraphQL field with optional arguments, alias, and nested selections.
 */
final class Field
{
    /**
     * @param array<string, mixed> $arguments
     * @param array<int, Field|InlineFragment> $selections
     * @param array<string, bool> $directives
     */
    private function __construct(
        private readonly string $name,
        private readonly ?string $alias = null,
        private array $arguments = [],
        private array $selections = [],
        private array $directives = [],
    ) {
    }

    /**
     * Create a new field.
     */
    public static function create(string $name): self
    {
        return new self($name);
    }

    /**
     * Add an alias to the field.
     */
    public function alias(string $alias): self
    {
        return new self(
            name: $this->name,
            alias: $alias,
            arguments: $this->arguments,
            selections: $this->selections,
            directives: $this->directives,
        );
    }

    /**
     * Add an argument to the field.
     *
     * @param mixed $value
     */
    public function argument(string $name, mixed $value): self
    {
        $arguments = $this->arguments;
        $arguments[$name] = $value;

        return new self(
            name: $this->name,
            alias: $this->alias,
            arguments: $arguments,
            selections: $this->selections,
            directives: $this->directives,
        );
    }

    /**
     * Add multiple arguments to the field.
     *
     * @param array<string, mixed> $arguments
     */
    public function arguments(array $arguments): self
    {
        return new self(
            name: $this->name,
            alias: $this->alias,
            arguments: array_merge($this->arguments, $arguments),
            selections: $this->selections,
            directives: $this->directives,
        );
    }

    /**
     * Select a nested field.
     */
    public function select(Field|string $field): self
    {
        $selections = $this->selections;
        $selections[] = is_string($field) ? self::create($field) : $field;

        return new self(
            name: $this->name,
            alias: $this->alias,
            arguments: $this->arguments,
            selections: $selections,
            directives: $this->directives,
        );
    }

    /**
     * Select multiple nested fields.
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
     * Add a callback-based selection builder.
     *
     * @param callable(FieldSelection): void $callback
     */
    public function selectFields(callable $callback): self
    {
        $builder = new FieldSelection();
        $callback($builder);

        return new self(
            name: $this->name,
            alias: $this->alias,
            arguments: $this->arguments,
            selections: array_merge($this->selections, $builder->getFields()),
            directives: $this->directives,
        );
    }

    /**
     * Add an inline fragment.
     */
    public function inlineFragment(InlineFragment $fragment): self
    {
        $selections = $this->selections;
        $selections[] = $fragment;

        return new self(
            name: $this->name,
            alias: $this->alias,
            arguments: $this->arguments,
            selections: $selections,
            directives: $this->directives,
        );
    }

    /**
     * Add a directive to the field.
     */
    public function directive(string $name, bool $condition = true): self
    {
        $directives = $this->directives;
        $directives[$name] = $condition;

        return new self(
            name: $this->name,
            alias: $this->alias,
            arguments: $this->arguments,
            selections: $this->selections,
            directives: $directives,
        );
    }

    /**
     * Add @include directive.
     */
    public function includeIf(bool $condition): self
    {
        return $this->directive('include', $condition);
    }

    /**
     * Add @skip directive.
     */
    public function skipIf(bool $condition): self
    {
        return $this->directive('skip', $condition);
    }

    /**
     * Build the GraphQL string representation.
     */
    public function build(): string
    {
        $parts = [];

        // Alias
        if ($this->alias !== null) {
            $parts[] = $this->alias . ':';
        }

        // Field name
        $parts[] = $this->name;

        // Arguments
        if (!empty($this->arguments)) {
            $args = [];
            foreach ($this->arguments as $name => $value) {
                $args[] = $name . ': ' . $this->formatValue($value);
            }
            $parts[] = '(' . implode(', ', $args) . ')';
        }

        $fieldString = implode('', $parts);

        // Directives
        foreach ($this->directives as $directive => $condition) {
            $fieldString .= ' @' . $directive . '(if: ' . ($condition ? 'true' : 'false') . ')';
        }

        // Selections
        if (!empty($this->selections)) {
            $selectionStrings = array_map(
                fn($selection) => $selection->build(),
                $this->selections
            );
            $fieldString .= ' { ' . implode(' ', $selectionStrings) . ' }';
        }

        return $fieldString;
    }

    /**
     * Format a value for GraphQL.
     *
     * @param mixed $value
     */
    private function formatValue(mixed $value): string
    {
        return match (true) {
            is_string($value) => str_starts_with($value, '$')
                ? $value // Variable reference
                : '"' . addslashes($value) . '"',
            is_int($value), is_float($value) => (string) $value,
            is_bool($value) => $value ? 'true' : 'false',
            is_null($value) => 'null',
            is_array($value) => $this->formatArray($value),
            default => throw new PlainException('Unsupported argument type: ' . get_debug_type($value)),
        };
    }

    /**
     * Format an array for GraphQL.
     *
     * @param array<mixed> $array
     */
    private function formatArray(array $array): string
    {
        // Check if associative (object) or indexed (list)
        if (array_keys($array) !== range(0, count($array) - 1)) {
            // Object
            $pairs = [];
            foreach ($array as $key => $value) {
                $pairs[] = $key . ': ' . $this->formatValue($value);
            }
            return '{ ' . implode(', ', $pairs) . ' }';
        }

        // List
        $values = array_map(fn($v) => $this->formatValue($v), $array);
        return '[' . implode(', ', $values) . ']';
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getAlias(): ?string
    {
        return $this->alias;
    }

    /**
     * @return array<string, mixed>
     */
    public function getArguments(): array
    {
        return $this->arguments;
    }

    /**
     * @return array<int, Field|InlineFragment>
     */
    public function getSelections(): array
    {
        return $this->selections;
    }
}
