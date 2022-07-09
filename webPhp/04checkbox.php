<?php

	//乱码解决
	header('Content-type:text/html;charset=utf-8');
	
	echo '<pre>';
	//接收checkbox
	print_r($_POST);
	
	//将复选框存储到数据库
	//表格设计
	/*
		id  name  gender  hobby
		1   mark  男       篮球，足球，乒乓球
	*/
	//$hobby = $_POST['hobby'];
	$hobby = isset($_POST['hobby']) ? $_post['hobby'] : array();
	//echo('爱好：<br/>');
	//print_r($hobby);
	
	//数组转换成有格式的字符串
	$hobby_string = implode($hobby,'|');
	echo $hobby_string;
	
	//假设$hobby_string是从数据取出来的字段
	var_dump(explode('|',$hobby_string));