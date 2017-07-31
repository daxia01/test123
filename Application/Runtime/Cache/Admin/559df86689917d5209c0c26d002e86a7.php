<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		         <meta charset="UTF-8">
		<title>Document</title>
		<!-- 以移动设备为优先  -->
		<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
		<!--引入外部的bootstrap中的css文件 -->
		<link rel="stylesheet" href="/Public/Admin/css/bootstrap.min.css">
		<!-- 先引入jq之后再引入js文件  -->
		<script src="/Public/Admin/js/jquery.min.js"></script>
		<!--再引入bootstrap.min.js文件   -->
		<script src="/Public/Admin/js/bootstrap.min.js"></script>
		<meta charset="UTF-8">
		<title></title>
		<style type="text/css">  
img{ max-width:100%;}  
video{ max-width:100%; height:auto;}  
header ul li{ float:left; list-style:none; list-style-type:none; margin-right:10px;}  
header select{display:none;}  
@media (max-width:960px){  
    header ul{ display:none;}  
    header select{ display:inline-block;}  
}  
</style>  
	</head>
	<body>
  
  
<header>  
    <ul>  
        <li><a href="#" class="active">Home</a></li>  
        <li><a href="#">AAA</a></li>  
        <li><a href="#">BBB</a></li>  
        <li><a href="#">CCC</a></li>  
        <li><a href="#">DDD</a></li>  
    </ul>  
    <select>  
        <option class="selected"><a href="#">Home</a></option>  
        <option value="/AAA">AAA</option>  
        <option value="/BBB">BBB</option>  
        <option value="/CCC">CCC</option>  
        <option value="/DDD">DDD</option>  
    </select>  
</header>  
  
</body>  


	
</html>