<?php

declare(strict_types=1);

namespace Plain\Tests\Unit\Response;

use PHPUnit\Framework\TestCase;
use Plain\Exceptions\GraphQLException;
use Plain\Response\Response;

class ResponseTest extends TestCase
{
    public function test_creates_response_with_data(): void
    {
        $data = ['customer' => ['id' => 'c_123', 'email' => 'test@example.com']];
        $response = new Response($data);

        $this->assertEquals($data, $response->getData());
        $this->assertTrue($response->hasData());
        $this->assertFalse($response->hasErrors());
    }

    public function test_creates_response_with_errors(): void
    {
        $errors = [
            ['message' => 'Field is required'],
        ];
        $response = new Response(null, $errors);

        $this->assertNull($response->getData());
        $this->assertEquals($errors, $response->getErrors());
        $this->assertFalse($response->hasData());
        $this->assertTrue($response->hasErrors());
    }

    public function test_creates_response_from_json(): void
    {
        $json = json_encode([
            'data' => ['customer' => ['id' => 'c_123']],
            'errors' => null,
        ]);

        $response = Response::fromJson($json);

        $this->assertEquals(['customer' => ['id' => 'c_123']], $response->getData());
        $this->assertNull($response->getErrors());
    }

    public function test_creates_response_from_array(): void
    {
        $array = [
            'data' => ['customer' => ['id' => 'c_123']],
            'extensions' => ['requestId' => 'req_123'],
        ];

        $response = Response::fromArray($array);

        $this->assertEquals(['customer' => ['id' => 'c_123']], $response->getData());
        $this->assertEquals(['requestId' => 'req_123'], $response->getExtensions());
    }

    public function test_get_specific_field(): void
    {
        $response = new Response(['customer' => ['id' => 'c_123']]);

        $this->assertEquals(['id' => 'c_123'], $response->get('customer'));
        $this->assertNull($response->get('nonexistent'));
    }

    public function test_throw_if_has_errors(): void
    {
        $errors = [
            ['message' => 'Error 1'],
            ['message' => 'Error 2'],
        ];
        $response = new Response(null, $errors);

        $this->expectException(GraphQLException::class);
        $this->expectExceptionMessage('GraphQL errors: Error 1, Error 2');

        $response->throwIfHasErrors();
    }

    public function test_does_not_throw_if_no_errors(): void
    {
        $response = new Response(['customer' => ['id' => 'c_123']]);

        $response->throwIfHasErrors(); // Should not throw

        $this->assertTrue(true); // Assert we got here
    }

    public function test_to_array(): void
    {
        $data = ['customer' => ['id' => 'c_123']];
        $errors = [['message' => 'Error']];
        $extensions = ['requestId' => 'req_123'];

        $response = new Response($data, $errors, $extensions);
        $array = $response->toArray();

        $this->assertEquals([
            'data' => $data,
            'errors' => $errors,
            'extensions' => $extensions,
        ], $array);
    }

    public function test_to_array_excludes_null_values(): void
    {
        $response = new Response(['customer' => ['id' => 'c_123']]);
        $array = $response->toArray();

        $this->assertEquals(['data' => ['customer' => ['id' => 'c_123']]], $array);
        $this->assertArrayNotHasKey('errors', $array);
        $this->assertArrayNotHasKey('extensions', $array);
    }

    public function test_handles_partial_response_with_data_and_errors(): void
    {
        $data = ['customer' => null];
        $errors = [
            ['message' => 'Customer not found', 'path' => ['customer']],
        ];

        $response = new Response($data, $errors);

        $this->assertTrue($response->hasData());
        $this->assertTrue($response->hasErrors());
        $this->assertEquals($data, $response->getData());
        $this->assertEquals($errors, $response->getErrors());
    }

    public function test_from_json_with_invalid_json_throws(): void
    {
        $this->expectException(\JsonException::class);

        Response::fromJson('invalid json{');
    }

    public function test_has_errors_returns_false_for_empty_array(): void
    {
        $response = new Response(null, []);

        $this->assertFalse($response->hasErrors());
    }

    public function test_extensions_are_accessible(): void
    {
        $extensions = ['tracing' => ['version' => 1]];
        $response = new Response(null, null, $extensions);

        $this->assertEquals($extensions, $response->getExtensions());
    }
}
