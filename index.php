<?php 
	$y = 'zero';
	$y .= 'orez';
	echo $y;
	
	$lastday = mktime(0, 0, 0, 3, 0, 2008);
	echo strftime("2008年最后一天是：%d", $lastday) . "<br />";

	echo "<a href='index.html'>index.html</a>";
	
?>