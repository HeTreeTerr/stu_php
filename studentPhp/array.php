<?php
	
	//php数组
	
	//定义数组：array
	$arr1 = array('1',2,'hello');
	
	var_dump($arr1);
	
	echo '<hr/>';
	
	//定义数组：[]
	$arr2 = ['1',2,'hello'];
	
	var_dump($arr2);
	
	echo '<hr/>';
	//隐形数组：
	$arr3[] = 1;
	$arr3[10] = 100;
	$arr3[] = '1';
	$arr3['key'] = 'key';
	
	var_dump($arr3);
	echo '<hr/>';
	
	//特殊下标转换
	$arr4[false] = false;
	$arr4[true] = true;
	$arr4[NULL] = NULL;
	var_dump($arr4);