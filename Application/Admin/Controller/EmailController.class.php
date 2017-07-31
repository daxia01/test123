<?php
//声明命名空间
namespace Admin\Controller;
//引入父类
use Think\Controller;
//声明控制器并继承父类
class EmailController extends CommonController{
	//send
	public function send(){
		//站内信		
		if(IS_POST){
			//处理数据
			$post = I('post.');
			
			
			//实例化自定义模型
			$model = D('Email');
			//实现数据的保存
			$date = $model ->saveDate($post,$_FILES['file']);
			
			//判断结果
			if($date){
				//success
				$this ->success('邮件发送成功',u('Email/sendBox'),3);
			}else{
				//error
				$this -> error('邮件发送失败');
			}
			
		}
		else{
		//查询收件人的信息
		$date = M('User') -> field('id,truename') ->where("id <> " . session('id'))->select();
		
		//传数据
		$this -> assign('date',$date);
		//展示模板
		$this -> display();
		}
	}
	//sendBox
	public function sendBox(){
		//page 
		//查询总的记录数
		
		$count = M('Email') ->where(' from_id =' . session('id')) -> count();
		//实例化分页类
		$page = new \Think\Page($count,1);
		//可选步骤  提示文字
		$page ->rollPage = 2;
		$page -> lastSuffix = false;
		$page ->setConfig('prev','上一页');
		$page ->setConfig('next','下一页');
		$page ->setConfig('last','末页');
		$page ->setConfig('first','首页');
		//通过show方法输出分页的url
		$show = $page ->show();
		//dump($date);die;
		//联表查询
		//$sql = "select t1.*,t2.truename as truename from sp_email as t1,sp_user as t2 where t1.to_id = t2.id where ti.from_id = session(id) ;";
		//用join进行联表查询
		$info = D('Email') -> field('t1.*,t2.truename as truename') -> alias('t1') 
		->join('left join sp_user as t2 on t1.to_id = t2.id') 
		->where('t1.from_id = ' .session(id)) -> limit($page -> firstRow,$page -> listRows) -> select();
		
		
		
		$this -> assign('info',$info);
		$this -> assign('show',$show);
		$this -> assign('count',$count);
		
		//展示模板
		$this ->display();
		
	}
	
	//downLoad
	public function downLoad(){
		//接收id
		$id = I('get.id');
		//查询
		$date = M('Email') ->find($id);
		//下载方法
		//下载数据
		$file = WORKING_PATH . $date['file'];
		//文件流
		header("Content-type: application/octet-stream");
		//位置：附件   文件名字
		header('Content-Disposition: attachment; filename="' . basename($file) . '"');
		//文件大小
		header("Content-Length: ". filesize($file));
		//输出缓冲区
		readfile($file);

	}
	//防止翻墙
	public function _empty(){
		//展示模板
		$this -> display('Empty/error');
	}
	
	//recBox
	public function recBox(){
		//page 
		//查询总的记录数
		
		
		$count = M('Email') -> where(' to_id =' . session('id')) -> count();
		//dump($count);die;
		//实例化分页类
		$page = new \Think\Page($count,1);
		//可选步骤  提示文字
		$page ->rollPage = 2;
		$page -> lastSuffix = false;
		$page ->setConfig('prev','上一页');
		$page ->setConfig('next','下一页');
		$page ->setConfig('last','末页');
		$page ->setConfig('first','首页');
		//通过show方法输出分页的url
		$show = $page ->show();
		//dump($date);die;
		//联表查询
		//$sql = "select t1.*,t2.truename as truename from sp_email as t1,sp_user as t2 where t1.from_id = t2.id where ti.from_id = session(id) ;";
		//用join进行联表查询
		$info = D('Email') -> field('t1.*,t2.truename as truename') -> alias('t1') 
		->join('left join sp_user as t2 on t1.from_id = t2.id') 
		->where('t1.to_id =' . session(id)) -> limit($page -> firstRow,$page -> listRows) -> select();
		//dump($info);die;
		
		
		$this -> assign('info',$info);
		$this -> assign('show',$show);
		$this -> assign('count',$count);
		
		//展示模板
		$this ->display();
		
	}
	
	//layer getContent
	public function showContent(){
		//接收id
		$id = I('get.id');
		
		
		$model = M('Email');
		//查询  防止客户通过layer的地址访问其他邮件
		$date = $model ->where(" id = $id and to_id ="  . session('id')) -> find();
		//dump($date);die;
		//isread状态
		if($date['isread'] == '0'){
			$info = M('Email') ->  save(array('id' => $id,'isread' => 1));
		}
		//dump($info);die;
		//取内容  还原  htmlspecialchars_decode
		//echo $date['content'];
		echo htmlspecialchars_decode($date['content']);
		
	}
	
	
	//getConunt方法   ajax
	public  function getCount(){
		if(IS_AJAX){
			$num = M('Email') ->where('isread = 0 and to_id =' . session('id')) ->count(); 
		   //输出count
		    echo $num;
		}
	}
	
	
}

?>