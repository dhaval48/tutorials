<?php

echo "hell";
	session_start();

		$servername = "localhost";
		$username = "root";
		$password = "root";
		$dbname = "testing";

		//  create connection
		try {
			$conn = new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			
			die;
		} catch (Exception $e) {
			die("Connection Failed".$conn->connect_error);
		}
	
?>