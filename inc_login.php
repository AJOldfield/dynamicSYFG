<div id="layout">

	<!----------- MENU ---------->
	<?php include('menu_A.php');?>

	<div id="main">
	
        <div class="header">
            <h1>Login</h1>
        </div>
	
        <div class="content">
            <h2 class="content-subhead">Login with your credentials</h2>
            <p>One-second login:</p>

			<form class="pure-form" action="login_process.php" method="post">

				<input type="hidden" name="process" value="true" />
				<fieldset>

					<input type="text" name="username" placeholder="User" maxlength="<?php echo $qls->config['max_username']; ?>">
					<input type="password" name="password" placeholder="Password" maxlength="<?php echo $qls->config['max_password']; ?>">
					
					&nbsp;&nbsp;
					
					<label for="remember">
						<input id="remember" type="checkbox" value="1"> Remember me
					</label>
					
					&nbsp;&nbsp;
					
					<button type="submit" class="pure-button pure-button-primary">Sign in</button>
				
					<?php if (isset($_GET['f'])) { ?>
					<br />
					<span style="color:#ff524a;">
					<?php
						switch ($_GET['f']) {
							default: break;
							case 0: echo LOGIN_NOT_ACTIVE_USER; break;
							case 1: echo LOGIN_USER_BLOCKED; break;
							case 2: echo LOGIN_PASSWORDS_NOT_MATCHED; break;
							case 3: echo LOGIN_NO_TRIES; break;
							case 4: echo LOGIN_USER_INFO_MISSING; break;
							case 5:	echo LOGIN_NOT_ACTIVE_ADMIN; break;
						}
					?>
					</span>
					<?php } ?>
				
				</fieldset>
			</form>			
		
		</div>

    </div>
</div>