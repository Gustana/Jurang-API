<?php
    require_once '../../helper/database.php';

	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	    	$email = $_POST['email'];
	    	$pass = $_POST['password'];

	    	$db = new Database();	    	

	    	$results = $db->getData("SELECT _password FROM user_ WHERE _email = '$email'", "Wrong email or password");

	    	if ($results) {
	    		foreach ($results as $key => $result) {
		    		$verifyPass = password_verify($pass, $result['_password']);

		    		if ($verifyPass) {
		    			echo $db->encodeResponse("0", $email);
		    		}else{
		    			echo $db->encodeResponse("1", "Wrong email or password");
		    		}
	    		}
	    	}
	    }    

?>