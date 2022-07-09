<?php
	//变量
	
	//定义变量：在php中不需要任何关键字定义变量（赋值）
	$var1;//定义变量
	$var2 = 1;//定义同时赋值
	
	//访问变量
	echo $var2;
	
	//修改变量
	$var2 = 2;
	echo '<hr/>',$var2;
	
	//删除变量
	unset($var2);
	//echo $var2;
	
	//变量命名规则
	$var_1;$var_var;$_var1;
	
	//$1abc;
	//中文
	$中文 = 'china';
	echo $中文;
	
	//可变变量
	$a = 'b';
	$b = 'ccc';
	
	echo '<br/>';
	echo $a;
	echo $$a;
	//值传递
	$a1 = 1;
	$a2 = $a1;
	$a2 = 2;
	echo '<br/>',$a1,$a2;
	
	//引用
	$b1 = 1;
	$b2 = &$b1;
	
	$b2 = 2;
	echo '<br/>',$b1,$b2;
?>