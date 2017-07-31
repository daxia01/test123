<?php
//声明命名空间
namespace Admin\Controller;
//引入父类控制器
use Think\Controller;
//引入模型
use Admin\Model\DeptModel;
//声明控制器并继承父类
class UserController extends CommonController{
	//add
	public function add(){
		//判断请求的类型
		if(IS_POST){
			//处理表单提交 数据对象的创建
			$model = D('User');
			$date = $model -> create();
			//添加事件字段
			$date['addtime'] = time();
			//add
			$result = $model -> add($date);
			//判断
			if($result)
			{
				//修改成功
				$this -> success('保存成功',u('showList'),3);
			}else{
				//修改失败 返回上一页
				$this ->error('保存失败');
			}
			
		}else{
		//查询部门信息
		$date = M('Dept') -> field('id,name') ->select();
		//变量分配
		$this->assign('date',$date);
		//展示模板
		$this->display();
		}
	}
	//showList
	public function showList(){
		//page 
		//查询总的记录数
		
		$count = M('User') ->count();
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
		//联表查询
		//$sql = "select t1.*,t2.name as dept_name from sp_user as t1,sp_dept as t2 where t1.dept_id = t2.id;";
		//执行sql语句
		$info = M('User') -> field('t1.*,t2.name as dept_name')  ->alias('t1')
		->join('left join sp_dept as t2 on t1.dept_id = t2.id ') 		
		-> limit($page -> firstRow,$page -> listRows) ->select();
		//dump($info);die;
		$this -> assign('info',$info);
		$this -> assign('show',$show);
		$this -> assign('count',$count);
		
		//展示模板
		$this ->display();
	}
	//edit
	public function edit(){
		if(IS_POST){
			//处理post请求
			$post = I('post.');
			//实例化
			$model= D('User');
			$result=$model -> save($post);
			//判断是否修改成功  返回值为0的情况
			if($result !== false)
			{
				//修改成功
				$this -> success('修改成功',u('showList'),3);
			}else{
				//修改失败 返回当前页
				$this ->error('修改失败');
			}
		}else{
		//接收id
		$id=I('get.id');
		$date = M('User') ->find($id);
		
		$this -> assign('date',$date);
		//下拉列表
		//实例化模型
		$model = M(); //使用原生sql可以不指定表
		//联表查询
		$sql = "select t1.*,t2.name as dept_name from sp_user as t1,sp_dept as t2 where t1.dept_id = t2.id;";
		//执行sql语句
		$info = $model ->  query($sql);
		
		$this -> assign('info',$info);
		
		
		
		//展示模板
		$this -> display();
		}
	}
	//del
	public function del(){
		//接收参数
		$id = I('get.id');
		//dump($id);
		//模型实例化
		$model = M('User');
		//删除
		$result = $model -> delete($id);
	
		//判断结果
		if($result){
			//删除成功
			$this->success('删除成功');
		}else{
			//删除失败
			$this->error('删除失败');
		}
	}
	//统计 charts
	public function charts(){
		$model = M();
		$sql ="select t2.name as deptname,count(*) as count from sp_user as t1,sp_dept as t2 where t1.dept_id = t2.id group by deptname;";
	    $date = $model -> query($sql);
	    //php5.6之前需要拼接
	    $str = '[';
	    //遍历字符串
	    foreach($date as $key => $value){
	    	$str .="['" .$value['deptname'] ."'," .$value['count'] ."],";	
	    }
	    //dump($str);die;去掉最后的逗号，拼接一个];
	    $str = rtrim($str,',') .']';
	    //assign
	    $this -> assign('str',$str);
	 	//展示模板
		$this -> display();
	
	}
	public function _empty(){
		//展示模板
		$this -> display('Empty/error');
	}
	
	
	 
}

?>