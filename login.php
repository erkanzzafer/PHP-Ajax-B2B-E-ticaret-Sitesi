<?php require_once 'inc/header.php'; ?>
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
							<h2>Registration</h2>
						</div>
						<div class="breadcumbs pb-15">
							<ul>
								<li><a href="index.html">Home</a></li>
								<li>Registration</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- HEADING-BANNER END -->
	<!-- SHOPPING-CART-AREA START -->
	<div class="login-area  pt-80 pb-80">
		<div class="container">

			<div class="row">
				<div class="col-lg-6">
					<div class="customer-login text-left">
						<form action="" method="post" onsubmit="return false;" id="bloginform">
							<h4 class="title-1 title-border text-uppercase mb-30">BAYİ GİRİŞ</h4>
							<p class="text-gray">If you have an account with us, Please login!</p>
							<input type="text" placeholder="Email here..." name="email">
							<input type="password" placeholder="Password">
							<p><a href="#" class="text-gray">Forget your password?</a></p>
							<button type="submit" data-text="login" class="button-one submit-button mt-15">login</button>
						</form>
					</div>
				</div>


				<div class="col-lg-6">
					<div class="customer-login text-left">
						<form action="" method="post" onsubmit="return false;" id="bregisterform">
							<h4 class="title-1 title-border text-uppercase mb-30">BAYİ KAYIT</h4>
							<input type="text" placeholder="Bayi adı..." name="bname">
							<input type="text" placeholder="Bayi eposta..." name="bmail">
							<input type="password" placeholder="Şifre" name="bpass">
							<input type="password" placeholder="Şifre Tekrar" name="bpass2">
							<input type="text" placeholder="Bayi telefon..." name="bphone">
							<input type="text" placeholder="Bayi vergi no..." name="bvno">
							<input type="text" placeholder="Bayi vergi dairesi..." name="bvd">
							<button type="submit" id="" onclick="registerbutton();" data-text="regiter" class="button-one submit-button mt-15">Kayıt Ol</button>
						</form>
					</div>
				</div>

			</div>

		</div>
	</div>
	<!-- SHOPPING-CART-AREA END -->
	<!-- FOOTER START -->
	<?php require_once 'inc/footer.php'; ?>