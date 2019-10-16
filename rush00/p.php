<html>
<body>
<?php
$n = $_POST['login'];
$p = $_POST['pw'];
$sql = ("INSERT INTO  ourusers (usr, passwd)
	VALUES ('".$n."', '".$p."')");
mysqli_query($con, $sql);
mysqli_close($con);
?>
Welcome <?php echo $n; ?><br>
Your password is: <?php echo $p?>
</body>
</html>
