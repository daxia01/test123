<?php
//声明命名空间
namespace Admin\Controller;
//引入父类
use Think\Controller;
//声明控制器并继承福父类
class DocController extends CommonController{
	//showList
	public function showList(){
		//page 分页
		//查询总的记录数		
		$count = M('Doc') ->count();
		//实例化分页类
		$page = new \Think\Page($count,2);
		//可选步骤  提示文字
		$page ->rollPage = 2;
		$page -> lastSuffix = false;
		$page ->setConfig('prev','上一页');
		$page ->setConfig('next','下一页');
		$page ->setConfig('last','末页');
		$page ->setConfig('first','首页');
		//通过show方法输出分页的url
		$show = $page ->show();
		//展示数据
		$date = M('Doc') ->limit($page -> firstRow,$page -> listRows) ->select();
		$this -> assign('date',$date);
		$this -> assign('show',$show);
		$this ->assign('count',$count);
		//展示模板
		$this -> display();
	}
	//add
	public function add(){
		//判断请求
		if(IS_POST){
			//接收数据
			$post = I('post.');
			//dump($post);die;
			//实例化模型
			$model = D('Doc');
			//数据保存
			$date = $model ->saveDate($post,$_FILES['file']);
			
			//判断$date
			if($date){
				//添加成功
				$this ->success('添加成功',u('showList'),3);
			}else{
				//添加失败
				$this -> error('添加失败');
			}
			//
			
			
		}else{
		
		//展示模板
		$this -> display();
		}
	}
	//download
	public function download(){
		//接收id
		$id =  I('get.id');
		//查询数据
		$date = M('Doc') -> find($id);
		//dump($date);die;
		//下载数据
		$file = WORKING_PATH . $date['filepath'];
		//文件流
		header("Content-type: application/octet-stream");
		//位置：附件   文件名字
		header('Content-Disposition: attachment; filename="' . basename($file) . '"');
		//文件大小
		header("Content-Length: ". filesize($file));
		//输出缓冲区
		readfile($file);
	}
	
	
	//layer showContent
	public function showContent(){
		//接收id
		$id = I('get.id');
		$model = M('Doc');
		//查询
		$date = $model -> find($id);
		//取内容  还原  htmlspecialchars_decode
		//echo $date['content'];
		echo htmlspecialchars_decode($date['content']);
		
	}
	//edit
	public function edit(){
		if(IS_POST){
			$post = I('post.');
			//保存
			$result = D('Doc') -> updateDate($post,$_FILES['file']);
			if($result){
				//成功
				$this ->success('修改成功',u('Doc/showList'),3);
			}else{
				$this ->error('保存失败');
			}
			
			
		}else{
		//接收数据
		$id = I('get.id');
		//查询
		$date = M('Doc')  -> find($id);
		//传值
		$this ->assign('date',$date);
		//展示模板
		$this ->display();
		}
	}
	
	
	public function _empty(){
		//展示模板
		$this -> display('Empty/error');
	}
} 

?>