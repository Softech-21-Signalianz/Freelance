<?php


include './stripe-php/init.php';
//require 'vendor/autoload.php';
\Stripe\Stripe::setApiKey('sk_test_51J40tDCqz4t0N7147Q6kr10RJq2EqSOy7ohoIbFzyZ8gg0s4ZYGglH6UPwKT3wmzFc0rNUU1ucOOIR4RSmtW8QYl00jeJQJyxK');

header('Content-Type: application/json');

$YOUR_DOMAIN = 'http://localhost/Stripe/';

$checkout_session = \Stripe\Checkout\Session::create([
  'payment_method_types' => ['card'],
  'line_items' => [[
    'price_data' => [
      'currency' => 'usd',
      'unit_amount' => 2000,
      'product_data' => [
        'name' => 'Stubborn Attachments',
        'images' => ["https://i.imgur.com/EHyR2nP.png"],
      ],
    ],
    'quantity' => 1,
  ]],
  'mode' => 'payment',
  'success_url' => $YOUR_DOMAIN . '/success.html',
  'cancel_url' => $YOUR_DOMAIN . '/cancel.html',
]);

echo json_encode(['id' => $checkout_session->id]);