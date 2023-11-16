<?php
    //require '../proses/session.php';
    session_start();
    // if($_SESSION['login']==false){
    //     header("location: ../proses/login_proses.php");
    // }
    include '../public/header1.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TOMASS | Toko Bahan Kue Murah Meriah</title>
    <link rel="stylesheet" href="../assets/css/header.css">
    <link href="../assets/bootstrap/bootstrap.min1.css" rel="stylesheet"> 
		<!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet"> -->
		<link href="../assets/bootstrap/styleD.css" rel="stylesheet">
</head>
<body>
    <h2>Halo <?php echo $_SESSION['username']; ?></h2>
    <button><a href="../proses/login_proses.php">logout
    </button>

		<!-- Start Hero Section -->
        <div id="myCarousel" class="carousel slide mx-3" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="../assets/image/CR1.png" class="d-block w-100" alt="Image 1">
        </div>
        <div class="carousel-item">
            <img src="../assets/image/CR2.png" class="d-block w-100" alt="Image 2">
        </div>
        <div class="carousel-item">
            <img src="../assets/image/CR3.png" class="d-block w-100" alt="Image 3">
        </div>
    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>


		

		<!-- Start Product Section -->
		<div class="container">
		<h2 style="width: 100%; margin-top: 20px; margin-bottom: 25px; border-bottom: 4px; color:MediumSeaGreen;"><b>KATEGORI TERLARIS BULAN INI</b></h2>

		<div class="product-section">
			<div class="container">
				<div class="row">
                
					
						<div class="container">
							  <div class="row">
								
								  <!-- Start Column 1 -->
								<div class="col-10 col-md-4 col-lg-2 mb-3">
									<a class="product-item" href="#">
										<img src="../assets/image/foto produk/1.jpg" class="img-fluid product-thumbnail">
										<h3 class="product-title">Sabun Mandi Nuvo isi 3</h3>
										<strong class="product-price">Rp. 9.000</strong>
			
										<span class="icon-cross">
											<img src="../assets/image/cross.svg" class="img-fluid">
										</span>
									</a>
								</div> 
								<!-- End Column 1 -->
									
								<!-- Start Column 2 -->
								<div class="col-10 col-md-4 col-lg-2 mb-3">
									<a class="product-item" href="#">
										<img src="../assets/image/foto produk/2.jpg" class="img-fluid product-thumbnail">
										<h3 class="product-title">Rinso Renteng 12 </h3>
										<strong class="product-price">Rp. 9.800</strong>
			
										<span class="icon-cross">
											<img src="../assets/image/cross.svg" class="img-fluid">
										</span>
									</a>
								</div> 
								<!-- End Column 2 -->
			
								<!-- Start Column 3 -->
								<div class="col-10 col-md-4 col-lg-2 mb-3">
									<a class="product-item" href="#">
										<img src="../assets/image/foto produk/3.jpg" class="img-fluid product-thumbnail">
										<h3 class="product-title">Gula kristal Putih </h3>
										<strong class="product-price">Rp. 13.300</strong>
			
										<span class="icon-cross">
											<img src="../assets/image/cross.svg" class="img-fluid">
										</span>
									</a>
								</div>
								<!-- End Column 3 -->
			
								<!-- Start Column 4 -->
								<div class="col-10 col-md-4 col-lg-2 mb-3">
									<a class="product-item" href="#">
										<img src="../assets/image/foto produk/4.jpg" class="img-fluid product-thumbnail">
										<h3 class="product-title">Minyak Goreng Fortune 1 liter</h3>
										<strong class="product-price">Rp. 18.700</strong>
			
										<span class="icon-cross">
											<img src="../assets/image/cross.svg" class="img-fluid">
										</span>
									</a>
								</div>
								<!-- End Column 4 -->
			
							
								<!-- Start Column 1 -->
								<div class="col-10 col-md-4 col-lg-2 mb-3">
									<a class="product-item" href="#">
										<img src="../assets/image/foto produk/5.jpg" class="img-fluid product-thumbnail">
										<h3 class="product-title">Yona Sosis Sapi Bakar Mini 500gr</h3>
										<strong class="product-price">Rp. 34.500</strong>
			
										<span class="icon-cross">
											<img src="../assets/image/cross.svg" class="img-fluid">
										</span>
									</a>
								</div> 
								<!-- End Column 1 -->
									
								<!-- Start Column 2 -->
								<div class="col-10 col-md-4 col-lg-2 mb-3">
									<a class="product-item" href="#">
										<img src="../assets/image/foto produk/6.jpg" class="img-fluid product-thumbnail">
										<h3 class="product-title">Refina Garam Meja Beryodium 250gr</h3>
										<strong class="product-price">Rp.3.900</strong>
			
										<span class="icon-cross">
											<img src="../assets/image/cross.svg" class="img-fluid">
										</span>
									</a>
								</div> 
								<!-- End Column 2 -->
								<h2 style="width: 100%; margin-top: 10px; margin-bottom: 25px; border-bottom: 4px; color:MediumSeaGreen "><b>PROMO BULAN INI</b></h2>
								<div class="col-10 col-md-4 col-lg-2 mb-3">
									<a class="product-item" href="#">
										<img src="../assets/image/foto produk/1.jpg" class="img-fluid product-thumbnail">
										<h3 class="product-title">Sabun Mandi Nuvo isi 3</h3>
										<strong class="product-price">Rp. 9.000</strong>
			
										<span class="icon-cross">
											<img src="../assets/image/cross.svg" class="img-fluid">
										</span>
									</a>
								</div> 
								<!-- End Column 1 -->
									
								<!-- Start Column 2 -->
								<div class="col-10 col-md-4 col-lg-2 mb-3">
									<a class="product-item" href="#">
										<img src="../assets/image/foto produk/2.jpg" class="img-fluid product-thumbnail">
										<h3 class="product-title">Rinso Renteng 12 </h3>
										<strong class="product-price">Rp. 9.800</strong>
			
										<span class="icon-cross">
											<img src="../assets/image/cross.svg" class="img-fluid">
										</span>
									</a>
								</div> 
								<!-- End Column 2 -->
			
								<!-- Start Column 3 -->
								<div class="col-10 col-md-4 col-lg-2 mb-3">
									<a class="product-item" href="#">
										<img src="../assets/image/foto produk/3.jpg" class="img-fluid product-thumbnail">
										<h3 class="product-title">Gula kristal Putih </h3>
										<strong class="product-price">Rp. 13.300</strong>
			
										<span class="icon-cross">
											<img src="../assets/image/cross.svg" class="img-fluid">
										</span>
									</a>
								</div>
								<!-- End Column 3 -->
			
								<!-- Start Column 4 -->
								<div class="col-10 col-md-4 col-lg-2 mb-3">
									<a class="product-item" href="#">
										<img src="../assets/image/foto produk/4.jpg" class="img-fluid product-thumbnail">
										<h3 class="product-title">Minyak Goreng Fortune 1 liter</h3>
										<strong class="product-price">Rp. 18.700</strong>
			
										<span class="icon-cross">
											<img src="../assets/image/cross.svg" class="img-fluid">
										</span>
									</a>
								</div>
								<!-- End Column 4 -->
			
							
								<!-- Start Column 1 -->
								<div class="col-10 col-md-4 col-lg-2 mb-3">
									<a class="product-item" href="#">
										<img src="../assets/image/foto produk/5.jpg" class="img-fluid product-thumbnail">
										<h3 class="product-title">Yona Sosis Sapi Bakar Mini 500gr</h3>
										<strong class="product-price">Rp. 34.500</strong>
			
										<span class="icon-cross">
											<img src="../assets/image/cross.svg" class="img-fluid">
										</span>
									</a>
								</div> 
								<!-- End Column 1 -->
									
								<!-- Start Column 2 -->
								<div class="col-10 col-md-4 col-lg-2 mb-3">
									<a class="product-item" href="#">
										<img src="../assets/image/foto produk/6.jpg" class="img-fluid product-thumbnail">
										<h3 class="product-title">Refina Garam Meja Beryodium 250gr</h3>
										<strong class="product-price">Rp.3.900</strong>
			
										<span class="icon-cross">
											<img src="../assets/image/cross.svg" class="img-fluid">
										</span>
									</a>
								</div> 
								<!-- End Column 2 -->
								<h2 style="width: 100%; margin-top: 10px; margin-bottom: 25px; border-bottom: 4px; color:MediumSeaGreen; "><b>REKOMENDASI PRODUK</b></h2>
								<div class="col-10 col-md-4 col-lg-2 mb-3">
									<a class="product-item" href="#">
										<img src="../assets/image/foto produk/1.jpg" class="img-fluid product-thumbnail">
										<h3 class="product-title">Sabun Mandi Nuvo isi 3</h3>
										<strong class="product-price">Rp. 9.000</strong>
			
										<span class="icon-cross">
											<img src="../assets/image/cross.svg" class="img-fluid">
										</span>
									</a>
								</div> 
								<!-- End Column 1 -->
									
								<!-- Start Column 2 -->
								<div class="col-10 col-md-4 col-lg-2 mb-3">
									<a class="product-item" href="#">
										<img src="../assets/image/foto produk/2.jpg" class="img-fluid product-thumbnail">
										<h3 class="product-title">Rinso Renteng 12 </h3>
										<strong class="product-price">Rp. 9.800</strong>
			
										<span class="icon-cross">
											<img src="../assets/image/cross.svg" class="img-fluid">
										</span>
									</a>
								</div> 
								<!-- End Column 2 -->
			
								<!-- Start Column 3 -->
								<div class="col-10 col-md-4 col-lg-2 mb-3">
									<a class="product-item" href="#">
										<img src="../assets/image/foto produk/3.jpg" class="img-fluid product-thumbnail">
										<h3 class="product-title">Gula kristal Putih </h3>
										<strong class="product-price">Rp. 13.300</strong>
			
										<span class="icon-cross">
											<img src="../assets/image/cross.svg" class="img-fluid">
										</span>
									</a>
								</div>
								<!-- End Column 3 -->
			
								<!-- Start Column 4 -->
								<div class="col-10 col-md-4 col-lg-2 mb-3">
									<a class="product-item" href="#">
										<img src="../assets/image/foto produk/4.jpg" class="img-fluid product-thumbnail">
										<h3 class="product-title">Minyak Goreng Fortune 1 liter</h3>
										<strong class="product-price">Rp. 18.700</strong>
			
										<span class="icon-cross">
											<img src="../assets/image/cross.svg" class="img-fluid">
										</span>
									</a>
								</div>
								<!-- End Column 4 -->
			
							
								<!-- Start Column 1 -->
								<div class="col-10 col-md-4 col-lg-2 mb-3">
									<a class="product-item" href="#">
										<img src="../assets/image/foto produk/5.jpg" class="img-fluid product-thumbnail">
										<h3 class="product-title">Yona Sosis Sapi Bakar Mini 500gr</h3>
										<strong class="product-price">Rp. 34.500</strong>
			
										<span class="icon-cross">
											<img src="../assets/image/cross.svg" class="img-fluid">
										</span>
									</a>
								</div> 
								<!-- End Column 1 -->
									
								<!-- Start Column 2 -->
								<div class="col-10 col-md-4 col-lg-2 mb-3">
									<a class="product-item" href="#">
										<img src="../assets/image/foto produk/6.jpg" class="img-fluid product-thumbnail">
										<h3 class="product-title">Refina Garam Meja Beryodium 250gr</h3>
										<strong class="product-price">Rp.3.900</strong>
			
										<span class="icon-cross">
											<img src="../assets/image/cross.svg" class="img-fluid">
										</span>
									</a>
								</div> 
							  </div>
						</div>
					</div>
			
		<!-- End Product Section -->

		<!-- Start Why Choose Us Section -->
		<div class="why-choose-section">
			<div class="container">
				<div class="row justify-content-between">
					<div class="col-lg-6">
						<h2 class="section-title">Why Choose Us</h2>
						<p>Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate velit imperdiet dolor tempor tristique.</p>

						<div class="row my-5">
							<div class="col-6 col-md-6">
								<div class="feature">
									<div class="icon">
										<img src="images/truck.svg" alt="Image" class="imf-fluid">
									</div>
									<h3>Fast &amp; Free Shipping</h3>
									<p>Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate.</p>
								</div>
							</div>

							<div class="col-6 col-md-6">
								<div class="feature">
									<div class="icon">
										<img src="images/bag.svg" alt="Image" class="imf-fluid">
									</div>
									<h3>Easy to Shop</h3>
									<p>Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate.</p>
								</div>
							</div>

							<div class="col-6 col-md-6">
								<div class="feature">
									<div class="icon">
										<img src="images/support.svg" alt="Image" class="imf-fluid">
									</div>
									<h3>24/7 Support</h3>
									<p>Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate.</p>
								</div>
							</div>

							<div class="col-6 col-md-6">
								<div class="feature">
									<div class="icon">
										<img src="images/return.svg" alt="Image" class="imf-fluid">
									</div>
									<h3>Hassle Free Returns</h3>
									<p>Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate.</p>
								</div>
							</div>

						</div>
					</div>

					<div class="col-lg-5">
						<div class="img-wrap">
							<img src="images/why-choose-us-img.jpg" alt="Image" class="img-fluid">
						</div>
					</div>

				</div>
			</div>
		</div>
		<!-- End Why Choose Us Section -->

		<!-- Start We Help Section -->
		<div class="we-help-section">
			<div class="container">
				<div class="row justify-content-between">
					<div class="col-lg-7 mb-5 mb-lg-0">
						<div class="imgs-grid">
							<div class="grid grid-1"><img src="images/img-grid-1.jpg" alt="Untree.co"></div>
							<div class="grid grid-2"><img src="images/img-grid-2.jpg" alt="Untree.co"></div>
							<div class="grid grid-3"><img src="images/img-grid-3.jpg" alt="Untree.co"></div>
						</div>
					</div>
					<div class="col-lg-5 ps-lg-5">
						<h2 class="section-title mb-4">We Help You Make Modern Interior Design</h2>
						<p>Donec facilisis quam ut purus rutrum lobortis. Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate velit imperdiet dolor tempor tristique. Pellentesque habitant morbi tristique senectus et netus et malesuada</p>

						<ul class="list-unstyled custom-list my-4">
							<li>Donec vitae odio quis nisl dapibus malesuada</li>
							<li>Donec vitae odio quis nisl dapibus malesuada</li>
							<li>Donec vitae odio quis nisl dapibus malesuada</li>
							<li>Donec vitae odio quis nisl dapibus malesuada</li>
						</ul>
						<p><a herf="#" class="btn">Explore</a></p>
					</div>
				</div>
			</div>
		</div>
		<!-- End We Help Section -->

		<!-- Start Popular Product -->
		<div class="popular-product">
			<div class="container">
				<div class="row">

					<div class="col-12 col-md-6 col-lg-4 mb-4 mb-lg-0">
						<div class="product-item-sm d-flex">
							<div class="thumbnail">
								<img src="images/product-1.png" alt="Image" class="img-fluid">
							</div>
							<div class="pt-3">
								<h3>Nordic Chair</h3>
								<p>Donec facilisis quam ut purus rutrum lobortis. Donec vitae odio </p>
								<p><a href="#">Read More</a></p>
							</div>
						</div>
					</div>

					<div class="col-12 col-md-6 col-lg-4 mb-4 mb-lg-0">
						<div class="product-item-sm d-flex">
							<div class="thumbnail">
								<img src="images/product-2.png" alt="Image" class="img-fluid">
							</div>
							<div class="pt-3">
								<h3>Kruzo Aero Chair</h3>
								<p>Donec facilisis quam ut purus rutrum lobortis. Donec vitae odio </p>
								<p><a href="#">Read More</a></p>
							</div>
						</div>
					</div>

					<div class="col-12 col-md-6 col-lg-4 mb-4 mb-lg-0">
						<div class="product-item-sm d-flex">
							<div class="thumbnail">
								<img src="images/product-3.png" alt="Image" class="img-fluid">
							</div>
							<div class="pt-3">
								<h3>Ergonomic Chair</h3>
								<p>Donec facilisis quam ut purus rutrum lobortis. Donec vitae odio </p>
								<p><a href="#">Read More</a></p>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
		<!-- End Popular Product -->

		<!-- Start Testimonial Slider -->
		<div class="testimonial-section">
			<div class="container">
				<div class="row">
					<div class="col-lg-7 mx-auto text-center">
						<h2 class="section-title">Testimonials</h2>
					</div>
				</div>

				<div class="row justify-content-center">
					<div class="col-lg-12">
						<div class="testimonial-slider-wrap text-center">

							<div id="testimonial-nav">
								<span class="prev" data-controls="prev"><span class="fa fa-chevron-left"></span></span>
								<span class="next" data-controls="next"><span class="fa fa-chevron-right"></span></span>
							</div>

							<div class="testimonial-slider">
								
								<div class="item">
									<div class="row justify-content-center">
										<div class="col-lg-8 mx-auto">

											<div class="testimonial-block text-center">
												<blockquote class="mb-5">
													<p>&ldquo;Donec facilisis quam ut purus rutrum lobortis. Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate velit imperdiet dolor tempor tristique. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Integer convallis volutpat dui quis scelerisque.&rdquo;</p>
												</blockquote>

												<div class="author-info">
													<div class="author-pic">
														<img src="images/person-1.png" alt="Maria Jones" class="img-fluid">
													</div>
													<h3 class="font-weight-bold">Maria Jones</h3>
													<span class="position d-block mb-3">CEO, Co-Founder, XYZ Inc.</span>
												</div>
											</div>

										</div>
									</div>
								</div> 
								<!-- END item -->

								<div class="item">
									<div class="row justify-content-center">
										<div class="col-lg-8 mx-auto">

											<div class="testimonial-block text-center">
												<blockquote class="mb-5">
													<p>&ldquo;Donec facilisis quam ut purus rutrum lobortis. Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate velit imperdiet dolor tempor tristique. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Integer convallis volutpat dui quis scelerisque.&rdquo;</p>
												</blockquote>

												<div class="author-info">
													<div class="author-pic">
														<img src="images/person-1.png" alt="Maria Jones" class="img-fluid">
													</div>
													<h3 class="font-weight-bold">Maria Jones</h3>
													<span class="position d-block mb-3">CEO, Co-Founder, XYZ Inc.</span>
												</div>
											</div>

										</div>
									</div>
								</div> 
								<!-- END item -->

								<div class="item">
									<div class="row justify-content-center">
										<div class="col-lg-8 mx-auto">

											<div class="testimonial-block text-center">
												<blockquote class="mb-5">
													<p>&ldquo;Donec facilisis quam ut purus rutrum lobortis. Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate velit imperdiet dolor tempor tristique. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Integer convallis volutpat dui quis scelerisque.&rdquo;</p>
												</blockquote>

												<div class="author-info">
													<div class="author-pic">
														<img src="images/person-1.png" alt="Maria Jones" class="img-fluid">
													</div>
													<h3 class="font-weight-bold">Maria Jones</h3>
													<span class="position d-block mb-3">CEO, Co-Founder, XYZ Inc.</span>
												</div>
											</div>

										</div>
									</div>
								</div> 
								<!-- END item -->

							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Testimonial Slider -->

		<!-- Start Blog Section -->
		<div class="blog-section">
			<div class="container">
				<div class="row mb-5">
					<div class="col-md-6">
						<h2 class="section-title">Recent Blog</h2>
					</div>
					<div class="col-md-6 text-start text-md-end">
						<a href="#" class="more">View All Posts</a>
					</div>
				</div>

				<div class="row">

					<div class="col-12 col-sm-6 col-md-4 mb-4 mb-md-0">
						<div class="post-entry">
							<a href="#" class="post-thumbnail"><img src="images/post-1.jpg" alt="Image" class="img-fluid"></a>
							<div class="post-content-entry">
								<h3><a href="#">First Time Home Owner Ideas</a></h3>
								<div class="meta">
									<span>by <a href="#">Kristin Watson</a></span> <span>on <a href="#">Dec 19, 2021</a></span>
								</div>
							</div>
						</div>
					</div>

					<div class="col-12 col-sm-6 col-md-4 mb-4 mb-md-0">
						<div class="post-entry">
							<a href="#" class="post-thumbnail"><img src="images/post-2.jpg" alt="Image" class="img-fluid"></a>
							<div class="post-content-entry">
								<h3><a href="#">How To Keep Your Furniture Clean</a></h3>
								<div class="meta">
									<span>by <a href="#">Robert Fox</a></span> <span>on <a href="#">Dec 15, 2021</a></span>
								</div>
							</div>
						</div>
					</div>

					<div class="col-12 col-sm-6 col-md-4 mb-4 mb-md-0">
						<div class="post-entry">
							<a href="#" class="post-thumbnail"><img src="images/post-3.jpg" alt="Image" class="img-fluid"></a>
							<div class="post-content-entry">
								<h3><a href="#">Small Space Furniture Apartment Ideas</a></h3>
								<div class="meta">
									<span>by <a href="#">Kristin Watson</a></span> <span>on <a href="#">Dec 12, 2021</a></span>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
		<!-- End Blog Section -->	

		<!-- Start Footer Section -->
		<footer class="footer-section">
			<div class="container relative">

				<div class="sofa-img">
					<img src="images/sofa.png" alt="Image" class="img-fluid">
				</div>

				<div class="row">
					<div class="col-lg-8">
						<div class="subscription-form">
							<h3 class="d-flex align-items-center"><span class="me-1"><img src="images/envelope-outline.svg" alt="Image" class="img-fluid"></span><span>Subscribe to Newsletter</span></h3>

							<form action="#" class="row g-3">
								<div class="col-auto">
									<input type="text" class="form-control" placeholder="Enter your name">
								</div>
								<div class="col-auto">
									<input type="email" class="form-control" placeholder="Enter your email">
								</div>
								<div class="col-auto">
									<button class="btn btn-primary">
										<span class="fa fa-paper-plane"></span>
									</button>
								</div>
							</form>

						</div>
					</div>
				</div>

				<div class="row g-5 mb-5">
					<div class="col-lg-4">
						<div class="mb-4 footer-logo-wrap"><a href="#" class="footer-logo">Furni<span>.</span></a></div>
						<p class="mb-4">Donec facilisis quam ut purus rutrum lobortis. Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate velit imperdiet dolor tempor tristique. Pellentesque habitant</p>

						<ul class="list-unstyled custom-social">
							<li><a href="#"><span class="fa fa-brands fa-facebook-f"></span></a></li>
							<li><a href="#"><span class="fa fa-brands fa-twitter"></span></a></li>
							<li><a href="#"><span class="fa fa-brands fa-instagram"></span></a></li>
							<li><a href="#"><span class="fa fa-brands fa-linkedin"></span></a></li>
						</ul>
					</div>

					<div class="col-lg-8">
						<div class="row links-wrap">
							<div class="col-6 col-sm-6 col-md-3">
								<ul class="list-unstyled">
									<li><a href="#">About us</a></li>
									<li><a href="#">Services</a></li>
									<li><a href="#">Blog</a></li>
									<li><a href="#">Contact us</a></li>
								</ul>
							</div>

							<div class="col-6 col-sm-6 col-md-3">
								<ul class="list-unstyled">
									<li><a href="#">Support</a></li>
									<li><a href="#">Knowledge base</a></li>
									<li><a href="#">Live chat</a></li>
								</ul>
							</div>

							<div class="col-6 col-sm-6 col-md-3">
								<ul class="list-unstyled">
									<li><a href="#">Jobs</a></li>
									<li><a href="#">Our team</a></li>
									<li><a href="#">Leadership</a></li>
									<li><a href="#">Privacy Policy</a></li>
								</ul>
							</div>

							<div class="col-6 col-sm-6 col-md-3">
								<ul class="list-unstyled">
									<li><a href="#">Nordic Chair</a></li>
									<li><a href="#">Kruzo Aero</a></li>
									<li><a href="#">Ergonomic Chair</a></li>
								</ul>
							</div>
						</div>
					</div>

				</div>

				<div class="border-top copyright">
					<div class="row pt-4">
						<div class="col-lg-6">
							<p class="mb-2 text-center text-lg-start">Copyright &copy;<script>document.write(new Date().getFullYear());</script>. All Rights Reserved. &mdash; Designed with love by <a href="https://untree.co">Untree.co</a> Distributed By <a hreff="https://themewagon.com">ThemeWagon</a>  <!-- License information: https://untree.co/license/ -->
            </p>
						</div>

						<div class="col-lg-6 text-center text-lg-end">
							<ul class="list-unstyled d-inline-flex ms-auto">
								<li class="me-4"><a href="#">Terms &amp; Conditions</a></li>
								<li><a href="#">Privacy Policy</a></li>
							</ul>
						</div>

					</div>
				</div>

			</div>
		</footer>
		<!-- End Footer Section -->	

		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
		
		<!-- <script src="js/bootstrap.bundle.min.js"></script>
		<script src="js/tiny-slider.js"></script>
		<script src="js/custom.js"></script>
	</body> -->

</html>

