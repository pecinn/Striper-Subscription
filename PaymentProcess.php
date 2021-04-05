<?php
    require ('vendor/autoload.php');

    \Stripe\Stripe::setApiKey("sk_test_51IcbwgKiXDf9h9tvITOJdOcy6vMZXEHVHV0oLueO1mlFzWHHhyZ9N4gKGuHNxjQpy5tkYUkNu4UcAZwkbG9rfjT200jBnPASZD");


    $pid = $_GET['pid'];
    $token  = $_POST['stripeToken'];
    $email  = $_POST['stripeEmail'];

    $customer = \Stripe\Customer::create([
        'email' => $email,
        'source'  => $token,
    ]);

    ?>