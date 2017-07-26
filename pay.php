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


	<section class="search">
<!-- 		<div class="wrapper">
			<form action="#" method="post">
				<input type="text" id="search" name="search" placeholder="Apa yang anda cari ?"  autocomplete="off"/>
				<input type="submit" id="submit_search" name="submit_search"/>
			</form>
			<a href="#" class="advanced_search_icon" id="advanced_search_btn"></a>
		</div> -->

		<div class="advanced_search">
			<div class="wrapper">
				<span class="arrow"></span>
				<form action="#" method="post">
					<div class="search_fields">
						<input type="text" class="float" id="check_in_date" name="check_in_date" placeholder="Tanggal Check In"  autocomplete="off">

						<hr class="field_sep float"/>

						<input type="text" class="float" id="check_out_date" name="check_out_date" placeholder="Tanggal Check out"  autocomplete="off">
					</div>
					<div class="search_fields">
						<input type="text" class="float" id="min_price" name="min_price" placeholder="Harga Minimal"  autocomplete="off">

						<hr class="field_sep float"/>

						<input type="text" class="float" id="max_price" name="max_price" placeholder="Harga Maksimal"  autocomplete="off">
					</div>
					<input type="text" id="keywords" name="keywords" placeholder="Kata Kunci"  autocomplete="off">
					<input type="submit" id="submit_search" name="submit_search"/>
				</form>
			</div>
		</div><!--  end advanced search section  -->
	</section><!--  end search section  -->


	<section class="listings">
		<div class="wrapper">
			<ul class="properties_list">
				<h3 style="text-decoration: underline">Konfirmasi Pesanan</h3>
				<form method="post">
					<table>
						<tr>
							<td>No. Transaksi </td>
							<td><input type="text" name="mpesa" required></td>
						</tr>
						<tr>
							<td>No. Identitas </td>
							<td><input type="text" name="id_no" required></td>
						</tr>
				
						<tr>
							<td colspan="2" style="text-align:right"><input type="submit" name="pay" value="Submit"></td>
						</tr>
					</table>
				</form>
				<?php
						if(isset($_POST['pay'])){
							include 'includes/config.php';
							$mpesa = $_POST['mpesa'];
							$id_no = $_POST['id_no'];
							
							$qry = "UPDATE client SET mpesa = '$mpesa' WHERE id_no = '$id_no'";
							$result = $conn->query($qry);
							if($result == TRUE){
								echo "<script type = \"text/javascript\">
											alert(\"Konfirmasi pembayaran berhasil dikirim !\");
											window.location = (\"wait.php\")
											</script>";
							} else{
								echo "<script type = \"text/javascript\">
											alert(\"Pendaftaran gagal, silahkan ulangi kembali\");
											window.location = (\"pay.php\")
											</script>";
							}
						}
						
					  ?>
			</ul>
			<div class="more_listing">
				<a href="index.php" class="more_listing_btn">Pesan mobil lainnya</a>
			</div>
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