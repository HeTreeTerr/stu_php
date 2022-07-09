<?php

	//系统函数
	
	//输出相关
	echo print('hello word<br/>');
	
	print 'hello word<br/>';
	
	$a = 'hello word<br/>';
	
	print_r($a);
	
	echo '<hr/>';
	
	//时间函数
	echo date('Y 年 m 月 d 日 H:i:s<br/>',12345678),'<br/>';
	
	echo time(),'<br/>';
	
	echo microtime(),'<br/>';
	
	echo strtotime('tomorrow 10 hours');
	
	echo '<hr/><pre>';
	
	//函数相关的函数
	function test($a,$b){
		//获取指定参数
		var_dump(func_get_arg(1));
		echo '<br/>';
		
		//获取所有参数
		var_dump(func_get_args());
		echo '<br/>';
		
		//获取参数数量
		var_dump(func_num_args());
		echo '<br/>';
		}
	
	//调用函数
	test(1,2);
	
	var_dump(function_exists('test'));	