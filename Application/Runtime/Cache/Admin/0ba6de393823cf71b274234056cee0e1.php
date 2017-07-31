<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="/Public/Admin/css/base.css" />
<link rel="stylesheet" href="/Public/Admin/css/info-mgt.css" />
<link rel="stylesheet" href="/Public/Admin/css/WdatePicker.css" />
<title>移动办公自动化系统</title>
</head>

<body>
<div class="title"><h2>信息管理</h2></div>
<div class="table-operate ue-clear">
	<a href="<?php echo u('Dept/add');?>" class="add">添加</a>
    <a href="javascript:;" class="del">删除</a>
    <a href="javascript:;" class="edit">编辑</a>
    <a href="javascript:;" class="count">统计</a>
    <a href="javascript:;" class="check">审核</a>
</div>
<div class="table-box">
	<table>
    	<thead>
        	<tr>
            	<th class="num">序号</th>
                <th class="name">部门</th>
                <th class="process">所属部门</th>
                <th class="node">排序</th>
                <th class="time">备注</th>
                <th class="operate">操作</th>
            </tr>
        </thead>
        <tbody>
        	<?php if(is_array($date)): $i = 0; $__LIST__ = $date;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vol): $mod = ($i % 2 );++$i;?><tr>
            	<td class="num"><?php echo ($vol["id"]); ?></td>
                <td class="name"><?php echo (str_repeat( '&nbsp' ,$vol["level"]*4)); echo ($vol["name"]); ?></td>
                <td class="process"><?php if($vol["pid"] == 0): ?>顶级部门<?php else: echo ($vol['pidname']); endif; ?></td>
                <td class="node"><?php echo ($vol["sort"]); ?></td>
                <td class="time"><?php echo ($vol["remark"]); ?></td>
                <td class="operate">
                	<a href="/index.php/Admin/Dept/edit/id/<?php echo ($vol["id"]); ?>">编辑</a>
                	<input type="checkbox" class="deptid" value="<?php echo ($vol["id"]); ?>"/>
                	
                </td>
            </tr><?php endforeach; endif; else: echo "" ;endif; ?>
            
        </tbody>
    </table>
</div>
<div class="pagination ue-clear">
	<div class="pagin-list">
		<?php echo ($show); ?>
	</div>
	<div class="pxofy">显示第 1 条到 10 条记录，总共<?php echo ($count); ?>条记录</div>
</div>
</body>
<script type="text/javascript" src="/Public/Admin/js/jquery.js"></script>
<script type="text/javascript" src="/Public/Admin/js/common.js"></script>
<script type="text/javascript" src="/Public/Admin/js/WdatePicker.js"></script>
<script type="text/javascript" src="/Public/Admin/js/jquery.pagination.js"></script>

<script type="text/javascript">
$(".select-title").on("click",function(){
	$(".select-list").hide();
	$(this).siblings($(".select-list")).show();
	return false;
})
$(".select-list").on("click","li",function(){
	var txt = $(this).text();
	$(this).parent($(".select-list")).siblings($(".select-title")).find("span").text(txt);
})

/**
 * $('.pagination').pagination(100,{
	callback: function(page){
		alert(page);	
	},
	display_msg: true,
	setPageNo: true
});
 */

$("tbody").find("tr:odd").css("backgroundColor","#eff6fa");

showRemind('input[type=text], textarea','placeholder');


//jq代码  给删除按钮绑定点击事件
$(function(){
	$('.del').on('click',function(){
		//事件处理程序，获取已选中checkbox
		var res = $(':checkbox:checked');
		
		//接收处理后的id值，
		var id="";
		//循环遍历res对象，获取每一个值
		for(var i=0;i< res.length;i++){
			id +=res[i].value + ',';
		}
		
		//去掉逗号   参数传给php用rtrim 去除右边
		id = id.substring(0,id.length -1);
		//console.log(id);
		//带参跳转del方法
		window.location.href = '/index.php/Admin/Dept/del/id/' + id;
	});
});


</script>
</html>