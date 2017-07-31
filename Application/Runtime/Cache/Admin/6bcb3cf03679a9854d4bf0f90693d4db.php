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
		<style>
			
			div[class^="col-"]{
				border:1px solid blue;
			}
		</style>
	</head>
	<body style="background: gainsboro;">
			<!--
               	响应式图片
               	.img-responsive 
               	.img-circle 椭圆形
               	.img-rounded 圆角矩形
               	.img-thumbnail 给图片加圆角的边框
               
            <div class="container-fluid">
            	<img src="/Public/Admin/images/psb.jpg" class="img-responsive img-thumbnail">
            </div>
           
            	栅格系统一定要放在容器中  正常的文档流 响应式 以移动设配为优先
            	<div class="container-fluid"> 栅格系统</div>
            <768px手机 xs   
            >=768px  小平板 sm
            >=992  中等屏幕 md
            >=1200  超大屏幕 lg
                                偏移col-xs/sm/md/lg-offset-数字  只能向右偏移
            排序：向右移push  向左偏移 pull
            -->
            <div class="container" style="background: #D9F3FF;">
            	<div class="row table  " >
            		<div class="col-md-2 col-xs-6">2222</div>
            		<div class="col-md-6 col-xs-6">545</div>
					<div class="col-md-2 col-xs-6">5444</div>  
					<div class="col-md-2 col-xs-6">2222</div>
            		<div class="col-md-6 col-xs-6">545</div>
					<div class="col-md-2 col-xs-6">5444</div>  
					<div class="col-md-2 col-xs-6">2222</div>
            		<div class="col-md-6 col-xs-6">545</div>
					<div class="col-md-2 col-xs-6">5444</div>  
            	</div>
            </div>
            <div class=" container-fluid" style="background: #0000FF;">
            	<div class="row">
            		<div class="col-md-3 col-xs-4 col-sm-4"> 
            			<img src="/Public/Admin/images/psb.jpg"  alt="说明"  class="img-responsive img-thumbnail">
					<h3 class="page-header">这是你的图片</h3>
					<p>
						是捐款vjjjvjk佳世客vjjajvk经济技术 解决大家 解决库存紧接着就
					</p>
            		</div>
            		<div class="col-md-3 col-xs-4 col-sm-4"> 
            			<img src="/Public/Admin/images/psb.jpg"  alt="说明"  class="img-responsive img-thumbnail">
					<h3 class="page-header">这是你的图片</h3>
					<p>
						是捐款vjjjvjk佳世客vjjajvk经济技术 解决大家 解决库存紧接着就
					</p>
            		</div>
            		<div class="col-md-3 col-xs-4 col-sm-4  col-sm-offset-2"> 
            			<img src="/Public/Admin/images/psb.jpg"  alt="说明"  class="img-responsive img-thumbnail">
					<h3 class="page-header">这是你的图片</h3>
					<p>
						是捐款vjjjvjk佳世客vjjajvk经济技术 解决大家 解决库存紧接着就
					</p>
            		</div>
                
                </div>
                
                
            </div>
            
	</body>
</html>