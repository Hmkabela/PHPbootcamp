#!/usr/bin/php
<?php
	function ft_split($str)
	{
		$s = preg_replace('~\s+~', ' ', $str);
		$ar = explode(' ', trim($s, ' '));
		natcasesort($ar);
		return ($ar);
	}
?>
