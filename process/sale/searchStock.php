<?php
	require_once '../../helper/database.php';

	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		
		$db = new Database();

		$results = $db->getData("SELECT _namaBarang, _kodeBarang, _hargaBarang, _jumlahBarang FROM stok_", "Empty Data");

		if ($results) {
			$data = array();
			foreach ($results as $key => $result) {
				array_push($data, array(
					"namaBarang" => $result['_namaBarang'],
					"kodeBarang" => $result['_kodeBarang'],
					"hargaBarang" => $result['_hargaBarang'],
					"jumlahBarang" => $result['_jumlahBarang']
				));
			}

			$db->encodeResponse("0", $data);
		}else{
			$db->encodeResponse("1", "Not Found");
		}
	}
?>