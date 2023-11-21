<div class="top-header-area" id="sticker">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-sm-12 text-center">
					<div class="main-menu-wrap">
						<!-- logo -->
						<div class="site-logo">
							<a href="index.php">
								<img src="assets/img/favicon.png" alt="">
							</a>
							<span><h4 style="color:#F28123">METRO FRESH</h4>
								fruits and vegetables</span>

						</div>
						<!-- logo -->

						<!-- menu start -->
						<nav class="main-menu">
							<ul>
								<li class=""><a href="index.php">Home</a>
									<!-- <ul class="sub-menu">
										<li><a href="index.html">Static Home</a></li>
										<li><a href="index_2.html">Slider Home</a></li>
									</ul> -->
								</li>
								<!-- <li><a href="about.html">About</a></li> -->
								<!-- <li><a href="#">Pages</a>
									<ul class="sub-menu">
										<li><a href="404.html">404 page</a></li>
										<li><a href="about.html">About</a></li>
										<li><a href="cart.html">Cart</a></li>
										<li><a href="checkout.html">Check Out</a></li>
										<li><a href="contact.html">Contact</a></li>
										<li><a href="news.html">News</a></li>
										<li><a href="shop.html">Shop</a></li>
									</ul>
								</li> -->
								<!-- <li><a href="news.html">News</a>
									<ul class="sub-menu">
										<li><a href="news.html">News</a></li>
										<li><a href="single-news.html">Single News</a></li>
									</ul>
								</li> -->
								<li><a href="feedback.php">Feedback</a></li>
								<?php
									if (!isset($_SESSION['c_id'])) { ?>
										<li><a href="">Login</a>
									<ul class="sub-menu">
										<li><a href="login/login.php">Customer</a></li>
										<li><a href="farmer/login/login.php">Farmer</a></li>
										<li><a href="admin/login/login.php">Admin</a>
								</li>
									</ul>
								</li>
										
								<?php	}else{?>
								<li><a href="account.php">My Account</a></li>
								<li><a href="product.php">Product</a></li>
								<li><a href="viewcart.php">Cart</a></li>
								<li><a href="orderstatus.php">Order Status</a></li>



								<li><a href="logout.php">Logout</a></li>
								<?php

								}
								?>
								<!-- <li><a href="shop.html">Shop</a>
									<ul class="sub-menu">
										<li><a href="shop.html">Shop</a></li>
										<li><a href="checkout.html">Check Out</a></li>
										<li><a href="single-product.html">Single Product</a></li>
										<li><a href="cart.html">Cart</a></li>
									</ul>
								</li> -->
								<li>
									<div class="header-icons">
										<!-- <a class="shopping-cart" href="cart.html"><i class="fas fa-shopping-cart"></i></a> -->
										<!-- <a class="mobile-hide search-bar-icon" href="#"><i class="fas fa-search"></i></a> -->
									</div>
								</li>
							</ul>
						</nav>
						<a class="mobile-show search-bar-icon" href="#"><i class="fas fa-search"></i></a>
						<div class="mobile-menu"></div>
						<!-- menu end -->
					</div>
				</div>
			</div>
		</div>
	</div>