<!DOCTYPE html>
<html lang="en">
<head>
<title>Website Desa Tugu</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Demo project">
<meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main css -->
<link rel="stylesheet" type="text/css" href="stylereg.css">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="plugins/jquery.mb.YTPlayer-3.1.12/jquery.mb.YTPlayer.css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">
    <!-- Font Icon --><!-- 
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!-===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->


</head>
<body>
	<?php 
		include "include/koneksi.php";
		$query_mysql = mysqli_query($host, "SELECT tag_info, image, judul_info FROM update_info ORDER BY id_info DESC")or die(mysql_error());
		$i = 0;
		$tag =array();
		$judul =array();
		$jumlah = mysqli_num_rows ($query_mysql);  		
		while(($data = mysqli_fetch_array($query_mysql)) && $i <3){
			$tag[$i] = $data['tag_info'];
			$judul[$i] = $data['judul_info'];
			$gam[$i] = $data['image'];
			
			$i++;
		} 
	?>
	<br>
	<div class="containerx">
		<div class="d-flex flex-row align-items-center">
			<div class="side_post_image"><div><img src="images/tugu.png" alt=""></div></div>
			<div class="logo" style="font-size: 40px; text-align: center; align-items: center; align-content: center;">&nbsp;&nbsp;&nbsp;WEBSITE DESA TUGU</div>
		</div>
	</div>
	<br>
<div class="super_container">

	<!-- Header -->

	<header class="header">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="header_content d-flex flex-row align-items-center justify-content-start">
						<div class="logo"><a href="#">&nbsp;&nbsp;&nbsp;Wesatu</a></div>
						<nav class="main_nav">
							<ul>
								
								<li><a href="index.php">Home</a></li>
								<li ><a href="profile.php">Profile</a></li>
								<li><a href="suara_rakyat.php">Suara Rakyat</a></li>
							<!-- 	<li class="active"> -->
									<!-- <a href="p_surat.php">Pembuatan Surat</a> -->
									<div class="btn-group">
										<button type="button" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											Pembuatan Surat
										</button>
										<div class="dropdown-menu dropdown-menu-right">
											<button class="dropdown-item" type="button">Surat Keterangan Domisili</button>
											<button class="dropdown-item" type="button">Surat Izin Usaha</button>
											<button class="dropdown-item" type="button">Surat Keterangan Tidak mampu</button>
										</div>
									</div>
								</li>

								<li><a href="login.php">Login&nbsp;&nbsp;&nbsp;</a></li>
							</ul>
						</nav>
						<div class="search_container ml-auto">
							
							<form action="#" style="margin-top:3px;">
								<input type="search" class="header_search_input" required="required" placeholder="Type to Search...">
								<img class="header_search_icon" src="images/search.png" alt="">
							</form>
							
						</div>
						<div class="hamburger ml-auto menu_mm">
							<i class="fa fa-bars trans_200 menu_mm" aria-hidden="true"></i>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

	<!-- Menu -->

	<div class="menu d-flex flex-column align-items-end justify-content-start text-right menu_mm trans_400">
		<div class="menu_close_container"><div class="menu_close"><div></div><div></div></div></div>
		<div class="logo menu_mm"><a href="index.php">wesatu</a></div>
		<div class="search">
			<form action="#">
				<input type="search" class="header_search_input menu_mm" required="required" placeholder="Type to Search...">
				<img class="header_search_icon menu_mm" src="images/search_2.png" alt="">
			</form>
		</div>
		<nav class="menu_nav">
			<ul class="menu_mm">
				<li><a href="index.php">Home</a></li>
				<li ><a href="profile.php">Profile</a></li>
				<li><a href="suara_rakyat.php">Suara Rakyat</a></li>
				<li class="active"><a href="p_surat.php">Pembuatan Surat</a></li>
				<li><a href="login.php">Login&nbsp;&nbsp;&nbsp;</a></li>
			</ul>
		</nav>
	</div>
	
	<!-- Home -->



	<div class="home">
		
		<!-- Home Slider -->

		<div class="home_slider_container">
			<div class="owl-carousel owl-theme home_slider">
				
				<!-- Slider Item -->
				<div class="owl-item">
					
					
					<div class="home_slider_background"><?php echo '<img style="position: absolute;top: 0;left: 0;width: 100%;height: 100%;background-repeat: no-repeat;	background-size: cover;	background-position: center center;" src="data:image/jpeg;base64,'.base64_encode( $gam[0] ).'"/>';?></div>
					<div class="home_slider_content_container">
						<div class="container">
							<div class="row">
								<div class="col">
									<div class="home_slider_content">
										<div class="home_slider_item_category trans_200"><a href="category.html" class="trans_200"><?php echo $tag[0]; ?></a></div>
										<div class="home_slider_item_title">
											<a href="post.html"><?php echo $judul[0]; ?></a>
										</div>
										<div class="home_slider_item_link">
											<a href="post.html" class="trans_200">Continue Reading
												<svg version="1.1" id="link_arrow_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
													 width="19px" height="13px" viewBox="0 0 19 13" enable-background="new 0 0 19 13" xml:space="preserve">
													<polygon fill="#FFFFFF" points="12.475,0 11.061,0 17.081,6.021 0,6.021 0,7.021 17.038,7.021 11.06,13 12.474,13 18.974,6.5 "/>
												</svg>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- Similar Posts -->
					<div class="similar_posts_container">
						<div class="container">
							<div class="row d-flex flex-row align-items-end">



								<?php
									$query_data = mysqli_query($host, "SELECT judul_info FROM update_info ORDER BY id_info DESC")or die(mysql_error());
									 $a = 0;
									while ($a < 3) {
										$hasil = mysqli_fetch_array($query_data);
									 	$data[$a] = $hasil['judul_info'];
								?>
								<!-- Similar Post -->
								<div class="col-lg-3 col-md-6 similar_post_col">
									<div class="similar_post trans_200">
										<a href="post.html"><?php echo $data[$a];?></a>
									</div>
								</div>

								<?php
								$a++;
									}
								?>
								

							</div>
						</div>
						
						<div class="home_slider_next_container">
							
						</div>

					</div>
				</div>

				<?php
					$query_new = mysqli_query($host, "SELECT image FROM update_info ORDER BY id_info DESC")or die(mysql_error());
					$n = 1;
					while(($resu = mysqli_fetch_array($query_new)) && $n <3){
						if ($n == 1) {
							$resu = mysqli_fetch_array($query_new);
						}
				?>
				<!-- Slider Item -->
				<div class="owl-item">
					<div class="home_slider_background"><?php echo '<img style="position: absolute;top: 0;left: 0;width: 100%;height: 100%;background-repeat: no-repeat;	background-size: cover;	background-position: center center;" src="data:image/jpeg;base64,'.base64_encode( $resu['image'] ).'"/>';?></div>
					<div class="home_slider_content_container">
						<div class="container">
							<div class="row">
								<div class="col">
									<div class="home_slider_content">
										<div class="home_slider_item_category trans_200"><a href="category.html" class="trans_200"><?php echo $tag[$n]; ?></a></div>
										<div class="home_slider_item_title">
											<a href="post.html"><?php echo $judul[$n]; ?></a>
										</div>
										<div class="home_slider_item_link">
											<a href="post.html" class="trans_200">Continue Reading
												<svg version="1.1" id="link_arrow_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
													 width="19px" height="13px" viewBox="0 0 19 13" enable-background="new 0 0 19 13" xml:space="preserve">
													<polygon fill="#FFFFFF" points="12.475,0 11.061,0 17.081,6.021 0,6.021 0,7.021 17.038,7.021 11.06,13 12.474,13 18.974,6.5 "/>
												</svg>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- Similar Posts -->
					<div class="similar_posts_container">
						<div class="container">
							<div class="row d-flex flex-row align-items-end">
								<?php
									$query_data = mysqli_query($host, "SELECT  judul_info FROM update_info ORDER BY id_info DESC")or die(mysql_error());
									 $a = 0;
									while ($a < 3) {
										$hasil = mysqli_fetch_array($query_data);
									 	$similiar[$a] = $hasil['judul_info'];
								?>
								<!-- Similar Post -->
								<div class="col-lg-3 col-md-6 similar_post_col">
									<div class="similar_post trans_200">
										<a href="post.html"><?php echo $similiar[$a];?></a>
									</div>
								</div>

								<?php
								$a++;
									}
								?>

							</div>
						</div>
						
						<div class="home_slider_next_container">
							<div class="home_slider_next" style="background-image:url(images/home_slider_next.jpg)">
								<div class="home_slider_next_background trans_400"></div>
								<div class="home_slider_next_content trans_400">
									<div class="home_slider_next_title">next</div>
									<?php if (($n+1)==3) { ?>
										<div class="home_slider_next_link"><?php echo $judul[0]; ?></div>
									<?php } 
									else{ ?>
										<div class="home_slider_next_link"><?php echo $judul[$n+1]; ?></div>
									<?php } ?>
									
								</div>
							</div>
						</div>

					</div>
				</div>

				<?php
					$n++;
				}
				?>

			</div>

			<div class="custom_nav_container home_slider_nav_container">
				<div class="custom_prev custom_prev_home_slider">
					<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
						 width="7px" height="12px" viewBox="0 0 7 12" enable-background="new 0 0 7 12" xml:space="preserve">
						<polyline fill="#FFFFFF" points="0,5.61 5.609,0 7,0 7,1.438 2.438,6 7,10.563 7,12 5.609,12 -0.002,6.39 "/>
					</svg>
				</div>
		        <ul id="custom_dots" class="custom_dots custom_dots_home_slider">
					<li class="custom_dot custom_dot_home_slider active"><span></span></li>
					<li class="custom_dot custom_dot_home_slider"><span></span></li>
					<li class="custom_dot custom_dot_home_slider"><span></span></li>
				</ul>
				<div class="custom_next custom_next_home_slider">
					<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
						 width="7px" height="12px" viewBox="0 0 7 12" enable-background="new 0 0 7 12" xml:space="preserve">
						<polyline fill="#FFFFFF" points="6.998,6.39 1.389,12 -0.002,12 -0.002,10.562 4.561,6 -0.002,1.438 -0.002,0 1.389,0 7,5.61 "/>
					</svg>
				</div>
			</div>

		</div>
	</div>
	
	<!-- Page Content -->

	<div class="page_content">
		<div class="container">
			<div class="row row-lg-eq-height">

				<!-- Main Content -->

				<div class="col-lg-9">
					<div class="main_content">

						<!-- Blog Section - Don't Miss -->

						<div class="blog_section">
							<div class="section_panel d-flex flex-row align-items-center justify-content-start">
								
								
								
							</div>
							<div class="limiter">
		<div class="container-login100" style="background-image: url('images/img-01.jpg');">
			<div class="wrap-login100 p-t-190 p-b-30">
				<form class="login100-form validate-form">
					<div class="login100-form-avatar">
						<img src="tugu image/login.png" alt="AVATAR">
					</div>

					<span class="login100-form-title p-t-20 p-b-45">
						FORM LOGIN
					</span>

					<div class="wrap-input100 validate-input m-b-10" data-validate = "Username is required">
						<input class="input100" type="text" name="username" placeholder="Username">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input m-b-10" data-validate = "Password is required">
						<input class="input100" type="password" name="pass" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock"></i>
						</span>
					</div>

					<td colspan="3"><input type="submit" name="submit" value="Login"></td>
            </tr>
					</div>

					<div class="text-center w-full p-t-25 p-b-230">
						<a href="#" class="txt1">
							Forgot Username / Password?
						</a>
					</div>

					<div class="text-center w-full">
						<a class="txt1" href="index.html">
							Create new account
							<i class="fa fa-long-arrow-right"></i>						
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
						</div>

					</div>

				</div>

				<!-- Sidebar -->

				<div class="col-lg-3">
					<div class="sidebar">
						<div class="sidebar_background"></div>


										</div>

									</div>
								</div>
							</div>
						</div>

					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- Footer -->
	<BR>
	<footer class="footer">
		<div class="container">
			<div class="row row-lg-eq-height">
				<div class="col-lg-12">
					<div class="footer_content">
						<div class="footer_logo"><a href="index.php">WESATU</a></div>
						<div class="footer_social">
							<ul>
								<li class="footer_social_facebook"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li class="footer_social_twitter"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								<li class="footer_social_pinterest"><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
								<li class="footer_social_vimeo"><a href="#"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
								<li class="footer_social_instagram"><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
								<li class="footer_social_google"><a href="#"><i class="fa fa-google" aria-hidden="true"></i></a></li>
							</ul>
						</div>
						<div class="copyright">Copyright &copy;<script>document.write(new Date().getFullYear());</script> PROJECT 1 |  WEBSITE DESA TUGU | WESATU |   <a href="https://colorlib.com" target="_blank">KELOMPOK 5</a>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</footer>
</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/jquery.mb.YTPlayer-3.1.12/jquery.mb.YTPlayer.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/masonry/masonry.js"></script>
<script src="plugins/masonry/images_loaded.js"></script>
<script src="js/custom.js"></script>
</body>
</html>
