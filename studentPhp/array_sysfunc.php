<?php

	//php数组相关函数
	
	//排序函数
	$arr = array(3,1,5,2,0);
	
	echo '<pre>';
	
	//$sort_arr = sort($arr);
	//$rsort_arr = rsort($arr);
	//$asort_arr = asort($arr);
	//$arsort_arr = arsort($arr);
	//ksort($arr);
	//krsort($arr);
	shuffle($arr);
	print_r($arr);
	
	echo '<hr/></pre>';
	
	//指针函数
	$arr = array(3,1,5,2,0);
	
	echo current($arr),'<br/>';
	echo key($arr),'<br/>';
	
	echo next($arr),' ',next($arr),'<br/>';
	echo prev($arr),'<br/>';
	echo end($arr),' ',reset($arr);
	echo '<hr/><pre>';
	
	//其他函数
	
	//模拟数据结构：栈和队列
	$arr = array();
	
	//栈：先压栈后出栈：都是从一段出来
	//前面：array_shift/array_unshift
	//后面：array_push/array_pop
	//压栈
	array_push($arr,3);
	array_push($arr,2);
	array_push($arr,1);
	var_dump($arr);
	//出栈
	echo array_pop($arr),array_pop($arr),array_pop($arr),'<br/>';
	
	//队列
	//后进前出
	$arr = array();
	//入队
	array_unshift($arr,3);
	array_unshift($arr,2);
	array_unshift($arr,1);
	//出队
	echo array_pop($arr),array_pop($arr),array_pop($arr),'<br/>';
	echo '<hr/>';
	
	$arr = array(1,2,3,6,5);
	print_r(array_reverse($arr)); //数组元素反过来
	echo '<br/>';
	var_dump(in_array(6,$arr));
	var_dump(in_array(10,$arr));
	
	$arr = array(1,2,'name' => 'Tom',6,5);
	print_r(array_keys($arr));
	print_r(array_values($arr));