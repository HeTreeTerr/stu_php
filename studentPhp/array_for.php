<?php

	//for遍历循环数组
	
	//数组特点：索引数组，下标规律
	$arr = array(1,2,3,4,5,6,7,8,9,10);
	
	for($i = 0;$i < count($arr);$i++){
		echo 'key is: ',$i,'and value is',$arr[$i],'<br/>';
		}