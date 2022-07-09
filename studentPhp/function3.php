<?php

	//函数返回值
	
	//定义函数
	function display(){
		//输出
		echo __FUNCTION__; //输出当前函数的名字
		
		}
	
	var_dump(display());
	
	//加法运算
	function add($num1,$num2){
		return $num1 + $num2;
		}
		
	$res = add(10,5);
	echo '<br/>',$res;
	
	//将结果提交给另外包含的文件
	return 'hello world';
	
	echo '<br/>',$res;