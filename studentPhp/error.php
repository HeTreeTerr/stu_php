<?php

	//处理脚本让浏览器按照指定字符集解析的方法
	header('Content-type:text/html;charset=UTF-8');

	//php错误处理
	
	//书写代码
	$a = 100;
	
	//输出
	echo $a;
	
	//除法错误
	$b = 0;
	if($b == 0){
		//人为触发错误
		trigger_error('被除数不能为0');
		echo 'dudu<br/>';
		trigger_error('被除数不能为0',E_USER_ERROR);
		echo 'jojo<br/>';
		}
	echo $a / $b;