<?php
	$lhost = "localhost";
	$usr = "root";
	$passwd= "hmkabela";
	$db = "eStore";
	$con = mysqli_connect($lhost, $usr, $passwd,$db);
	if (!$con)
	{
		die("Connection failed: " . mysqli_connect_error());
	}
?>
