<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<!-- translate file -->
<?php include("translation.php"); ?>
<!-- translate file -->
<html>
<head>
	<title><?php echo e("im") ?></title>
	<link rel="icon"
      type="image/png"
      href="images/favicon.JPG">
	<!--fonts-->
		<link href='http://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
	<!--//fonts-->
		<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
		<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<!-- for-mobile-apps -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="keywords" content="Portfolio, Tayan, Lima, Cordeiro" />
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!-- //for-mobile-apps -->
	<!-- js -->
		<script type="text/javascript" src="js/jquery.min.js"></script>
	<!-- js -->
	<!-- start-smooth-scrolling -->
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
	<!-- start-smooth-scrolling -->

</head>
<body>


<!--about-->
<div class="about text-center" id="about">
	<div class="container">
		<h3><?php echo e("about") ?></h3>
		<div class="strip text-center"><img src="images/about.png" alt=" "/></div>
		<p>
			<?php echo e("about-content") ?><br><br>
			<i>
				<?php echo e("about-music") ?>
			</i>
			<br><br>
		</p>
		<ul>
			<li><a class="fb" target="_blank" href="https://www.facebook.com/tayan.lima.16"></a></li>
			<li><a class="in" target="_blank" href="https://www.linkedin.com/in/tayan-cordeiro-b8288391"></a></li>

		</ul>
	</div>
</div>
<!--//about-->





<!--contact-->
<div class="contact" id="contact">
	<div class="container" style = "padding-bottom: 5%;">
		<div class="contact-info text-center">
			<h3><?php echo e("contact") ?></h3>
			<div class="strip text-center"><img src="images/con1.png" alt=" "/></div>
		</div>
		<div class="contact-grids">
			<div class="
			" style="text-align: center;">
				<h3><?php echo e("contact-invite") ?></h3>
				<ul style="list-style-type: none;">
					<li><a target="_blank" href="mailto:tayan12@gmail.com">tayan_12@hotmail.com</a></li>
					<li><a target="_blank" href="http://www.tayancordeiro.com.br">www.tayancordeiro.com.br</a></li>
					<li><a target="_blank" href="tel:5511960728546">+55 11 960728546</a></li>
				</ul>
				<div style="padding: 1em 0px 1em 0;">
					<a href="?lang=pt" class="right_bt" title="<?php echo e("lang-name-1") ?>"><img style="width: 2em; height: 2em;" src="images/lang_pt.png" alt=""/></a>
					<a href="?lang=en" class="right_bt" title="<?php echo e("lang-name-2") ?>"><img style="width: 2em; height: 2em;" src="images/lang_en.png" alt=""/></a>
					<a href="?lang=es" class="right_bt" title="<?php echo e("lang-name-3") ?>"><img style="width: 2em; height: 2em;" src="images/lang_es.png" alt=""/></a>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<!--//contact-->

<!-- <div class="footer-top"></div> -->
<!--resume-->
<!--
<div class="resume text-center">
	<div class="container">
		<div class="strip text-center"><a href="#"><img src="images/down.png" alt=" "/></a></div>
		 <div class="down"><a href="cv.pdf">Baixe meu CV</a></div>
	</div>
</div>
-->
<!--//resume-->

<!-- here stars scrolling icon -->
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

			//$().UItoTop({ easingType: 'easeOutQuart' });

			});
	</script>
<!-- //here ends scrolling icon -->
</body>

</html>
