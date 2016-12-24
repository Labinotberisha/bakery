<?php
	session_start();
	
	if(isset($_SESSION['username'])==null){
		echo "<script>alert('Nuk keni casje ne kete pjese!')</script>";
		echo "<script>window.open('index.php','_self')</script>";
		die();
	}else if($_SESSION['username']!=='admin'){
		echo "<script>alert('Admins only!')</script>";
		echo "<script>window.open('index.php','_self')</script>";
		die();
	}	
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Bakery</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400|Roboto:300,400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400|Roboto:300,400,700">
    <link rel="stylesheet" href="fonts/ionicons.min.css">
    <link rel="stylesheet" href="css/Contact-Form-Clean.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/css/swiper.min.css">
    <link rel="stylesheet" href="css/Login-Form-Clean.css">
    <link rel="stylesheet" href="css/Login-Form-Dark.css">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/Registration-Form-with-Photo.css">
    <link rel="stylesheet" href="css/Simple-Slider.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/Team-Boxed.css">

</head>

<body>
    <div class="register-photo">
        <div class="form-container">
            <form method="post" onsubmit="return validateForm()" action="includes/signupAdmin.inc.php">
                <h2 class="text-center"><strong>Create</strong> an account.</h2>
				<div class="form-group">
                    <input class="form-control" type="text" id="name" name="name" placeholder="Emri">
                </div>
                <div class="form-group">
                    <input class="form-control" type="text" id="surname" name="surname" placeholder="Mbiemri">
                </div>
                <div class="form-group">
                    <input class="form-control" type="text" id="admin_username" name="admin_username" placeholder="Username">
                </div>
				<div class="form-group">
                    <input class="form-control" type="text" id="email" name="email" placeholder="Email">
                </div>
                <div class="form-group">
                    <input class="form-control" type="password" id="password" name="password" placeholder="Password">
                </div>
                <div class="form-group">
                    <input class="form-control" type="password" id="password-repeat" name="password-repeat" placeholder="Password (repeat)">
                </div>
				<div class="form-group">
                    <input class="form-control" type="text" id="address" name="address" placeholder="Adresa">
                </div>
			<!--	<div class="form-group">
					<h4>Roli: 
					<select name="Roli" id="Roli">
						<option value="User">User</option>
						<option value="Admin">Admin</option>
					</select></h4>
				</div>-->
                <div class="form-group">
                    <button class="btn btn-primary btn-block" type="submit" onclick="return validateForm()">Create account</button>
				</div>
				<div class="form-group">
                    <button class="btn btn-primary btn-block" onClick="history.go(-1);return true;">Kthehu mrapa</button>
				</div>				
                </form>
        </div>
    </div>
    <script src="js/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/js/swiper.jquery.min.js"></script>
    <script src="js/Simple-Slider.js"></script>
</body>

</html>

<script type="text/javascript">
		function validateForm(){
			
			var name = document.getElementById("name").value;
			var surname = document.getElementById("surname").value;
			var admin_username = document.getElementById("admin_username").value;
			var password = document.getElementById("password").value;
			var email = document.getElementById("email").value;
			var pass2 = document.getElementById("password-repeat").value;
			
			
			if(name==""){
				alert ("Ju lutem shtypeni emrin");
				return false;
			}else if(surname==""){
				alert ("Ju lutem shtypeni mbiemrin");
				return false;
			}else if(email==""){
				alert ("Ju lutem shtypeni emailin");
				return false;
			}else if(password==""){
				alert ("Ju lutem shtypeni passwordin");
				return false;
			}else if(pass2!=password){
				alert("Ju lutem shtypeni passwordin e sakte");
				return false;
			}
			
		}
		
</script>