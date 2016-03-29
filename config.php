<?php
require_once('vendor/autoload.php');

$stripe = array(
  "secret_key"      => "sk_test_BeHoUsi0PUQWDCrn3ndkqZan",
  "publishable_key" => "pk_test_DoA7STF9SaA7WWjDgBByqnsj"
);

\Stripe\Stripe::setApiKey($stripe['secret_key']);
?>