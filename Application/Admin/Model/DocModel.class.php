<?php
//声明命名空间
namespace Admin\Model;
//引入父类模型
use Think\Model;
//声明模型并继承父类
class DocModel extends Model{
	//保存数据
	public function saveDate($post,$file){
		//dump($file);die;
		//判断是否有文件
			if($file['size'] > 0){
				
				 //配置
		        $cfg = array(		        
		        /**
		         * 配置上传路径  地址给服务器使用 相对于入口文件 或带盘符的绝对路径
		         * 地址给客户端浏览器使用  ”/“ 相对于站点域名后面
		         */
		        'rootPath' => WORKING_PATH . UPLOAD_ROOT_PATH
		        );
		        //处理上传
				$upload = new \Think\Upload($cfg);
				//dump($upload);die;
				//开始上传
				$info = $upload ->uploadOne($file);
				//dump($info);die; 
				//判断是否上传成功
				if($info){
					//上传成功  路径 是给浏览器使用 相对于站点域名后面
					$post['filepath'] = UPLOAD_ROOT_PATH . $info['savepath'] . $info['savename'];
					
					$post['filename'] = $info['name'];
					$post['hasfile'] = 1;
					
					
				}
				
			}
		     
			//dump($file);die;
			//addtime字段
			$post['addtime'] = time();
			//dump($post);die;
			//实例化模型
			return $this ->add($post);
		
	}
	
	//更新数据保存
	public function updateDate($post,$file){
		//判断是否有文件
		if($file['size'] > 0){
			//有文件
			 //配置
		        $cfg = array(		        
		        /**
		         * 配置上传路径  地址给服务器使用 相对于入口文件 或带盘符的绝对路径
		         * 地址给客户端浏览器使用  ”/“ 相对于站点域名后面
		         */
		        'rootPath' => WORKING_PATH . UPLOAD_ROOT_PATH
		        );
		         //处理上传
				$upload = new \Think\Upload($cfg);
				//dump($upload);die;
				//开始上传
				$info = $upload ->uploadOne($file);
				if($info){
					//上传成功  路径 是给浏览器使用 相对于站点域名后面
					$post['filepath'] = UPLOAD_ROOT_PATH . $info['savepath'] . $info['savename'];
					
					$post['filename'] = $info['name'];
					$post['hasfile'] = 1;
					
					
				}
			
		}
		//写入数据
		return $this -> save($post);
	}
}
?>