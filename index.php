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
            <div class="navbar-header"><a class="navbar-brand navbar-link" href="index.php"><span>Online Bakery Shop</span> </a>
                <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            </div>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav nav-right">
                    <li class="active" role="presentation"><a href="index.php">home </a></li>
                    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#">Produktet <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu" id="nav">
                            <li role="presentation"><a href="buke">Buke </a></li>
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
                    <li role="presentation"><a href="contact.php">contact </a></li>
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
	<!--
	<div id="wowslider-container1" data-no-devices="true" data-fullscreen="true">
		<div class="ws_images"><ul>
			<li><img src="data1/images/1.jpg" alt="Online Bakery Shop" title="Online Bakery Shop" id="wows1_0"/></li>
			<li><img src="data1/images/4.jpg" alt="Online Bakery Shop" title="Online Bakery Shop" id="wows1_1"/></li>
			<li><img src="data1/images/5.jpg" alt="Online Bakery Shop" title="Online Bakery Shop" id="wows1_2"/></li>
			<li><a href="http://wowslider.com"><img src="data1/images/2.jpg" alt="responsive slider" title="Online Bakery Shop" id="wows1_3"/></a></li>
			<li><img src="data1/images/3.jpg" alt="Online Bakery Shop" title="Online Bakery Shop" id="wows1_4"/></li>
		</ul></div>
		<div class="ws_bullets"><div>
			<a href="#" title="Online Bakery Shop"><span><img src="data1/tooltips/1.jpg" alt="Online Bakery Shop"/>1</span></a>
			<a href="#" title="Online Bakery Shop"><span><img src="data1/tooltips/4.jpg" alt="Online Bakery Shop"/>2</span></a>
			<a href="#" title="Online Bakery Shop"><span><img src="data1/tooltips/5.jpg" alt="Online Bakery Shop"/>3</span></a>
			<a href="#" title="Online Bakery Shop"><span><img src="data1/tooltips/2.jpg" alt="Online Bakery Shop"/>4</span></a>
			<a href="#" title="Online Bakery Shop"><span><img src="data1/tooltips/3.jpg" alt="Online Bakery Shop"/>5</span></a>
		</div></div>
		<div class="ws_shadow"></div>
	</div>
	<script type="text/javascript" src="engine1/wowslider.js"></script>
	<script type="text/javascript" src="engine1/script.js"></script>
	-->
	 <div class="container">

        <div class="row">
			<div class="col-md-12">

                <div class="row carousel-holder">

                    <div class="col-md-12">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img class="slide-image" <img src="data1/images/1.jpg" alt="Online Bakery Shop"/>
                                </div>
                                <div class="item">
                                    <img class="slide-image" <img src="data1/images/1.jpg" alt="Online Bakery Shop"/>
                                </div>
                                <div class="item">
                                    <img class="slide-image" <img src="data1/images/1.jpg" alt="Online Bakery Shop"/>
                                </div>
                            </div>
                            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </div>
                    </div>

                </div>
			</div>
		</div>
	</div>
	<div id="content">
		
	</div>
	
	<br/>
	<hr/>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script>
		$(document).ready(function(){
					//initial
					$("#content").load("home.php");
					
					//handle menu clicks
					$('#nav li a').click(function(){
						var page = $(this).attr('href');
						$('#content').load(page +'.php');
						return false;
					});
				}); 
				$(document).ready(function(){
					$('.dropdown').mouseenter(function () {
						$(this).find('.dropdown-menu').show('fast');
					  })
					  $('.dropdown').mouseleave(function () {
						$(this).find('.dropdown-menu').hide('fast');
					  })
				});
    </script>
	
	<script src="js/general.js"></script>
    <script src="js/jquery.min.js"></script>
	<script src="js/jquery-3.1.1.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/js/swiper.jquery.min.js"></script>
    <script src="js/Simple-Slider.js"></script>
	<!--<script src="assets/js/loader.js"></script>-->
</body>

</html>
