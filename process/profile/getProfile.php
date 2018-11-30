<?php
	require_once '../../helper/database.php';

	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$idUser = $_POST['id'];

		$db = new Database();

		$db->getData("SELECT _email FROM user_ WHERE _email = ''");
	}

?>