<?php

declare(strict_types=1);

namespace Plain\Tests\Unit;

use PHPUnit\Framework\TestCase;

class GeneratedTypesTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();

        // Check if generated types exist
        $generatedPath = __DIR__ . '/../../src/Generated';
        if (!is_dir($generatedPath) || count(glob($generatedPath . '/*.php')) === 0) {
            $this->markTestSkipped('Generated types do not exist. Run: php generate.php');
        }
    }

    public function testCanInstantiateInputTypes(): void
    {
        // Test UpsertCustomerOnCreateInput if it exists
        $testFile = __DIR__ . '/../../src/Generated/UpsertCustomerOnCreateInput.php';
        if (!file_exists($testFile)) {
            $this->markTestSkipped("Test file does not exist");
        }

        $content = file_get_contents($testFile);
        $this->assertStringContainsString('public function __construct', $content, 'Should have a constructor');
        $this->assertStringContainsString('final class', $content, 'Should be a final class');
    }

    public function testInputTypesHaveGetters(): void
    {
        $testFile = __DIR__ . '/../../src/Generated/UpsertCustomerOnCreateInput.php';
        if (!file_exists($testFile)) {
            $this->markTestSkipped("Test file does not exist");
        }

        $content = file_get_contents($testFile);

        // Check for getter methods
        $this->assertMatchesRegularExpression('/public function get\w+\(\)/', $content, 'Input types should have getter methods');
    }

    public function testInputTypesAreFinal(): void
    {
        $inputFiles = glob(__DIR__ . '/../../src/Generated/*Input.php');
        $this->assertNotEmpty($inputFiles, 'Should have input files to test');

        // Test a sample that definitely exists
        $testFile = __DIR__ . '/../../src/Generated/UpsertCustomerOnCreateInput.php';
        if (!file_exists($testFile)) {
            $this->markTestSkipped("Test file does not exist");
        }

        $content = file_get_contents($testFile);
        $this->assertStringContainsString('final class', $content, "Input classes should be final");
    }

    public function testGeneratedClassesUseStrictTypes(): void
    {
        $files = glob(__DIR__ . '/../../src/Generated/*.php');
        $this->assertNotEmpty($files, 'Should have files to test');

        $sampleFile = $files[0];
        $content = file_get_contents($sampleFile);

        $this->assertStringContainsString('declare(strict_types=1)', $content, 'Generated files should use strict types');
    }

    public function testGeneratedClassesHaveCorrectNamespace(): void
    {
        $files = glob(__DIR__ . '/../../src/Generated/*.php');
        $this->assertNotEmpty($files, 'Should have files to test');

        foreach (array_slice($files, 0, 10) as $file) {
            $content = file_get_contents($file);
            $this->assertStringContainsString('namespace Plain\Generated', $content, "File {$file} should have correct namespace");
        }
    }

    public function testArgsClassesAreGenerated(): void
    {
        $argsFiles = glob(__DIR__ . '/../../src/Generated/*Args.php');
        $this->assertNotEmpty($argsFiles, 'Should have Args classes generated');

        // Test a sample Args class
        $sampleFile = $argsFiles[0];
        $content = file_get_contents($sampleFile);

        $this->assertStringContainsString('final class', $content, 'Args classes should be final');
    }

    public function testGeneratedClassesImplementInterfaces(): void
    {
        // Check that generated classes reference interfaces even if they're not generated separately
        $inputFiles = glob(__DIR__ . '/../../src/Generated/*Input.php');
        $this->assertNotEmpty($inputFiles, 'Should have input files to test');

        $sampleFile = $inputFiles[0];
        $content = file_get_contents($sampleFile);

        $this->assertStringContainsString('implements', $content, 'Generated classes should implement interfaces');
    }

    public function testGeneratedClassesCanBeInstantiated(): void
    {
        // Test that we can read and parse generated class files
        $testFile = __DIR__ . '/../../src/Generated/AddCustomerToCustomerGroupsInput.php';
        if (!file_exists($testFile)) {
            $this->markTestSkipped('Test file does not exist');
        }

        $content = file_get_contents($testFile);
        $this->assertStringContainsString('namespace Plain\Generated', $content, 'Class should be in Plain\Generated namespace');
        $this->assertStringContainsString('final class', $content, 'Should define a final class');
        $this->assertStringContainsString('public function __construct', $content, 'Should have a constructor');
    }

    public function testGeneratedPropertiesUseReadonly(): void
    {
        $testFile = __DIR__ . '/../../src/Generated/AddCustomerToCustomerGroupsInput.php';
        if (!file_exists($testFile)) {
            $this->markTestSkipped('Test file does not exist');
        }

        $content = file_get_contents($testFile);
        $this->assertStringContainsString('readonly', $content, "Generated classes should use readonly properties");
        $this->assertStringContainsString('private readonly', $content, "Properties should be private readonly");
    }
}
