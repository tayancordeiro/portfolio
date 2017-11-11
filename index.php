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
									<p>Tive a oportunidade trabalhar com o Tayan no time de inovação digital na Natura em projetos web e mobile. Sobre seu perfil: ele possui habilidades para analisar, desenvolver, testar e gerenciar projetos de software com qualidade. É um profissional focado em alcançar os objetivos da empresa, entusiasta, praticante de metodologias ágeis e sempre atento as boas práticas de mercado.</p>
									<h4>Renan Bonnete - Parceiro de trabalho na <b>Natura</b></h4>
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
			<h3>VIDA ACADÊMICA</h3>
		</div>
		<div class="strip text-center"><img src="images/edu.png" alt=" "/></div>
		<div class="edu-grids">
			<div class="col-md-4 edu-grid">
				<p>2015</p><span>Intercâmbio</span>
				<img src="images/arrow.png" alt=""/>
				<div class="edu-border">
					<div class="edu-grid-master">
						<h3>INGLÊS AVANÇADO</h3>
						<h4>Delfin School</h4>
					</div>
					<div class="edu-grid-info">
						<h5>Intercâmbio internacional em Dublin - Irlanda. Curso intensivo de inglês avançado.</h5>
					</div>
				</div>
			</div>
			<div class="col-md-4 edu-grid">
				<p>2014</p><span>Graduação</span>
				<img src="images/arrow.png" alt=""/>
				<div class="edu-border">
					<div class="edu-grid-master">
						<h3>ENGENHARIA DA COMPUTAÇÃO</h3>
						<h4>Unifieo</h4>
					</div>
					<div class="edu-grid-info">
						<h5>Ensino superior em Engenharia da Computação no centro universitário FIEO.</h5>
					</div>
				</div>
			</div>
			<div class="col-md-4 edu-grid">
				<p>2012</p><span>Graduação</span>
				<img src="images/arrow.png" alt=""/>
				<div class="edu-border">
					<div class="edu-grid-master">
						<h3>ANÁLISE DE SISTEMAS</h3>
						<h4>Fatec</h4>
					</div>
					<div class="edu-grid-info">
						<h5>Ensino superior em análise de sistemas com ênfase em segurança da informação.</h5>
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
			<h3>VIDA PROFISSIONAL</h3>
		</div>
		<div class="strip text-center"><img src="images/work.png" alt=" "/></div>
		<div class="work-grids">
			<div class="col-md-4 w-grid">
				<div class="work-grid">
					<div class="work-grid-info">
						<h4>Natura</h4>
						<h5>Product Owner</h5>
						<p>Atualmente trabalho como Product Owner de projetos mobile e web. Estamos em plena transformação digital e tenho grande orgulho de fazer parte desse movimento.</p>
					</div>
				</div>
			</div>
			<div class="col-md-4 w-grid">
				<div class="work-grid">
					<div class="work-grid-info">
						<h4>Aurum</h4>
						<h5>Developer</h5>
						<p>Atuei como desenvolvedor Java em um dos principais ativos digitais da empresa. Um sistema de apoio a departamentos jurídicos e escritórios de advocacia chamado Themis. </p>
					</div>
				</div>
			</div>
			<div class="col-md-4 w-grid">
				<div class="work-grid">
					<div class="work-grid-info">
						<h4>Thunt</h4>
						<h5>Idealizador e developer</h5>
						<p>Threasure Hunt: O Caçador de promoções. Um app de promoções dentro de shoppings e galerias. Além de ser um dos idealizados da ferramenta ajudei no desenvolvimento durante o período que morei na Irlanda. </p>
					</div>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="work-grids">
			<div class="col-md-4 w-grid">
				<div class="work-grid">
					<div class="work-grid-info">
						<h4>Unify</h4>
						<h5>Estagiário</h5>
						<p>Atuei no setor de professional services apoiando processos de gestão e acompanhamento de projetos, especialmente em plataformas VMWare e URA Genesis.</p>
					</div>
				</div>
			</div>
			<div class="col-md-4 w-grid">
				<div class="work-grid">
					<div class="work-grid-info">
						<h4>Siemens Enterprise</h4>
						<h5>Estagiário</h5>
						<p>Apoiava na organização dos ativos digitais para colaboradores e participava de reuniões periódicas em inglês. Foi um período de descobertas corporativas e vivência profissional com o idioma.</p>
					</div>
				</div>
			</div>
			<div class="col-md-4 w-grid">
				<div class="work-grid">
					<div class="work-grid-info">
						<h4>Infopaginas</h4>
						<h5>Sócio Fundador</h5>
						<p>Durante quase 2 anos trabalhamos com diferentes tipos de mídia digital como websites, GoogleAdwords e FacebookAds. Trabalhava principalmente na área comercial e apoiava no desenvolvimento. Para mim foi um período de grande aprendizado. </p>
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
			<h3>IDIOMAS</h3>
		</div>
		<div class="strip text-center"><img src="images/con1.png" alt=" "/></div>
		<div class="ser-grids">
			<div class="col-md-4 ser-grid">
				<div class="ser-imagea"></div>
				<h3>Português</h3>
				<p>Nativo</p>
			</div>
			<div class="col-md-4 ser-grid">
				<div class="ser-imageb"></div>
				<h3>Inglês</h3>
				<p>Avançado com experiência internacional e corporativa</p>
			</div>
			<div class="col-md-4 ser-grid">
				<div class="ser-imagec"></div>
				<h3>Espanhol</h3>
				<p>Intermediário com vivência corporativa</p>
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
			<h3>VIDA PESSOAL</h3>
			<div class="strip text-center"><img src="images/about.png" alt=" "/></div>
		</div>
		<div class="blog-grids">
			<div class="col-md-4 blog-text-info">
				<div class="blog-grid">
					<img src="images/a.jpg" alt=""/>
					<div class="blog-text">
						<a>Música</a>
						<div class="stripa"></div>
						<p>Sou apaixonado por música, especialmente por instrumentos de corda. Sempre que posso tenho o costume de compor letras e melodias. Sinto que dessa forma deixo meu legado no mundo. Conheça mais no <a style="font-size: 16px; font-weight: normal;" target="_blank" href="https://open.spotify.com/user/12182418668/playlist/2zhf99kGHJELhKzSd3Z57X">Spotify</a> e aproveite ;)</p>
					</div>
				</div>
			</div>
			<div class="col-md-4 blog-text-info">
				<div class="blog-grid">
					<img src="images/b.jpg" alt=""/>
					<div class="blog-text">
						<a>Viagens</a>
						<div class="stripa"></div>
						<p>"No plan, No rush". Gosto de viajar sem muitos planos. Geralmente escolho as praias, mas gosto de praticamente todos os tipos de viagem, especialmente as que me desafiam de alguma forma. Veja algumas fotos no meu <a style="font-size: 16px; font-weight: normal;" target="_blank" href="https://drive.google.com/drive/folders/0B-hAEy4jeFwASUN5aXZnWlJLMW8?usp=sharing">GoogleDrive </a> </p>
					</div>
				</div>
			</div>
			<div class="col-md-4 blog-text-info">
				<div class="blog-grid">
					<img src="images/c.jpg" alt=""/>
					<div class="blog-text">
						<a>Família</a>
						<div class="stripa"></div>
						<p>Devo grande parte da minha tragetória pessoal e profissional à minha família. Sem o apoio deles certamente não teria alcançado alguns objetivos que foram muito importante para minha vida pessoal e profissional. São meu porto seguro<br></p>
					</div>
				</div>
			</div>
			<div class="col-md-4 blog-text-info">
				<div class="blog-grid">
					<img src="images/d.jpg" alt=""/>
					<div class="blog-text">
						<a>Livros</a>
						<div class="stripa"></div>
						<p>Gosto de livros pragmáticos e com conteúdos que me ajudem a desempenhar melhor os diferentes papéis que exerço no mundo. Dentre minhas últimas leituras estão 'The Lean Startup', 'The Agile Mind' e 'O Corpo Fala'.</p>
					</div>
				</div>
			</div>
			<div class="col-md-4 blog-text-info">
				<div class="blog-grid">
					<img src="images/e.jpg" alt=""/>
					<div class="blog-text">
						<a>Esportes</a>
						<div class="stripa"></div>
						<p>Confesso que gostaria de ter mais tempo para praticar >.<, mas tenho o esporte como principal aliado para manter uma vida saudável em meio a uma agenda quase sempre cheia. Futebol, Muay Thai, Natação e academia estão entre os meus preferidos.</p>
					</div>
				</div>
			</div>
			<div class="col-md-4 blog-text-info">
				<div class="blog-grid">
					<img src="images/f.jpg" alt=""/>
					<div class="blog-text">
						<a>Atividades voluntárias</a>
						<div class="stripa"></div>
						<p>Eventualmente organizo, junto com alguns amigos, ações voluntárias. Visitas e doações a orfanatos, apoio técnico em comunidades cristãs e música!    </p>
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
			<h3>CONTATO</h3>
			<div class="strip text-center"><img src="images/con1.png" alt=" "/></div>
		</div>
		<div class="contact-grids">
			<div class="
			col-md-4 col-md-offset-4 contact-left" style="text-align: center;">
				<h3>Aceita um cafézinho? ☕</h3>
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
