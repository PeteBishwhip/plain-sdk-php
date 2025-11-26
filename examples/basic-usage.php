<?php

/**
 * Basic usage example for the Plain SDK.
 *
 * This example demonstrates:
 * - Creating an SDK instance
 * - Executing GraphQL queries
 * - Handling responses
 * - Error handling
 */

declare(strict_types=1);

require_once __DIR__ . '/../vendor/autoload.php';

use Plain\PlainSDK;
use Plain\Exceptions\{
    AuthenticationException,
    RateLimitException,
    GraphQLException,
    NetworkException
};

// Create SDK instance
// In production, load API key from environment variables
$apiKey = getenv('PLAIN_API_KEY') ?: 'pk_test_1234567890abcdefghij';

$sdk = new PlainSDK([
    'api_key' => $apiKey,
    'timeout' => 30,
    'retry_attempts' => 3,
]);

echo "Plain SDK Basic Usage Example\n";
echo "==============================\n\n";

// Example 1: Simple query
echo "Example 1: Simple Customer Query\n";
echo "---------------------------------\n";

try {
    $response = $sdk->execute('
        query {
            customer(customerId: "c_01GYQ3YNYJ9KQFN7P8G2N5XWQP") {
                id
                email
                fullName
                createdAt {
                    iso8601
                }
            }
        }
    ');

    if ($response->hasErrors()) {
        echo "GraphQL Errors:\n";
        foreach ($response->getErrors() as $error) {
            echo "  - " . $error['message'] . "\n";
        }
    } else {
        echo "Success! Response data:\n";
        print_r($response->getData());
    }
} catch (AuthenticationException $e) {
    echo "❌ Authentication failed: " . $e->getMessage() . "\n";
    echo "   Please check your API key.\n";
} catch (NetworkException $e) {
    echo "❌ Network error: " . $e->getMessage() . "\n";
} catch (GraphQLException $e) {
    echo "❌ GraphQL error: " . $e->getMessage() . "\n";
    foreach ($e->getErrors() as $error) {
        echo "   - " . $error['message'] . "\n";
    }
}

echo "\n";

// Example 2: Query with variables
echo "Example 2: Query with Variables\n";
echo "--------------------------------\n";

try {
    $response = $sdk->execute('
        query GetCustomer($customerId: ID!) {
            customer(customerId: $customerId) {
                id
                email
                fullName
            }
        }
    ', [
        'customerId' => 'c_01GYQ3YNYJ9KQFN7P8G2N5XWQP',
    ]);

    // Throw exception if there are errors
    $response->throwIfHasErrors();

    echo "Customer retrieved successfully!\n";
    $customer = $response->get('customer');
    if ($customer) {
        echo "  ID: {$customer['id']}\n";
        echo "  Email: {$customer['email']}\n";
        echo "  Name: {$customer['fullName']}\n";
    }
} catch (AuthenticationException $e) {
    echo "❌ Authentication failed: " . $e->getMessage() . "\n";
} catch (GraphQLException $e) {
    echo "❌ Failed to retrieve customer:\n";
    foreach ($e->getErrors() as $error) {
        echo "   - " . $error['message'];
        if (isset($error['path'])) {
            echo " (path: " . implode('.', $error['path']) . ")";
        }
        echo "\n";
    }
} catch (RateLimitException $e) {
    echo "❌ Rate limit exceeded!\n";
    if ($retryAfter = $e->getRetryAfter()) {
        echo "   Retry after {$retryAfter} seconds.\n";
    }
} catch (NetworkException $e) {
    echo "❌ Network error: " . $e->getMessage() . "\n";
}

echo "\n";

// Example 3: Checking API key environment
echo "Example 3: API Key Information\n";
echo "-------------------------------\n";

$apiKeyInfo = $sdk->getApiKey();
echo "Environment: " . $apiKeyInfo->getEnvironment() . "\n";
echo "Is Live: " . ($apiKeyInfo->isLive() ? 'Yes' : 'No') . "\n";
echo "Is Test: " . ($apiKeyInfo->isTest() ? 'Yes' : 'No') . "\n";

echo "\n";
echo "==============================\n";
echo "Examples completed!\n";
