<?php

	//分支结构：switch分支
	
	//根据日期做不同的事情
	$day = 1;
	
	//从1到7做不同的事情
	switch($day){
		//$day条件一定是个具体的值
		case 1:
			echo '1';
			break;
		case 2:
			echo '2';
			break;
		case 3:
			echo '3';
			break;
		case 4:
			echo '4';
			break;
		default:
			break;
		}