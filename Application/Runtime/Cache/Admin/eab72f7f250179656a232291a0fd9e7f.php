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
	<body style="background:gray;">
		<!--
			东西必须放在一个容器里面 容器是body
        	container 1170宽度
        	container-fluid 100%宽度
        	<h1>内容</h1> 36px
        	<h2></h2> 30px
        	<h3></h3> 24px
        	<h4></h4> 18px
        	<h5></h5> 14px
        	<h6></h6> 12px
        	.page-header 设置页面的头部，给标题添加分割线
        	<small>副标题 小一号</small>
        	<big>副标题 大一号</big>
        	<strong>加粗</strong>
        	<em>倾斜</em>
        	<del>删除线</del>
        	.text-center:居中对齐
        	list-unstyled  去除原有的样式
        	list-inline  把<li>内容</li>纵变横向
        -->
		<div class="container-fluid" style="background: #FFFFFF;">
			hello word;
			<h1 class="page-header text-center" > 大侠就好九江市</h1>
			<h3 class="page-header text-right" >产品<small>展示</small></h3>
			<p>
				季后赛的你就这样<del>djdjh</del>说来谁去
			</p>
			<h3 class="page-header">列表</h3>
			<ul class="list-unstyled list-inline">
				<li>html</li>
				<li>sssss</li>
				<li>sql</li>
			</ul>
			<h3 class="page-header">自定义列表</h3>
			<dl class="dl-horizontal">
				<dt>标题</dt>
				<dd>标题解释</dd>
			</dl>
			<!--
            	表格的知识
            	 table>tr*5>td*3 table键可快速创建
            	 table 表格
            	 table-bordered 加边框
            	 table-hover  悬停时变色
            	 table-striped 隔行换色
            	 table-condensed 变得紧凑
            	 table-responsive 写在 table的父元素中，是整个div生效 手机端可以生效
            	在tr中写入class 可以当前tr变色
            -->
            <div class="table-responsive">
           <table class=" container table-bordered table-condensed table-hover  table-striped table-responsive " >
           	<tr class="active">
           		<td>001</td>
           		<td>daxia</td>
           		<td>未出账</td>
           	</tr>
           	<tr class="info">
           		<td>002</td>
           		<td>sfasc</td>
           		<td>已出账</td>
           	</tr>
           	<tr class="danger">
           		<td>003</td>
           		<td>dda</td>
           		<td>hhh</td>
           	</tr>
           	<tr class="warning">
           		<td>004</td>
           		<td>sdava</td>
           		<td>穿噢集合</td>
           	</tr>
           	<tr class="success">
           		<td>005</td>
           		<td>5sd5</td>
           		<td>大选的产品</td>
           	</tr>
           
               
           </table>
           </div>
 		</div>
		
	</body>
</html>