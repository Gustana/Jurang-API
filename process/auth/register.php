<?php
    require_once '../../helper/database.php';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $db = new Database();

        $email = $_POST['email'];
        $pass = $_POST['password'];

        $encryptedPass = password_hash($pass, PASSWORD_DEFAULT);        

        $db->sendUniqueData("INSERT INTO user_(_email, _password) VALUES('$email', '$encryptedPass')", "SELECT _email FROM user_ WHERE _email = '$email'");
    }    

?>