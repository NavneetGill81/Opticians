<?php
session_start();
if ($_SESSION['auth'] != 1) {
	header("Location: index.php?session_expired=1");
}
?>
<html lang="en">

<head>
	<title>Contact</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" type="image/x-icon" href="assets/icons/opticians.ico">
	<link rel="stylesheet" href="assets/vender/bootstrap-4.6.2-dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/global.css">
	<!--=============== Remixicon.css ===============-->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.min.css">
	<style>
		body {
			background-position: left;
		}
	</style>

</head>

<body>
	<?php
	include("navbar.php");
	?>
	<div class="container">
		<br /><br /><br />
		<div class="row">
			<div class="col-md-6 offset-md-3">
				<h1 class="text-center" style="font-size: 60px; font-family: 'Arial', sans-serif; font-weight: bold;">
					About</h1>
				<br><br>
			</div>

		</div>
	</div>

	<div class="container">
		<div class="row p-4">
			<div class="col-md-6">
				<h5>About</h5>
				<p>An ecommerce website, also known as an electronic commerce website, is a digital platform that
					revolutionizes the way businesses and consumers engage in commercial transactions. It serves as a
					virtual marketplace, bringing together buyers and sellers from around the world, where products and
					services can be showcased, marketed, and purchased with ease. One of the key advantages of ecommerce
					websites is the convenience they offer. Customers can access the website at any time and from
					anywhere, eliminating the limitations of traditional brick-and-mortar stores. With just a few
					clicks, users can browse through extensive catalogs of products, compare prices, read reviews, and
					make informed decisions before making a purchase. The ability to shop 24/7 enhances the flexibility
					and accessibility for consumers, accommodating different schedules and time zones. Moreover,
					ecommerce websites provide a seamless and secure online shopping experience. They integrate robust
					payment gateways that encrypt sensitive information, ensuring the confidentiality and safety of
					transactions. Customers can choose from various payment options, including credit cards, digital
					wallets, or bank transfers, adding to the convenience and flexibility of the purchasing process.
					Additionally, these websites often have personalized user accounts, enabling customers to store
					their preferences, track orders, and receive personalized recommendations, creating a tailored
					shopping experience. For businesses, ecommerce websites offer immense opportunities for growth and
					expansion. They break down geographical barriers, enabling businesses to reach customers beyond
					their local market. With a well-designed website, businesses can showcase their products or services
					to a global audience, attracting a larger customer base and increasing sales potential. Ecommerce
					websites also allow for effective marketing strategies, such as targeted advertisements, email
					campaigns, and social media integration, helping businesses reach their desired audience and build
					brand loyalty.</p>
			</div>
			<div class="col-md-6">
				<h5>Contact</h5>

				<p>Website: <a class="badge badge-pill badge-light" href="https://letsgofoodie.com">LetsGoFoodie.com</a></p>
				<p>Email: <a class="badge badge-pill badge-info" href="mailto:navnetgill82@gmail.com">Navnetgill82@gmail.com</a></p>
				<p>Phone: <a class="badge badge-pill badge-success" href="tel:+2048049911">+1 2048049911</a></p>
				<br>
				<h5>Follow Us</h5>
				<a class="social-btn" href="https://wa.me/+2048049911"><img src="assets/icons/whatsapp.svg" alt="whatsapp"></a>
				<a class="social-btn" href="https://www.linkedin.com/in/navneet-gill-707119341">
					<img src="assets/icons/linkedin.svg" alt="linkedin">
				</a>

			</div>
		</div>
	</div>

	<script src="assets/vender/jquery-3.7.1.slim.min.js"></script>
	<script src="assets/vender/bootstrap-4.6.2-dist/js/bootstrap.min.js"></script>
</body>

</html>
