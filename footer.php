<?php 
session_start();

include("connection.php");
error_reporting(0);

$cust= $_SESSION['customer'];
?>

<div class="footer">
	<div class="container">
		<div class="col-md-3 footer-grid">
			<h3>About Us</h3>
			<p> We Believe in providing you with the Best, Fresh and Supreme Quality Fruits and Vegetables and much more </p>
		</div>
		<div class="col-md-3 footer-grid ">
			<h3>Menu</h3>
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="kitchen.php">About us</a></li>
				<li><a href="kitchen.php">Fruits</a></li>
				<li><a href="kitchen.php">Vegytables</a></li>
				<li><a href="kitchen.php">Groceries</a></li>  
				<li><a href="contact.php">Contact Us</a></li>
			</ul>
		</div>
		<div class="col-md-3 footer-grid ">
			<h3>Customer Services</h3>
			<ul>
				<li><a href="shipping.php">Shipping</a></li>
				<li><a href="terms.php">Terms & Conditions</a></li>
				<li><a href="shipping.php">FAQs</a></li>
				<li><a href="contact.php">Contact</a></li>
				<li><a href="offer.php">Online Shopping</a></li>						 
				 
			</ul>
		</div>
		<?php 
			if(isset($_SESSION['customer']))
			{
				
			?>
		<div class="col-md-3 footer-grid">
			<h3>My Account</h3>
			<ul>
				<li><a href="order.php">My Orders</a></li>
				<li><a href="cust-logout.php">Logout</a></li>
				
			</ul>
		</div>
		<?php
			}

			else{
				?>
		<div class="col-md-3 footer-grid">
			<h3>My Account</h3>
			<ul>
				<li><a href="login.php">Login</a></li>
				<li><a href="register.php">Register</a></li>
				
			</ul>
		</div>
		<?php
			}

			?>		
		<div class="clearfix"></div>
			<div class="footer-bottom">
			<h1><a href="index.php"><img src="images/vegykart.png" alt="logo" width="350" height="95"></h1></a>
			<br>
			<h2><span style="color:yellow;">आपकी अपनी सब्जी मंडी</span></h2>
				<p class="fo-para"> We Believe in providing you with the Best, Fresh and Supreme Quality products for your daily kitchen, household and much more...</p>
				<ul class="social-fo">
					<li><a href="https://www.instagram.com/vegykart.wale/" class=" face"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
					<li><a href="https://twitter.com/vegykart" class=" twi"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
					<li><a href="https://www.instagram.com/vegykart.wale/" class="twi"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
					<li><a href="https://api.whatsapp.com/send?phone=919431609503&amp;text=Hi there!" class="twi"><i class="fa fa-whatsapp" aria-hidden="true"></i></a></li>
					<li><a href="mailto:shop.vegykart@gmail.com" class="twi"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
				</ul>
				<div class=" address">
					<div class="col-md-4 fo-grid1">
							<p><i class="fa fa-home" aria-hidden="true"></i> Address:&emsp;
							   Makkawala, Dehradun- 248009
						   </p>
					</div>
					<div class="col-md-4 fo-grid1">
							<p><i class="fa fa-phone" aria-hidden="true"></i> +91 9027990962 </p>	
					</div>
					<div class="col-md-4 fo-grid1">
						<p><a href="mailto:info@example.com"><i class="fa fa-envelope-o" aria-hidden="true"></i> shop.vegykart@gmail.com </a></p>
					</div>
					<div class="clearfix"></div>
					
					</div>
			</div>
		<div class="copy-right">
			<p> &copy; <a href="https://w3layouts.com/">2021</a> Vegykart. All Rights Reserved  </a></p>
		</div>
	</div>
</div>