<!-- PHP Server Side Script to Charge Card... should this be seperate?
<?php
// Set your secret key: remember to change this to your live secret key in production
// See your keys here https://dashboard.stripe.com/account/apikeys
\Stripe\Stripe::setApiKey("sk_test_BeHoUsi0PUQWDCrn3ndkqZan");

// Get the credit card details submitted by the form
$token = $_POST['stripeToken'];

// Create the charge on Stripe's servers - this will charge the user's card
try {
  $charge = \Stripe\Charge::create(array(
    "amount" => 1000, // amount in cents, again
    "currency" => "aud",
    "source" => $token,
    "description" => "Example charge"
    ));
} catch(\Stripe\Error\Card $e) {
  // The card has been declined
}
?>