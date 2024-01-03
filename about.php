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
	<title>Bliss Brews - about us page</title>
</head>
<body>
	<?php include 'components/header.php'; ?>
	<div class="main">
		<div class="banner">
			<h1>about us</h1>
		</div>
		<div class="title2">
			<a href="home.php">home </a><span>/ about</span>
		</div>
		<div class="about-category">
			<div class="box">
				<img src="image/p1.jpg">
				<div class="detail">
					<span>Bliss Brews</span>
					<h1>Peru Whole Bean</h1>
					<a href="view_products.php" class="btn">shop now</a>
				</div>
			</div>
			<div class="box">
				<img src="image/p2.jpg">
				<div class="detail">
					<span>Bliss Brews</span>
					<h1>Ethiopia Whole Bean</h1>
					<a href="view_products.php" class="btn">shop now</a>
				</div>
			</div>
			<div class="box">
				<img src="image/p3.jpg">
				<div class="detail">
					<span>Bliss Brews</span>
					<h1>Columbia Whole Bean</h1>
					<a href="view_products.php" class="btn">shop now</a>
				</div>
			</div>
			<div class="box">
				<img src="image/p4.jpg">
				<div class="detail">
					<span>Bliss Brews</span>
					<h1>Nicaragua Whole Bean</h1>
					<a href="view_products.php" class="btn">shop now</a>
				</div>
			</div>
		</div>
		<section class="services">
			<div class="title">
				<img src="img/logo 3.png" class="logo">
				<h1>why choose us</h1>
				<p>Pilih kami untuk petualangan kopi yang menakjubkan, pengalaman yang tak hanya memuaskan selera, tetapi juga merayakan keindahan setiap tegukan.
                </p>
			</div>
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
		<div class="about">
			<div class="row">
				<div class="img-box">
					<img src="img/bean.jpg">
				</div>
				<div class="detail">
					<h1>visit our beautiful showroom!</h1>
					<p>Discover the enchantment of our coffee haven at exquisite showroom.Let's brew unforgettable moments together.</p>
                    <a href="view_products.php" class="btn">shop now</a>
				</div>
			</div>
		</div>
		<div class="testimonial-container">
			<div class="title">
				<img src="img/logo 3.png" class="logo">
				<h1>what people say about us</h1>
				<p> Tersapu dalam aroma kopi yang memikat dan mengajak anda merasakan kesempurnaan setiap cangkir 
                </p>
            </div>
                <div class="container">
                	<div class="testimonial-item active">
                		<img src="img/01.jpg">
                		<h1>Naia</h1>
                		<p>Saya merasa seperti penemu rahasia kopi terbaik setelah menemukan Coffee Beans! Rasanya begitu segar dan unik, membuat saya ingin menikmati setiap pagi dengan senyum.</p>
                	</div>
                	<div class="testimonial-item">
                		<img src="img/02.jpg">
                		<h1>Iam</h1>
                		<p>Coffee Beans tidak hanya menjual kopi, mereka menjual petualangan cita rasa! Setiap biji kopi adalah cerita baru dari berbagai penjuru dunia yang bisa saya nikmati.</p>
                	</div>
                	<div class="testimonial-item">
                		<img src="img/03.jpg">
                		<h1>Queenna</h1>
                		<p>Penasaran dengan ulasan yang heboh, saya mencoba Coffee Beans dan benar saja, mereka tidak melebih - lebihkan. Rasa yang luar biasa, layanan yang ramah, saya jatuh cinta pada setiap cangkir kopi yang saya seduh dari beans mereka.</p>
                	</div>
                	<div class="testimonial-item">
                		<img src="img/04.png">
                		<h1>Bosqueen</h1>
                		<p>Saya sering mendengar tentang kopi berkualitas, tapi baru setelah mencoba Coffee Beans dari Bliss Brews saya mengerti apa artinya kopi sejati. Saya tidak peernah menyangka rasa kopi bisa sekompleks dan sedalam ini.</p>
                	</div>
                	<div class="left-arrow" onclick="nextSlide()"><i class="bx bxs-left-arrow-alt"></i></div>
                	<div class="right-arrow" onclick="prevSlide()"><i class="bx bxs-right-arrow-alt"></i></div>
                </div>
		</div>
		<?php include 'components/footer.php'; ?>
	</div>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
	<script src="script.js"></script>
	<script type="text/javascript">
		let slides = document.querySelectorAll('.testimonial-item');
		let index = 0;

		function nextSlide(){
		    slides[index].classList.remove('active');
		    index = (index + 1) % slides.length;
		    slides[index].classList.add('active');
		}
		function prevSlide(){
		    slides[index].classList.remove('active');
		    index = (index - 1 + slides.length) % slides.length;
		    slides[index].classList.add('active');
		}
	</script>
	<?php include 'components/alert.php'; ?>
</body>
</html>