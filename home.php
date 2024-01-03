<?php 
 include 'components/connection.php';
 session_start();
 if (isset($_SESSION['user_id'])) {
		$user_id = $_SESSION['user_id'];
	}else{
		$user_id = '';
	}

	if (isset($_POST['logout'])) {
		session_destroy();
		header("location: login.php");
	}
?>
<style type="text/css">
	<?php include 'style.css'; ?>
</style>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
	<title>Bliss Brews - home page</title>
</head>
<body>
	<?php include 'components/header.php'; ?>
	<div class="main">
		
		<section class="home-section">
			<div class="slider">
				<div class="slider__slider slide1">
					<div class="overlay"></div>
					<div class="slide-detail">
						<h1>Welcome To Bliss Brews</h1>
						<p>Kopi yang baik akan selalu menemukan penikmatnya</p>
						<a href="view_products.php" class="btn">shop now</a>
					</div>
					<div class="hero-dec-top"></div>
					<div class="hero-dec-bottom"></div>
				</div>
				<!-- slide end -->
				<div class="slider__slider slide2">
					<div class="overlay"></div>
					<div class="slide-detail">
						<h1>Bliss Brews</h1>
						<p>Semua hal memiliki pasangan. Kopi dengan rasa pahit, mawar dengan duri dan jatuh cinta dengan patah hati</p>
						<a href="view_products.php" class="btn">shop now</a>
					</div>
					<div class="hero-dec-top"></div>
					<div class="hero-dec-bottom"></div>
				</div>
				<!-- slide end -->
				<div class="slider__slider slide3">
					<div class="overlay"></div>
					<div class="slide-detail">
						<h1>Bliss Brews</h1>
						<p>Karena dari kopi kita belajar, bahwa rasa pahit itu dapat dinikmati</p>
						<a href="view_products.php" class="btn">shop now</a>
					</div>
					<div class="hero-dec-top"></div>
					<div class="hero-dec-bottom"></div>
				</div>
				<!-- slide end -->
				<div class="slider__slider slide4">
					<div class="overlay"></div>
					<div class="slide-detail">
						<h1>Bliss Brews</h1>
						<p>Coffee and love are best when they are hot</p>
						<a href="view_products.php" class="btn">shop now</a>
					</div>
					<div class="hero-dec-top"></div>
					<div class="hero-dec-bottom"></div>
				</div>
				<!-- slide end -->
				<div class="slider__slider slide5">
					<div class="overlay"></div>
					<div class="slide-detail">
						<h1>Bliss Brews</h1>
						<p>What on earth could be more luxurious than a sofa, a book, and a cup of coffee</p>
						<a href="view_products.php" class="btn">shop now</a>
					</div>
					<div class="hero-dec-top"></div>
					<div class="hero-dec-bottom"></div>
				</div>
				<!-- slide end -->
				<div class="left-arrow"><i class='bx bxs-left-arrow'></i></div>
                <div class="right-arrow"><i class='bx bxs-right-arrow'></i></div>
			</div>
		</section>
		<!-- home slider end -->
		<section class="thumb">
			<div class="box-container">
				<div class="box">
					<img src="img/thumb 1.jpg">
					<h3>beans</h3>
					<p>Like coffee beans, life's true flavor is unveiled through the heat of experiences.</p>
					<i class="bx bx-chevron-right"></i>
				</div>
				<div class="box">
					<img src="img/thumb 2.jpg">
					<h3>take away</h3>
					<p>The emblematic to go coffee packaging, a vessel carrying tales of rushed moments and cherished sips.</p>
					<i class="bx bx-chevron-right"></i>
				</div>
				<div class="box">
					<img src="img/thumb 3.jpg">
					<h3>cup</h3>
					<p>A vessel that holds not just brew, but memories, conversations, and moments of solace.</p>
					<i class="bx bx-chevron-right"></i>
				</div>
			</div>
		</section>
		<section class="container">
			<div class="box-container">
				<div class="box">
					<img src="img/bean.jpg">
				</div>
				<div class="box">
					<span>Bliss Brews</span>
					<h1>save up to 50% off</h1>
				</div>
			</div>
		</section>
		<section class="shop">
			<div class="title">
				<img src="img/logo 3.png">
				<h1>Trending Products</h1>
			</div>
			<div class="row">
				<div class="row-detail">
					<img src="img/3.jpg">
					<div class="top-footer">
						<h1>Enjoy happy moments with coffee beans at bliss brews</h1>
					</div>
				</div>
			</div>
			<div class="box-container">
				<div class="box">
					<img src="image/p1.jpg">
					<a href="view_products.php" class="btn">shop now</a>
				</div>
				<div class="box">
					<img src="image/p5.jpg">
					<a href="view_products.php" class="btn">shop now</a>
				</div>
				<div class="box">
					<img src="image/p6.jpg">
					<a href="view_products.php" class="btn">shop now</a>
				</div>
				<div class="box">
					<img src="image/p7.jpg">
					<a href="view_products.php" class="btn">shop now</a>
				</div>
				<div class="box">
					<img src="image/p8.jpg">
					<a href="view_products.php" class="btn">shop now</a>
				</div>
				<div class="box">
					<img src="image/p9.jpg">
					<a href="view_products.php" class="btn">shop now</a>
				</div>
			</div>
		</section>
		<section class="shop-category">`
			<div class="box-container">
				<div class="box">
					<img src="img/10.png">
					<div class="detail">
						<span>new in taste</span>
						<h1>Bliss Brews</h1>
						<a href="view_products.php" class="btn">shop now</a>
					</div>
				</div>
			</div>
		</section>
		<section class="services">
			<div class="box-container">
				<div class="box">
					<img src="img/icon 4.png">
					<div class="detail">
						<h3>great savings</h3>
						<p>save big every order</p>
					</div>
				</div>
				<div class="box">
					<img src="img/icon 3.png">
					<div class="detail">
						<h3>24*7 support</h3>
						<p>one-on-one support</p>
					</div>
				</div>
				<div class="box">
					<img src="img/icon 2.png">
					<div class="detail">
						<h3>gift vouchers</h3>
						<p>vouchers on every festivals</p>
					</div>
				</div>
				<div class="box">
					<img src="img/icon 1.png">
					<div class="detail">
						<h3>worldwide delivery</h3>
						<p>dropship worldwide</p>
					</div>
				</div>
			</div>
		</section>
		<section class="brand">
			<div class="box-container">
				<div class="box">
					<img src="img/brand 1.PNG">
				</div>
				<div class="box">
					<img src="img/brand 2.PNG">
				</div>
				<div class="box">
					<img src="img/brand 3.PNG">
				</div>
				<div class="box">
					<img src="img/brand 4.PNG">
				</div>
			</div>
		</section>
		<?php include 'components/footer.php'; ?>
	</div>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
	<script src="script.js"></script>
	<?php include 'components/alert.php'; ?>
</body>
</html>