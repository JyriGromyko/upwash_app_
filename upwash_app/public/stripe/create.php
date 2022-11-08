<?php

require 'stripe-php/init.php';

// This is your test secret API key.
\Stripe\Stripe::setApiKey('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');


function calculateOrderAmount(array $items): int {
   // Replace this constant with a calculation of the order's amount
    // Calculate the order total on the server to prevent
    // people from directly manipulating the amount on the client
    return ($items[0]->price ?? 1) * 100;
    // return 1400;
}

header('Content-Type: application/json');

try {
    // retrieve JSON from POST body
    $jsonStr = file_get_contents('php://input');
    $jsonObj = json_decode($jsonStr);

    // Create a PaymentIntent with amount and currency
    $paymentIntent = \Stripe\PaymentIntent::create([
        'amount' => calculateOrderAmount($jsonObj->items),
        'currency' => 'eur',
        'automatic_payment_methods' => [
            'enabled' => true,
        ],
        'capture_method' => 'manual'
    ]);

    $output = [
        'clientSecret' => $paymentIntent->client_secret,
    ];

    echo json_encode($output);
} catch (Error $e) {
    http_response_code(500);
    echo json_encode(['error' => $e->getMessage()]);
}