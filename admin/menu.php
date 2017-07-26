<?php
	error_reporting("E-NOTICE");
?>
<?php
	session_start();
	if(!$_SESSION['uname'] && (!$_SESSION['pass'])){
		header("location: ../login.php");
	}
?>
<div id="top">
			<h1><a href="#">Rental Mobil Online</a></h1>
			<div id="top-navigation">
				Selamat datang <a href="#"><strong>Administrator</strong></a>
				<span>|</span>
				<a href="#">Bantuan</a>
				<span>|</span>
				<a href="#">Profile</a>
				<span>|</span>
				<a href="logout.php">Log out</a>
			</div>
		</div>
<div id="navigation">
			<ul>
			    <li><a href="index.php"><span>Dashboard</span></a></li>
			    <li><a href="add_vehicles.php"><span>Data Mobil</span></a></li>
			    <li><a href="client_requests.php"><span>Data Pemesanan</span></a></li>
			</ul>
		</div>