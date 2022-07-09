<?php

	//字符串函数
	$str = 'abcd e f ';
	
	var_dump(trim($str));
	echo '<hr/>';
	//字符串截取
	echo substr($str,1,3),'<br/>';
	
	echo strstr($str,'c'),'<br/>';
	echo '<hr/>';
	//字符串大小写
	echo strtoupper($str),'<br/>';
	
	echo ucfirst($str),'<br/>';
	
	$str = '123a123a123a';
	$age = 50;
	$name = 'TOM';
	
	echo '<hr/>';
	//查找位置
	echo strpos($str,'a'),'<br/>';
	
	echo strrpos($str,'a'),'<br/>';
	
	echo '<hr/>';
	//字符替换
	echo str_replace('a','b',$str);
	echo '<hr/>';
	
	//格式化输出
	echo sprintf('你好，今年我%d岁，我叫%s',$age,$name);
	echo '<hr/>';
	//其他字符串函数
	$str = 'abcdefg';
	echo str_repeat($str,5),'<br/>';
	echo str_shuffle($str);