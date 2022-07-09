<?php
	
	//运算符
	
	//算术运算符
	
	$a = $b = 10;  //连贯赋值运算：两个不同的变量
	
	$c = 0;
	
	//var_dump($a / $b);  //错误，除数不能为0
	var_dump($a / $b);
	echo '<br/>';
	
	//比较运算符
	$a = '123';
	$b = 123;
	
	//判断相等
	var_dump($a == $b);
	echo '<hr/>','全等于：';
	var_dump($a === $b);
	echo '<hr/>';
	
	//逻辑运算
	$a = 'weekend';
	$b = 'good';
	
	//连接运算
	$a = 'hell';
	$b = 'o';
	$c;
	echo '<br/>',$a.$b;
	$a.=$b;
	echo '<br/>',$a;
	
	//错误抑制符
	$a = 10;  //连贯赋值运算：两个不同的变量
	
	$c = 0;
	@($a%$b);
	
	//三目运算
	echo '<hr/>';
	$a = 10;
	$b = $a >10 ? 100 : 10;
	echo $b;
	
	//自操作符
	echo '<hr/>';
	
	$a = $b = 1;
	
	echo $a++,'<br/>';
	echo ++$b,'<br/>';
	echo $a,'---------',$b;
	
	$a = 5;
	$b = 10;
	$a += $b;
	echo '<br/>',$a;
	