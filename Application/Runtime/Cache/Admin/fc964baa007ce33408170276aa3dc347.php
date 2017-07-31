<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN"
"http://www.w3.org/TR/html4/strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<title>简单计算器的实现</title>
	</head>
	<body>
   <table border="0" width="300" align="center">
   	<form action="<?php echo u('Jsq/test');?>" method="post">
   	<caption> <h2>简单计算器的实现</h2></caption>
   	<tr>
   		<td>
   			<input type="text"  name="num1" value="<?php echo ($num1); ?>"/>
   		</td>
   		<td>
   			<select  name="ysf" > 
   				<option value="+"<?php if($ysf=="+"): ?>selected<?php endif; ?> > + </option>
   				<option value="-"<?php if($ysf=="-"): ?>selected<?php endif; ?> > - </option>
   				<option value="x"<?php if($ysf=="x"): ?>selected<?php endif; ?> > x </option>
   				<option value="/"<?php if($ysf=="/"): ?>selected<?php endif; ?> > / </option>
   			    <option value="%"<?php if($ysf=="%"): ?>selected<?php endif; ?> > % </option>
   			</select>
   		</td>
   		<td>
   			<input type="text"  name="num2" value="<?php echo ($num2); ?>" />
   			
   		</td>
   		<td>
   			<input type="submit" name="sub" value="计算"/>
   		</td>	
   	</tr>
   	<tr>
   		<td colspan="4">
   			
   			计算结果为：<?php echo ($num1); echo ($ysf); echo ($num2); ?>=<?php echo ($sub); ?>
   			<br>
   			<?php echo ($errormess); ?>
   			
   			
   		</td>
   	</tr>
   	
   </form>
   </tablde>
	</body>
</html>