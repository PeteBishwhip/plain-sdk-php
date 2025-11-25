<?php

declare(strict_types=1);

namespace Plain\Tests\Unit\Exceptions;

use PHPUnit\Framework\TestCase;
use Plain\Exceptions\AuthenticationException;
use Plain\Exceptions\GraphQLException;
use Plain\Exceptions\NetworkException;
use Plain\Exceptions\PlainException;
use Plain\Exceptions\RateLimitException;
use Plain\Exceptions\ServerException;
use Plain\Exceptions\ValidationException;

class ExceptionTest extends TestCase
{
    public function test_plain_exception_is_base_exception(): void
    {
        $exception = new PlainException('Test message');

        $this->assertInstanceOf(\Exception::class, $exception);
        $this->assertEquals('Test message', $exception->getMessage());
    }

    public function test_authentication_exception_extends_plain_exception(): void
    {
        $exception = new AuthenticationException('Auth failed');

        $this->assertInstanceOf(PlainException::class, $exception);
        $this->assertEquals('Auth failed', $exception->getMessage());
    }

    public function test_validation_exception_with_errors(): void
    {
        $errors = [
            ['message' => 'Field is required', 'path' => ['user', 'email']],
            ['message' => 'Invalid format', 'path' => ['user', 'phone']],
        ];

        $exception = new ValidationException('Validation failed', $errors);

        $this->assertInstanceOf(PlainException::class, $exception);
        $this->assertEquals('Validation failed', $exception->getMessage());
        $this->assertEquals($errors, $exception->getErrors());
    }

    public function test_rate_limit_exception_with_retry_after(): void
    {
        $exception = new RateLimitException('Rate limit exceeded', 60);

        $this->assertInstanceOf(PlainException::class, $exception);
        $this->assertEquals('Rate limit exceeded', $exception->getMessage());
        $this->assertEquals(60, $exception->getRetryAfter());
        $this->assertEquals(429, $exception->getCode());
    }

    public function test_rate_limit_exception_without_retry_after(): void
    {
        $exception = new RateLimitException('Rate limit exceeded');

        $this->assertNull($exception->getRetryAfter());
    }

    public function test_server_exception_extends_plain_exception(): void
    {
        $exception = new ServerException('Server error', 500);

        $this->assertInstanceOf(PlainException::class, $exception);
        $this->assertEquals('Server error', $exception->getMessage());
        $this->assertEquals(500, $exception->getCode());
    }

    public function test_graphql_exception_with_errors(): void
    {
        $errors = [
            [
                'message' => 'Cannot query field',
                'path' => ['query', 'customer'],
                'extensions' => ['code' => 'GRAPHQL_VALIDATION_FAILED'],
            ],
        ];

        $exception = new GraphQLException('GraphQL errors occurred', $errors);

        $this->assertInstanceOf(PlainException::class, $exception);
        $this->assertEquals('GraphQL errors occurred', $exception->getMessage());
        $this->assertEquals($errors, $exception->getErrors());
    }

    public function test_network_exception_extends_plain_exception(): void
    {
        $exception = new NetworkException('Connection failed');

        $this->assertInstanceOf(PlainException::class, $exception);
        $this->assertEquals('Connection failed', $exception->getMessage());
    }

    public function test_exception_with_previous(): void
    {
        $previous = new \RuntimeException('Original error');
        $exception = new PlainException('Wrapper error', 0, $previous);

        $this->assertSame($previous, $exception->getPrevious());
    }
}
