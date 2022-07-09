<?php

	//接收数据
	echo '<pre>'; //原样输出
	
	var_dump($_GET); //GET方式提交的数据
	
	echo '<hr>';
	
	var_dump($_POST); //POST方式提交的数据
	
	echo '<hr>';
	
	var_dump($_REQUEST); //GET或者POST方式提交的数据,在request中，post会覆盖get提交的同name数据。