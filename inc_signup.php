<?php if (!defined('QUADODO_IN_SYSTEM')) {exit;} ?>

<div id="layout">

	<!----------- MENU ---------->
	<?php include('menu_A.php');?>

	<div id="main">
        <div class="header">
            <h1>Sign up</h1>
        </div>
	
        <div class="content">
            <p>Fill-up this form, please:</p>
			
			<div style="text-align:center;">
			<form class="pure-form pure-form-aligned" action="index.php?act=signup<?php if (isset($_GET['code'])) { ?>&code=<?php echo htmlentities($_GET['code']); } ?>" method="post">
				<input type="hidden" name="process" value="true" />
				<input type="hidden" name="random_id" value="<?php echo $random_id; ?>" />
				<fieldset>
					<div class="pure-control-group">
						<label for="name" >Username</label>
						<input id="name" type="text" name="username" maxlength="<?php echo $qls->config['max_username']; ?>" value="<?php if (isset($_SESSION[$qls->config['cookie_prefix'] . 'registration_username'])) { echo $_SESSION[$qls->config['cookie_prefix'] . 'registration_username']; } ?>" placeholder="Username" required>
					</div>

					<div class="pure-control-group">
						<label for="password">Password</label>
						<input id="password" type="password" name="password" maxlength="<?php echo $qls->config['max_password']; ?>" placeholder="Password" required>
					</div>

					<div class="pure-control-group">
						<label for="password">Repeat password</label>
						<input id="repeatpassword" type="password" name="password_c" maxlength="<?php echo $qls->config['max_password']; ?>" placeholder="Type it again" required>
					</div>					
					
					<div class="pure-control-group">
						<label for="email">Email Address</label>
						<input id="email" type="email" name="email" maxlength="100" value="<?php if (isset($_SESSION[$qls->config['cookie_prefix'] . 'registration_email'])) { echo $_SESSION[$qls->config['cookie_prefix'] . 'registration_email']; } ?>" placeholder="Email" required>
					</div>
					
					<div class="pure-control-group">
						<label for="email_c">Repeat email</label>
						<input id="email_c" type="email" name="email_c" maxlength="100" value="<?php if (isset($_SESSION[$qls->config['cookie_prefix'] . 'registration_email_confirm'])) { echo $_SESSION[$qls->config['cookie_prefix'] . 'registration_email_confirm']; } ?>" placeholder="Email" required>
					</div>					

					<div class="pure-control-group">
						<label for="name">Postcode</label>
						<input id="postcode" type="text" placeholder="Postcode" required>
					</div>
					
					<?php 
					/* START SECURITY IMAGE */
					if ($qls->config['security_image'] == 'yes') { ?>
						<div style="margin-left: 55px;">
							<img src="security_image.php?id=<?php echo $random_id; ?>" border="0" alt="Security Image" />
						</div>
						<div class="pure-control-group">
						<label for="name">Text in the image</label>
						<input id="security_code" type="text" name="security_code" maxlength="8" required/>
						</div>
					<?php } ?>					

					<div class="pure-controls">
						<label for="cb" class="pure-checkbox">
							<input id="cb" type="checkbox" required> I've read the <a href="http://shareyourfarminggear.com.au/Subsidiary/terms_and_conditions.html" target="_blank">terms and conditions</a>
						</label>
					</div>
										
					<br>
					<button type="submit" class="pure-button pure-button-primary">Sign up</button>
					
				</fieldset>
			</form>	
			</div>
		</div>

    </div>
</div>