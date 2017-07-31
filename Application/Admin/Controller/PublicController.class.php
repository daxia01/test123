<?php
//定义命名空间
namespace  Admin\Controller;
//引入父类控制器
use  Think\Controller;
//声明类并继承父类
class PublicController extends Controller{
	//展示login模板
	public function login(){
		//展示模板
		$this->display();
	}
	//显示中文验证码
	public function captcha(){
		//配置
		$cfg=array( 'useZh'     =>  false,           // 使用中文验证码 
	   	            'fontSize'  =>  15,              // 验证码字体大小(px)
        			'useCurve'  =>  true,            // 是否画混淆曲线
        			'useNoise'  =>  false,            // 是否添加杂点	
			        'length'    =>  4,               // 验证码位数
			        'fontttf'   =>  '4.ttf',              // 验证码字体，不设置随机获取
	   	          );
	   	//实例化验证码类
	   	$verify = new \Think\Verify($cfg);
	   	//输出验证码
	   	$verify->entry();
	}
	public function checklogin(){
		//接受数据
		$post=I('post.');
		//dump($post);
		//验证验证码  实例化父类Verify
		$verify = new \Think\Verify();
		//验证
		$result = $verify->check($post['captcha']);
		if($result){
			//验证码正确 在验证用户名和密码
			$model=M('User');
			//删除验证码 保证where中的2个字段
			unset($post['captcha']);
			$date=$model->where($post)->   find();
			
			//判断用户名和密码
			if($date){
				//存在用户，用户信息持久化
				session('id',$date['id']);
				session('username',$date['username']);
				session('role_id',$date['role_id']);
				//跳转到后台首页
				$this->success('登录成功',u('Index/index'),3);
				
			}else{
				//不存在
				$this->error('用户名或者密码错误');
				
			}
		}else{
			//验证码不正确
			$this->error('验证码错误..');
		}
	}
	//退出方法
	public function tuichu(){
		//清除session session destory();
		session(null);
		//判断是否清除
		//if($Think.session.username){}
		//跳转到登录页面
		$this->success('退出成功',u('login'),3);
		
	}
	public function _empty(){
		//展示模板
		$this -> display('Empty/error');
	}
	
	
}

?>