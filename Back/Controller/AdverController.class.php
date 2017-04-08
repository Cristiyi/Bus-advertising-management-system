<?php

namespace Back\Controller;
use Think\Controller;

class AdverController extends Controller {

    public function showlist() {

        $place = new \Model\AdverModel();

        $nowinfo = $place -> fetchData();

        $info = $nowinfo['pageinfo'];

        $pagelist = $nowinfo['pagelist'];

        $this -> assign('info',$info);
        $this -> assign('pagelist',$pagelist);
        $this -> display();

    }

    public function tianjia() {

        $adver = new \Model\AdverModel();

        if(IS_POST) {

            $data = $adver -> create();

            if($adver -> relation(true) -> add($data)) {
            	$this -> success('添加广告成功',U('showlist'),2);
            } else{
            	$this -> error('添加广告失败',U('tianjia'),2);
            }

        } else{

            $cateinfo = D('Category') -> order('cateid') -> select();

            $this -> assign('cateinfo', $cateinfo);

        	$this -> display();
        }

    }

    public function upd() {

        $adver = new \Model\AdverModel();

        if(IS_POST) {

            $data = $adver -> create();

            if($adver -> relation(true) -> save($data)) {
                $this -> success('修改广告成功', U('showlist'),2);
            } else{
                //dump($data);
                $this -> error('修改广告失败',U('upd',array('id'=>$data['adverid'])),10);
            }

        } else{

            $adverid = I('get.adverid');

            $info = $adver -> find($adverid);

            $cateinfo = D('Category') -> order('cateid') -> select();

            $this -> assign('cateinfo', $cateinfo);
            $this -> assign('info',$info);
            $this -> display();

        }

    }

    public function delAdver($adverid) {

        $adver = D('Adver');

        $r = $adver -> delete($adverid);

        if($r) {

            $url = U('showlist');
            $this -> success("删除成功",$url);

        } else {

            $this -> error('删除失败');

        }

    }

}
