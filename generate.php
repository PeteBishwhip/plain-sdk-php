<?php

declare(strict_types=1);

use Arxy\GraphQLCodegen\BaseModule;
use Arxy\GraphQLCodegen\Generator;
use Arxy\GraphQLCodegen\Module;

require_once __DIR__ . '/vendor/autoload.php';

error_reporting(E_ALL);

if (! file_exists(__DIR__ . '/src/Generated')) {
    mkdir(__DIR__ . '/src/Generated', 0777, true);
}

$baseModule = new BaseModule(
    namespace: 'Plain\\Generated',
    directory: __DIR__ . '/src/Generated'
);

$module = new Module(
    name: 'plain',
    schema: __DIR__ . '/schema/schema.graphql',
    namespace: 'Plain\\Generated',
    directory: __DIR__ . '/src/Generated',
    typeMapping: [
        // Plain's DateTime is an object type, not a scalar, so no custom mapping needed
    ],
);

$generator = new Generator(
    baseModule: $baseModule,
    modules: [$module]
);

$generator->execute();

echo "Code generation completed successfully!\n";
echo "Generated files are in: src/Generated/\n";
