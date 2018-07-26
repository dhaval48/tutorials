<?php
	require_once('includes/include.php');
	

	$rules = ['required' => ['name'],
				'min' => ['name' => 5],
				'max' => ['name' => 10]
				];

	$error = validate($_REQUEST, $rules);
	dd();
	if($error == '') {

		extract($_REQUEST);

		$query = "INSERT INTO studentinfo (name,address,email, mobile, city) Values('$name','$address','$email', '99120912', 'rajkot')";

		sql($query, $db);

		//set session for sucess
		$_SESSION['success'] = "Created!";
	} else {

		//set session for error
		$_SESSION['error'] = $error;
	}

	header('location:insert.php');

?>