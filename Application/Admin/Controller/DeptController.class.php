<?php
//声明命名空间
namespace Admin\Controller;
//引入父类控制器
use Think\Controller;
//引入模型
use Admin\Model\DeptModel;

//声明控制器并继承父类
class DeptController extends CommonController{
	//add方法
	public function add(){
		//判断是否为post请求 if($_post)
		//dump(IS_POST);
		if(IS_POST){
			//处理表单程序
			//$post=I('post.');
			//dump($post);
			//写入数据 实例化模型 由于是自定义模型 用D
			$model=D('Dept');
			//数据对象的创建   自动验证 不传递参数表示接受post数据
			$date=$model->create();
			//判断验证结果
			if(!$date){
				 //提示用户验证失败 失败不往后执行
				 $this->error($model->getError());exit;
			}
			//添加
		    $result=$model->add($date);
		    //判断返回值
		    if($result){
		    	//success
		    	$this->success('添加成功',u('showlist'),3);
		    	}else{
		    		//失败
		    		$this->error('添加失败');
		    	}
		}else{
		
		//查询出顶级部门
		$model=M('Dept');
		$date=$model->where('pid = 0')->select();
		//展示数据  为二维数组  需要遍历
		$this->assign('date',$date);
		//dump($date);
		//展示模板
		$this->display();
		}
	}
	//showlist list是系统关键字
	public function showList(){
		//实例化模型
		$model=M('Dept');
		$count = $model ->count();
	    //实例化分页类
	    $page = new \Think\Page($count,2);
	    //一页当中显示的页数
	    $page -> rollPage = 1;
	    //最后一页不显示页码数
	    $page -> lastSuffix = false;
	    $page -> setconfig('prev','上一页');
	    $page -> setconfig('next','下一页');
	    $page -> setconfig('last','末页');
	    $page -> setconfig('first','首页');
	    //show方法
	    $show = $page -> show();		
		//查询数据 为二维数组  需要遍历
		//-> limit($page -> firstRow,$page -> listRows)
		$date= $model   -> order('sort asc')-> limit($page -> firstRow,$page -> listRows)   -> select();
		//dump($date);die;
		//二次查询遍历顶级部门
		foreach($date as $key => $value){
		if($value['pid']>0){
				//查询pid对应的部门信息
				$info=$model->find($value['pid']);
				//dump($info);die;
				//解决当删除顶级部门的时候 2级部门不显示问题
				if($info){
					//保留name
					$date[$key]['pidname']=$info['name'];
					
				}else{
					$date[$key]['pid'] = '0';
				
				}			
			}
		}
		//dump($date);die;				
		//使用无限极分类方法 引入   load方法
		load('@/tree');
		$date = getTree($date);

		
		//传递数据
		$this -> assign('date',$date);
		$this -> assign('show',$show);
		$this -> assign('count',$count);
		//展示模板
		$this->display();
	}
		
	//edit
	public function edit(){
		if(IS_POST){
			//处理post请求
			$post = I('post.');
			//实例化
			$model=M('Dept');
			//数据对象的创建   自动验证 不传递参数表示接受post数据
			/*$date=$model->create();
			if(!$date){
				 //提示用户验证失败 失败不往后执行
				 $this->error($model->getError());exit;
			}*/
			//保存数据
			$result=$model -> save($post);
			//判断是否修改成功  返回值为0的情况
			if($result !== false)
			{
				//修改成功
				$this -> success('修改成功',u('showList'),3);
			}else{
				//修改失败 返回上一页
				$this ->error('修改失败');
			}
		}else{
		//接收id
		$id=I('get.id');
		//实例化模型
		$model=M('Dept');
		//查询
		$date=$model -> find($id);
		//查询所有信息（排除自身） 下拉列表
		$info = $model ->where('id != ' .$id) -> select();
		//变量分配 
		$this -> assign('date',$date);
		$this ->assign('info',$info);
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
		$model = M('Dept');
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
	public function _empty(){
		//展示模板
		$this -> display('Empty/error');
	}
	
}

?>