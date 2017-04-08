<?php

namespace Back\Controller;
use Think\Controller;

class PlaceController extends Controller {

    public function showlist() {
    	
        $place = new \Model\PlaceModel();

        $nowinfo = $place -> relation(true) -> fetchData();

        $info = $nowinfo['pageinfo'];

        $pagelist = $nowinfo['pagelist'];

        $this -> assign('info',$info);
        $this -> assign('pagelist',$pagelist);
        $this -> display();

    }

    public function tianjia() {

    	$place = new \Model\PlaceModel();

        if(IS_POST){

            // $place = D('Place');

           $data = $place -> create();


           if($place -> relation(true) -> add($data)){
                $this ->success('添加商品成功', U('showlist'), 2);
            }else{
                $this ->error('添加商品失败', U('tianjia'), 2);
            }
 
        } else{

            $cate = new \Model\CategoryModel();

            $cateinfo = $cate -> order('cateid') -> select();

            $this -> assign('cateinfo', $cateinfo);

        	$this -> display();
        }

    }

    public function upd() {
    	
        $place = new \Model\PlaceModel();

        if(IS_POST) {

            $data = $place -> create();
            //var_dump($data);

            if($place-> relation(true) ->save($data)){
                $this -> success('修改广告位成功', U('showlist'), 2);
            }else{
                $this -> error('修改广告位失败', U('upd',array('id'=>$data['placeid'])), 10);                
            }

        } else{
            
            $placeid = I('get.placeid'); 
            $info = $place ->find($placeid);
            $cateinfo = D('Category') -> order('cateid') -> select();

            $this -> assign('cateinfo', $cateinfo);
            $this -> assign('info',$info);
            $this -> display();
        }

    }

    public function delPlace($placeid)
    {
        $place = D("Place");
        $r = $place -> delete($placeid);//调用删除方法，直接把主键值作为参数放在（）里面就可以。
        if($r)
        {
            $url = U("showlist");//用U方法造一个路径
            $this->success("删除成功",$url);//把造的路径放在要跳转的页面里面，注意不能直接也页面，会出错。
        }
        else
        {
            $this->error("删除失败");
        }
    }

}