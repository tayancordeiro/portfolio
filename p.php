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

	?>

	<!-- banner -->
	<div class="banner" id="home">
		<div class="container">

			<div class="top-header row">
				<script src="js/classie.js"></script>
				
				<div class="gallery-section text-center" id="portfolio" style="background: none;">
					<div class="container">
						<h3><?php echo e($pname) ?></h3>
						<p><?php echo e($ptitle) ?></p>
						<p><?php echo e($pdetail) ?></p>


						<div class="gallery-grids">
							<div class="top-gallery">

								<?php 

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
									
								}	 

								?>

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
