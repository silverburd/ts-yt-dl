<!DOCTYPE html>
<html>
<head>
	<title>TimeShifter-YouTube-DownLoader</title>
	<link rel="stylesheet" type="text/css" href="./style/main.css">
</head>
<div id="banner">
	<h1>TS-YT-DL</h1>
	<?php
	session_start();
	if (isset($_SESSION['username'])) {
	echo "<form class=\"search\" action=\"search.php\" method=\"GET\">
			<input class=\"search_input\" type=\"text\" name=\"search\" placeholder=\"Search\">
			<input class=\"search_submit\" type=\"submit\" value=\"Search\">
			</form>
		<a class=\"logout\" href=\"./logout.php\">Logout</a>
		</div>
		<nav>
				<ul>
					<li><a href=\"index.php\">Home</a></li>
					<li><a href=\"\">Videos</a></li>
					<li><a href=\"\">My Account</a></li>
					<li><a href=\"\">Link</a></li>
				</ul>
			</nav>";
	} else {
		echo "</div>";
	}
	?>
