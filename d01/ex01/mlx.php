#!/usr/bin/php
<?php
	$num1 = 0;
	$num2 = 0;
	while($num1 != 1000)
	{
		if($num2 == 99)
		{
			echo "X\n";
			$num2 = -1;
		}
		else
			echo "X";
		$num1++;
		$num2++;
	}
?>
