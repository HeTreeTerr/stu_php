<?php

	//函数参数
	
	//定义函数
	function add($arg1,$arg2){ //形参可以有多个，使用逗号分隔即可
		//函数体：可以直接使用形参运算
		echo $arg1 + $arg2,'<br/>';
		}
		
	//调用函数
	$num1 = 10;
	
	add($num1,20); //传入的实参，可以是变量或者其他值得表达式（变量、常量、运算符计算结果）
	
	//函数的默认值
	function jian($num1 = 0,$num2 = 0){ //当前的$num1是形参，在编译时不执行即使执行也是在减函数的内部，不会与外部的$num1变量冲突
		echo $num1 - $num2,'<br/>';
		}
		
	//调用：默认值如果存在，可以不用传入
	jian($num1,5);
	echo $num1,'<br/>';
	
	//引用传值
	function display($a,&$b){
		//修改形象的值
		$a = $a * $a;
		$b = $b * $b;
		echo '<hr/>',$a,'<br/>',$b,'<br/>';
		}
		
	//定义变量
	$a = 10;
	$b = 5;
	
	//调用函数
	display($a,$b);
	echo '<hr/>',$a,'<br/>',$b;
	
	//错误调用
	//display(10,5);