<?php
	require_once '../../helper/database.php';

	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$namaBarang = $_POST['namaBarang'];
		$kodeBarang = $_POST['kodeBarang'];
		$hargaBarang = $_POST['hargaBarang'];
		$jumlahBarang = $_POST['jumlahBarang'];

		$db = new Database();

		$db->sendData("INSERT INTO stok_(_namaBarang, _kodeBarang, _hargaBarang, _jumlahBarang) VALUES('$namaBarang', '$kodeBarang', '$hargaBarang', '$jumlahBarang')");
	}
?>