<?php
	error_reporting(E_ALL & ~E_NOTICE);
	session_start();
?>
	<header id="header">
	
		<a href="index.php"><img id="logo" src="./images/riksnet_logo.png" alt="Riknet Logo" style="width:15%;height:40%;"></a>
		<nav id="nav">
			<ul>
				<li><a href="services.php"><b>Tjänster</b></a></li>
				<li><a href="support.php"><b>Support</b></a></li>
				<?php if($_SESSION['id'] == 0){ ?>
					<li><a href="loginSite.php"><p class="sidebar_links"><b>Mina sidor</b></p></a></li>
				<?php } ?>
				
				<?php if($_SESSION['id'] > 0){ ?>
					<li><a href="loginSite.php"><p class="sidebar_links"><b>Min sida</b></p></a></li>
				<?php } ?>
			</ul>
		</nav>
	</header>