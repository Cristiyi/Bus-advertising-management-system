<?php

namespace Back\Controller;
use Think\Controller;

class CategoryController extends Controller {

    public function showlist() {

    	$cate = new \Model\CategoryModel();

        $nowinfo = $cate -> fetchData();

        $info = $nowinfo['pageinfo'];

        $pagelist = $nowinfo['pagelist'];

        $this -> assign('info',$info);
        $this -> assign('pagelist',$pagelist);
        $this -> display();

    }

    public function tianjia() {

    	if(IS_POST) {

    		$cate = new \Model\CategoryModel();

    		$data = $cate -> create();

    		if($cate -> add($data)) {

    			$this -> success('添加类型成功',U('showlist'),2);

    		} else {

    			$this > error('添加类型失败',U('tianjia'),2);

    		}

    	} else {

    		$this -> display();

    	}

    }

    function upd() {

    	$cate = new \Model\CategoryModel();

    	if(IS_POST) {

    		$data = $cate -> create();

    		if($cate -> save($data)) {

    			$this -> success('修改类型成功',U('showlist'),2);

    		} else {

    			$this -> error('修改类型失败',U('upd',array('id' => $data['cateid'])),2);

    		}
 
    	} else {

    		$id = I('get.cateid');

    		$info = $cate -> find($id);

    		$this -> assign('info', $info);

    		$this -> display();

    	}

    }

    function delCate($cateid) {

    	$cate = D('Category');

    	$r = $cate -> delete($cateid);

    	if($r) {

    		$url = U('showlist');
    		$this -> success('删除类型成功',$url,2);

    	} else {

    		$this -> error('删除类型失败');

    	}

    }

}