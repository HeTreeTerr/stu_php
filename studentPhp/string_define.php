<?php

	//php字符串：定义
	
	//引号定义
	$str1 = 'hello';
	$str2 = "hello";
	
	var_dump($str1,$str2);
	echo '<br/>';
	//结构化定义
	//heredoc结构化定义
	$str3 = <<<EOD
		hello
EOD;
	//nowdoc结构
	$str4 = <<<'EOD'
		hello
EOD;
		
	var_dump($str3,$str4);
	
	print('<br/>');
	
	//定义字符串识别转义字符
	$str1 = 'abc\r\ndef\t\'\"\$fg';
	$str2 = "abc\r\ndef\t\'\"\$fg";
	echo $str1,'<br/>',$str2;
	
	echo '<br/>';
	$a = 'hello';
	//变量识别
	$str1 = 'abc $a dfg';  //单引号不识别变量
	$str2 = "abc $a dfg";
	$str3 = "abc$adfg";
	$str4 = "abc{$a}dfg";
	echo $str1,'<br/>',$str2,'<br/>',$str3;
	
	$str1 = <<<EOD
	//这是弹出内容
	<script>
    	alert('$str1');
    </script>
EOD;

	echo $str1;