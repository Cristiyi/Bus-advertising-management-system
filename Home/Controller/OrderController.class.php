<?php

namespace Home\Controller;
use Think\Controller;

class OrderController extends Controller {

	public function tianjia() {

		$order = D('Order');
		$place = D('Place');
		$id = $_REQUEST['id'];
		$type = $_REQUEST['type'];
		$price = $_REQUEST['price'];
		$location = $_REQUEST['location'];

		$username = $_SESSION['username'];
		$userfname = $_SESSION['userfname'];
		$usercomname = $_SESSION['usercomname'];

		if(IS_POST) {

			$data = $order -> create();
			$data['placeid'] = $id;
			$data['ordertype'] = $type;
			$data['orderuname'] = $username;
			$data['orderlocation'] = $location;
			$data['orderprice'] = $price;
			
			if($order -> add($data)) {

				if($data['orderfname']!=$userfname&&$data['ordercname']!=$usercomname) {

					$this -> error('填写的姓名与公司名与注册信息不符',U('tianjia'),3);

				} else {

					$this -> success('提交成功',U('Index/index'),3);

				}

			} else {

				$this -> error('提交失败',U('showlist'),3);

			}

		} else {

			$this -> display();

		}

	}

	public function showlist() {

		$order = D('Order');

		$username = $_SESSION['username'];

		$count = $order -> where("orderuname='$username'") -> count();

		$page = getpage($count,10);

		$list = $order -> field('*') -> where("orderuname='$username'") -> order('orderid') -> limit($page->firstRow, $page->listRows)->select();

		$this -> assign('page',$page->show());

		$this -> assign('info',$list);

		$this -> display();


	}

}