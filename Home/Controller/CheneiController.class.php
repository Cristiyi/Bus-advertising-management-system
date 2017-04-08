<?php

namespace Home\Controller;
use Think\Controller;

class CheneiController extends Controller {

	public function showlist() {

		$place = D('Place');

		$count = $place -> where("status='未租出' and catename='车内广告'") -> count();

		// $data = $place -> query("select * from __PREFIX__place where status='未租出' and catename='车身广告'");
		$page = getpage($count,2);
        // $show = $Page->show();// 分页显示输出

		$list = $place -> field(true) -> where("status='未租出' and catename='车内广告'") -> order('placeid') -> limit($page->firstRow, $page->listRows)->select();

		// var_dump($data);

		$this -> assign('page',$page->show());

		$this-> assign('info',$list);

		$this -> display();

	}

}