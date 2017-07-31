<?php
//声明命名空间
namespace Admin\Controller;
//引入父类控制器
use Think\Controller;
//声明控制器并继承父类
class IndexController extends CommonController{
	//展示index.html
	public function index(){
		//展示模板
		$this->display();
	}
	//展示home.html
	public function home(){
		//展示模板
		$this->display();
	}
	public function _empty(){
		//展示模板
		$this -> display('Empty/error');
	}
}
?>