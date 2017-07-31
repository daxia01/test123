<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
	</head>
	<body>
		//配置文件 替换机制可以查看行为文件
		//ContentReplace.Behaviour.class.php<br>
		//域名后面到分组<br>
		/index.php/Admin<br>
		//域名后面到控制器结束的路由<br>
		/index.php/Admin/Public<br>
		//域名开始到方法名结束<br>
		/index.php/Admin/Public/test3<br>
		//站点跟目录的public目录<br>
		__PUNLIC__<br>
		//域名开始一直到路由最后<br>
		/index.php/Admin/Public/test3<br>
		//方便引入js cs img等静态文件目录  <br>
		/Public/Admin
	</body>
</html>