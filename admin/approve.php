<?php
	include '../includes/config.php';
	$id = $_REQUEST['id'];
	$query = "UPDATE client SET status = 'Approved' WHERE client_id = '$id'";
	$result = $conn->query($query);
	if($result === TRUE){
		echo 'Permintaan sudah diterima';
	?>
		<meta content="4; client_requests.php" http-equiv="refresh" />
	<?php
	}
?>
