 <?php   
	include('dbconnect.php')
 ?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bakery</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400|Roboto:300,400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400|Roboto:300,400,700">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/css/swiper.min.css">
    <link rel="stylesheet" href="css/nav-sticky-top.css">
    <link rel="stylesheet" href="css/Simple-Slider.css">
    <link rel="stylesheet" href="css/styles.css">
	<!-- Start WOWSlider.com HEAD section -->
<link rel="stylesheet" type="text/css" href="engine1/style.css" />
<script type="text/javascript" src="engine1/jquery.js"></script>
<!-- End WOWSlider.com HEAD section -->
</head>

<body>
	
    <nav class="navbar navbar-default navbar-fixed-top navigation-clean-button">
        <div class="container">
            <div class="navbar-header"><a class="navbar-brand navbar-link" href="#"><span>Online Bakery Shop</span> </a>
                <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            </div>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav nav-right">
                    <li role="presentation"><a href="index.php">home </a></li>
                    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#">Produktet <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu" id="nav">
                            <li role="presentation"><a href="index.php">Buke </a></li>
                            <li role="presentation"><a href="bureka">Bureka </a></li>
                            <li role="presentation"><a href="gjevreka">Gjevreka </a></li>
                            <li role="presentation"><a href="kifle">Kifle </a></li>
                            <li role="presentation"><a href="torte">Torte </a></li>
                            <li role="presentation"><a href="most_recent">Produktet me te reja</a></li>
                            <li role="presentation"><a href="most_popular">Produktet me te kerkuara</a></li>
                            <li role="presentation"><a href="home">Shfaq te gjitha</a></li>
							<li role="presentation"><a href="special">Kerko</a></li>
                        </ul>
                    </li>
                    <li role="presentation"><a href="about.php">about </a></li>
                    <!--<li role="presentation"><a href="faq.html">faq </a></li>-->
                    <li class="active" role="presentation"><a href="contact.php">contact </a></li>
					<?php
						if(isset($_SESSION['username'])){
							echo "                    
						<li class='dropdown'><a class='dropdown-toggle' data-toggle='dropdown' aria-expanded='false' href='#'>Pjesa per Admin<span class='caret'></span></a>
                        <ul class='dropdown-menu' role='menu' id='nav' >
                            <li role='presentation'><a href='adminPage'>Shto produkte</a></li>
                            
                        </ul>
                    </li>";
						}else{
							
						}
				?>
                </ul>
                  </ul>
				
				<?php
						if(isset($_SESSION['username'])){
							echo " <p class='navbar-text navbar-right actions'><a class='btn btn-default action-button' role='button' href='includes/logout.inc.php'>Log out</a></p>";
						}else{
							echo " <p class='navbar-text navbar-right actions'><a class='navbar-link login' href='login.php'>Log In</a> <a class='btn btn-default action-button' role='button' href='signup.php'>Sign Up</a></p>";
						}
				?>
            </div>
        </div>
		
    </nav>
	<br/>
	<br/>
	<br/>
	<div class="container">
		<div class="box">	
			<div class="row">
				<div class="col-lg-12">
					<br>
					<h2 class="intro-text text-center">
						<strong>Kontakt</strong>
						<br/>
						<hr/>
					</h2>
				</div>
				
				
				<div class="col-md-8">
					<iframe src="https://www.google.com/maps/embed?pb=!1m21!1m12!1m3!1d2934.6833346246412!2d21.154187486707016!3d42.64687273935377!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m6!3e6!4m0!4m3!3m2!1d42.6474015!2d21.153018!5e0!3m2!1sen!2s!4v1482190615399"
					width="600" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>
				
				<div class="col-md-4">
					<p>Phone:
						<strong>+381 38 541 400</strong>
					</p>
					<p>Email:
						<strong><a href="milto:name@example.com">name@example.com</a></strong>
					</p>
					<p>Address:
						<strong>Lagjja KALABRIA,
						<br>rr.Rexhep Krasniqi
						<br>10000, Prishtinë
						</strong>
					</p>
				</div>
			</div>
		
		</div>
		<br/>
		<hr/>
		
		<div class="box">
			<div class="row">
				<div class=col="col-lg-12">
				
					<form  method="post"  action="includes/contact.inc.php">
						<div class="row">
							<div class="form-group col-lg-4">
								<label>Name</label>
								<input type="text" id="name" name="name" class="form-control"></input>
							</div>
							
							<div class="form-group col-lg-4">
								<label>Email</label>
								<input type="email" id="email" name="email" class="form-control"></input>
							</div>
							
							<div class="form-group col-lg-4">
								<label>Phone Number</label>
								<input type="tel" id="phone" name="phone"class="form-control"></input>
							</div>
							
							<div class="form-group col-lg-12">
								<label>Message</label>
								<textarea id="message" name="message" class="form-control" rows="6"></textarea>
							</div>
							
							<div class="form-group col-lg-12">
								<input type="hidden" name="save" value="contact">
								<button type="submit" class="btn btn-primary">Submit</button>
							</div>
							
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	
	
	
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script>
		$(document).ready(function(){
					//initial
				
				$(document).ready(function(){
					$('.dropdown').mouseenter(function () {
						$(this).find('.dropdown-menu').show('fast');
					  })
					  $('.dropdown').mouseleave(function () {
						$(this).find('.dropdown-menu').hide('fast');
					  })
				});
    </script>
	
    <script src="js/jquery.min.js"></script>
	<script src="js/jquery-3.1.1.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/js/swiper.jquery.min.js"></script>
    <script src="js/Simple-Slider.js"></script>
</body>

</html>
