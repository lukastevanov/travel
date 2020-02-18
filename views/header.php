	<header id="fh5co-header-section" class="sticky-banner">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

			<div class="container">
				<div class="nav-header">
					<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle dark"><i></i></a>
					<h1 id="fh5co-logo"><a href="index.php"><i class="icon-airplane"></i>Travel</a></h1>
					<!-- START #fh5co-menu-wrap -->
					<nav id="fh5co-menu-wrap" role="navigation">
						<ul class="sf-menu" id="fh5co-primary-menu">
							<li class="active"><a href="index.php">Home</a></li>
							<li>
								<a href="vacation.php" class="fh5co-sub-ddown">Vacations</a>
							
							</li>
									<li>
								<a href="about.php" class="fh5co-sub-ddown">About me</a>
							
							</li>
					<li><a href="contact.php">Contact</a></li>
							<?php
						if(isset($_SESSION['lemail'])){
							
							echo "<li><a href='logout.php'>".$_SESSION['lemail']."</a></li>";
							echo "<li><a href='logout.php'>Logout</a></li>";
						}else{
							echo '<li><a href="login.php">Log in</a></li><li><a href="register.php">Register</a></li>';
							
						}
						?>
						
						</ul>
					</nav>
				</div>
			</div>
		</header>