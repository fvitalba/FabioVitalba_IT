<?php
	session_start();
	
	require_once("scripts/database.php");
	include("scripts/dropdown.php");
	
	$database = new database();
	/*
	if(isset($_GET["pg"]))	{
		$page = mysql_real_escape_string($_GET["pg"]);
	}	else	{
		$page = "home";
	}
	
	if (isset($_GET["msg"])) {
		$msg = mysql_real_escape_string($_GET["msg"]);
	}	else	{
		$msg = $msg;
	}*/
?>

<!DOCTYPE html> 
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta http-equiv="Content-Language" content="en" />
		<title>Fabio Vitalba</title>
		<link rel="stylesheet" type="text/css" href="style/standard.css">
	</head>
	
	<body>
		<!-- -->
		<header>
			<!-- -->
			<h1>Fabio Vitalba</h1>
		</header>

		<nav>
			<!-- -->
		</nav>

		<section>
			<!-- -->
			<article>
				<!-- -->
					<h2>Title 2</h2><br />
					<h3>Title 3</h3><br />
					<h4>Title 4</h4><br />
				<p>
					Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
				</p>

				<p class="code">
					Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
				</p>
			</article>
		</section>

		<aside>
			<!-- -->
		</aside>

		<footer>
			<!-- -->
		</footer>
	</body>

</html>