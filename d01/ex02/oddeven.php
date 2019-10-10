#!/usr/bin/php
<?php
	$nn = fopen("php://stdin", "r");
	while($nn && !feof($nn))
	{
		echo "Enter a number: ";
		$num = fgets($nn);
		$num = str_replace("\n", "", $num);
		if(is_numeric($num))
			echo ($num % 2 == 0) ? "The number $num is even" :  "The number $num is odd";
		else
			echo "'$num' is not a number";
		echo "\n";
	}
?>
