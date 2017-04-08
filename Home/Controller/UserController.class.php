<?php

namespace Home\Controller;
use Think\Controller;

class UserController extends Controller {

	public function login() {

		if(IS_POST) {

			$user = D('User');
			$name = $_POST['username'];
			$password = $_POST['userpassword'];

			$info = $user -> where(array('username'=>$name,'userpassword'=>$password)) -> find();

			if($info) {

				session('userid',$info['userid']);
				session('username',$info['username']);
				session('userfname',$info['userfname']);
				session('usercomname',$info['usercomname']);

				$this -> redirect('Index/index');

			} else {

				$this -> error('用户名密码错误',U('login'),1);

			}

		} else {

			$this -> display();

		}

	}

	function logout(){
        session(null);
        $this -> redirect('Index/index');
    }

	public function register() {

		if(IS_POST){

		$rules = array(
     
     	array('username','','帐号名称已经存在！',0,'unique',1), // 在新增的时候验证name字段是否唯一
     	array('reuserpassword','userpassword','确认密码不正确',0,'confirm'), // 验证确认密码是否和密码一致

		);

		$user = D('User');

		if(!$user->validate($rules)->create())
        {
            $this->error($user->getError());
        }
        else
        {
            $result=$user->add();
            if(!$result)
                {
                    $this->error('添加失败');
                }
            else
                {
                    $this->success('注册成功成功',U('login'));
                }
         }
        }

        else{
        	$this -> display();
        }
	}

}