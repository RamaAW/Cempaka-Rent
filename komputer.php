<?php
	require("connection.php");
?>

<!DOCTYPE html>

<html>

<head>
	<link rel="shortcut icon" href="img/Logo.png">
	<title>Detail Produk | Komputer</title>
	<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
	<link rel="stylesheet" href="css/linearicons.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/magnific-popup.css">
	<link rel="stylesheet" href="css/nice-select.css">					
	<link rel="stylesheet" href="css/animate.min.css">
	<link rel="stylesheet" href="css/animate-text.css">
	<link rel="stylesheet" href="css/owl.carousel.css">
	<link rel="stylesheet" href="css/main.css">
</head>

<body>
	<!-- start header Area -->
	<header id="header">
		<div class="container">
			<div class="row align-items-center justify-content-between d-flex">
			    <div id="logo">
					<a href="../PAD1"><img src="img/Light Logotype 2.png" width="150" height="20"></a>
			    </div>
			    <nav id="nav-menu-container"><!-- #nav-menu-container -->	
				    <ul class="nav-menu">
				      	<li class="menu-active"><a href="index.php">Home</a></li>
				    </ul>
				</nav>	    		
			</div>
		</div>
	</header>

<!-- start section 4 (Overview part 1) -->
<div class="container">
<div class="row services">
			<?php
				$sql = "SELECT * FROM tb_komputer ORDER BY ID_Sec";
				$result = $dbConn -> prepare($sql);
				$result -> execute();
				while($row = $result -> fetch(PDO::FETCH_ASSOC)){
					echo "<div class='col-md-4'>";
					echo "<div class='servicee'>";
					echo "<div class='icon-holder'><img src='data:images/jpeg;base64,".base64_encode($row['Icon'])."' alt='' class='icon'></div>";
					echo "<h4 class='heading'>".$row['Head']."</h4>";
					echo "<p class='description'>".$row['Descr']."</p>";
					echo "</div></div>";
				}
			?>
		</div>
<div class="row d-flex justify-content-center" id="overview">
		<div class="col-md-8 pb-40 header-text">
			<center>
				<h1>Detail Product Komputer</h1>
			</center>
		</div>
	</div>
	<div class="row d-flex justify-content-center">
		<center><img src="img/HP/hero-img.jpg"></center>
	</div>
</div>
	<section class="home-about-area">
		<div class="container-fluid">				
			<div class="row justify-content-center align-items-center">
				<div class="col-lg-6 no-padding home-about-left">
					<img class="img-fluid" src="img/HP/RE1ARC1.jpg" alt="">
				</div>
				<div class="col-lg-6 no-padding home-about-right">
					<h1>Komputer A</h1>
					<p>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ac nisl eu arcu facilisis accumsan. Nunc mollis nisi neque, ac viverra tellus porttitor sed. Mauris ullamcorper dolor in odio tincidunt, non scelerisque nunc consectetur. Quisque eu interdum ex.
					</p>
				</div>
			</div>
		</div>	
	</section>
	<section class="home-about-area">
		<div class="container-fluid">				
			<div class="row justify-content-center align-items-center">
				<div class="col-lg-6 no-padding home-about-left">
					<img class="img-fluid" src="img/HP/RE1ARC5.jpg" alt="">
				</div>
				<div class="col-lg-6 no-padding home-about-right">
					<h1>Komputer B</h1>
						<p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ac nisl eu arcu facilisis accumsan. Nunc mollis nisi neque, ac viverra tellus porttitor sed. Mauris ullamcorper dolor in odio tincidunt, non scelerisque nunc consectetur. Quisque eu interdum ex.						</p>
				</div>
			</div>
		</div>	
	</section>
	<section class="home-about-area">
		<div class="container-fluid">				
			<div class="row justify-content-center align-items-center">
				<div class="col-lg-6 no-padding home-about-left">
					<img class="img-fluid" src="img/HP/RE1AUc5.jpg" alt="">
				</div>
				<div class="col-lg-6 no-padding home-about-right">
					<h1>Komputer C</h1>
					<p>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ac nisl eu arcu facilisis accumsan. Nunc mollis nisi neque, ac viverra tellus porttitor sed. Mauris ullamcorper dolor in odio tincidunt, non scelerisque nunc consectetur. Quisque eu interdum ex.					</p>
				</div>
			</div>
		</div>	
	</section>
	<section class="home-about-area">
		<div class="container-fluid">				
			<div class="row justify-content-center align-items-center">
				<div class="col-lg-6 no-padding home-about-left">
					<img class="img-fluid" src="img/HP/RE1ARC4.jpg" alt="">
				</div>
				<div class="col-lg-6 no-padding home-about-right">
					<h1>Komputer D</h1>
					<p>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ac nisl eu arcu facilisis accumsan. Nunc mollis nisi neque, ac viverra tellus porttitor sed. Mauris ullamcorper dolor in odio tincidunt, non scelerisque nunc consectetur. Quisque eu interdum ex.					</p>
				</div>
			</div>
		</div>	
	</section>
	<section class="home-about-area">
		<div class="container-fluid">				
			<div class="row justify-content-center align-items-center">
				<div class="col-lg-6 no-padding home-about-left">
					<img class="img-fluid" src="img/HP/RE1ARC6.jpg" alt="">
				</div>
				<div class="col-lg-6 no-padding home-about-right">
					<h1>Komputer E</h1>
					<p>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ac nisl eu arcu facilisis accumsan. Nunc mollis nisi neque, ac viverra tellus porttitor sed. Mauris ullamcorper dolor in odio tincidunt, non scelerisque nunc consectetur. Quisque eu interdum ex.					</p>
				</div>
			</div>
		</div>	
	</section>
	<!-- end section 4 (Overview part 1) -->		
	<script src="js/vendor/jquery-2.2.4.min.js"></script>
	<script src="js/vendor/bootstrap.min.js"></script>
  	<script src="js/easing.min.js"></script>			
	<script src="js/hoverIntent.js"></script>
	<script src="js/superfish.min.js"></script>	
	<script src="js/jquery.ajaxchimp.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/animate-text.js"></script>
	<script src="js/owl.carousel.min.js"></script>			
	<script src="js/jquery.sticky.js"></script>
	<script src="js/jquery.nice-select.min.js"></script>			
	<script src="js/parallax.min.js"></script>	
	<script src="js/mail-script.js"></script>	
	<script src="js/main.js"></script>	
</body>

</html>