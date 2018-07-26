<?php

function validate($request, $rules) {
	$error = '';

	
	foreach ($request as $key => $value) {
		/*
		 *	It will validate empty values
		 */
		if(in_array($key,  $rules['required']) && $value == '')  {
			$error .= ucfirst($key) ." is required! <br />";
		}
		
		/*
		 *	It will validate min values
		 */
		if(array_key_exists($key, $rules['min']) && strlen($value) < $rules['min'][$key] ) {
			$error .= ucfirst($key) ." should be 5 character long! <br />";	
		}

		/*
		 *	It will validate max values
		 */
		if(array_key_exists($key, $rules['min']) && strlen($value) > $rules['max'][$key] ) {
			$error .= ucfirst($key) ." should not be longer than 10 character! <br />";	
		}


	}
	return $error; 
}

function sql($query, $db)  {
		$result = '';
		try 
		{
			$result = $db->exec($query);
		} catch (PDOException $e) {
		    print "Error!: " . $e->getMessage() . "<br/>";
		    die();
		}
		$db = NULL;
		return $result;
}

function dd($result = 'You are here!') {
	echo "<pre>";
	print_r($result);
	echo "</pre>"; 
	die;
}

function dump($result = 'You are here!') {
	echo "<pre>";
	print_r($result);
	echo "</pre>"; 
}