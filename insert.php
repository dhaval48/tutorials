<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>CSS Template</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="public/css/style.css">
</head>
<body>

<header>
	<div class="left">
		<p> LOGO </p>
	</div>
	<div>
		<ul class="right">
			<li> <a href="index.php"> Home</a> </li>
			<li> <a href="colspan.php">About Us </a></li>
			<li> <a href="hlist.php">Contact Us</a></li>
		<ul>
	</div>
</header>

<section>
		<div>
			<article>
				<br>
			<form method="post" action="postinsert.php">
				<div class='errors'>
					<?php 
						if(isset($_SESSION['success'])) {
							echo $_SESSION['success'];
							unset($_SESSION['success']);
						} 

						if(isset($_SESSION['error'])) {
							echo $_SESSION['error'];
							unset($_SESSION['error']);
						} 

					?>
				</div>
				Name: <input type="text" name="name"> <br> <br>
				Address: <input type="text" name="address"> <br> <br>
				Email: <input type="text" name="email"> <br> <br> <br>
				<button type="submit">Submit</button> <br>
			</form>	
			</article>
			
		</div>
</section>

<footer>
	<div>
	© copyright 2018
	</div>
</footer>

</body>
</html>

