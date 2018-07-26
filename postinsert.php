<?php
	session_start();
	if(!empty($_REQUEST)) {

		$name = $_REQUEST['name'];
		$address = $_REQUEST['address'];
		$email	 = $_REQUEST['email'];

		if($name == '') 
		{
			$_SESSION['name'] =  "Name is required! <br />";
		} 

		if($address == '') {
			$_SESSION['address'] =  "Address is required! <br />";
		}

		if($email == '') 
		{
			$_SESSION['email'] = "Email is required!";
		}

	}

	header('location:insert.php');

?>