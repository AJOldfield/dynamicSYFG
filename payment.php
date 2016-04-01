<!DOCTYPE html>
<html lang="en">
<?php require_once('./config.php');?>


    <!-- Main Content -->
    <div class="container">
        
<form action="charge.php" method="POST">
  <script
    src="https://checkout.stripe.com/checkout.js" class="stripe-button"
    data-key="<?php echo $stripe['publishable_key']; ?>"
    data-image="img/checkout_logo.png"
    data-name="Share Your Farming Gear"
    data-description="SYFG Listing"
    data-currency="aud"
    data-amount="2000" // Amount in cents charged to the user
    data-locale="auto"
    data-panel-label="Pay for listing"
    data-email="andrew@shareyourfarminggear.com.au"> // Pre-fill this when you know how!
  </script>
    <input name = "amount" type="hidden" value = 2000>  //PASSES VALUE TO CHARGE.PHP
    <input name = "currency" type="hidden" value = 'aud'>PASSES VALUE TO CHARGE.PHP
</form>


    </div>

    

</html>
