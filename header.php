<?php
	session_start();
	error_reporting("E-NOTICE");
?>
<header>
			<div class="wrapper">
				<h1 class="logo">Rental Mobil Online</h1>
				<a href="#" class="hamburger"></a>
				<nav>
					<?php
						if(!$_SESSION['email'] && (!$_SESSION['pass'])){
					?>
					<ul>
						<li><a href="index.php">Beranda</a></li>
						<li><a href="index.php">Pesan Mobil</a></li>
						<li><a href="#">Tentang Kami</a></li>
						<li><a href="#">Kontak</a></li>
					</ul>
					<a href="account.php">Login Customer</a>
					<a href="login.php">Login Admin</a>
					<?php
						} else{
					?>
							<ul>
								<li><a href="index.php">Beranda</a></li>
								<li><a href="status.php">Lihat Status Pesanan</a></li>
								<li><a href="message_admin.php">Pesan</a></li>
							</ul>
					<a href="admin/logout.php">Logout</a>
					<?php
						}
					?>
				</nav>
			</div>
		</header>