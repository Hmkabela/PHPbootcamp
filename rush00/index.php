<html>
	<?php include 'install.php'; 
	?>	
	<form action="p.php" method="post">
	Username		<input type="text" name="login">
	<br>
	Password		<input type="password" name="pw">
	<br>
	<input type="submit" value="Submit">
	</form>
<?php
/*	$n = $_GET["login"];
	$p = $_GET["pw"];
	//setcookie("usrname", $n, time() + (86400 * 30), "/");
	$sql = "INSERT INTO  ourusers(usr, passwd) VALUES ($n, $p)";
	if (mysqli_query($con, $sql)) {
    echo "New record created successfully";
	} else {
	}
	mysqli_close($con);
*/?>
</html>
