<?php
//定义命名空间
namespace Admin\Controller;
//引入父类控制器
use Think\Controller;
//声明控制器并继承父类
class CommonController extends Controller{
	//验证登录
	//构造方法
	/**
	 * public function __construct(){
		//php内置的构造方法  需要构造父类
		parent::__construct();
		
	}
	 */
	
	
	//ThinkPHP内置的方法
	
	public function  _initialize(){
		//验证登录
		$id = session('id');
		//判断
		if(empty($id)){
			//没有登录 进入登录页面  不加exit会继续往下执行
			//$this -> error('请先登录。。',u('Public/login'),3);exit;
			//上面的方法如果丢失session 会直接出现iframe无限叠加
			$url = U('Public/login');
			echo "<script>top.location.href='$url'</script>";exit;
			
		}
		//RABC权限控制
		$role_id = session('role_id');//获取角色role_id
		//dump($role_id);die;
		$rabc_role_auths = C('RABC_ROLE_AUTHS');//获取权限数组
		//dump($rabc_role_auths);die;
		$result = $rabc_role_auths[$role_id];//获取当前用户对应的权限
		//dump($result);die;
		//使用常量获取路由的控制器名和方法名
		$controller = strtolower(CONTROLLER_NAME);
		//dump($controller) ;die; 
		$action = strtolower(ACTION_NAME);
		//判断是否具有权限
		if($role_id > 1){
			//排除超级管理员  
			if(!in_array($controller . '/' . $action,$result) && !in_array($controller . '/*' ,$result) ){
				//用户没有权限
				$this -> error('您没有权限',u('Index/home'),3);exit;
			}
		}
	}
	
	
	
	 
}

?>