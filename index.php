<?php require_once 'inc/header.php';  ?>
<!-- WRAPPER START -->
<div class="wrapper bg-dark-white">

	<!-- HEADER-AREA START -->
	<?php require_once 'inc/menu.php'; ?>
	<!-- HEADER-AREA END -->
	<!-- Mobile-menu start -->
	<?php require_once 'inc/mobilemenu.php'; ?> 
	<!-- Mobile-menu end -->
	<!-- HEADING-BANNER START -->
	<div class="heading-banner-area overlay-bg">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="heading-banner">
						<div class="heading-banner-title">
							<h2>Product Grid View</h2>
						</div>
						<div class="breadcumbs pb-15">
							<ul>
								<li><a href="#">Home</a></li>
								<li>Product grid view</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- HEADING-BANNER END -->
	<!-- PRODUCT-AREA START -->
	<div class="product-area pt-80 pb-80 product-style-2">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 order-2 order-lg-1">
					<!-- Widget-Search start -->
					<aside class="widget widget-search mb-30">
						<form action="#">
							<input type="text" placeholder="Search here..." />
							<button type="submit">
								<i class="zmdi zmdi-search"></i>
							</button>
						</form>
					</aside>
					<!-- Widget-search end -->
					<!-- Widget-Categories start -->
					<aside class="widget widget-categories  mb-30">
						<div class="widget-title">
							<h4>Categories</h4>
						</div>
						<div id="cat-treeview" class="widget-info product-cat boxscrol2">
							<ul>
								<li><span>Chair</span>
									<ul>
										<li><a href="#">T-Shirts</a></li>
										<li><a href="#">Striped Shirts</a></li>
										<li><a href="#">Half Shirts</a></li>
										<li><a href="#">Formal Shirts</a></li>
										<li><a href="#">Bilazers</a></li>
									</ul>
								</li>
								<li class="open"><span>Furniture</span>
									<ul>
										<li><a href="#">Men Bag</a></li>
										<li><a href="#">Shoes</a></li>
										<li><a href="#">Watch</a></li>
										<li><a href="#">T-shirt</a></li>
										<li><a href="#">Shirt</a></li>
									</ul>
								</li>
								<li><span>Accessories</span>
									<ul>
										<li><a href="#">T-Shirts</a></li>
										<li><a href="#">Striped Shirts</a></li>
										<li><a href="#">Half Shirts</a></li>
										<li><a href="#">Formal Shirts</a></li>
										<li><a href="#">Bilazers</a></li>
									</ul>
								</li>
								<li><span>Top Brands</span>
									<ul>
										<li><a href="#">T-Shirts</a></li>
										<li><a href="#">Striped Shirts</a></li>
										<li><a href="#">Half Shirts</a></li>
										<li><a href="#">Formal Shirts</a></li>
										<li><a href="#">Bilazers</a></li>
									</ul>
								</li>
								<li><span>Jewelry</span>
									<ul>
										<li><a href="#">T-Shirts</a></li>
										<li><a href="#">Striped Shirts</a></li>
										<li><a href="#">Half Shirts</a></li>
										<li><a href="#">Formal Shirts</a></li>
										<li><a href="#">Bilazers</a></li>
									</ul>
								</li>
							</ul>
						</div>
					</aside>
					<!-- Widget-categories end -->
					<!-- Shop-Filter start -->
					<aside class="widget shop-filter mb-30">
						<div class="widget-title">
							<h4>Price</h4>
						</div>
						<div class="widget-info">
							<div class="price_filter">
								<div class="price_slider_amount">
									<input type="submit" value="You range :" />
									<input type="text" id="amount" name="price" placeholder="Add Your Price" />
								</div>
								<div id="slider-range"></div>
							</div>
						</div>
					</aside>
					<!-- Shop-Filter end -->
					<!-- Widget-Color start -->
					<aside class="widget widget-color mb-30">
						<div class="widget-title">
							<h4>Color</h4>
						</div>
						<div class="widget-info color-filter clearfix">
							<ul>
								<li><a href="#"><span class="color color-1"></span>LightSalmon<span class="count">12</span></a></li>
								<li><a href="#"><span class="color color-2"></span>Dark Salmon<span class="count">20</span></a></li>
								<li><a href="#"><span class="color color-3"></span>Tomato<span class="count">59</span></a></li>
								<li><a class="active" href="#"><span class="color color-4"></span>Deep Sky Blue<span class="count">45</span></a></li>
								<li><a href="#"><span class="color color-5"></span>Electric Purple<span class="count">78</span></a></li>
								<li><a href="#"><span class="color color-6"></span>Atlantis<span class="count">10</span></a></li>
								<li><a href="#"><span class="color color-7"></span>Deep Lilac<span class="count">15</span></a></li>
							</ul>
						</div>
					</aside>
					<!-- Widget-Color end -->
					<!-- Widget-Size start -->
					<aside class="widget widget-size mb-30">
						<div class="widget-title">
							<h4>Size</h4>
						</div>
						<div class="widget-info size-filter clearfix">
							<ul>
								<li><a href="#">M</a></li>
								<li><a class="active" href="#">S</a></li>
								<li><a href="#">L</a></li>
								<li><a href="#">SL</a></li>
								<li><a href="#">XL</a></li>
							</ul>
						</div>
					</aside>
					<!-- Widget-Size end -->
					<!-- Widget-banner start -->
					<aside class="widget widget-banner hidden-sm">
						<div class="widget-info widget-banner-img">
							<a href="#"><img src="img/banner/5.jpg" alt="" /></a>
						</div>
					</aside>
					<!-- Widget-banner end -->
				</div>
				<div class="col-lg-9 order-1 order-lg-2">
					<!-- Shop-Content End -->
					<div class="shop-content mt-tab-30 mb-30 mb-lg-0">
						<div class="product-option mb-30 clearfix">
							<!-- Nav tabs -->
							<ul class="nav d-block shop-tab">
								<li><a class="active" href="#grid-view" data-bs-toggle="tab"><i class="zmdi zmdi-view-module"></i></a></li>
								<li><a href="#list-view" data-bs-toggle="tab"><i class="zmdi zmdi-view-list"></i></a></li>
							</ul>
							<div class="showing text-end d-none d-md-block">
								<p class="mb-0">Showing 01-09 of 17 Results</p>
							</div>
						</div>
						<!-- Tab panes -->
						<div class="tab-content">
							<div class="tab-pane active" id="grid-view">
								<div class="row">
									<!-- Single-product start -->
									<div class="col-lg-4 col-md-6">
										<div class="single-product">
											<div class="product-img">
												<span class="pro-label new-label">new</span>
												<span class="pro-price-2">$ 56.20</span>
												<a href="single-product.html"><img src="img/product/6.jpg" alt="" /></a>
											</div>
											<div class="product-info clearfix text-center">
												<div class="fix">
													<h4 class="post-title"><a href="#">dummy Product name</a></h4>
												</div>
												<div class="fix">
													<span class="pro-rating">
														<a href="#"><i class="zmdi zmdi-star"></i></a>
														<a href="#"><i class="zmdi zmdi-star"></i></a>
														<a href="#"><i class="zmdi zmdi-star"></i></a>
														<a href="#"><i class="zmdi zmdi-star-half"></i></a>
														<a href="#"><i class="zmdi zmdi-star-half"></i></a>
													</span>
												</div>
												<div class="product-action clearfix">
													<a href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
													<a href="#" data-bs-toggle="modal" data-bs-target="#productModal" title="Quick View"><i class="zmdi zmdi-zoom-in"></i></a>
													<a href="#" data-bs-toggle="tooltip" data-placement="top" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
													<a href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
												</div>
											</div>
										</div>
									</div>
									<!-- Single-product end -->
									<!-- Single-product start -->
									<div class="col-lg-4 col-md-6">
										<div class="single-product">
											<div class="product-img">
												<span class="pro-label sale-label">Sale</span>
												<span class="pro-price-2">$ 56.20</span>
												<a href="single-product.html"><img src="img/product/3.jpg" alt="" /></a>
											</div>
											<div class="product-info clearfix text-center">
												<div class="fix">
													<h4 class="post-title"><a href="#">dummy Product name</a></h4>
												</div>
												<div class="fix">
													<span class="pro-rating">
														<a href="#"><i class="zmdi zmdi-star"></i></a>
														<a href="#"><i class="zmdi zmdi-star"></i></a>
														<a href="#"><i class="zmdi zmdi-star"></i></a>
														<a href="#"><i class="zmdi zmdi-star-half"></i></a>
														<a href="#"><i class="zmdi zmdi-star-half"></i></a>
													</span>
												</div>
												<div class="product-action clearfix">
													<a href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
													<a href="#" data-bs-toggle="modal" data-bs-target="#productModal" title="Quick View"><i class="zmdi zmdi-zoom-in"></i></a>
													<a href="#" data-bs-toggle="tooltip" data-placement="top" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
													<a href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
												</div>
											</div>
										</div>
									</div>
									<!-- Single-product end -->
									<!-- Single-product start -->
									<div class="col-lg-4 col-md-6">
										<div class="single-product">
											<div class="product-img">
												<span class="pro-price-2">$ 56.20</span>
												<a href="single-product.html"><img src="img/product/7.jpg" alt="" /></a>
											</div>
											<div class="product-info clearfix text-center">
												<div class="fix">
													<h4 class="post-title"><a href="#">dummy Product name</a></h4>
												</div>
												<div class="fix">
													<span class="pro-rating">
														<a href="#"><i class="zmdi zmdi-star"></i></a>
														<a href="#"><i class="zmdi zmdi-star"></i></a>
														<a href="#"><i class="zmdi zmdi-star"></i></a>
														<a href="#"><i class="zmdi zmdi-star-half"></i></a>
														<a href="#"><i class="zmdi zmdi-star-half"></i></a>
													</span>
												</div>
												<div class="product-action clearfix">
													<a href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
													<a href="#" data-bs-toggle="modal" data-bs-target="#productModal" title="Quick View"><i class="zmdi zmdi-zoom-in"></i></a>
													<a href="#" data-bs-toggle="tooltip" data-placement="top" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
													<a href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
												</div>
											</div>
										</div>
									</div>
									<!-- Single-product end -->
									<!-- Single-product start -->
									<div class="col-lg-4 col-md-6">
										<div class="single-product">
											<div class="product-img">
												<span class="pro-label sale-label">sale</span>
												<span class="pro-price-2">$ 56.20</span>
												<a href="single-product.html"><img src="img/product/10.jpg" alt="" /></a>
											</div>
											<div class="product-info clearfix text-center">
												<div class="fix">
													<h4 class="post-title"><a href="#">dummy Product name</a></h4>
												</div>
												<div class="fix">
													<span class="pro-rating">
														<a href="#"><i class="zmdi zmdi-star"></i></a>
														<a href="#"><i class="zmdi zmdi-star"></i></a>
														<a href="#"><i class="zmdi zmdi-star"></i></a>
														<a href="#"><i class="zmdi zmdi-star-half"></i></a>
														<a href="#"><i class="zmdi zmdi-star-half"></i></a>
													</span>
												</div>
												<div class="product-action clearfix">
													<a href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
													<a href="#" data-bs-toggle="modal" data-bs-target="#productModal" title="Quick View"><i class="zmdi zmdi-zoom-in"></i></a>
													<a href="#" data-bs-toggle="tooltip" data-placement="top" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
													<a href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
												</div>
											</div>
										</div>
									</div>
									<!-- Single-product end -->
									<!-- Single-product start -->
									<div class="col-lg-4 col-md-6">
										<div class="single-product">
											<div class="product-img">
												<span class="pro-price-2">$ 56.20</span>
												<a href="single-product.html"><img src="img/product/8.jpg" alt="" /></a>
											</div>
											<div class="product-info clearfix text-center">
												<div class="fix">
													<h4 class="post-title"><a href="#">dummy Product name</a></h4>
												</div>
												<div class="fix">
													<span class="pro-rating">
														<a href="#"><i class="zmdi zmdi-star"></i></a>
														<a href="#"><i class="zmdi zmdi-star"></i></a>
														<a href="#"><i class="zmdi zmdi-star"></i></a>
														<a href="#"><i class="zmdi zmdi-star-half"></i></a>
														<a href="#"><i class="zmdi zmdi-star-half"></i></a>
													</span>
												</div>
												<div class="product-action clearfix">
													<a href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
													<a href="#" data-bs-toggle="modal" data-bs-target="#productModal" title="Quick View"><i class="zmdi zmdi-zoom-in"></i></a>
													<a href="#" data-bs-toggle="tooltip" data-placement="top" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
													<a href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
												</div>
											</div>
										</div>
									</div>
									<!-- Single-product end -->
									<!-- Single-product start -->
									<div class="col-lg-4 col-md-6">
										<div class="single-product">
											<div class="product-img">
												<span class="pro-label new-label">new</span>
												<span class="pro-price-2">$ 56.20</span>
												<a href="single-product.html"><img src="img/product/11.jpg" alt="" /></a>
											</div>
											<div class="product-info clearfix text-center">
												<div class="fix">
													<h4 class="post-title"><a href="#">dummy Product name</a></h4>
												</div>
												<div class="fix">
													<span class="pro-rating">
														<a href="#"><i class="zmdi zmdi-star"></i></a>
														<a href="#"><i class="zmdi zmdi-star"></i></a>
														<a href="#"><i class="zmdi zmdi-star"></i></a>
														<a href="#"><i class="zmdi zmdi-star-half"></i></a>
														<a href="#"><i class="zmdi zmdi-star-half"></i></a>
													</span>
												</div>
												<div class="product-action clearfix">
													<a href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
													<a href="#" data-bs-toggle="modal" data-bs-target="#productModal" title="Quick View"><i class="zmdi zmdi-zoom-in"></i></a>
													<a href="#" data-bs-toggle="tooltip" data-placement="top" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
													<a href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
												</div>
											</div>
										</div>
									</div>
									<!-- Single-product end -->
									<!-- Single-product start -->
									<div class="col-lg-4 col-md-6">
										<div class="single-product">
											<div class="product-img">
												<span class="pro-label new-label">new</span>
												<span class="pro-price-2">$ 56.20</span>
												<a href="single-product.html"><img src="img/product/2.jpg" alt="" /></a>
											</div>
											<div class="product-info clearfix text-center">
												<div class="fix">
													<h4 class="post-title"><a href="#">dummy Product name</a></h4>
												</div>
												<div class="fix">
													<span class="pro-rating">
														<a href="#"><i class="zmdi zmdi-star"></i></a>
														<a href="#"><i class="zmdi zmdi-star"></i></a>
														<a href="#"><i class="zmdi zmdi-star"></i></a>
														<a href="#"><i class="zmdi zmdi-star-half"></i></a>
														<a href="#"><i class="zmdi zmdi-star-half"></i></a>
													</span>
												</div>
												<div class="product-action clearfix">
													<a href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
													<a href="#" data-bs-toggle="modal" data-bs-target="#productModal" title="Quick View"><i class="zmdi zmdi-zoom-in"></i></a>
													<a href="#" data-bs-toggle="tooltip" data-placement="top" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
													<a href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
												</div>
											</div>
										</div>
									</div>
									<!-- Single-product end -->
									<!-- Single-product start -->
									<div class="col-lg-4 col-md-6">
										<div class="single-product">
											<div class="product-img">
												<span class="pro-price-2">$ 56.20</span>
												<a href="single-product.html"><img src="img/product/1.jpg" alt="" /></a>
											</div>
											<div class="product-info clearfix text-center">
												<div class="fix">
													<h4 class="post-title"><a href="#">dummy Product name</a></h4>
												</div>
												<div class="fix">
													<span class="pro-rating">
														<a href="#"><i class="zmdi zmdi-star"></i></a>
														<a href="#"><i class="zmdi zmdi-star"></i></a>
														<a href="#"><i class="zmdi zmdi-star"></i></a>
														<a href="#"><i class="zmdi zmdi-star-half"></i></a>
														<a href="#"><i class="zmdi zmdi-star-half"></i></a>
													</span>
												</div>
												<div class="product-action clearfix">
													<a href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
													<a href="#" data-bs-toggle="modal" data-bs-target="#productModal" title="Quick View"><i class="zmdi zmdi-zoom-in"></i></a>
													<a href="#" data-bs-toggle="tooltip" data-placement="top" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
													<a href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
												</div>
											</div>
										</div>
									</div>
									<!-- Single-product end -->
									<!-- Single-product start -->
									<div class="col-lg-4 col-md-6">
										<div class="single-product">
											<div class="product-img">
												<span class="pro-label new-label">new</span>
												<span class="pro-price-2">$ 56.20</span>
												<a href="single-product.html"><img src="img/product/12.jpg" alt="" /></a>
											</div>
											<div class="product-info clearfix text-center">
												<div class="fix">
													<h4 class="post-title"><a href="#">dummy Product name</a></h4>
												</div>
												<div class="fix">
													<span class="pro-rating">
														<a href="#"><i class="zmdi zmdi-star"></i></a>
														<a href="#"><i class="zmdi zmdi-star"></i></a>
														<a href="#"><i class="zmdi zmdi-star"></i></a>
														<a href="#"><i class="zmdi zmdi-star-half"></i></a>
														<a href="#"><i class="zmdi zmdi-star-half"></i></a>
													</span>
												</div>
												<div class="product-action clearfix">
													<a href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
													<a href="#" data-bs-toggle="modal" data-bs-target="#productModal" title="Quick View"><i class="zmdi zmdi-zoom-in"></i></a>
													<a href="#" data-bs-toggle="tooltip" data-placement="top" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
													<a href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
												</div>
											</div>
										</div>
									</div>
									<!-- Single-product end -->
								</div>
							</div>
							<div class="tab-pane" id="list-view">
								<div class="row shop-list">
									<!-- Single-product start -->
									<div class="col-lg-12">
										<div class="single-product clearfix">
											<div class="product-img">
												<span class="pro-label new-label">new</span>
												<span class="pro-price-2">$ 56.20</span>
												<a href="single-product.html"><img src="img/product/6.jpg" alt="" /></a>
											</div>
											<div class="product-info">
												<div class="fix">
													<h4 class="post-title floatleft"><a href="#">dummy Product name</a></h4>
													<span class="pro-rating floatright">
														<a href="#"><i class="zmdi zmdi-star"></i></a>
														<a href="#"><i class="zmdi zmdi-star"></i></a>
														<a href="#"><i class="zmdi zmdi-star"></i></a>
														<a href="#"><i class="zmdi zmdi-star-half"></i></a>
														<a href="#"><i class="zmdi zmdi-star-half"></i></a>
														<span>( 27 Rating )</span>
													</span>
												</div>
												<div class="fix mb-20">
													<span class="pro-price">$ 56.20</span>
												</div>
												<div class="product-description">
													<p>There are many variations of passages of Lorem Ipsum available, but the majority have be suffered alteration in some form, by injected humour, or randomised words which donot look even slightly believable. If you are going to use a passage of Lorem Ipsum, you neede be sure there isn't anythin going to use a passage embarrassing.</p>
												</div>
												<div class="clearfix">
													<div class="cart-plus-minus">
														<input type="text" value="02" name="qtybutton" class="cart-plus-minus-box">
													</div>
													<div class="product-action clearfix">
														<a href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
														<a href="#" data-bs-toggle="modal" data-bs-target="#productModal" title="Quick View"><i class="zmdi zmdi-zoom-in"></i></a>
														<a href="#" data-bs-toggle="tooltip" data-placement="top" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
														<a href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
													</div>
												</div>
											</div>
										</div>
									</div>
									<!-- Single-product end -->
									<!-- Single-product start -->
									<div class="col-lg-12">
										<div class="single-product clearfix">
											<div class="product-img">
												<span class="pro-label new-label">new</span>
												<span class="pro-price-2">$ 56.20</span>
												<a href="single-product.html"><img src="img/product/3.jpg" alt="" /></a>
											</div>
											<div class="product-info">
												<div class="fix">
													<h4 class="post-title floatleft"><a href="#">dummy Product name</a></h4>
													<span class="pro-rating floatright">
														<a href="#"><i class="zmdi zmdi-star"></i></a>
														<a href="#"><i class="zmdi zmdi-star"></i></a>
														<a href="#"><i class="zmdi zmdi-star"></i></a>
														<a href="#"><i class="zmdi zmdi-star-half"></i></a>
														<a href="#"><i class="zmdi zmdi-star-half"></i></a>
														<span>( 27 Rating )</span>
													</span>
												</div>
												<div class="fix mb-20">
													<span class="pro-price">$ 56.20</span>
												</div>
												<div class="product-description">
													<p>There are many variations of passages of Lorem Ipsum available, but the majority have be suffered alteration in some form, by injected humour, or randomised words which donot look even slightly believable. If you are going to use a passage of Lorem Ipsum, you neede be sure there isn't anythin going to use a passage embarrassing.</p>
												</div>
												<div class="clearfix">
													<div class="cart-plus-minus">
														<input type="text" value="02" name="qtybutton" class="cart-plus-minus-box">
													</div>
													<div class="product-action clearfix">
														<a href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
														<a href="#" data-bs-toggle="modal" data-bs-target="#productModal" title="Quick View"><i class="zmdi zmdi-zoom-in"></i></a>
														<a href="#" data-bs-toggle="tooltip" data-placement="top" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
														<a href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
													</div>
												</div>
											</div>
										</div>
									</div>
									<!-- Single-product end -->
									<!-- Single-product start -->
									<div class="col-lg-12">
										<div class="single-product clearfix">
											<div class="product-img">
												<span class="pro-label new-label">new</span>
												<span class="pro-price-2">$ 56.20</span>
												<a href="single-product.html"><img src="img/product/2.jpg" alt="" /></a>
											</div>
											<div class="product-info">
												<div class="fix">
													<h4 class="post-title floatleft"><a href="#">dummy Product name</a></h4>
													<span class="pro-rating floatright">
														<a href="#"><i class="zmdi zmdi-star"></i></a>
														<a href="#"><i class="zmdi zmdi-star"></i></a>
														<a href="#"><i class="zmdi zmdi-star"></i></a>
														<a href="#"><i class="zmdi zmdi-star-half"></i></a>
														<a href="#"><i class="zmdi zmdi-star-half"></i></a>
														<span>( 27 Rating )</span>
													</span>
												</div>
												<div class="fix mb-20">
													<span class="pro-price">$ 56.20</span>
												</div>
												<div class="product-description">
													<p>There are many variations of passages of Lorem Ipsum available, but the majority have be suffered alteration in some form, by injected humour, or randomised words which donot look even slightly believable. If you are going to use a passage of Lorem Ipsum, you neede be sure there isn't anythin going to use a passage embarrassing.</p>
												</div>
												<div class="clearfix">
													<div class="cart-plus-minus">
														<input type="text" value="02" name="qtybutton" class="cart-plus-minus-box">
													</div>
													<div class="product-action clearfix">
														<a href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
														<a href="#" data-bs-toggle="modal" data-bs-target="#productModal" title="Quick View"><i class="zmdi zmdi-zoom-in"></i></a>
														<a href="#" data-bs-toggle="tooltip" data-placement="top" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
														<a href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
													</div>
												</div>
											</div>
										</div>
									</div>
									<!-- Single-product end -->
									<!-- Single-product start -->
									<div class="col-lg-12">
										<div class="single-product clearfix">
											<div class="product-img">
												<span class="pro-label new-label">new</span>
												<span class="pro-price-2">$ 56.20</span>
												<a href="single-product.html"><img src="img/product/10.jpg" alt="" /></a>
											</div>
											<div class="product-info">
												<div class="fix">
													<h4 class="post-title floatleft"><a href="#">dummy Product name</a></h4>
													<span class="pro-rating floatright">
														<a href="#"><i class="zmdi zmdi-star"></i></a>
														<a href="#"><i class="zmdi zmdi-star"></i></a>
														<a href="#"><i class="zmdi zmdi-star"></i></a>
														<a href="#"><i class="zmdi zmdi-star-half"></i></a>
														<a href="#"><i class="zmdi zmdi-star-half"></i></a>
														<span>( 27 Rating )</span>
													</span>
												</div>
												<div class="fix mb-20">
													<span class="pro-price">$ 56.20</span>
												</div>
												<div class="product-description">
													<p>There are many variations of passages of Lorem Ipsum available, but the majority have be suffered alteration in some form, by injected humour, or randomised words which donot look even slightly believable. If you are going to use a passage of Lorem Ipsum, you neede be sure there isn't anythin going to use a passage embarrassing.</p>
												</div>
												<div class="clearfix">
													<div class="cart-plus-minus">
														<input type="text" value="02" name="qtybutton" class="cart-plus-minus-box">
													</div>
													<div class="product-action clearfix">
														<a href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
														<a href="#" data-bs-toggle="modal" data-bs-target="#productModal" title="Quick View"><i class="zmdi zmdi-zoom-in"></i></a>
														<a href="#" data-bs-toggle="tooltip" data-placement="top" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
														<a href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
													</div>
												</div>
											</div>
										</div>
									</div>
									<!-- Single-product end -->
									<!-- Single-product start -->
									<div class="col-lg-12">
										<div class="single-product clearfix">
											<div class="product-img">
												<span class="pro-label new-label">new</span>
												<span class="pro-price-2">$ 56.20</span>
												<a href="single-product.html"><img src="img/product/12.jpg" alt="" /></a>
											</div>
											<div class="product-info">
												<div class="fix">
													<h4 class="post-title floatleft"><a href="#">dummy Product name</a></h4>
													<span class="pro-rating floatright">
														<a href="#"><i class="zmdi zmdi-star"></i></a>
														<a href="#"><i class="zmdi zmdi-star"></i></a>
														<a href="#"><i class="zmdi zmdi-star"></i></a>
														<a href="#"><i class="zmdi zmdi-star-half"></i></a>
														<a href="#"><i class="zmdi zmdi-star-half"></i></a>
														<span>( 27 Rating )</span>
													</span>
												</div>
												<div class="fix mb-20">
													<span class="pro-price">$ 56.20</span>
												</div>
												<div class="product-description">
													<p>There are many variations of passages of Lorem Ipsum available, but the majority have be suffered alteration in some form, by injected humour, or randomised words which donot look even slightly believable. If you are going to use a passage of Lorem Ipsum, you neede be sure there isn't anythin going to use a passage embarrassing.</p>
												</div>
												<div class="clearfix">
													<div class="cart-plus-minus">
														<input type="text" value="02" name="qtybutton" class="cart-plus-minus-box">
													</div>
													<div class="product-action clearfix">
														<a href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
														<a href="#" data-bs-toggle="modal" data-bs-target="#productModal" title="Quick View"><i class="zmdi zmdi-zoom-in"></i></a>
														<a href="#" data-bs-toggle="tooltip" data-placement="top" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
														<a href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
													</div>
												</div>
											</div>
										</div>
									</div>
									<!-- Single-product end -->
								</div>
							</div>
						</div>
						<!-- Pagination start -->
						<div class="shop-pagination text-center">
							<div class="pagination">
								<ul>
									<li><a href="#"><i class="zmdi zmdi-long-arrow-left"></i></a></li>
									<li><a href="#">01</a></li>
									<li><a class="active" href="#">02</a></li>
									<li><a href="#">03</a></li>
									<li><a href="#">04</a></li>
									<li><a href="#">05</a></li>
									<li><a href="#"><i class="zmdi zmdi-long-arrow-right"></i></a></li>
								</ul>
							</div>
						</div>
						<!-- Pagination end -->
					</div>
					<!-- Shop-Content End -->
				</div>
			</div>
		</div>
	</div>
	<!-- PRODUCT-AREA END -->
<?php require_once 'inc/footer.php'; ?>	