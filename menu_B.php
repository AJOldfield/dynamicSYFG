    <!-- Menu toggle -->
    <a href="#menu" id="menuLink" class="menu-link">
        <!-- Hamburger icon -->
        <span></span>
    </a>

	<!------------ MENU ----------------->
	<div id="menu">
        <div class="pure-menu">
            <a class="pure-menu-heading" href="http://shareyourfarminggear.com.au/">Home</a>
            <ul class="pure-menu-list">
                <li class="pure-menu-item"><a href="index.php?act=myaccount" class="pure-menu-link">My account</a></li>
				<li class="pure-menu-item"><a href="index.php?act=hire" class="pure-menu-link">Hire services</a></li>
				<li class="pure-menu-item"><a href="index.php?act=provide" class="pure-menu-link">Provide services</a></li>
				
				<!--
                <li class="pure-menu-item"><a href="index.php?act=hire" class="pure-menu-link">Hire contractors</a></li>
				<li class="pure-menu-item"><a href="index.php?act=provide" class="pure-menu-link">Provide contracting</a></li>
				<li class="pure-menu-item"><a href="index.php?act=hiremachinery" class="pure-menu-link">Hire Rental Machinery</a></li>
				<li class="pure-menu-item"><a href="index.php?act=providemachinery" class="pure-menu-link">Provide Rental Machinery</a></li>
				<li class="pure-menu-item"><a href="index.php?act=hiremachinery" class="pure-menu-link">Hire Rental Machinery</a></li>
				<li class="pure-menu-item"><a href="index.php?act=hirelabour" class="pure-menu-link">Hire Labour</a></li>				
				<li class="pure-menu-item"><a href="index.php?act=providelabour" class="pure-menu-link">Provide Labour</a></li>
				-->
				
				<li class="pure-menu-item"><a href="index.php?act=upload" class="pure-menu-link"><span style="color:#ff524a;">UPLOAD</span></a></li>
				<li class="pure-menu-item"><a href="index.php?act=test" class="pure-menu-link"><span style="color:#ff524a;">TEST</span></a></li>
				<?php if($qls->user_info['username'] == 'MicheleGregorini') { ?>
				<li class="pure-menu-item"><a href="admincp.php" target="_blank" class="pure-menu-link"><span style="color:#ff524a;">Admin</span></a></li>
				<?php } ?>
				
				<li class="pure-menu-item"><a href="logout.php" class="pure-menu-link">Logout</a></li>
            </ul>
        </div>
		<div style="text-align: center; width: 100%; position: absolute; bottom: 0;"><img src="logo.png" alt="logo" width="60"></div>
    </div>