<?php
	require_once '../../helper/database.php';

	$upload_path = "profileImages";

	$server_ip = "192.168.0.101";

	$upload_url = "http://".$server_ip."/jurang/images".$upload_path;

	$response = array();

	if ($_SERVER['REQUEST_METHOD'] == POST) {

		$imageName = $_POST['imageName'];
		$file =	$_FILES['image']['imageName'];

		$fileInfo = pathinfo($file);

		$extension = $fileInfo['extension'];

		$file_url = $upload_url.

	}
?>