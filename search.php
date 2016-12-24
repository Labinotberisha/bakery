 <?php   
 session_start();  
	 $connect = mysqli_connect("localhost", "u273056273_root", "la141533547", "u273056273_furra");
 $selected = $permban = $aditiv = null;
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

	 
					
                <ul class="nav nav-tabs">  
                     <li class="active"><a data-toggle="tab" href="#products">Product</a></li>  
                     <li><a data-toggle="tab" href="#cart">Cart <span class="badge"><?php if(isset($_SESSION["shopping_cart"])) { echo count($_SESSION["shopping_cart"]); } else { echo '0';}?></span></a></li>  
                </ul>  
				
				<!-- PJESA KU MERREN TE DHENAT NGA FORMA DHE RUHEN NE VARIABLA-->
				<?php

				if(empty($_POST['select'])) {
				} else {
					$selected = $_POST['select'];
				}
				
				if(empty($_POST['permban'])) {
				} else {
					$permban = $_POST['permban'];
				}
				
				if(empty($_POST['aditiv'])) {
				} else {
					$aditiv = $_POST['aditiv'];
				}
				?>
				
				<!-- FILTERI QE I SHFAQ TE DHENAT-->
               <div class="container">  
                <h3 align="center"></h3><br />  

                <div class="tab-content">  
					<div id="products" class="tab-pane fade in active">
							<div class="box">
								<div class="row">
									 <?php  
								
										 $query = "SELECT * FROM produktet WHERE Lloji Like '$selected' AND Permbajtja LIKE '$permban%' AND Aditiv Like '$aditiv'";  
										 $result = mysqli_query($connect, $query);  
										 while($row = mysqli_fetch_array($result))  
										 {  
										 ?>   
										    <div class="col-sm-3" style="margin-top:15px;">
												<div style="border:1px solid #FE4639; background-color:#f1f1f1; border-radius:5px; padding:16px;" align="center">
													<img src="<?php echo $row["Foto"]; ?>" class="img-responsive" title="<?php echo $row["Permbajtja"]; ?>" /><br />  
													<h4 class="text-info"><?php echo $row["Emri"]; ?></h4>  
													<h4 class="text-danger">€ <?php echo $row["Cmimi"]; ?></h4>  
													<input class="form-control" type="text" name="quantity" id="quantity<?php echo $row["ID"]; ?>" class="form-control" value="1" />  
													<input class="form-control" type="hidden" name="hidden_name" id="name<?php echo $row["ID"]; ?>" value="<?php echo $row["Emri"]; ?>" />  
													<input class="form-control" type="hidden" name="hidden_price" id="price<?php echo $row["ID"]; ?>" value="<?php echo $row["Cmimi"]; ?>" />  
													<input type="button" name="add_to_cart" id="<?php echo $row["ID"]; ?>" style="margin-top:5px;" class="btn btn-warning form-control add_to_cart" value="Add to Cart" />  
												</div>
											</div>
									 
									 <?php  
									 }  
									 ?>  
								</div>
							</div>
						</div>
                     <div id="cart" class="tab-pane fade">  
                          <div class="table-responsive" id="order_table">  
                               <table class="table table-bordered">  
                                    <tr>  
                                         <th width="40%">Product Name</th>  
                                         <th width="10%">Quantity</th>  
                                         <th width="20%">Price</th>  
                                         <th width="15%">Total</th>  
                                         <th width="5%">Action</th>  
                                    </tr>  
                                    <?php  
                                    if(!empty($_SESSION["shopping_cart"]))  
                                    {  
                                         $total = 0;  
                                         foreach($_SESSION["shopping_cart"] as $keys => $values)  
                                         {                                               
                                    ?>  
                                    <tr>  
                                         <td><?php echo $values["product_name"]; ?></td>  
                                         <td><input type="text" name="quantity[]" id="quantity<?php echo $values["product_id"]; ?>" value="<?php echo $values["product_quantity"]; ?>" data-product_id="<?php echo $values["product_id"]; ?>" class="form-control quantity" /></td>  
                                         <td align="right">€ <?php echo $values["product_price"]; ?></td>  
                                         <td align="right">€ <?php echo number_format($values["product_quantity"] * $values["product_price"], 2); ?></td>  
                                         <td><button name="delete" class="btn btn-danger btn-xs delete" id="<?php echo $values["product_id"]; ?>">Remove</button></td>  
                                    </tr>  
                                    <?php  
                                              $total = $total + ($values["product_quantity"] * $values["product_price"]);  
                                         }  
                                    ?>  
                                    <tr>  
                                         <td colspan="3" align="right">Total</td>  
                                         <td align="right">€ <?php echo number_format($total, 2); ?></td>  
                                         <td></td>  
                                    </tr>  
                                    <tr>  
                                         <td colspan="5" align="center">  
                                              <form method="post" action="cart.php">  
                                                   <input type="submit" name="place_order" class="btn btn-warning" value="Place Order" />  
                                              </form>  
                                         </td>  
                                    </tr>  
                                    <?php  
                                    }  
                                    ?>  
                               </table>  
                          </div>  
                     </div>  
                </div>  
           </div> 
		   
		   </div>
							
							
							</div>  
						
							<div style="clear:both"></div>  
							<br />  
						   
					</div>
					<!-- jQuery -->
					<script src="js/jquery.js"></script>

					<!-- Bootstrap Core JavaScript -->
					<script src="js/bootstrap.min.js"></script>

                </div>

            </div>

        </div>

    </div>
    <!-- /.container -->

    <div class="container">

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p></p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

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

<script>
 $(document).ready(function(data){  
      $('.add_to_cart').click(function(){  
           var product_id = $(this).attr("id");  
           var product_name = $('#name'+product_id).val();  
           var product_price = $('#price'+product_id).val();  
           var product_quantity = $('#quantity'+product_id).val();  
           var action = "add";  
           if(product_quantity > 0)  
           {  
                $.ajax({  
                     url:"action.php",  
                     method:"POST",  
                     dataType:"json",  
                     data:{  
                          product_id:product_id,   
                          product_name:product_name,   
                          product_price:product_price,   
                          product_quantity:product_quantity,   
                          action:action  
                     },  
                     success:function(data)  
                     {  
                          $('#order_table').html(data.order_table);  
                          $('.badge').text(data.cart_item);  
                          
                     }  
                });  
           }  
           else  
           {  
                alert("Please Enter Number of Quantity")  
           }  
      });  
      $(document).on('click', '.delete', function(){  
           var product_id = $(this).attr("id");  
           var action = "remove";  
           if(true)  
           {  
                $.ajax({  
                     url:"action.php",  
                     method:"POST",  
                     dataType:"json",  
                     data:{product_id:product_id, action:action},  
                     success:function(data){  
                          $('#order_table').html(data.order_table);  
                          $('.badge').text(data.cart_item);  
                     }  
                });  
           }  
           else  
           {  
                return false;  
           }  
      });  
      $(document).on('keyup', '.quantity', function(){  
           var product_id = $(this).data("product_id");  
           var quantity = $(this).val();  
           var action = "quantity_change";  
           if(quantity != '')  
           {  
                $.ajax({  
                     url :"action.php",  
                     method:"POST",  
                     dataType:"json",  
                     data:{product_id:product_id, quantity:quantity, action:action},  
                     success:function(data){  
                          $('#order_table').html(data.order_table);  
                     }  
                });  
           }  
      });  
 });  
 </script>