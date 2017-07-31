<?php
//声明命名空间
namespace Admin\Model;
//引入父类模型
use Think\Model;
//声明变量并继承父类模型
class EmailModel extends Model{
	//saveDate
	public function saveDate($post,$file){
		//数据上传
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
				//开始上传
				$info = $upload ->uploadOne($file);
				
				//判断是否上传成功
				if($info){
					//上传成功  路径 是给浏览器使用 相对于站点域名后面
					$post['file'] = UPLOAD_ROOT_PATH . $info['savepath'] . $info['savename'];
					
					$post['filename'] = $info['name'];
					$post['hasfile'] = 1;
		            }
		    }
		//补充字段
		$post['from_id'] = session(id); //发件人id
		$post['addtime'] = time();
		
	    //数据保存
		return $this ->add($post);
		
	}
}
?>