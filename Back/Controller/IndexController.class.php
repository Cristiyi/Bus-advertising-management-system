<?php

namespace Back\Controller;
use Think\Controller;

class IndexController extends Controller {

    public function head() {
        $this -> display();
    }

    public function left() {
        
        $adminid = session('adminid');
        $adminname = session('username');

        $auth_ids = D('Admin')->alias('a')->join('__ROLE__ r on r.roleid=a.roleid')->field('r.role_auth_ids')->where(array('a.adminid'=>$adminid))->find();

        $authids = $auth_ids['role_auth_ids'];
        // dump($authids);
        $auth_infoA = D('Auth')->where("authid in ($authids) and authlevel=0")->select();//顶级权限
        $auth_infoB = D('Auth')->where("authid in ($authids) and authlevel=1")->select();//次顶级权限
        
            // dump($auth_infoA);
            // dump($auth_infoB);

        $this -> assign('auth_infoA',$auth_infoA);
        $this -> assign('auth_infoB',$auth_infoB);
        $this -> display();

    }

    public function right() {
        $this -> display();
    }

    public function index() {
        $this -> display();
    }

}