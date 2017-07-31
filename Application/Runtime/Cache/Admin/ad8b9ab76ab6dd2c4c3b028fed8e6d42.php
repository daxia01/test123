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
	</head>
	<body >
		<div class="container" style="background: #E6E6E6;">
			<!--
				行内显示所有表单的内容
            	<form class="form-inline">
            	.form-horizontal 表单的响应效果
            -->
            <form class="form-horizontal">
				<div class="form-group">
                   
                	<label class=" col-md-2 col-xs-2 col-sm-2 text-right" for="username">账号</label>
                	<div class="col-md-10 col-xs-10 col-sm-10 ">
                	<input type="text" name="username"  class="form-control">
                	</div>
                	
               
                </div>
                <div class="form-group">
				
				<label for="pwd" class=" col-md-2 col-xs-2 col-sm-2 text-right">密码</label>
				<div class="col-md-10 col-xs-10 col-sm-10 ">
				<input type="password" name="pwd" id="pwd"   class="form-control">
				</div>
				
				</div>
				<!--
                	复选框   不能选中disabled
                -->
				<div class="form-group">
					<label class="checkbox-inline "> <input type="checkbox" name="hobby">吃饭</label>
					<label class="checkbox-inline"> <input type="checkbox" name="hobby">睡觉</label>
					<label class="checkbox-inline"> <input type="checkbox" name="hobby">打豆豆</label>
					<label class="checkbox-inline disabled" > <input type="checkbox" name="hobby" disabled >学习</label>
				</div>
				<!--
                	单选框 
                -->
                <div class="form-group">
                	<label class="radio-inline"><input type="radio" name="sex" value="男">男</label>
                	<label class="radio-inline"><input type="radio" name="sex" value="女">女</label>
                </div>	
                <!--
                	输入框组
                -->
                <div class="form-group">
                <div class="input-group">
                	<label class="input-group-addon">搜索</label>
                	<input type="search" name="sc" id="sc" class="form-control">
                </div>
                </div>
                <div class="input-group">
                	<input type="search" name="sc" id="sc" class="form-control">
                	<label class="input-group-addon">搜索内容</label>
                </div>
                <!--
                	按钮的大小 
                	.btn-lg(最大的)
                	.btn-sm 
                	.btn-xs (最小的)
                -->
                <div>
                	<button class="btn btn-primary">确定要删除么</button>
                	<input type="button" value="修改" class="btn btn-warning">
                	<a href="#" class="btn btn-default">修改内容</a>
                	<input type="button" value="登录" class="btn btn-info">
                </div>
                <!--
                	按钮组
                -->
                <div class="btn-group">
                	<button class="btn btn-success"></button>
                	<button class="btn btn-success"></button>
                	<button class="btn btn-success"></button>
                	<button class="btn btn-success"></button>
                </div>
        </div>	
	</body>
</html>