<?php
//定义命名空间
namespace Admin\Model;
//引入父类模型 think配置文件Model.class.php
use Think\Model;
//声明模型并继承父类模型
class DeptModel extends Model{
	
		//开启批量验证
		//protected $patchValidate = true;
		//字段映射定义  在create方法里面 必须用数据对象
		protected $_map  = array(
		//规则  键是表单中的name值=值是数据表中的字段名
		'ak47'   =>   'name',
		'mp4'    =>   'sort',
		'wasd'    =>   'remark',
		
		);
		
		
		
		//自动验证
		protected $_validate = array(
		//针对部门名称的规则，必填，不能重复
		array('name','require','部门名称不能为空！'),
		array('name','','部门已经存在！',0,'unique'),
		//排序字段的验证，数字
		array('sort','number','排序必须是数字！'),
		array('sort','','序号已经存在！',0,'unique'),
		array('username','require','用户名不能为空！'),
		array('username','','用户名已经存在！',0,'unique'),
		);
	
}


?>