<?php

namespace Model;
use Think\Model;

class CategoryModel extends Model {


    function fetchData() {

        $total = $this -> count();
        $per = 10;

        //② 实例化分页类Page对象
        $page = new \Common\Tools\Page($total,$per);

        //③ 获得分页信息
        $pageinfo = $this -> order('cateid asc')->limit($page->offset,$per)->select();

        //④ 获得页码列表信息
        $pagelist = $page -> fpage(array(3,4,5,6,7,8));

        return array(
            'pageinfo'=>$pageinfo,
            'pagelist'=>$pagelist
        );

	}

    protected $_validate = array(

        array('cateno','require','此项为必填项'),
        array('cateno','','广告编号已存在',0,'unique',1),
        array('catename','require','此项为必填项'),

        );

}