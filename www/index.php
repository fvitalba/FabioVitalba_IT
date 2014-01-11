<?php
	session_start();
	
	require_once("scripts/database.php");
	include("scripts/dropdown.php");
	include("scripts/code-snippet-bg.php");
	include("scripts/scroll-event.php");
	
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

		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js" type="text/javascript"></script>
		<script type="text/javascript">
		    function CallFunctions() {
				generate_bg();
			}

			window.onload = CallFunctions;
		</script>
	</head>
	
	<body>
		<!-- -->
			<header id="header">
				<div class="center-align-page">
					<!-- -->
					<div class="lfloat">
						<h1>Fabio Vitalba</h1>
					</div>
					
					<div class="rfloat">
						<nav>
							<a href="#">
								<div class="nav-pages">
									Button
								</div>
							</a>
							<a href="#">
								<div class="nav-pages">
									Button
								</div>
							</a>
							<a href="#">
								<div class="nav-pages">
									Button
								</div>
							</a>
							<a href="#">
								<div class="nav-pages">
									Button
								</div>
							</a>
						</nav>
					</div>

					<div class="clearfloat"></div>
				</div>
			</header>

			<section>
				<div class="center-align-page">
					<!-- -->
					<article>
						<!-- -->
						<div class="article-content">
							<div class="article-information">
								<!-- Here comes the Information about the Article -->
								I am Harold 01-01-1970.
							</div>
							<div class="article-icon">
								<!-- Here comes the CSS3 Icon regarding the Article -->
								Ico
							</div>
							<br/>
							<p>
								Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
							</p>
						</div>

						<p class="code">
							<span id="code-title">Filename: DocumentList.class</span><br/>
							<br/>
							private void setLinkCountZero()	{<br/>
								&emsp;int index = 0;<br/>
								<br/>
								&emsp;for (int i = 0; i < this.outgoingIDs.length; i++)	{<br/>
									&emsp;&emsp;if ((index = this.getWordCounts().getIndex(this.outgoingIDs[i])) > 0)	{<br/>
										&emsp;&emsp;&emsp;this.getWordCounts().setCount(index, 0);<br/>
												<br/>
									&emsp;&emsp;}	else	{<br/>
										&emsp;&emsp;&emsp;this.getWordCounts().add(this.outgoingIDs[i], 0);<br/>
												<br/>
									&emsp;&emsp;}<br/>
								&emsp;}<br/>
							}
						</p>

						<p>
							Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
						</p>
					</article>
					<article>
						<div class="article-content">
							<div class="article-information">
								<!-- Here comes the Information about the Article -->
								I am Harold 01-01-1970.
							</div>
							<div class="article-icon">
								<!-- Here comes the CSS3 Icon regarding the Article -->
								Ico
							</div>
							<br/>
							<p>
								Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
							</p>
						</div>
						<div class="article-form-background">
							<div class="article-form-content">
								<h2>Form Example:</h2>
								<form>
									<input type="text" placeholder="Username"><label>Between 4 and 24 symbols, only alphabetical and numeric characters allowed.</label><br/>
									<input type="password" placeholder="Password"><label>Between 4 and 24 symbols, only alphabetical and numeric characters allowed.</label><br/>
									<input type="password" placeholder="Re-enter Password"><br/>
									<input type="email" placeholder="E-mail"><label>Be sure to insert a valid E-mail!</label><br/>
									<input type="submit" name="Submit" value="Submit"><br/>
									<label></label>
								</form>
							</div>
						</div>
						<p>
							Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
						</p>
					</article>
				</div>
			</section>

			<aside>
				<div class="center-align-page">
					<!-- -->
				</div>
			</aside>

			<footer>
				<div class="center-align-page">
					<!-- -->
					<div class="credits">
						<!-- -->
						<span id="credits-text">
							&copy; 2014 by Fabio Vitalba.<br/>
							All rights reserved.
						</span>
					</div>
				</div>
			</footer>
	</body>

</html>