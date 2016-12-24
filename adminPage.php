<?php

session_start();

?>

<!DOCTYPE html>
<html>

<head>
    
    
    <title>Online Bakery</title>
	    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400|Roboto:300,400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400|Roboto:300,400,700">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/css/swiper.min.css">
    <link rel="stylesheet" href="css/nav-sticky-top.css">
    <link rel="stylesheet" href="css/Simple-Slider.css">
    <link rel="stylesheet" href="css/styles.css">
    
    <link rel="stylesheet" href="css/login-vertical.css">
    
</head>

<body>

	<div class="container" >
		<div class="row">
			<div class="col-md-12 text-center">
				<div class="form-group">
					<div class="login-card"><img src="images/logo.png" class="profile-img-card">
        <form class="form-group"><span class="reauth-email"> </span>
            <button class="btn btn-primary btn-block btn-lg btn-signin" type="submit" formaction="shtoProdukt.php">Shto Produkt</button>
            <button class="btn btn-primary btn-block btn-lg btn-signin" type="submit" formaction="shtoSiAdmin.php">Shto Admin</button>
        </form>
    </div>
				</div>
			</div>
		</div>
	</div>
    <script src="js/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>

</html>