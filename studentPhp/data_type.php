<?php

	//数据类型
	
	//创建数据
	$a = 'abc1.1.1';
	$b = '1.1.1abc';
	
	//自动转换
	echo $a+$b;  //算数+运算，系统先转换为数值类型（整型和浮点型），然后运算
	
	//强制转换
	echo '<br/>',(float)$a,'<br/>',(float)$b;
	
	//类型判断
	echo '<hr/>';
	
	//echo is_int($a); //错误
	var_dump(is_int($a));
	
	echo '<hr/>';
	echo gettype($a);
	
	//设置类型
	echo '<br/>';
	var_dump(settype($b,'int'));
	echo gettype($b),$b;