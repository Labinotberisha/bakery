<?php   
 session_start();  
	 $connect = mysqli_connect("localhost", "u273056273_root", "la141533547", "u273056273_furra");
	$selected = $permban = $aditiv = null;
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
			<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
			<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400|Roboto:300,400,700">
			<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400|Roboto:300,400,700">
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/css/swiper.min.css">
			<link rel="stylesheet" href="assets/css/nav-sticky-top.css">
			<link rel="stylesheet" href="assets/css/Simple-Slider.css">
			<link rel="stylesheet" href="assets/css/styles.css">
      
      </head>  
      <body>  
           <br />  
           <div class="container">  
                <br />  
				 <div id="special"> 
					
					<!--FORMA QE I DERGON TE DHENAT  -->
						<form method="POST" action="search.php"> 
						<h3>Cfare kerkoni?</h3>
							<select class="select" name="select">
								  <option></option>
								  <option value="Burek">Burek</option>
								  <option value="Buke">Buke</option>
								  <option value="Gjevrek">Gjevrek</option>
								  <option value="Kifle">Kifle</option>
								  <option value="Torte">Torte</option>
							</select>
							<h3>Cfare permban?</h3>
							<select class="permban" name="permban">
								  <option></option>
								  <option value="Mish">Mish</option>
								  <option value="Gj">Gjem</option>
								  <option value="Qo">Qokollade</option>
								  <option value="Sp">Spinaq</option>
								  <option value="Dj">Djath</option>
								  <option value="Su">Susam</option>
							</select>
							<h3>(Opcionale)A permban aditiv?</h3>
							<select class="aditiv" name="aditiv">
								  <option></option>
								  <option value="Me aditiv">Me aditiv</option>
								  <option value="Pa aditiv">Pa aditiv</option>
							</select>
			<br/><br/>
							<input type="submit"value="Kerko"></input>
						</form>
					</div> 
				
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