<?php

	//字符串长度
	header('Content-type:text/html;charset=utf-8');
	
	//定义字符串
	$str1 = 'abceefdfsdfs';
	$str2 = '你好中国123';  //中文在utf-8字符集下占3个字节
	
	echo strlen($str1).'<br/>';
	echo strlen($str2).'<br/>';
	
	echo '<hr/>';
	//使用mbstring扩展
	echo mb_strlen($str1),'<br/>',mb_strlen($str2),'<br/>',mb_strlen($str2,'utf-8'),'<br/>',mb_strlen($str2,'ASCII');