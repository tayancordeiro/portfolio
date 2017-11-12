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
<!-- banner -->
<div class="banner" id="home">
	<div class="container">
		<div class="top-header row">
			<script src="js/classie.js"></script>
			<!--top-nav---->
			<div class="top-nav">
				<a href="?lang=pt" class="right_bt"><img style="width: 2em; height: 2em;" src="images/lang_pt.png" alt=""/></a>
				<a href="?lang=en" class="right_bt"><img style="width: 2em; height: 2em;" src="images/lang_en.png" alt=""/></a>
				<a href="?lang=es" class="right_bt"><img style="width: 2em; height: 2em;" src="images/lang_es.png" alt=""/></a>
			</div>

			<!---start-click-drop-down-menu----->
			        <!----start-dropdown--->
			         <script type="text/javascript">
						var $ = jQuery.noConflict();
							$(function() {
								$('#activator').click(function(){
									$('#box').animate({'top':'0px'},900);
								});
								$('#boxclose').click(function(){
								$('#box').animate({'top':'-1000px'},900);
								});
							});
							$(document).ready(function(){
							//Hide (Collapse) the toggle containers on load
							$(".toggle_container").hide();
							//Switch the "Open" and "Close" state per click then slide up/down (depending on open/close state)
							$(".trigger").click(function(){
								$(this).toggleClass("active").next().slideToggle("slow");
									return false; //Prevent the browser jump to the link anchor
							});

						});
					</script>
			<!---//End-click-drop-down-menu----->
			<div class="clearfix"> </div>
		</div>
		<div class="banner-info">
			<div class="banner-left">
				<img src="images/1.png" alt=""/>
			</div>
			<div class="banner-right">
				<h1><?php echo e("im") ?></h1>
				<div class="border"></div>
				<h2><?php echo e("title") ?></h2>
				<!--
				<a href="cv.pdf">BAIXE MEU CV</a>
				-->
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<!--/header-banner-->

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

<!--portfolio-->
<div class="gallery-section text-center" id="portfolio">
	<div class="container">
		<h3><?php echo e("projects") ?></h3>
		<div class="strip text-center"><img src="images/port.png" alt=" "/></div>
		<p>
			<?php echo e("projects-content") ?>
		<div class="gallery-grids">
			<div class="top-gallery">
				<div class="col-md-4 gallery-grid gallery1">
					<img src="images/p1.jpg" class="img-responsive" alt="/">
						<div class="textbox">
							<h4>
								<?php echo e("projects-name-1") ?>
							</h4>
							<p>
								<?php echo e("projects-title-1") ?>
							</p>
						</div>
				</div>
				<div class="col-md-4 gallery-grid gallery1">
					<img src="images/p2.jpg" class="img-responsive" alt="/">
						<div class="textbox">
							<h4>
								<?php echo e("projects-name-2") ?>
							</h4>
							<p>
								<?php echo e("projects-title-2") ?>
							</p>
						</div>
				</div>
				<div class="col-md-4 gallery-grid gallery1">
					<img src="images/p3.jpg" class="img-responsive" alt="/">
						<div class="textbox">
							<h4>
								<?php echo e("projects-name-3") ?>
							</h4>
							<p>
								<?php echo e("projects-title-3") ?>
							</p>
						</div>
				</div>
				<div class="col-md-4 gallery-grid gallery1">
					<img src="images/p4.jpg" class="img-responsive" alt="/">
						<div class="textbox">
							<h4>
								<?php echo e("projects-name-4") ?>
							</h4>
							<p>
								<?php echo e("projects-title-4") ?>
							</p>
						</div>
				</div>
				<div class="col-md-4 gallery-grid gallery1">
					<img src="images/p5.jpg" class="img-responsive" alt="/">
						<div class="textbox">
							<h4>
								<?php echo e("projects-name-5") ?>
							</h4>
							<p>
								<?php echo e("projects-title-5") ?>
							</p>
						</div>
				</div>
				<div class="col-md-4 gallery-grid gallery1">
					<img src="images/p6.jpg" class="img-responsive" alt="/">
						<div class="textbox">
							<h4>
								<?php echo e("projects-name-6") ?>
							</h4>
							<p>
								<?php echo e("projects-title-6") ?>
							</p>
						</div>
				</div>
				<div class="clearfix"> </div>
			</div>
				<link rel="stylesheet" href="css/swipebox.css">
				<script src="js/jquery.swipebox.min.js"></script>
					<script type="text/javascript">
						jQuery(function($) {
							$(".swipebox").swipebox();
						});
					</script>
		</div>
	</div>
</div>
<!--//portfolio-->

<!--testimonials-->
<div class="testimonials" id="testimonial">
	<div class="container">
		<h3><?php echo e("testimonial") ?></h3>
		<div class="strip text-center"><img src="images/test.png" alt=" "/></div>
			<!-- responsiveslides -->
					<script src="js/responsiveslides.min.js"></script>
						<script>
							// You can also use "$(window).load(function() {"
							$(function () {
							 // Slideshow 4
							$("#slider3").responsiveSlides({
								auto: true,
								pager: false,
								nav: true,
								speed: 1000,
								namespace: "callbacks",
								before: function () {
							$('.events').append("<li>before event fired.</li>");
							},
							after: function () {
								$('.events').append("<li>after event fired.</li>");
								}
								});
								});
						</script>
			<!-- responsiveslides -->
			<div  id="top" class="callbacks_container">
					<ul class="rslides" id="slider3">
						<li>
							<div class="test-banner">
								<div class="test-left">
									<img src="images/7.png" alt=""/>
								</div>
								<div class="test-right">
									<p>
										<?php echo e("testimonial-content-1") ?>
									</p>
									<h4>
										<?php echo e("testimonial-person-1") ?>
									</h4>
								</div>
								<div class="clearfix"></div>
							</div>
						</li>
						<li>
							<div class="test-banner">
								<div class="test-left">
									<img src="images/eee.png" alt=""/>
								</div>
								<div class="test-right">
									<p>
										<?php echo e("testimonial-content-2") ?>
									</p>
									<h4>
										<?php echo e("testimonial-person-2") ?>
									</h4>
								</div>
								<div class="clearfix"></div>
							</div>
						</li>
					</ul>
			</div>

	</div>
</div>
<!--testimonials-->

<!--<div class="about-back"></div>-->

<!--my skill
<div class="my-skills text-center" id="skills">
	<div class="container">
		<h3>COMPETÊNCIAS</h3>
		<div class="strip text-center"><img src="images/skill.png" alt=" "/></div>
		<div class="skill-grids">
					<div class="col-md-2 skills-grid text-center">
						<div class="circle" id="circles-1"></div>
						<p>Gestão Ágil</p>
					</div>
					<div class="col-md-2 skills-grid text-center">
						<div class="circle" id="circles-2"></div>
						<p>Inovação Digital</p>
					</div>
					<div class="col-md-2 skills-grid text-center">
						<div class="circle" id="circles-3"></div>
						<p>Transformação Digital</p>
					</div>
					<div class="col-md-2 skills-grid text-center">
						<div class="circle" id="circles-4"></div>
						<p>JavaScript</p>
					</div>
					<div class="col-md-2 skills-grid text-center">
						<div class="circle" id="circles-5"></div>
						<p>PHP</p>
					</div>
					<div class="col-md-2 skills-grid text-center">
						<div class="circle" id="circles-6"></div>
						<p>Java</p>
					</div>
					<div class="clearfix"> </div>
				 <script type="text/javascript" src="js/circles.js"></script>
					         <script>
								var colors = [
										['#6ed4c0', '#ffffff'],
										['#6ed4c0', '#ffffff'],
										['#6ed4c0', '#ffffff'],
										['#6ed4c0', '#ffffff'],
										['#6ed4c0', '#ffffff'],
										['#6ed4c0', '#ffffff']
									];
								var percentage = [
										16,
										99,
										98,
										96,
										96,
										95,
										95
									];

								for (var i = 1; i < 7; i++) {
									var child = document.getElementById('circles-' + i);

									Circles.create({
										id:         child.id,
										percentage: percentage[i],
										radius:     50,
										width:      5,
										number:   	' ',
										text:       ' ',
										colors:     colors[i - 1]
									});
								}

				</script>
		</div>
	</div>
</div>
<!--//my skill
<div class="my-skill-back"></div>
-->

<!--education-->
<div class="education text-center">
	<div class="container">
		<div class="edu-info">
			<h3><?php echo e("academic") ?></h3>
		</div>
		<div class="strip text-center"><img src="images/edu.png" alt=" "/></div>
		<div class="edu-grids">
			<div class="col-md-4 edu-grid">
				<p><?php echo e("academic-year-1") ?></p><span><?php echo e("academic-type-1") ?></span>
				<img src="images/arrow.png" alt=""/>
				<div class="edu-border">
					<div class="edu-grid-master">
						<h3><?php echo e("academic-title-1") ?></h3>
						<h4><?php echo e("academic-place-1") ?></h4>
					</div>
					<div class="edu-grid-info">
						<h5>
							<?php echo e("academic-content-1") ?>
						</h5>
					</div>
				</div>
			</div>
			<div class="col-md-4 edu-grid">
				<p><?php echo e("academic-year-2") ?></p><span><?php echo e("academic-type-2") ?></span>
				<img src="images/arrow.png" alt=""/>
				<div class="edu-border">
					<div class="edu-grid-master">
						<h3><?php echo e("academic-title-2") ?></h3>
						<h4><?php echo e("academic-place-2") ?></h4>
					</div>
					<div class="edu-grid-info">
						<h5>
							<?php echo e("academic-content-2") ?>
						</h5>
					</div>
				</div>
			</div>
			<div class="col-md-4 edu-grid">
				<p><?php echo e("academic-year-3") ?></p><span><?php echo e("academic-type-3") ?></span>
				<img src="images/arrow.png" alt=""/>
				<div class="edu-border">
					<div class="edu-grid-master">
						<h3><?php echo e("academic-title-3") ?></h3>
						<h4><?php echo e("academic-place-3") ?></h4>
					</div>
					<div class="edu-grid-info">
						<h5>
							<?php echo e("academic-content-3") ?>
						</h5>
					</div>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>

</div>
<!--//education-->
<div class="strip-border"><p></p></div>

<!--work-->
<div class="work-experience text-center">
	<div class="container">
		<div class="work-info">
			<h3><?php echo e("professional") ?></h3>
		</div>
		<div class="strip text-center"><img src="images/work.png" alt=" "/></div>
		<div class="work-grids">
			<div class="col-md-4 w-grid">
				<div class="work-grid">
					<div class="work-grid-info">
						<h4><?php echo e("professional-company-1") ?></h4>
						<h5><?php echo e("professional-title-1") ?></h5>
						<p><?php echo e("professional-content-1") ?></p>
					</div>
				</div>
			</div>
			<div class="col-md-4 w-grid">
				<div class="work-grid">
					<div class="work-grid-info">
						<h4><?php echo e("professional-company-2") ?></h4>
						<h5><?php echo e("professional-title-2") ?></h5>
						<p><?php echo e("professional-content-2") ?></p>
					</div>
				</div>
			</div>
			<div class="col-md-4 w-grid">
				<div class="work-grid">
					<div class="work-grid-info">
						<h4><?php echo e("professional-company-3") ?></h4>
						<h5><?php echo e("professional-title-3") ?></h5>
						<p><?php echo e("professional-content-3") ?></p>
					</div>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="work-grids">
			<div class="col-md-4 w-grid">
				<div class="work-grid">
					<div class="work-grid-info">
						<h4><?php echo e("professional-company-4") ?></h4>
						<h5><?php echo e("professional-title-4") ?></h5>
						<p><?php echo e("professional-content-4") ?></p>
					</div>
				</div>
			</div>
			<div class="col-md-4 w-grid">
				<div class="work-grid">
					<div class="work-grid-info">
						<h4><?php echo e("professional-company-5") ?></h4>
						<h5><?php echo e("professional-title-5") ?></h5>
						<p><?php echo e("professional-content-5") ?></p>
					</div>
				</div>
			</div>
			<div class="col-md-4 w-grid">
				<div class="work-grid">
					<div class="work-grid-info">
						<h4><?php echo e("professional-company-6") ?></h4>
						<h5><?php echo e("professional-title-6") ?></h5>
						<p><?php echo e("professional-content-6") ?></p>
					</div>
				</div>
			</div>

			<div class="clearfix"></div>
		</div>
	</div>
</div>
<!--//work-->
<div class="services-back"></div>

<!--services-->
<div class="services text-center" id="services">
	<div class="container">
		<div class="ser-info">
			<h3><?php echo e("lang") ?></h3>
		</div>
		<div class="strip text-center"><img src="images/con1.png" alt=" "/></div>
		<div class="ser-grids">
			<div class="col-md-4 ser-grid">
				<div class="ser-imagea"></div>
				<h3><?php echo e("lang-name-1") ?></h3>
				<p><?php echo e("lang-content-1") ?></p>
			</div>
			<div class="col-md-4 ser-grid">
				<div class="ser-imageb"></div>
				<h3><?php echo e("lang-name-2") ?></h3>
				<p>
					<?php echo e("lang-content-2") ?>
				</p>
			</div>
			<div class="col-md-4 ser-grid">
				<div class="ser-imagec"></div>
				<h3><?php echo e("lang-name-3") ?></h3>
				<p>
					<?php echo e("lang-content-3") ?>
				</p>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<!--//services-->

<!--blog-->
<div class="blog" id="blog">
	<div class="container">
		<div class="blog-info text-center">
			<h3><?php echo e("personal") ?></h3>
			<div class="strip text-center"><img src="images/about.png" alt=" "/></div>
		</div>
		<div class="blog-grids">
			<div class="col-md-4 blog-text-info">
				<div class="blog-grid">
					<img src="images/a.jpg" alt=""/>
					<div class="blog-text">
						<a><?php echo e("personal-title-1") ?></a>
						<div class="stripa"></div>
						<p>
							<?php echo e("personal-content-1") ?>
						</p>
					</div>
				</div>
			</div>
			<div class="col-md-4 blog-text-info">
				<div class="blog-grid">
					<img src="images/b.jpg" alt=""/>
					<div class="blog-text">
						<a><?php echo e("personal-title-2") ?></a>
						<div class="stripa"></div>
						<p>
							<?php echo e("personal-content-2") ?>
						</p>
					</div>
				</div>
			</div>
			<div class="col-md-4 blog-text-info">
				<div class="blog-grid">
					<img src="images/c.jpg" alt=""/>
					<div class="blog-text">
						<a><?php echo e("personal-title-3") ?></a>
						<div class="stripa"></div>
						<p>
							<?php echo e("personal-content-3") ?>
						</p>
					</div>
				</div>
			</div>
			<div class="col-md-4 blog-text-info">
				<div class="blog-grid">
					<img src="images/d.jpg" alt=""/>
					<div class="blog-text">
						<a><?php echo e("personal-title-4") ?></a>
						<div class="stripa"></div>
						<p>
							<?php echo e("personal-content-4") ?>
						</p>
					</div>
				</div>
			</div>
			<div class="col-md-4 blog-text-info">
				<div class="blog-grid">
					<img src="images/e.jpg" alt=""/>
					<div class="blog-text">
						<a><?php echo e("personal-title-5") ?></a>
						<div class="stripa"></div>
						<p>
							<?php echo e("personal-content-5") ?>
						</p>
					</div>
				</div>
			</div>
			<div class="col-md-4 blog-text-info">
				<div class="blog-grid">
					<img src="images/f.jpg" alt=""/>
					<div class="blog-text">
						<a><?php echo e("personal-title-6") ?></a>
						<div class="stripa"></div>
						<p>
							<?php echo e("personal-content-6") ?>
						</p>
					</div>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<!--//blog-->

<!--contact-->
<div class="contact" id="contact">
	<div class="container">
		<div class="contact-info text-center">
			<h3><?php echo e("contact") ?></h3>
			<div class="strip text-center"><img src="images/con1.png" alt=" "/></div>
		</div>
		<div class="contact-grids">
			<div class="
			col-md-4 col-md-offset-4 contact-left" style="text-align: center;">
				<h3><?php echo e("contact-invite") ?></h3>
				<ul>
					<li><a target="_blank" href="mailto:tayan12@gmail.com">tayan_12@hotmail.com</a></li>
					<li><a target="_blank" href="http://www.tayancordeiro.com.br">www.tayancordeiro.com.br</a></li>
					<li><a target="_blank" href="tel:5511960728546">+55 11 960728546</a></li>
				</ul>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<!--//contact-->

<div class="footer-top"></div>
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

			$().UItoTop({ easingType: 'easeOutQuart' });

			});
	</script>
<!-- //here ends scrolling icon -->
</body>

</html>
