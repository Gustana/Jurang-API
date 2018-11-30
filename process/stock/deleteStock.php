<?php
	require_once '../../helper/database.php';

	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$kodeBarang = $_POST['kodeBarang'];

		$db = new Database();

		$db->sendData("DELETE FROM stok_ WHERE _kodeBarang = '$kodeBarang'");
	}
?>