<?php

	//数组排序算法：选择排序
	$arr = array(1,5,2,9,6,3,4);
	echo '<pre>原数组：';
	print_r($arr);
	echo '<hr/>';
	//1、确定交换次数：需要找数组长度对应的次数
	for($i = 0;$i < count($arr)-1;$i++){
		//2、假设当前第一个已经排好序
		$min = $i;//当前第一个数最小
		//3、拿该最小的取比较剩余的其他
		for($j = $i+1;$j < count($arr);$j++){
			//4、比较当前元素与选定最小的元素
			if($arr[$j] < $arr[$min]){
				$min = $j;
				}
			}
		//交换当前选定的值与实际的值
		if($min != $i){
			$temp = $arr[$i];
			$arr[$i] = $arr[$min];
			$arr[$min] = $temp;
			}
		echo '第',$i+1,'次排序：';
		print_r($arr);
		}
		echo '<hr/>';
		echo '最终结果：';
		print_r($arr);