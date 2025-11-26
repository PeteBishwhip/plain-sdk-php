<?php

declare(strict_types=1);

namespace Plain\QueryBuilder;

/**
 * Represents a GraphQL variable definition.
 */
final class Variable
{
    private function __construct(
        private readonly string $name,
        private readonly string $type,
        private readonly mixed $defaultValue = null,
        private readonly bool $hasDefaultValue = false,
    ) {
    }

    /**
     * Create a new variable.
     *
     * @param string $name Variable name (without $ prefix)
     * @param string $type GraphQL type (e.g., 'ID!', 'String', '[Int]')
     */
    public static function create(string $name, string $type): self
    {
        return new self($name, $type);
    }

    /**
     * Set a default value for the variable.
     *
     * @param mixed $value
     */
    public function default(mixed $value): self
    {
        return new self($this->name, $this->type, $value, true);
    }

    /**
     * Get the variable name (without $ prefix).
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Get the variable reference (with $ prefix).
     */
    public function getReference(): string
    {
        return '$' . $this->name;
    }

    /**
     * Get the variable type.
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * Check if the variable has a default value.
     */
    public function hasDefaultValue(): bool
    {
        return $this->hasDefaultValue;
    }

    /**
     * Get the default value.
     *
     * @return mixed
     */
    public function getDefaultValue(): mixed
    {
        return $this->defaultValue;
    }

    /**
     * Build the variable definition for the operation signature.
     */
    public function buildDefinition(): string
    {
        $definition = '$' . $this->name . ': ' . $this->type;

        if ($this->hasDefaultValue) {
            $definition .= ' = ' . $this->formatDefaultValue($this->defaultValue);
        }

        return $definition;
    }

    /**
     * Format the default value for GraphQL.
     *
     * @param mixed $value
     */
    private function formatDefaultValue(mixed $value): string
    {
        return match (true) {
            is_string($value) => '"' . addslashes($value) . '"',
            is_int($value), is_float($value) => (string) $value,
            is_bool($value) => $value ? 'true' : 'false',
            is_null($value) => 'null',
            is_array($value) => $this->formatArray($value),
            default => throw new \InvalidArgumentException('Unsupported default value type'),
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
                $pairs[] = $key . ': ' . $this->formatDefaultValue($value);
            }
            return '{ ' . implode(', ', $pairs) . ' }';
        }

        // List
        $values = array_map(fn($v) => $this->formatDefaultValue($v), $array);
        return '[' . implode(', ', $values) . ']';
    }
}
