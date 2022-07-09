<?php

	//匿名函数
	
	//定义基本匿名函数
	$func = function(){
		//函数体
		echo 'hello word';
		};
		
	//调用匿名函数，可变函数
	$func();
	
	echo '<br/>';
	//查看变量内容
	var_dump($func);
	
	echo '<hr/>';
	
	//闭包函数
	/*function display(){
		//定义变量：局部变量
		$name = __FUNCTION__;
		//定义匿名函数
		$innerfunction = function() use($name){	//use就是将外部变量（局部）保留给内部使用
				//函数内部的函数
				echo $name;
			};
		//调用函数
		$innerfunction();
		}
		
	//调用函数
	display();*/
	
	echo '<hr/>';
	//闭包函数
	function display1(){
		//定义变量：局部变量
		$name = __FUNCTION__;
		//定义匿名函数
		$innerfunction = function() use($name){	//use就是将外部变量（局部）保留给内部使用
				//函数内部的函数
				echo $name;
				return $name;
			};
		//调用函数
		return $innerfunction();
		}
		
	//调用函数
	
	$closure = display1();
	$closure();