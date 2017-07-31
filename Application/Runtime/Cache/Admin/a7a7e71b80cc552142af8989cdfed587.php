<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
	</head>
	<body>
		变量a=<?php echo ($a); ?>,变量b=<?php echo ($b); ?><br>
		a+b=<?php echo ($a+$b); ?><br>
		a-b=<?php echo ($a-$b); ?><br>
		a*b=<?php echo ($a*$b); ?><br>
		a/b=<?php echo ($a/$b); ?><br>
		a%b=<?php echo ($a%$b); ?><br>
		<!--
			a++ 先输出a，在自增  ++a 是先自增在输出
        -->
		a++=<?php echo ($a++); ?> ++a=<?php echo ++$a;?><br>
		b--=<?php echo ($b--); ?> --b=<?php echo --$b;?><br>
		<hr/>
		<hr />
<?php
 $a=10; $b=$a++ + ++$a; echo $a; echo $b; ?>
		
		
		
	</body>
</html>