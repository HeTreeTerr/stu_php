<?php
	//数组排序算法：冒泡排序
	
	$arr = array(1,4,2,9,7,5,8);
	
	echo '<pre>原数组：';
	print_r($arr);
	echo '<hr/>';
	//2、想办法让下面可以每次找出最大值的代码重复执行
	for($i = 0;$i < count($arr);$i++){
		echo '第',$i+1,'次比较：';
		//1、想办法将最大的值放到右边
		for($j = 0;$j < count($arr)-1-$i;$j++){
			//判断：两两相比
			//左边比右边大：交换
			if($arr[$j] > $arr[$j+1]){
				$temp = $arr[$j];
				$arr[$j] = $arr[$j+1];
				$arr[$j+1] = $temp;
				}
			}
		print_r($arr);
		}
	echo '最终结果：';
	print_r($arr);
	echo '</pre>';