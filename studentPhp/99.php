<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>99乘法表</title>
</head>

<body>
	<table border="1">
    	<?php for($i = 1;$i < 10;$i++){?>
        <tr>
        	<?php for($j = 1;$j <= $i;$j++){?>
            <td>
            	<?php echo $i . '*' . $j . '=' .$i*$j; ?>
            </td>
            <?php }?>
        </tr>
        <?php }?>
    </table>
    <hr/>
    <table border="1">
    	<?php for($i = 1;$i < 10;$i++):?>
        <tr>
        	<?php for($j = 1;$j <= $i;$j++):?>
            <td>
            	<?php echo $i . '*' . $j . '=' .$i*$j; ?>
            </td>
            <?php endfor;?>
        </tr>
        <?php endfor;?>
    </table>
</body>
</html>