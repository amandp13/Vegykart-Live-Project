<?php 
session_start();
if (isset($_SESSION['customer'])) {
  header("location:cust-index.php");
}

include("connection.php");
error_reporting(0);

?>
<!DOCTYPE html>
<html>
<head>
<title>Vegykart - आपकी अपनी सब्जी मंडी</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta property="og:title" content="Vide" />
<meta name="keywords" content="Grocery Store" />

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- js -->
   <script src="js/jquery-1.11.1.min.js"></script>
<!-- //js -->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
  <script type="text/javascript">
  jQuery(document).ready(function($) {
    $(".scroll").click(function(event){   
      event.preventDefault();
      $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
    });
  });
</script>
<!-- start-smoth-scrolling -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Noto+Sans:400,700' rel='stylesheet' type='text/css'>

<!--- start-rate---->
<script src="js/jstarbox.js"></script>
<link rel="stylesheet" href="css/jstarbox.css" type="text/css" media="screen" charset="utf-8" />
		<script type="text/javascript">
			jQuery(function() {
			jQuery('.starbox').each(function() {
				var starbox = jQuery(this);
					starbox.starbox({
					average: starbox.attr('data-start-value'),
					changeable: starbox.hasClass('unchangeable') ? false : starbox.hasClass('clickonce') ? 'once' : true,
					ghosting: starbox.hasClass('ghosting'),
					autoUpdateAverage: starbox.hasClass('autoupdate'),
					buttons: starbox.hasClass('smooth') ? false : starbox.attr('data-button-count') || 5,
					stars: starbox.attr('data-star-count') || 5
					}).bind('starbox-value-changed', function(event, value) {
					if(starbox.hasClass('random')) {
					var val = Math.random();
					starbox.kitchen().text(' '+val);
					return val;
					} 
				})
			});
		});
		</script>
<!---//End-rate---->

</head>
<body>
<!-- <a href="offer.php"><img src="images/download.png" class="img-head" alt=""></a> -->
<div class="header">
		<div class="container">
			<div class="logo">
			<h1><a href="index.php"><img src="images/vegykart.png" alt="logo" width="310" height="95">
			<span>आपकी अपनी सब्जी मंडी</span></a></h1>
			</div>
			<div class="head-t">
				<ul class="card">
					<li><a href="login.php" ><i class="fa fa-user" aria-hidden="true"></i>Login</a></li>
					<li><a href="register.php" ><i class="fa fa-sign-in" aria-hidden="true"></i>Register</a></li>
					<li><a href="vendor-index.php" ><i class="fa fa-user" aria-hidden="true"></i>Vendor Login</a></li>
					<li><a href="about.php" ><i class="fa fa-heartbeat" aria-hidden="true"></i>About Us</a></li>
					<li><a href="shipping.php" ><i class="fa fa-truck" aria-hidden="true"></i>Shipping</a></li>
				</ul>	
			</div>
			
			<div class="header-ri">
				<ul class="social-top">
					<li><a href="https://www.instagram.com/vegykart.wale/" class="icon twitter"><i class="fa fa-facebook" aria-hidden="true"></i><span></span></a></li>
					<li><a href="https://twitter.com/vegykart" class="icon twitter"><i class="fa fa-twitter" aria-hidden="true"></i><span></span></a></li>
					<li><a href="https://www.instagram.com/vegykart.wale/" class="icon twitter"><i class="fa fa-instagram" aria-hidden="true"></i><span></span></a></li>
					<li><a href="https://api.whatsapp.com/send?phone=919431609503&amp;text=Hi there!" class="icon twitter"><i class="fa fa-whatsapp" aria-hidden="true"></i><span></span></a></li>
					<li><a href="mailto:shop.vegykart@gmail.com" class="icon twitter"><i class="fa fa-google-plus" aria-hidden="true"></i><span></span></a></li>
				</ul>	
			</div>
				<?php include_once("top.php"); ?>
				</div>			
</div>
  <!---->
<div data-vide-bg="video/video">
    <div class="container">
		<div class="banner-info">
			<h3> One of A Kind Marketplace </h3>	
			<div class="search-form">
				<form action="index-search.php" method="post">
					<input type="text" placeholder="Search here for products, categories & brands" name="search">
					<input type="submit" value=" ">
				</form>
			</div>		
		</div>	
    </div>
</div>

    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.1.min.js"><\/script>')</script>
    <script src="js/jquery.vide.min.js"></script>

<!--content-->
<div class="content-top ">
	<div class="container ">
		<div class="spec ">
			<h3>Special Offers</h3>
			<div class="ser-t">
				<b></b>
				<span><i></i></span>
				<b class="line"></b>
			</div>
		</div>
			<div class="tab-head ">
				<nav class="nav-sidebar">
					<ul class="nav tabs ">
					  <li class="active"><a href="#tab1" data-toggle="tab">Staples</a></li> 
					  <li class=""><a href="#tab3" data-toggle="tab">Fruits & Vegetables</a></li>  
					  <li class=""><a href="#tab2" data-toggle="tab">Groceries</a></li>
					  <!-- <li class=""><a href="#tab4" data-toggle="tab">Breakfast & Cereal</a></li> -->
					</ul>
				</nav>

				<div class=" tab-content tab-content-t ">
					<div class="tab-pane active text-style" id="tab1">
						<div class=" con-w3l">
						<?php 
								/*$q = "SELECT v.email from vendors v JOIN  customers c ON v.pincode= c.pincode WHERE c.email='$cust'";
								$data= mysqli_query($conn, $q);
								$total= mysqli_num_rows($data);
								while($res= mysqli_fetch_assoc($data)){
								if($total > 0){
									$vendor= $res['email'];
								}*/

								$q2= "SELECT * FROM products WHERE product_cat=17 LIMIT 4";
								$data2= mysqli_query($conn, $q2);
								$total2= mysqli_num_rows($data2);
								
								while($res2= mysqli_fetch_assoc($data2)){
						?>
							<div class="col-md-3 m-wthree">
								<div class="col-m">								
									<a href="#" data-toggle="modal" data-target="#myModal1" class="offer-img" id="<?php echo $res2['product_id']; ?>">
										<?php echo "<img src='images/".$res2['product_image']."'>";?> 
										<div class="offer"><p><span>Offer</span></p></div>
									</a>
									<div class="mid-1">
										<div class="women">
											<h6>
												<?php echo $res2['product_title'];?>
											</h6>							
										</div>
										<div class="mid-2">
											<p ><label> Rs <?php echo $res2['product_price'] +5;?></label><em class="item_price"> Rs <?php echo $res2['product_price'];?></em></p>
											  <div class="block">
												<div class="starbox small ghosting"> </div>
											</div>
											<div class="clearfix"></div>
										</div>
										<?php 
										$s= "images/";
										$ext= $res2['product_image'];
										$image= $s.$ext;
										?>
										<div class="add">
										   <button class="btn btn-danger my-cart-btn my-cart-b " data-id="<?php echo $res2['product_id']; ?>" data-name= "<?php echo $res2['product_title'];?>"data-summary="summary 1" data-price="<?php echo $res2['product_price'];?>" data-quantity="1" data-image="<?php echo $image; ?>">Add to Cart</button>
										</div>
										
									</div>
								</div>
							</div>
							<?php
									} 
								
								?>
							<div class="clearfix"></div>
						 </div>
					</div>
					<div class="tab-pane  text-style" id="tab2">
						<div class=" con-w3l">
						<?php 
								/*$q = "SELECT v.email from vendors v JOIN  customers c ON v.pincode= c.pincode WHERE c.email='$cust'";
								$data= mysqli_query($conn, $q);
								$total= mysqli_num_rows($data);
								while($res= mysqli_fetch_assoc($data)){
								if($total > 0){
									$vendor= $res['email'];
								}*/

								/*echo $vendor;*/
								$q2= "SELECT * FROM products WHERE product_cat=20 LIMIT 4";
								$data2= mysqli_query($conn, $q2);
								$total2= mysqli_num_rows($data2);
								
								while($res2= mysqli_fetch_assoc($data2)){
						?>
							<div class="col-md-3 m-wthree">
								<div class="col-m">								
									<a href="#" data-toggle="modal" data-target="#myModal1" class="offer-img" id="<?php echo $res2['product_id']; ?>">
										<?php echo "<img src='images/".$res2['product_image']."'>";?> 
										<div class="offer"><p><span>Offer</span></p></div>
									</a>
									<div class="mid-1">
										<div class="women">
											<h6>
												<?php echo $res2['product_title'];?>
											</h6>							
										</div>
										<div class="mid-2">
											<p ><label> Rs <?php echo $res2['product_price'] +20;?></label><em class="item_price"> Rs <?php echo $res2['product_price'];?></em></p>
											  <div class="block">
												<div class="starbox small ghosting"> </div>
											</div>
											<div class="clearfix"></div>
										</div>
										<?php 
										$s= "images/";
										$ext= $res2['product_image'];
										$image= $s.$ext;
										?>
										<div class="add">
										   <button class="btn btn-danger my-cart-btn my-cart-b " data-id="<?php echo $res2['product_id']; ?>" data-name= "<?php echo $res2['product_title'];?>"data-summary="summary 1" data-price="<?php echo $res2['product_price'];?>" data-quantity="1" data-image="<?php echo $image; ?>">Add to Cart</button>
										</div>
										
									</div>
								</div>
							</div>
							<?php 
								}
							
								?>
							<div class="clearfix"></div>
						 </div>	  
					</div>
					<div class="tab-pane  text-style" id="tab3">
						<div class=" con-w3l">
						<?php 
								/*$q = "SELECT v.email from vendors v JOIN  customers c ON v.pincode= c.pincode WHERE c.email='$cust'";
								$data= mysqli_query($conn, $q);
								$total= mysqli_num_rows($data);
								while($res= mysqli_fetch_assoc($data)){
								if($total > 0){
									$vendor= $res['email'];
								}*/

								/*echo $vendor;*/
								$q2= "SELECT * FROM products WHERE product_cat=16 LIMIT 4";
								$data2= mysqli_query($conn, $q2);
								$total2= mysqli_num_rows($data2);
								
								while($res2= mysqli_fetch_assoc($data2)){
						?>
							<div class="col-md-3 m-wthree">
								<div class="col-m">								
									<a href="#" data-toggle="modal" data-target="#myModal1" class="offer-img" id="<?php echo $res2['product_id']; ?>">
										<?php echo "<img src='images/".$res2['product_image']."'>";?> 
										<div class="offer"><p><span>Offer</span></p></div>
									</a>
									<div class="mid-1">
										<div class="women">
											<h6>
												<?php echo $res2['product_title'];?>
											</h6>							
										</div>
										<div class="mid-2">
											<p ><label> Rs <?php echo $res2['product_price'] +20;?></label><em class="item_price"> Rs <?php echo $res2['product_price'];?></em></p>
											  <div class="block">
												<div class="starbox small ghosting"> </div>
											</div>
											<div class="clearfix"></div>
										</div>
										<?php 
										$s= "images/";
										$ext= $res2['product_image'];
										$image= $s.$ext;
										?>
										<div class="add">
										   <button class="btn btn-danger my-cart-btn my-cart-b " data-id="<?php echo $res2['product_id']; ?>" data-name= "<?php echo $res2['product_title'];?>"data-summary="summary 1" data-price="<?php echo $res2['product_price'];?>" data-quantity="1" data-image="<?php echo $image; ?>">Add to Cart</button>
										</div>
										
									</div>
								</div>
							</div>
							<?php 
								}
							
								?>
							<div class="clearfix"></div>
						 </div>		  
					</div>
					<div class="tab-pane text-style" id="tab4">
							<div class=" con-w3l">
						<?php 
								/*$q = "SELECT v.email from vendors v JOIN  customers c ON v.pincode= c.pincode WHERE c.email='$cust'";
								$data= mysqli_query($conn, $q);
								$total= mysqli_num_rows($data);
								while($res= mysqli_fetch_assoc($data)){
								if($total > 0){
									$vendor= $res['email'];
								}*/

								/*echo $vendor;*/
								$q2= "SELECT * FROM products WHERE product_cat=19 LIMIT 4";
								$data2= mysqli_query($conn, $q2);
								$total2= mysqli_num_rows($data2);
								
								while($res2= mysqli_fetch_assoc($data2)){
						?>
							<div class="col-md-3 m-wthree">
								<div class="col-m">								
									<a href="#" data-toggle="modal" data-target="#myModal1" class="offer-img" id="<?php echo $res2['product_id']; ?>">
										<?php echo "<img src='images/".$res2['product_image']."'>";?> 
										<div class="offer"><p><span>Offer</span></p></div>
									</a>
									<div class="mid-1">
										<div class="women">
											<h6>
												<?php echo $res2['product_title'];?>
											</h6>							
										</div>
										<div class="mid-2">
											<p ><label> Rs <?php echo $res2['product_price'] +20;?></label><em class="item_price"> Rs <?php echo $res2['product_price'];?></em></p>
											  <div class="block">
												<div class="starbox small ghosting"> </div>
											</div>
											<div class="clearfix"></div>
										</div>
										<?php 
										$s= "images/";
										$ext= $res2['product_image'];
										$image= $s.$ext;
										?>
										<div class="add">
										   <button class="btn btn-danger my-cart-btn my-cart-b " data-id="<?php echo $res2['product_id']; ?>" data-name= "<?php echo $res2['product_title'];?>"data-summary="summary 1" data-price="<?php echo $res2['product_price'];?>" data-quantity="1" data-image="<?php echo $image; ?>">Add to Cart</button>
										</div>
										
									</div>
								</div>
							</div>
							<?php 
								}
								?>
							<div class="clearfix"></div>
						 </div>	
					</div>
				</div>
			</div>
		
	</div>
	</div>
	</div>

<!--content-->
<div class="content-mid">
	<div class="container">
		
		<div class="col-md-4 m-w3ls">
			<div class="col-md1 ">
				<a href="kitchen.php">
					<img src="images/fruits.jpg" style="opacity:0.7;" class="img-responsive img" alt="">
					<div class="big-sa">
						<h3 style="color:navy;">Fruits</h3>
						<p style="color:black;">Choose the Best Quality Fruits</p>
					</div>
				</a>
			</div>
		</div>
		<div class="col-md-4 m-w3ls1">
			<div class="col-md ">
				<a href="hold.php">
					<img src="images/vegytables.jpg" style="opacity:0.8;" class="img-responsive img" alt="">
					<div class="big-sale">
						<div class="big-sale1">
							<h3 style="color:navy;">Vegetable</h3>
							<p style="color:black;">Choose the Best Quality Vegytables.</p>
						</div>
					</div>
				</a>
			</div>
		</div>
		<div class="col-md-4 m-w3ls">
			<div class="col-md2 ">
				<a href="kitchen.php">
					<img src="images/grocery.jpg" class="img-responsive img1" alt="">
					<div class="big-sale2">		
					</div>
				</a>
			</div>
			<div class="col-md3 ">
				<a href="kitchen.php">
					<img src="images/co3.jpg" class="img-responsive img1" alt="">
					<div class="big-sale3">
					<h3>Grocer<span>ies</span></h3>
						<p> Coming Soon </p>
					</div>
				</a>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<!--content-->
  <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <!-- <li data-target="#myCarousel" data-slide-to="3"></li>
        <li data-target="#myCarousel" data-slide-to="4"></li> -->
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
         <a href="kitchen.php"> <img class="first-slide" src="images/aaaaa.jpg" alt="First slide"></a>
       
        </div>
        <div class="item">
         <a href="care.php"> <img class="second-slide " src="images/aaa.jpg" alt="Second slide"></a>
         
        </div>
        <div class="item">
          <a href="hold.php"><img class="third-slide " src="images/aaaa.jpg" alt="Third slide"></a>
          
        </div>
<!-- 
        <div class="item">
          <a href="bake.php"><img class="fourth-slide " src="images/ba3.jpg" alt="Third slide" style="height: 450px; width: 1600px;"></a>
          
        </div>

        <div class="item">
          <a href="snacks.php"><img class="fifth-slide " src="images/ba4.png" alt="Third slide"  style="height: 450px; width: 1600px;"></a>
          
        </div> -->

      </div>
    
    </div><!-- /.carousel -->

<!--content-->
	<div class="product">
		<div class="container">
			<div class="spec ">
				<h3>Thank You! </h3>
				<div class="ser-t">
					<b></b>
					<span><i></i></span>
					<b class="line"></b>
				</div>
			</div>
				<div class=" con-w3l">
				
							<?php 
								/*$q = "SELECT v.email from vendors v JOIN  customers c ON v.pincode= c.pincode WHERE c.email='$cust'";
								$data= mysqli_query($conn, $q);
								$total= mysqli_num_rows($data);
								while($res= mysqli_fetch_assoc($data)){
								if($total > 0){
									$vendor= $res['email'];
								}*/

								/*echo $vendor;*/
								$q2= "SELECT * FROM products LIMIT 16, 24";
								$data2= mysqli_query($conn, $q2);
								$total2= mysqli_num_rows($data2);
								
								while($res2= mysqli_fetch_assoc($data2)){
						// ?>
						<!-- // 	<div class="col-md-3 pro-1">
						// 		<div class="col-m">								
						// 			<a href="#" data-toggle="modal" data-target="#myModal1" class="offer-img" id="<?php echo $res2['product_id']; ?>">
						// 				<?php echo "<img src='images/".$res2['product_image']."'>";?> 
						// 			</a>
						// 			<div class="mid-1">
						// 				<div class="women">
						// 					<h6>
						// 						<?php echo $res2['product_title'];?>
						// 					</h6>							
						// 				</div>
						// 				<div class="mid-2">
						// 					<p ><label> Rs <?php echo $res2['product_price'] +10;?></label><em class="item_price"> Rs <?php echo $res2['product_price'];?></em></p>
						// 					  <div class="block">
						// 						<div class="starbox small ghosting"> </div>
						// 					</div>
						// 					<div class="clearfix"></div>
						// 				</div>
						// 				<?php 
						// 				$s= "images/";
						// 				$ext= $res2['product_image'];
						// 				$image= $s.$ext;
						// 				?>
						// 				<div class="add">
						// 				   <button class="btn btn-danger my-cart-btn my-cart-b " data-id="<?php echo $res2['product_id']; ?>" data-name= "<?php echo $res2['product_title'];?>"data-summary="summary 1" data-price="<?php echo $res2['product_price'];?>" data-quantity="1" data-image="<?php echo $image; ?>">Add to Cart</button>
						// 				</div>
										
						// 			</div>
						// 		</div>
						// 	</div> -->
							<?php 
								}
								?>
								
								<div class="jumbotron text-center">
  <p class="lead"><strong>✨ Yes, </strong> We've worked super hard to make you happy and healthier.✨</p>
  <blockquote>😊 &rdquo; People who love to eat are always the best people.&rdquo;😊</blockquote>
    <cite>-Anonymous</cite>
  <hr>
  <p>
    Have Any Feedback/Suggestions?
  </p>
  <p class="lead">
    <a class="btn btn-primary btn-sm" href="https://forms.gle/DazXrLDZZDTHouR46" role="button">Feedback</a>
  </p>
</div>
							<!-- <div class="col-md-3 pro-1">
								<div class="col-m">
									<a href="#" data-toggle="modal" data-target="#myModal18" class="offer-img">
										<img src="images/of17.png" class="img-responsive" alt="">
									</a>
									<div class="mid-1">
										<div class="women">
											<h6><a href="single.php">  Lady Finger</a>(250 g)</h6>							
										</div>
										<div class="mid-2">
											<p ><label> Rs 5.00</label><em class="item_price"> Rs 4.50</em></p>
											  <div class="block">
												<div class="starbox small ghosting"> </div>
											</div>
											<div class="clearfix"></div>
										</div>
											<div class="add">
										   <button class="btn btn-danger my-cart-btn my-cart-b" data-id="1" data-name="product 1" data-summary="summary 1" data-price="4.50" data-quantity="1" data-image="images/of17.png">Add to Cart</button>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-3 pro-1">
								<div class="col-m">
									<a href="#" data-toggle="modal" data-target="#myModal19" class="offer-img">
										<img src="images/of18.png" class="img-responsive" alt="">
									</a>
									<div class="mid-1">
										<div class="women">
											<h6><a href="single.php"> Ribbon</a>(1 pc)</h6>							
										</div>
										<div class="mid-2">
											<p ><label> Rs 4.00</label><em class="item_price"> Rs 3.50</em></p>
											  <div class="block">
												<div class="starbox small ghosting"> </div>
											</div>
											<div class="clearfix"></div>
										</div>
											<div class="add">
										   <button class="btn btn-danger my-cart-btn my-cart-b" data-id="1" data-name="product 1" data-summary="summary 1" data-price="3.50" data-quantity="1" data-image="images/of18.png">Add to Cart</button>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-3 pro-1">
								<div class="col-m">
									<a href="#" data-toggle="modal" data-target="#myModal20" class="offer-img">
										<img src="images/of19.png" class="img-responsive" alt="">
									</a>
									<div class="mid-1">
										<div class="women">
											<h6><a href="single.php">Grapes</a>(500 g)</h6>							
										</div>
										<div class="mid-2">
											<p ><label> Rs 1.00</label><em class="item_price"> Rs 0.80</em></p>
											  <div class="block">
												<div class="starbox small ghosting"> </div>
											</div>
											<div class="clearfix"></div>
										</div>
											<div class="add">
										   <button class="btn btn-danger my-cart-btn my-cart-b" data-id="1" data-name="product 1" data-summary="summary 1" data-price="0.80" data-quantity="1" data-image="images/of19.png">Add to Cart</button>
										</div>
									</div>
								</div>
							</div>
							
							<div class="col-md-3 pro-1">
								<div class="col-m">
								<a href="#" data-toggle="modal" data-target="#myModal21" class="offer-img">
										<img src="images/of20.png" class="img-responsive" alt="">
									</a>
									<div class="mid-1">
										<div class="women">
											<h6><a href="single.php">Clips</a>(1 pack)</h6>							
										</div>
										<div class="mid-2">
											<p ><label> Rs 7.00</label><em class="item_price"> Rs 6.00</em></p>
											  <div class="block">
												<div class="starbox small ghosting"> </div>
											</div>
											<div class="clearfix"></div>
										</div>
											<div class="add">
										   <button class="btn btn-danger my-cart-btn my-cart-b" data-id="1" data-name="product 1" data-summary="summary 1" data-price="6.00" data-quantity="1" data-image="images/of20.png">Add to Cart</button>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-3 pro-1">
								<div class="col-m">
									<a href="#" data-toggle="modal" data-target="#myModal22" class="offer-img">
										<img src="images/of21.png" class="img-responsive" alt="">
									</a>
									<div class="mid-1">
										<div class="women">
											<h6><a href="single.php">Conditioner</a>(250 g)</h6>							
										</div>
										<div class="mid-2">
											<p ><label> Rs 5.00</label><em class="item_price"> Rs 4.50</em></p>
											  <div class="block">
												<div class="starbox small ghosting"> </div>
											</div>
											<div class="clearfix"></div>
										</div>
											<div class="add">
										   <button class="btn btn-danger my-cart-btn my-cart-b" data-id="1" data-name="product 1" data-summary="summary 1" data-price="4.50" data-quantity="1" data-image="images/of21.png">Add to Cart</button>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-3 pro-1">
								<div class="col-m">
									<a href="#" data-toggle="modal" data-target="#myModal23" class="offer-img">
										<img src="images/of22.png" class="img-responsive" alt="">
									</a>
									<div class="mid-1">
										<div class="women">
											<h6><a href="single.php">Cleaner</a>(250 kg)</h6>							
										</div>
										<div class="mid-2">
											<p ><label> Rs 4.00</label><em class="item_price"> Rs 3.50</em></p>
											  <div class="block">
												<div class="starbox small ghosting"> </div>
											</div>
											<div class="clearfix"></div>
										</div>
											<div class="add">
										   <button class="btn btn-danger my-cart-btn my-cart-b" data-id="1" data-name="product 1" data-summary="summary 1" data-price="3.50" data-quantity="1" data-image="images/of22.png">Add to Cart</button>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-3 pro-1">
								<div class="col-m">
									<a href="#" data-toggle="modal" data-target="#myModal24" class="offer-img">
										<img src="images/of23.png" class="img-responsive" alt="">
									</a>
									<div class="mid-1">
										<div class="women">
											<h6><a href="single.php">Gel</a>(150 g)</h6>							
										</div>
										<div class="mid-2">
											<p ><label> Rs 1.00</label><em class="item_price"> Rs 0.80</em></p>
											  <div class="block">
												<div class="starbox small ghosting"> </div>
											</div>
											<div class="clearfix"></div>
										</div>
											<div class="add">
										   <button class="btn btn-danger my-cart-btn my-cart-b" data-id="1" data-name="product 1" data-summary="summary 1" data-price="0.80" data-quantity="1" data-image="images/of23.png">Add to Cart</button>
										</div>
									</div>
								</div>
							</div>  -->
							<div class="clearfix"></div>
						 </div>
		</div>
	</div>

<!--footer-->
<?php include_once("footer.php"); ?>
<!-- //footer-->

<!-- smooth scrolling -->
	<script type="text/javascript">
		$(document).ready(function() {
		/*
			var defaults = {
			containerID: 'toTop', // fading element id
			containerHoverID: 'toTopHover', // fading element hover id
			scrollSpeed: 1200,
			easingType: 'linear' 
			};
		*/								
		$().UItoTop({ easingType: 'easeOutQuart' });
		});
	</script>
	<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- //smooth scrolling -->
<!-- for bootstrap working -->
		<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
<script type='text/javascript' src="js/jquery.mycart.js"></script>
  <script type="text/javascript">
  $(function () {

    var goToCartIcon = function($addTocartBtn){
      var $cartIcon = $(".my-cart-icon");
      var $image = $('<img width="30px" height="30px" src="' + $addTocartBtn.data("image") + '"/>').css({"position": "fixed", "z-index": "999"});
      $addTocartBtn.prepend($image);
      var position = $cartIcon.position();
      $image.animate({
        top: position.top,
        left: position.left
      }, 500 , "linear", function() {
        $image.remove();
      });
    }

    $('.my-cart-btn').myCart({
      classCartIcon: 'my-cart-icon',
      classCartBadge: 'my-cart-badge',
      affixCartIcon: true,
      checkoutCart: function(products) {
        $.each(products, function(){
          console.log(this);
        });
      },
      clickOnAddToCart: function($addTocart){
        goToCartIcon($addTocart);
      },
      getDiscountPrice: function(products) {
        var total = 0;
        $.each(products, function(){
          total += this.quantity * this.price;
        });
        return total * 1;
      }
    });

  });
  </script>
  
			<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content modal-info">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
						</div>
						<div class="modal-body modal-spa" id="item_detail">
								
							</div>
						</div>
					</div>
				</div>

		<script>  
			 $(document).ready(function(){  
			      $('.offer-img').click(function(){ 
		/*	      console.log("what"); */
		           var id = $(this).attr("id");
		           console.log(id);   
		           $.ajax({  
		                url:"select.php",  
		                method:"post",  
		                data:{id:id},  
		                success:function(data){ 
		                     $('#item_detail').html(data);  
		                     $('#myModal1').modal("show");  
	        				}  
				        });  
				    });  
			    });  
 		</script>
	
</body>
</html>