<?php

namespace Model;
use Think\Model;



class AdverModel extends Model {

    protected $_link = array(

        'Place' => array(

                'mapping_type' => BELONGS_TO,
                'foreigh_key' => 'placeid',
                'mapping_name' => 'place',
                'mapping_fields' => 'placeno'

        	),

    	);

    protected $_validate = array(

        array('adverno','require','此项为必填项'),
        array('adverno','','广告编号已存在',0,'unique',1),
        array('starttime','require','此项为必填项'),
        array('endtime','require','此项为必填项'),
        array('catename','require','此项为必填项'),

        );

    protected function _before_insert(&$data, $options) {

        if($_FILES['adverimg']['error'] === 0) {

            $cfg = array(
                'rootPath' => './Common/Uploads',
                );

            $up = new \Think\Upload($cfg);

            $z = $up -> uploadOne($_FILES['adverimg']);

            // dump($z);
            $big_path_name = $up -> rootPath.$z['savepath'].$z['savename'];
            $data['adverimg'] = $big_path_name;


        }

    }

    //更新数据前的回调方法
    protected function _before_update(&$data, $options) {

        if($_FILES['adverimg_upd']['error'] === 0) {

            $imginfo = $this -> field('adverimg') -> find($options['where']['adverid']);

            if(!empty($imginfo['adverimg'])) {
                unlink($imginfo['adverimg']);
            }

            $cfg = array(

                'rootPath' => './Common/Uploads',   //保存跟路径

                );

            $up = new \Think\Upload($cfg);

            $z = $up -> uploadOne($_FILES['adverimg_upd']);

            $path_name = $up -> rootPath.$z['savepath'].$z['savename'];

            $data['adverimg'] =$path_name;

        }

    }

    function fetchData() {

        $total = $this -> count();
        $per = 10;

        //② 实例化分页类Page对象
        $page = new \Common\Tools\Page($total,$per);

        //③ 获得分页信息
        $pageinfo = $this -> order('adverid asc')->limit($page->offset,$per)->select();

        //④ 获得页码列表信息
        $pagelist = $page -> fpage(array(3,4,5,6,7,8));

        return array(
            'pageinfo'=>$pageinfo,
            'pagelist'=>$pagelist
        );

	}

}

