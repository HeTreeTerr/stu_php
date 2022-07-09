<?php

	//php常量
	
	
	//使用函数定义常量
	define('PI',3.14);
	
	//使用const关键字定义
	const PII = 3;
	
	//常量输出
	echo PI,'<br/>',PII;
	
	//定义特殊变量
	define ('-_-','smile');
	
	//特殊变量名不能用const声明
	//const _-_ = 'jojo';
	
	//访问特殊常量名
	//echo -_-;  错误
	echo '<br/>',constant('-_-');
	
	echo '<hr/>';
	
	//变量不区分大小写
	define('AA',5,true);
	
	echo AA,'<br/>',Aa;
	
	//系统常量
	echo '<hr/>';
	echo PHP_VERSION,'<br/>',PHP_INT_SIZE,'<br/>',PHP_INT_MAX;
	
	//魔术常量
	echo '<hr/>';
	echo __DIR__,'<br/>',__FILE__,'<br/>',__LINE__,'<br/>';
	echo __LINE__;