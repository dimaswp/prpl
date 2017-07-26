<!DOCTYPE html>
<html lang="en">
<head>
	<title>Sonko Car Rental</title>
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
			
				<h3>Daftar disini</h3>
				<form method="post">
					<table>
						<tr>
							<td>Nama Lengkap:</td>
							<td><input type="text" name="fname" required></td>
						</tr>
						<tr>
							<td>No. Telepon:</td>
							<td><input type="text" name="phone" required></td>
						</tr>
						<tr>
							<td>Email:</td>
							<td><input type="email" name="email" required></td>
						</tr>
						<tr>
							<td>No. Identitas:</td>
							<td><input type="text" name="id_no" required></td>
						</tr>
						<tr>
							<td>Jenis Kelamin:</td>
							<td>
								<select name="gender">
									<option> Pilih Jenis Kelamin </option>
									<option> Laki-laki </option>
									<option> Perempuan </option>
								</select>
							</td>
						</tr>
						<tr>
							<td>Alamat:</td>
							<td><input type="text" name="location" required></td>
						</tr>
						<tr>
							<td colspan="2" style="text-align:right"><input type="submit" name="save" value="Daftar"></td>
						</tr>
					</table>
				</form>
				<?php
						if(isset($_POST['save'])){
							include 'includes/config.php';
							$fname = $_POST['fname'];
							$id_no = $_POST['id_no'];
							$gender = $_POST['gender'];
							$email = $_POST['email'];
							$phone = $_POST['phone'];
							$location = $_POST['location'];
							
							$qry = "INSERT INTO client (fname,id_no,gender,email,phone,location,status)
							VALUES('$fname','$id_no','$gender','$email','$phone','$location','Available')";
							$result = $conn->query($qry);
							if($result == TRUE){
								echo "<script type = \"text/javascript\">
											alert(\"Successfully Registered.\");
											window.location = (\"account.php\")
											</script>";
							} else{
								echo "<script type = \"text/javascript\">
											alert(\"Registration Failed. Try Again\");
											window.location = (\"signup.php\")
											</script>";
							}
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