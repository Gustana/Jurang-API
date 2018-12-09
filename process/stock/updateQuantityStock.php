<?php
	require_once '../../helper/database.php';

	if ($_SERVER['REQUEST_METHOD'] == 'POST') {

		$itemCode = $_POST['itemCode'];
		$itemStockLeft = $_POST['itemStockLeft'];

		$db = new Database();

		$db->updateData("UPDATE stok_ SET _jumlahBarang = $itemStockLeft WHERE _kodeBarang = '$itemCode'")->encodeResponse("0", "Success");

	}

?>