
<?php
  require_once('./config.php');

  $token  = $_POST['stripeToken'];
  $email = $_POST['stripeEmail'];
  $amount  = $_POST['amount'];
  $currency  = $_POST['currency'];

  $customer = \Stripe\Customer::create(array(
      'email' => $email, // Pre-fill this when you know how!
      'card'  => $token
  ));

  $charge = \Stripe\Charge::create(array(
      'customer' => $customer->id,
      'amount'   => $amount,
      'currency' => $currency
  ));

  echo '<h1>Card successfully charged</h1>';
?>

