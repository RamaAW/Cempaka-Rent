<?php
	require("connection.php");
?>

<!DOCTYPE html>

<html>

<head>
	<link rel="shortcut icon" href="img/Logo.png">
	<title>Cempaka Rent</title>
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
	<link href="fontawesome/css/fontawesome.css" rel="stylesheet">
  	<link href="fontawesome/css/brands.css" rel="stylesheet">
  	<link href="fontawesome/css/solid.css" rel="stylesheet">
</head>

<body>
	<div class=""></div>
	<!-- start header Area -->
	<header id="header">
		<div class="container">
			<div class="row align-items-center justify-content-between d-flex">
			    <div id="logo">
			        <a href="../PAD1"><img src="img/Light Logotype 2.png" width="150" height="20"></a>
			    </div>
			    <nav id="nav-menu-container"><!-- #nav-menu-container -->	
				    <ul class="nav-menu">
				      	<li class="menu-active"><a href="#home">Home</a></li>
						<li><a href="#aboutus">About Us</a></li>
						<li><a href="#product">Product</a></li>
						<li><a href="#dokumentasi">Gallery</a></li>
						<li><a href="#maps">Maps</a></li>
				       	<li><a href="#reviews">Testimoni</a></li>
						<li><a href="#faq">FAQ</a></li>
				    </ul>
				</nav>	    		
			</div>
		</div>
	</header>
	<!-- End header Area -->

	<!-- start section 1 (banner Area) -->
	<section class="banner-area" id="home">	
		<div class="container">
			<div class="row fullscreen d-flex align-items-center justify-content-center">
				<div class="banner-content col-lg-10">
					<br><br><br>
					<h5 class="text-white text-uppercase">Tempat Penyewaan Komputer</h5>
					<h1 class="cd-headline clip is-full-width">
						<span>Cempaka</span>
						<span class="cd-words-wrapper">
							<b class="is-visible">Rent</b>
							<b>Rent</b>
							<b>Rent</b>
							<b>Rent</b>
							<b>Rent</b>
							<b>Rent</b>
						</span>
					</h1>
					<br>
				</div>											
			</div>
		</div>
	</section>
	<!-- end section 1 (banner Area) -->

	<!-- start section 2 (About Us) -->
	<section class="service-area section-gap" id="aboutus">	
	<div class="container">
		<div class="row d-flex justify-content-center">
			<div class="col-md-8 pb-40 header-text">
				<h1>CEMPAKA RENT</h1>
				<p>Sewa Laptop, Komputer, Projector, TV, Printer, dan Multimedia</p>
			</div>
		</div>
		</div>
		<div>
			<center>
				<img class="img-fluid" src="img/about us.png" width="100%" height="100%">
			</center>
		</div>
		<div class="row services">
			<?php
				$sql = "SELECT * FROM tb_section2 ORDER BY ID_Sec";
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
	</section>
	<!-- end section 2 (About Us) -->
	
	<!-- start section 3 (Product) -->
	<section class="top-course-area section-gap" id="product">
		<div class="container">
			<div class="row d-flex justify-content-center">
				<div class="col-md-8 pb-40 header-text">
					<center>
						<h1>Product</h1>
					</center>
				</div>
			</div>
			<div class="row services">
				<?php
					$sql = "SELECT * FROM tb_feature ORDER BY ID_Fet";
					$result = $dbConn -> prepare($sql);
					$result -> execute();
					while($row = $result -> fetch(PDO::FETCH_ASSOC)){
						echo "<div class='col-md-4'><div class='service'>";
						echo "<div class='icon-holder'><img src='data:images/jpeg;base64,".base64_encode($row['icon'])."' alt=''></div>";
						echo "<h4 class='heading'>".$row['heading']."</h4>";
						echo "<p class='description'>".$row['description']."</p>";
						echo "<br><br>";
						echo "<form action=".$row['button']." method='POST' target='_blank'> <button type='submit' class='btn'>Detail</button><a/> </form>";
						echo "</div></div>";
					}
				?>
				
			</div>
		</div>
	</section>
	<!-- end section 3 (Product) -->

	<!-- start section 4 (Dokumentasi) -->	
	<section class="unique-feature-area section-gap" id="dokumentasi">
		<div class="container">
			<div class="row d-flex justify-content-center">
				<div class="menu-content pb-60 col-lg-10">
					<div class="title text-center">
						<h1 class="mb-10 text-white">DOKUMENTASI PENYEWAAN</h1>
						<p>Dokumentasi Jasa Penyewaan Cempaka Rent di Beberapa Tempat</p>
					</div>
				</div>
			</div>
			<div class="col-md-12 col-xs-6 work">
				<img class="img-responsive single-unique-product" src="img/dokumentasi/dokumentasi1.png" alt="#">
				<div class="overlay single-unique-product"></div>
				<div class="work-content">
					<h1>PENYEWAAN KOMPUTER DI UGM</h1>
					<p>Tanggal 19-12-2020</p>
				</div>
			</div>
			<br>
			<div class="col-md-12 col-xs-6 work">
				<img class="img-responsive single-unique-product" src="img/dokumentasi/dokumentasi2.png" alt="#">
				<div class="overlay single-unique-product"></div>
				<div class="work-content">
					<h1>PENYEWAAN KOMPUTER DI Gedung DPR</h1>
					<p>Tanggal 19-12-2021</p>
				</div>
			</div>
			<br>
			<div class="col-md-12 col-xs-6 work">
				<img class="img-responsive single-unique-product" src="img/dokumentasi/dokumentasi3.png" alt="#">
				<div class="overlay single-unique-product"></div>
				<div class="work-content">
					<h1>PENYEWAAN KOMPUTER DI Istana Kepresidenan</h1>
					<p>Tanggal 17-08-1945</p>
				</div>
			</div>
			<br>
			<div class="col-md-12 col-xs-6 work">
				<img class="img-responsive single-unique-product" src="img/dokumentasi/dokumentasi4.png" alt="#">
				<div class="overlay single-unique-product"></div>
				<div class="work-content">
					<h1>PENYEWAAN KOMPUTER DI UNY</h1>
					<p>Tanggal 19-12-2012</p>
				</div>
			</div>
		</div>
	</section>
	<!-- end section 4 (Dokumentasi) -->
	
	<br><br><br>	
			
	<!-- start section 5 (Maps) -->	
	<section class="video-sec-area section-gap" id="maps">
		<div class="container">
			<div class="row justify-content-center align-items-center ">
				<div class="col-lg-6 video-left">
					<h6>Let's Find Us!</h6>
					<h1>
						Cempaka Rent
						<br>
						on Google Maps
					</h1>
					<p><span>Jl. Perintis Kemerdekaan Gg. 28 No.9, <br>Kec. Tegal Timur., Kota Tegal, Jawa Tengah 52122</span></p>
					<p>No Telf 0808080808080</p>
					<a class="primary-btn" href="https://www.google.co.id/maps/place/Gg.+28+No.9,+Panggung,+Kec.+Tegal+Tim.,+Kota+Tegal,+Jawa+Tengah+52122/@-6.8666657,109.1424551,855m/data=!3m2!1e3!4b1!4m5!3m4!1s0x2e6fb7809710c92d:0xc9331cd405870c70!8m2!3d-6.8666657!4d109.1446438?hl=id" target="_blank">Let's Find Us!</a>
				</div>
				<div class="col-lg-6 video-right justify-content-center align-items-center d-flex" style="cursor:pointer" data-reveal-id="videoModal" onclick="$('#vgIframe')[0].src += '?autoplay=1&amp;rel=0&amp;showinfo=0&amp;ecver=1';">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d516.9036541060482!2d109.14454140802867!3d-6.866719834978294!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6fb7809710c92d%3A0xc9331cd405870c70!2sGg.%2028%20No.9%2C%20Panggung%2C%20Kec.%20Tegal%20Tim.%2C%20Kota%20Tegal%2C%20Jawa%20Tengah%2052122!5e0!3m2!1sid!2sid!4v1635836436387!5m2!1sid!2sid" width="600" height="350" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
			</div>
		</div>	
	</section>
	<!-- end section 5 (Maps) -->
		
	<!-- start section 6 (Reviews Area) -->
	<section class="review-area section-gap" id="reviews">
		<div class="container">
			<div class="row d-flex justify-content-center">
				<div class="menu-content pb-60 col-lg-10">
					<div class="title text-center">
						<h1 class="mb-10">Testimoni</h1>
					</div>
				</div>
			</div>						
			<div class="row">
				<?php
					$sql = "SELECT * FROM tb_reviews ORDER BY ID_Rev";
					$result = $dbConn -> prepare($sql);
					$result -> execute();
					while($row = $result -> fetch(PDO::FETCH_ASSOC)){
						echo "<div class='col-lg-4 col-md-6'>";
						echo "<div class='single-review'>";
						echo "<h4>".$row['Nama']."</h4>";
						echo "<p>".$row['Review']."</p>";
						echo "<div class='star'>";
						$isi = $row['Rating'];
						$kosong = 5 - $isi;
						for($i = 0; $i < $isi; $i++){
							echo "<span class='fa fa-star checked'></span>";
						}
						for($k = 0; $k < $kosong; $k++){
							echo "<span class='fa fa-star'></span>";
						}
						echo "</div></div></div>";
					}
				?>
			</div>
		</div>	
	</section>
	<!-- end section 6 (Reviews Area) -->

	<!-- start section 7 (FAQ) -->
	<section class="faq-area section-gap" id="faq">
		<div class="container">
			<div class="row d-flex justify-content-center">
				<div class="menu-content pb-60 col-lg-10">
					<div class="title text-center">
						<h1 class="mb-10">F A Q</h1>
						<p>Cempaka Rent</p>
					</div>
				</div>
			</div>						
			<div class="row justify-content-start">
				<div class="col-lg-6 faq-left">
					<div id="accordion">
						<?php
							$sql = "SELECT * FROM tb_summary ORDER BY ID_Sum";
							$result = $dbConn -> prepare($sql);
							$result -> execute();
							$huruf = array("zero", "One", "Two", "Three", "Four", "Five");
							while($row = $result -> fetch(PDO::FETCH_ASSOC)){
								echo "<div class='card'>";
								echo "<div class='card-header' id='heading".$huruf[$row['ID_Sum']]."'>";
								echo "<h5 class='mb-0'>";
								echo "<button class='btn btn-link' data-toggle='collapse' data-target='#collapse".$huruf[$row['ID_Sum']]."' aria-expanded='true' aria-controls='collapse".$huruf[$row['ID_Sum']]."'>";
								echo $row['Judul'];
								echo "</button></h5></div>";
								echo "<div id='collapse".$huruf[$row['ID_Sum']]."' class='collapse' aria-labelledby='heading".$huruf[$row['ID_Sum']]."' data-parent='#accordion'><div class='card-body'>";
								echo $row['Isi'];
								echo "</div></div></div>";
							}
						?>						  
					</div>							
				</div>	
			</div>
		</div>	
	</section>
	<!-- end section 7 (FAQ) -->
			
	<!-- start footer Area (Contact) -->		
	<footer class="footer-area section-gap" id="about">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-4 col-sm-12">
					<div class="single-footer-widget">
						<p class="footer-text">
							Copyright &copy;
							<script>
								document.write(new Date().getFullYear());
							</script>
							Cempaka Rent.
							<br>
							This Website is made with
							<i class="fa fa-heart-o" aria-hidden="true"></i><br>
							by Cempaka Rent
							<br>
							No Telf 0901293012
						</p>
					</div>
				</div>
				<div class="col-lg-6  col-md-4 col-sm-12">
					<div class="single-footer-widget">
						<h6>Feedback</h6>
						<p>Give your feedback</p>
						<div class="" id="mc_embed_feedback">
							<form method="post" action="prosesFeedback.php" class="form-inline">
								<input class="form-control" name="name" placeholder="Enter Your Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Name '" required="" type="text"><br><br>
								<input class="form-control" name="email" placeholder="Enter Your Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email '" required="" type="email"><br><br><br>
								<input class="form-control" name="feedback" placeholder="Enter Your Feedback" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Feedback '" required="" type="text"><br><br>
			                    <button class="click-btn btn btn-default" name="btn_submit">
									<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
								</button>
							</form>
						</div>
					</div>
				</div>						
				<div class="col-lg-2 col-md-4 col-sm-12 social-widget">
					<div class="single-footer-widget">
						<h6>Let's Get In Touch</h6>
						<p>With my Social Media</p>
						<div class="footer-social d-flex align-items-center">
							<a href="https://www.facebook.com" target="_blank"><i class="fa fa-facebook"></i></a>
							<a href="https://twitter.com" target="_blank"><i class="fa fa-twitter"></i></a>
							<a href="https://instagram.com" target="_blank"><i class="fa fa-instagram"></i></a>
							<a href="https://linkedin.com" target="_blank"><i class="fa fa-linkedin"></i></a>
						</div>
					</div>
				</div>							
			</div>
		</div>
	</footer>
	<!-- End footer Area (Contact) -->	

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