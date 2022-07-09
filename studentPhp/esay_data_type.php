<?php

	//简单数据类型：整型、浮点型和布尔型
	
	//定义四种整型数据
	
	$a1 = 110;
	$a2 = 0b110;
	$a3 = 0110;
	$a4 = 0x110;
	
	echo $a1,'~',$a2,'~',$a3,'~',$a4; //默认php输出数值都会自动转换为10进制输出
	/*
		十进制转二进制
	*/
	echo '<br/>';
	var_dump(decbin($a1));
	echo '<br/>',decbin($a1);
	
	//浮点数
	echo '<hr/>';
	$f1 = 1.23;
	$f2 = 1.23e10;
	$f3 = PHP_INT_MAX + 1;
	var_dump($f1,$f2,$f3);
	
	$f4 = 0.7;
	$f5 = 2.1;
	$f6 = $f5/3;
	echo '<hr/>',$f6,'<br/>',$f4,'<br/>';
	var_dump($f4 == $f6);
	
	//布尔类型
	$b1 = true;
	$b2 = false;
	//echo '<hr/>',$b1,'<br/>',$b2,'<br/>'; //错误
	var_dump($b1,$b2);