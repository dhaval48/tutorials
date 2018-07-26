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
						if(isset($_SESSION['name'])) {
							echo $_SESSION['name'];
							unset($_SESSION['name']);
						} 

						if(isset($_SESSION['address'])) {
							echo $_SESSION['address'];
							unset($_SESSION['address']);
						} 

						if(isset($_SESSION['email'])) {
							echo $_SESSION['email'];
							unset($_SESSION['email']);
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

