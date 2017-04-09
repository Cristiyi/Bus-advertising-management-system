<?php

namespace Back\Controller;
use Think\Controller;

class AdminController extends Controller {

    public 	function login() {

        if(IS_POST){

            $name = $_POST['username'];
            $pwd = $_POST['password'];

            $manager = D('Admin');

            $info = $manager -> where(array('username'=>$name,'password'=>$pwd)) -> find();

            if($info != null) {
            	session('adminid',$info['adminid']);
            	session('adminname',$info['username']);

            	$this -> redirect('Index/index');
            }

            else{$this->error('用户名或密码错误',U('login'),2);}

        } else{
        	 $this -> display();
        }


    }

    public function logout() {

        session(null);

        $this -> redirect('login');

    }

    public function showlist() {

        $employee = new \Model\AdminModel;

        $nowinfo = $employee -> fetchData();

        $info = $nowinfo['pageinfo'];

        $pagelist = $nowinfo['pagelist'];

        $this -> assign('info',$info);
        $this -> assign('pagelist',$pagelist);
        $this -> display();

    }

    public function upd() {

        $employee = new \Model\AdminModel;

        if(IS_POST) {

            $data = $employee -> create();

            if($employee -> save($data)) {

                $this -> success('修改成功',U('showlist'),2);

            } else {

                $this -> error('修改失败',U('upd',array('id' => $data['adminid'])),3);

            }

        } else {

            $adminid = I('get.adminid');

            $info = $employee -> find($adminid);

            $this -> assign('info',$info);
            $this -> display();

        }

    }

    public function updpassword() {

        $employee = new \Model\AdminModel;

        if(IS_POST) {

            $data = $employee -> create();

            if($employee -> save($data)) {

                $this -> success('修改成功',U('Index/index'),2);

            } else {

                $this -> error('修改失败',U('updpassword',array('id' => $data['adminid'])),3);

            }

        } else {

            $adminid = I('get.adminid');

            $info = $employee -> find($adminid);

            $this -> assign('info',$info);
            $this -> display();

        }

    }

    public function tianjia() {

        $employee = new \Model\AdminModel;

        if(IS_POST) {

            $data = $employee -> create();

            if($employee -> add($data)) {
                $this -> success('添加员工成功',U('showlist'),2);
            } else{
                $this -> error('添加员工失败',U('tianjia'),2);
            }

        } else{

            $this -> display();

        }

    }

    public function delEmp($adminid) {

      $employee = D('Admin');

      $r = $employee -> delete($adminid);

      if($r) {
        $this -> success('删除成功',U('showlist'));
      } else {
        $this -> error('删除失败');
      }

    }

    public function changePassword() {

        $admin = D('Admin');



    }

}
