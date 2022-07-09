<?php
	//处理脚本让浏览器按照指定字符集解析的方法
	header('Content-type:text/html;charset=UTF-8');
	
	//自定义错误处理机制
	
	//自定义函数
	/*
		@param1 $errno,是系统提供的错误代码：E_ALL,E_NOTICE
		
	*/
	function my_error($errno,$errstr,$errfile,$errline,$errcontext){
		//判断，当前会碰到的错误有哪些
		if(!(error_reporting()&$errno)){	//error_reporting没有参数代表获取当前系统错误处理对应的级别
			return false;
			}
		//开始判断错误类型
		switch($errno){
			case E_ERROR:
			case E_USER_ERROR:
				echo ' fatal error in file '.$errfile.' on line '.$errline.'<br/>';
				echo ' error info: '.$errstr;
				break;
				
			case E_WARNING:
			case E_USER_WARNING:
				echo ' waring error in file '.$errfile.' on line '.$errline.'<br/>';
				echo ' error info: '.$errstr;
				break;
				
			case E_NOTICE:
			case E_USER_NOTICE:
				echo ' notice error in file '.$errfile.' on line '.$errline.'<br/>';
				echo ' error info: '.$errstr;
				break;
			}
			
			return true;
		}
		
		//报错
		echo $a;
		
		//修改错误机制
		set_error_handler('my_error');
		
		echo $a;