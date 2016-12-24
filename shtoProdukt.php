<?php
	include('dbconnect.php');
 $selected = $permban = $aditiv = null;
 

	if(isset($_SESSION['username'])==null){
		echo "<script>alert('Username or password is not correct, try again!')</script>";
		echo "<script>window.open('index.php','_self')</script>";
		die();
	}else if($_SESSION['username']!=='admin'){
		echo "<script>alert('This content is only available to the Admin!')</script>";
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
            <form method="post" onsubmit="return validateForm()" action="includes/shtoProdukt.inc.php">
                <h2 class="text-center"><strong>Add</strong> a product.</h2>
				<div class="form-group">
                    <input class="form-control" type="text" id="product_name" name="product_name" placeholder="Emri">
                </div>
				<div class="form-group">
					Lloji: 
					<select id="lloji" name="lloji" class="lloji">
						<option value="Buke">Buke</option>
						<option value="Burek">Burek</option>
						<option value="Gjevrek">Gjevrek</option>
						<option value="Kifle">Kifle</option>
						<option value="Torte">Torte</option>
					</select>
				</div>
				<div class="form-group">
					<h4>Forma: 
					<select name="forma" id="forma" class="forma">
						<option value="Gjate">Gjate</option>
						<option value="Rreth">Rreth</option>
						<option value="Katrore">Katrore</option>
					</select></h4>
				</div>
				<div class="form-group">
					<h4>Permban aditiv: 
					<select name="aditiv" id="aditiv" class="aditiv">
						<option value="Me aditiv">Me Aditiv</option>
						<option value="Pa aditiv">Pa Aditiv</option>
					</select></h4>
				</div>
                <div class="form-group">
                    <input class="form-control" type="text" id="price" name="price" placeholder="Cmimi">
                </div>
                <div class="form-group">
                    <input type="file" name="image" id="image" class="image">
                </div>
                <div class="form-group">
                    <input class="form-control" type="text" id="permbajtja" name="permbajtja" placeholder="Permbajtja">
                </div>
                <div class="form-group">
                    <button class="btn btn-primary btn-block" type="submit" onclick="return validateForm()">Add product</button>
				</div>
                <div class="form-group">
                    <button class="btn btn-primary btn-block" type="submit" onClick="history.go(-1);return true;">Kthehu mrapa</button>
				</div>				
				
                </form>
        </div>
		
		
				<?php

				if(empty($_POST['lloji'])) {
				} else {
					$selected = $_POST['lloji'];
				}
				
				if(empty($_POST['forma'])) {
				} else {
					$permban = $_POST['forma'];
				}
				
				if(empty($_POST['aditiv'])) {
				} else {
					$aditiv = $_POST['aditiv'];
				}
				
				if(empty($_POST['image'])) {
				} else {
					$image = $_POST['image'];
				}
				?>
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
			var price = document.getElementById("price").value;
			var permbajtja = document.getElementById("permbajtja").value;
			
			if(name==""){
				alert ("Ju lutem shtypeni emrin");
				return false;
			}else if(price==""){
				alert ("Ju lutem shtypeni cmimin");
				return false;
			}else if(permbajtja==""){
				alert("Ju lutem shtypeni permbajtjen");
				return false;
			}
			
		}
		
</script>