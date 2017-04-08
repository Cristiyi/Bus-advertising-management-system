<?php

namespace Model;
use Think\Model;
use Think\Model\RelationModel;

class PlaceModel extends RelationModel {

     //自动完成某些字段设置
	// protected $_auto = array(

 //        array('starttime','time',1,'function'),
 //        array('endtime','time',1,'function'),

	// 	);
    // protected function _before_insert(&$data, $options) {

    //     dump($data);
    //     dump($_FILES);
    //     exit;

    // }
    protected $_link = array(

        'Adver' => array(
                
                'mapping_type' => HAS_ONE,
                'foreigh_key' => 'adverid',
                'mapping_name' => 'adver',
                'mapping_fields' => 'adverno'

            ),

        );

	function fetchData() {

        $total = $this -> count();
        $per = 10;

        //② 实例化分页类Page对象
        $page = new \Common\Tools\Page($total,$per);

        //③ 获得分页信息
        $pageinfo = $this -> where(array('is_del'=>'不删除')) -> order('placeid asc')->limit($page->offset,$per)->select();

        //④ 获得页码列表信息
        $pagelist = $page -> fpage(array(3,4,5,6,7,8));

        return array(
            'pageinfo'=>$pageinfo,
            'pagelist'=>$pagelist
        );

	}

    

}