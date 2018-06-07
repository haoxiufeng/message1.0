<?php
	$a=1;
	$b='abc';
	$c='1abc';
	var_dump($a==$b);//返回false,因为$a与$b没有相同的值，所以返回false。
	var_dump($a==$c);//返回true，是因为$a中的1与$c中的1也就是开始值进行比较，拥有了相同的值，剩下的ABC择是强制转换为整型。
	var_dump($a===$c);//返回false,因为===为恒等于，不止判断值，同时严格按照类型比较,
?>