#!/usr/bin/env php
<?php

declare(strict_types=1);

/**
 * Patch arxy/graphql-codegen to support interface types
 *
 * This script patches the Generator class to properly handle GraphQL interface types
 * that are referenced before their implementing types are processed.
 */

$file = __DIR__ . '/vendor/arxy/graphql-codegen/src/Generator.php';

if (!file_exists($file)) {
    echo "Error: Generator.php not found at: {$file}\n";
    exit(1);
}

$content = file_get_contents($file);

// First patch: Register interface types in the initial visitor pass
$search1 = <<<'SEARCH'
                    NodeKind::ENUM_TYPE_DEFINITION => function (EnumTypeDefinitionNode $definitionNode) use (
                        $module
                    ) {
SEARCH;

$replace1 = <<<'REPLACE'
                    NodeKind::INTERFACE_TYPE_DEFINITION => function (InterfaceTypeDefinitionNode $definitionNode) use (
                        $module
                    ) {
                        if (isset($this->moduleTypeMapping[$definitionNode->name->value])) {
                            return;
                        }
                        // Register interface with placeholder - will be updated with implementing types later
                        $this->baseTypeMappingRegistry[$definitionNode->name->value] = [];
                        $this->moduleTypeMappingRegistry[$module->getName()][$definitionNode->name->value] = [];
                    },
                    NodeKind::INTERFACE_TYPE_EXTENSION => function (InterfaceTypeExtensionNode $definitionNode) use (
                        $module
                    ) {
                        if (isset($this->moduleTypeMapping[$definitionNode->name->value])) {
                            return;
                        }
                        // Register interface extension with placeholder
                        $this->moduleTypeMappingRegistry[$module->getName()][$definitionNode->name->value] = [];
                    },
                    NodeKind::ENUM_TYPE_DEFINITION => function (EnumTypeDefinitionNode $definitionNode) use (
                        $module
                    ) {
REPLACE;

$content = str_replace($search1, $replace1, $content);

// Second patch: Populate interface types with their implementing types
$search2 = <<<'SEARCH'
                },
            ]);
        }
        foreach ($this->modules as $module) {
SEARCH;

$replace2 = <<<'REPLACE'
                },
                NodeKind::INTERFACE_TYPE_DEFINITION => function (InterfaceTypeDefinitionNode $interface) use ($module) {
                    // Find all types that implement this interface
                    foreach ($this->documents as $moduleInner => $document) {
                        foreach ($document->definitions as $definition) {
                            if (!$definition instanceof ObjectTypeDefinitionNode && !$definition instanceof ObjectTypeExtensionNode) {
                                continue;
                            }
                            if ($definition instanceof TypeExtensionNode) {
                                continue;
                            }
                            if (!isset($definition->interfaces)) {
                                continue;
                            }
                            foreach ($definition->interfaces as $definitionInterface) {
                                if ($definitionInterface->name->value === $interface->name->value) {
                                    // Add the implementing type to the interface's type mapping
                                    $this->baseTypeMappingRegistry[$interface->name->value] = [
                                        ...($this->baseTypeMappingRegistry[$interface->name->value] ?? []),
                                        ...($this->baseTypeMappingRegistry[$definition->name->value] ?? []),
                                    ];

                                    $this->moduleTypeMappingRegistry[$module->getName()][$interface->name->value] = [
                                        ...($this->moduleTypeMappingRegistry[$module->getName()][$interface->name->value] ?? []),
                                        ...($this->moduleTypeMappingRegistry[$moduleInner][$definition->name->value] ?? []),
                                    ];
                                }
                            }
                        }
                    }

                    if (isset($this->baseTypeMappingRegistry[$interface->name->value])) {
                        $this->baseTypeMappingRegistry[$interface->name->value] = array_unique(
                            $this->baseTypeMappingRegistry[$interface->name->value]
                        );
                    }
                    if (isset($this->moduleTypeMappingRegistry[$module->getName()][$interface->name->value])) {
                        $this->moduleTypeMappingRegistry[$module->getName()][$interface->name->value] = array_unique(
                            $this->moduleTypeMappingRegistry[$module->getName()][$interface->name->value]
                        );
                    }
                },
            ]);
        }
        foreach ($this->modules as $module) {
REPLACE;

$content = str_replace($search2, $replace2, $content);

// Write the patched file
if (file_put_contents($file, $content) === false) {
    echo "Error: Failed to write patched file\n";
    exit(1);
}

echo "✓ Successfully patched arxy/graphql-codegen for interface support\n";
exit(0);
