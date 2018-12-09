<?php
	require_once '../../helper/database.php';

	$serverPath = "http://192.168.0.103/jurang/";

	if ($_SERVER['REQUEST_METHOD'] == 'POST') {

		$email = $_POST['email'];
		$image = $_POST['image'];

		$imagePath = "../../images/profileImages/" . $email . ".jpg";
		$imageUrl = $serverPath . "images/profileImages/" . $email . ".jpg";

		$db = new Database();

		$result = $db->sendData("UPDATE user_ set _image = '$imageUrl' WHERE _email = '$email'");

		if ($result) {
			file_put_contents($imagePath, base64_decode($image));
		}

	}
?>