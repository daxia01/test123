<?php
//声明命名空间
namespace Admin\Controller;
//引入父类控制器
use Think\Controller;
//声明控制器并继承父类
class EmptyController extends Controller{
	//empty
	public function _empty(){
		//展示模板
		$this -> display('Empty/error');
	}
}

?>