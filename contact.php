<!DOCTYPE html>
	<html>
		<head>
			<!--Import Google Icon Font-->
			<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
			<!--Import materialize.css-->
			<link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
 
			<!--Let browser know website is optimized for mobile-->
			<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		</head>

		<body class="red darken-2">

			<!--navbar-->
			<!-- Dropdown Structure -->
			<ul id='dropdown1' class='dropdown-content'>
				<li><a href="products.php">Product List</a></li>
				<li class="divider"></li>
				<li><a href="papad.php">Papad</a></li>
				<li class="divider"></li>
				<li><a href="badi.php">Badi</a></li>
				<li class="divider"></li>
				<li><a href="spices.php">Spices</a></li>
				<li class="divider"></li>
				<li><a href="others.php">Others</a></li>
			</ul>
			<nav>
				<a href="#" style="padding-left:10%;" class="brand-logo">MMGU</a>
				<ul class="right hide-on-med-and-down">
					<li><a href="index.php">Home</a></li>
					<li><a href="aboutus.php">About Us</a></li>
					<li><a class='dropdown-button' href='#' data-activates='dropdown1'>Products</a></li>
					<li><a href="contact.php">Contact Us</a></li>
				</ul>
				<ul id="slide-out" class="side-nav">
					<li><a href="index.php">Home</a></li>
					<li><a href="aboutus.php">About Us</a></li>
					<li class="no-padding">
						<ul class="collapsible collapsible-accordion">
							<li>
								<a class="collapsible-header">Products</a>
								<div class="collapsible-body">
									<ul>
										<li class="divider"></li>
										<li><a href="products.php">Product List</a></li>
										<li class="divider"></li>
										<li><a href="papad.php">Papad</a></li>
										<li class="divider"></li>
										<li><a href="badi.php">Badi</a></li>
										<li class="divider"></li>
										<li><a href="spices.php">Spices</a></li>
										<li class="divider"></li>
										<li><a href="others.php">Others</a></li>
										<li class="divider"></li>
									</ul>
								</div>
							</li>
						</ul>
					</li>
					<li><a href="contact.php">Contact Us</a></li>
				</ul>
				<a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">reorder</i></a>
			</nav>

			<br><br><br><br>

			<!--successful submissioon message-->
			<?php
				session_start();
				if(isset($_SESSION["status"]))
				if($_SESSION["status"]==true):
			?>
				<div class="container">
					<div class="col s12 m12">
						<div class="black waves-light btn">
							Thank you for your Query. Our executives will get back to you soon.
						</div>
						<br><br><br><br><br><br>
					</div>
				</div>
			<?php
				endif;
				if(!isset($_SESSION["status"])):
			?>


			<!--form-->
			<div class="container" >
				<div class="row">
					<div class="col s12 m3">&nbsp;</div>
					<div class="col s12 m6 white z-depth-5" style="border-radius:10px; padding:15px 15px 15px 15px;">
						<form action="submit.php" method="post">
							<input class="center" type="text" placeholder="Name" name="name" required />
							<input class="center" type="email" placeholder="Email" name="email" required />
							<input class="center" type="number" placeholder="Mobile" name="phone" required />
							<input class="center" type="text" placeholder="City" name="city" required />
							<input class="center" type="text" placeholder="Comment/Query" name="comment" required />
							<input class="waves-effect waves-light btn center z-depth-3" style="margin-left:32%;" type="submit" name="submit" />
						</form>
					</div>
					<div class="col s12 m3">&nbsp;</div>
				</div>
			</div>

			<br><br><br>

			<?php
				endif;
				session_destroy();
			?>

			<!--footer-->
			<footer class="page-footer">
				<div class="container">
					<div class="row">
						<div class="col l6 s12">
							<a href="#"><img height=200px src="img/logo.png" /></a>
						</div>
						<div class="col l4 offset-l2 s12">
							<h5 class="white-text">Social</h5>
							<ul>
								<li><a class="white-text" target="_blank" href="https://www.facebook.com/shrishyampapadmasale"><img src="img/fb.png" width=30px; height=30px;> Facebook</a></li>
								<li><a class="white-text" target="_blank" href="https://twitter.com/_mmgu_"><img src="img/tw.png" width=30px; height=30px;> Twitter</a></li>
								<li><a class="white-text" target="_blank" href="https://plus.google.com/105437892447996996886"><img src="img/gp.png" width=30px; height=30px;> Google Plus</a></li>
								<li><a class="white-text" target="_blank" href="http://www.indiamart.com/marwadimahilagirhudhyog/"><img src="img/im.png" width=30px; height=30px;> Indiamart</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="footer-copyright">
					<div class="container">
						&copy; 2016 Copyright MMGU | All Rights Reserved
					</div>
				</div>
			</footer>

			<!--Import jQuery before materialize.js-->
			<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
			<script type="text/javascript" src="js/materialize.min.js"></script>
			<script type="text/javascript" src="js/materialize.js"></script>
		</body>
	</html>
