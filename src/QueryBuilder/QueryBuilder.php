<?php

declare(strict_types=1);

namespace Plain\QueryBuilder;

/**
 * Fluent builder for GraphQL queries.
 *
 * @example
 * ```php
 * $query = QueryBuilder::create('GetCustomer')
 *     ->variable(Variable::create('id', 'ID!'))
 *     ->field(
 *         Field::create('customer')
 *             ->argument('customerId', '$id')
 *             ->selectFields(function($f) {
 *                 $f->fields(['id', 'email', 'fullName']);
 *             })
 *     )
 *     ->build();
 * ```
 */
final class QueryBuilder
{
    /**
     * @param array<int, Variable> $variables
     * @param array<int, Field> $fields
     * @param array<int, Fragment> $fragments
     */
    private function __construct(
        private readonly ?string $operationName = null,
        private readonly array $variables = [],
        private readonly array $fields = [],
        private readonly array $fragments = [],
    ) {
    }

    /**
     * Create a new query builder.
     *
     * @param string|null $operationName Optional operation name
     */
    public static function create(?string $operationName = null): self
    {
        return new self($operationName);
    }

    /**
     * Add a variable to the query.
     */
    public function variable(Variable $variable): self
    {
        $variables = $this->variables;
        $variables[] = $variable;

        return new self($this->operationName, $variables, $this->fields, $this->fragments);
    }

    /**
     * Add multiple variables to the query.
     *
     * @param array<int, Variable> $variables
     */
    public function variables(array $variables): self
    {
        return new self(
            $this->operationName,
            array_merge($this->variables, $variables),
            $this->fields,
            $this->fragments
        );
    }

    /**
     * Add a field to the query.
     */
    public function field(Field|string $field): self
    {
        $fields = $this->fields;
        $fields[] = is_string($field) ? Field::create($field) : $field;

        return new self($this->operationName, $this->variables, $fields, $this->fragments);
    }

    /**
     * Add multiple fields to the query.
     *
     * @param array<int, Field|string> $fields
     */
    public function fields(array $fields): self
    {
        $instance = $this;
        foreach ($fields as $field) {
            $instance = $instance->field($field);
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
            $this->operationName,
            $this->variables,
            array_merge($this->fields, $builder->getFields()),
            $this->fragments
        );
    }

    /**
     * Add a fragment to the query.
     */
    public function fragment(Fragment $fragment): self
    {
        $fragments = $this->fragments;
        $fragments[] = $fragment;

        return new self($this->operationName, $this->variables, $this->fields, $fragments);
    }

    /**
     * Build the complete GraphQL query string.
     */
    public function build(): string
    {
        $parts = [];

        // Operation
        $operation = 'query';
        if ($this->operationName !== null) {
            $operation .= ' ' . $this->operationName;
        }

        // Variables
        if (!empty($this->variables)) {
            $varDefs = array_map(
                fn(Variable $var) => $var->buildDefinition(),
                $this->variables
            );
            $operation .= '(' . implode(', ', $varDefs) . ')';
        }

        $parts[] = $operation;

        // Fields
        if (!empty($this->fields)) {
            $fieldStrings = array_map(
                fn(Field $field) => $field->build(),
                $this->fields
            );
            $parts[] = '{ ' . implode(' ', $fieldStrings) . ' }';
        } else {
            $parts[] = '{ }';
        }

        $query = implode(' ', $parts);

        // Fragments (added before the query)
        if (!empty($this->fragments)) {
            $fragmentDefs = array_map(
                fn(Fragment $fragment) => $fragment->buildDefinition(),
                $this->fragments
            );
            $query = implode(' ', $fragmentDefs) . ' ' . $query;
        }

        return $query;
    }

    /**
     * Get the variables that need values.
     *
     * @return array<string, string> Map of variable name to type
     */
    public function getVariableTypes(): array
    {
        $types = [];
        foreach ($this->variables as $variable) {
            $types[$variable->getName()] = $variable->getType();
        }
        return $types;
    }

    public function getOperationName(): ?string
    {
        return $this->operationName;
    }

    /**
     * @return array<int, Variable>
     */
    public function getVariables(): array
    {
        return $this->variables;
    }

    /**
     * @return array<int, Field>
     */
    public function getFields(): array
    {
        return $this->fields;
    }

    /**
     * @return array<int, Fragment>
     */
    public function getFragments(): array
    {
        return $this->fragments;
    }
}
