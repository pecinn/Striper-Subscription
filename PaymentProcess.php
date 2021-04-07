<?php

    require ('vendor/autoload.php');

    
        \Stripe\Stripe::setApiKey('sk_test_51IcbwgKiXDf9h9tvITOJdOcy6vMZXEHVHV0oLueO1mlFzWHHhyZ9N4gKGuHNxjQpy5tkYUkNu4UcAZwkbG9rfjT200jBnPASZD');
       

    $pid = $_GET['pid'];
    $token  = $_POST['stripeToken'];
    $email  = $_POST['stripeEmail'];

    $customer = \Stripe\Customer::create([
        'email' => $email,
        'source'  => $token,
    ]);
    
          $checkout_session = \Stripe\Checkout\Session::create([
            'success_url' => 'https://example.com/success.html?session_id={CHECKOUT_SESSION_ID}',
            'cancel_url' => 'https://example.com/canceled.html',
            'payment_method_types' => ['card'],
            'mode' => 'subscription',
            'line_items' => [[
              'price' =>"price_1Icu5GKiXDf9h9tvgoOyyzkI",
              // For metered billing, do not pass quantity
              'quantity' => 1,
            ]],
          ]);
    ?>