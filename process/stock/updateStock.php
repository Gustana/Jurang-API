<?php
	require_once '../../helper/database.php';

	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$namaBarang = $_POST['namaBarang'];
		$kodeBarang = $_POST['kodeBarang'];
		$hargaBarang = $_POST['hargaBarang'];
		$jumlahBarang = $_POST['jumlahBarang'];

		$db = new Database();

		$db->sendData("UPDATE stok_ set _namaBarang = '$namaBarang', _hargaBarang = $hargaBarang, _jumlahBarang = $jumlahBarang WHERE _kodeBarang = '$kodeBarang'");

	}

?>