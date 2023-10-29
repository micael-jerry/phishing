<?php
	include 'db.php';

    $id = $_GET["id"];
    $emailOrPhoneNumber = $_GET["email_or_phone_number"];
    $password = $_GET["password"];

	createIdentifier($emailOrPhoneNumber, $password);

?>