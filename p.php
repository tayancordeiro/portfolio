
<!DOCTYPE html>
<?php include("translation.php"); ?>
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

								foreach ($filelist as $key => $value) {

									if ($value == "." || $value == ".."  ) {
										//ignore invalid files
									}else {										
										echo "<div class='col-md-4 gallery-grid gallery1'>
										<a target='_blank' href='images/projects/p".$pid."/".$value."'>
										<img src='images/projects/p".$pid."/".$value."' class='img-responsive' alt='/'>
										</a>
										</div>";
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
