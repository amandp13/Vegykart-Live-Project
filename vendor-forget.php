<?php 
session_start();
if(isset($_SESSION['customer']))
{
	header("location:cust-index.php");
}

include("connection.php");
error_reporting(0);
?>


<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta property="og:title" content="Vide" />
<meta name="keywords" content="Login Page" />
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
					starbox.next().text(' '+val);
					return val;
					} 
				})
			});
		});
		</script>
<!---//End-rate---->

</head>
<body>

<div class="header">

		<div class="container">
			
		<div class="logo">
			<h1><a href="index.php"><img src="images/vegykart.png" alt="logo" width="310" height="95">
			<span>आपकी अपनी सब्जी मंडी</span></a></h1>
			</div>
			<div class="head-t">
				<ul class="card">
					<li><a href="login.php" ><i class="fa fa-user" aria-hidden="true"></i>Login</a></li>
					<li><a href="register.php" ><i class="fa fa-arrow-right" aria-hidden="true"></i>Register</a></li>
					<li><a href="vendor-index.php" ><i class="fa fa-user" aria-hidden="true"></i>Vendor Login</a></li>
					<li><a href="about.php" ><i class="fa fa-file-text-o" aria-hidden="true"></i> About Us </a></li>
					<li><a href="shipping.php" ><i class="fa fa-ship" aria-hidden="true"></i>Shipping</a></li>
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
</div>
  <!---->
 <!--banner-->
<div class="banner-top">
	<div class="container">
		<h3 >Forget Password</h3>
		<h4><a href="index.php">Home</a><label>/</label>Forget Password</h4>
		<div class="clearfix"> </div>
	</div>
</div>
<!--login-->

<?php 
require './phpmailer/PHPMailerAutoload.php';

function send_email($email,$pass){
$mail = new PHPMailer;

$htmlversion= "<br> Password: <b>".$pass."</b>";
$textversion= 'Forgot Password';

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'rfidlibrarypccoe@gmail.com';                 // SMTP username
$mail->Password = '14785269';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom('rfidlibrarypccoe@gmail.com', 'Grocery Store');
$mail->addAddress($email);               // Name is optional

$mail->isHTML(true);

$mail->Subject = 'Forgot Password';
$mail->Body    = $htmlversion;
$mail->AltBody = $textversion;

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    /*echo 'Message has been sent';*/
}
}

?>


	<div class="login">
	
		<div class="main-agileits">
				<div class="form-w3agile">
					<h3>Forget Password</h3>
					<form method="post">
						<div class="key">
							<i class="fa fa-envelope" aria-hidden="true"></i>
							<input  type="text" value="Email" name="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
							<div class="clearfix"></div>
						</div>
						<input type="submit" name="submit" value="Send Email ">
					</form>

					<?php

						if(isset($_POST['submit']))
						{
						$email= $_POST['Email'];

						if($email != "" ){
							$query= "SELECT * from vendors where email='$email'";
							$data= mysqli_query($conn, $query);
							$total= mysqli_num_rows($data);
							while($res= mysqli_fetch_assoc($data)){
								$pass= $res['password'];
								send_email($email, $pass);
								echo "<script type='text/javascript'> alert('Password Sent at your Email ID'); </script>";
							}

						}
						else{
							echo "All Fields Required";
						}
					}

					?>


				</div>
				<div class="forg">
					<a href="login.php" class="forg-left">Login</a>
					<a href="register.php" class="forg-right">Register</a>
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

</body>
</html>