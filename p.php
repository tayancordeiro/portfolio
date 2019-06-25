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
	<?php include("head.php"); ?>

</head>


<body>


	<?php 

	$pid = 5;//default project

	if (htmlspecialchars($_GET["id"]) != null) {
		$pid = htmlspecialchars($_GET["id"]);
	}

	$pname = "projects-name-".$pid; 
	$ptitle = "projects-title-".$pid; 
	$pdetail = "projects-detail-".$pid; 


	//todo Falta dinamizar galeria

	 ?>

	<!-- banner -->
	<div class="banner" id="home">
		<div class="container">

			<div class="top-header row">
				<script src="js/classie.js"></script>
				<!--top-nav---->
				<div class="top-nav">
					<p class="change-lang"> <?php echo e("change-lang") ?> </p>	
					<a href="?lang=pt" class="right_bt" title="<?php echo e("lang-name-1") ?>"><img style="width: 2em; height: 2em;" src="images/lang_pt.png" alt=""/></a>
					<a href="?lang=en" class="right_bt" title="<?php echo e("lang-name-2") ?>"><img style="width: 2em; height: 2em;" src="images/lang_en.png" alt=""/></a>
					<a href="?lang=es" class="right_bt" title="<?php echo e("lang-name-3") ?>"><img style="width: 2em; height: 2em;" src="images/lang_es.png" alt=""/></a>
				</div>

				<div class="gallery-section text-center" id="portfolio" style="background: none;">
					<div class="container">
						<h3><?php echo e($pname) ?></h3>
						<p><?php echo e($ptitle) ?></p>
						<p><?php echo e($pdetail) ?></p>


						<div class="gallery-grids">
							<div class="top-gallery">

								<?php 

								/*$filelist = array();
								$path = "C:\Program Files (x86)\Ampps\www\portfolio\images\projects\p".$pid;
								if ($handle = opendir($path)) {
									while ($entry = readdir($handle)) {
										echo $entry;
										$true = is_file($entry);
										echo $true;
										if (is_file($entry)) {
											$filelist[] = $entry;
										}
									}
									closedir($handle);
								}

								echo($filelist[0]);
								echo($filelist[1]);
								echo($filelist[2]);*/




								$entries = scandir(".\images\projects\p".$pid);
								$filelist = array();
								foreach($entries as $entry) {
									$filelist[] = $entry;
								}

								/*print_r($filelist);*/

								foreach ($filelist as $key => $value) {

									if ($value == "." || $value == ".."  ) {
										//not valid files
									}else {
										/*echo nl2br ($key . " => " . $value . "\n");*/
										
										echo "<div class='col-md-4 gallery-grid gallery1'><img src='images/projects/p".$pid."/".$value."' class='img-responsive' alt='/''></div>";
									}

/*									echo $value;
									echo " - ";*/
										
								}	 

								?>
								

								<!-- <div class="col-md-4 gallery-grid gallery1">
									<img src="images/p5.jpg" class="img-responsive" alt="/">
								</div>
								<div class="col-md-4 gallery-grid gallery1">
									<img src="images/p5.jpg" class="img-responsive" alt="/">
								</div>
								<div class="col-md-4 gallery-grid gallery1">
									<img src="images/p5.jpg" class="img-responsive" alt="/">
								</div>
								<div class="col-md-4 gallery-grid gallery1">
									<img src="images/p5.jpg" class="img-responsive" alt="/">
								</div>
								<div class="col-md-4 gallery-grid gallery1">
									<img src="images/p5.jpg" class="img-responsive" alt="/">
								</div> -->

								<div class="clearfix"> </div>
							</div>
						</div>
					</div>
				</div>
			</div>

			
		</div>
	</div> 

</body>

</html>
