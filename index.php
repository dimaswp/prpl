<!DOCTYPE html>
<html lang="en">
<head>
	<title>Rental Mobil Online</title>
	<meta charset="utf-8">
	<meta name="author" content="pixelhint.com">
	<meta name="description" content="La casa free real state fully responsive html5/css3 home page website template"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
	
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/responsive.css">

	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
</head>
<body>

	<section class="">
		<?php
			include 'header.php';
		?>

			<section class="caption">
				<h2 class="caption" style="text-align: center">Online Car Booking</h2>
				<h3 class="properties" style="text-align: center">Sewa mobil impianmu, kapanpun dan dimanapun !</h3>
			</section>
	</section><!--  end hero section  -->


	<section class="listings">
		<div class="wrapper">
			<ul class="properties_list">
			<?php
						include 'includes/config.php';
						$sel = "SELECT * FROM cars WHERE status = 'Available'";
						$rs = $conn->query($sel);
						while($rws = $rs->fetch_assoc()){
			?>
				<li>
					<a href="book_car.php?id=<?php echo $rws['car_id'] ?>">
						<img class="thumb" src="cars/<?php echo $rws['image'];?>" width="300" height="200">
					</a>
					<span class="price"><?php echo 'Rp. '.$rws['hire_cost'], ' / hari' ;?></span>
					<div class="property_details">
						<h1>
							<a href="book_car.php?id=<?php echo $rws['car_id'] ?>"><?php echo $rws['car_name'];?></a>
						</h1>
						<h2>
							<?php echo 'Vendor : '.$rws['car_type'];?>
						</h2>
						<h2><a href="book_car.php?id=<?php echo $rws['car_id'] ?>">Lihat Detail</a></h2>
					</div>
				</li>
			<?php
				}
			?>
			</ul>
		</div>
	</section>	<!--  end listing section  -->

	<footer>
		<div class="wrapper footer">
			<ul>
				<li class="links">
					<ul>
						<li>Rental Mobil Online</li>
						<li><a href="#">Tentang Kami</a></li>
						<li><a href="#">Persyaratan & Kebijakan</a></li>
						<li><a href="#">Policy</a></li>
						<li><a href="#">Kontak</a></li>
					</ul>
				</li>

				<li class="links">
					<ul>
						<li>Koleksi Mobil</li>
						<li><a href="#">Mercedes</a></li>
						<li><a href="#">Range Rover</a></li>
						<li><a href="#">Landcruisers</a></li>
						<li><a href="#">Lainnya.</a></li>
					</ul>
				</li>

				<li class="about">
					<p>Rental mobil murah dan terpercaya</p>
					<ul>
						<li><a href="http://facebook.com/" class="facebook" target="_blank"></a></li>
						<li><a href="http://twitter.com/" class="twitter" target="_blank"></a></li>
						<li><a href="http://plus.google.com/" class="google" target="_blank"></a></li>
						<li><a href="#" class="skype"></a></li>
					</ul>
				</li>
			</ul>
		</div>

		<div class="copyrights wrapper">
			Copyright &copy; <?php echo date("Y")?> All Rights Reserved | Universitas Ahmad Dahlan
		</div>
	</footer><!--  end footer  -->
	
</body>
</html>