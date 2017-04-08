<?php

namespace Back\Controller;
use Think\Controller;


class OrderController extends Controller {

	 public function showlist() {

        $order = new \Model\OrderModel();

        $nowinfo = $order -> fetchData();

        $info = $nowinfo['pageinfo'];

        $pagelist = $nowinfo['pagelist'];

        $this -> assign('info',$info);
        $this -> assign('pagelist',$pagelist);
        $this -> display();

    }

    public function orderlist() {

        $order = new \Model\OrderModel();

        $nowinfo = $order -> selectData();

        $info = $nowinfo['pageinfo'];

        $pagelist = $nowinfo['pagelist'];

        $this -> assign('info',$info);
        $this -> assign('pagelist',$pagelist);
        $this -> display();

    }

    public function agree() {

    	require_once 'D:\phpStudy\WWW\zjkgj\gongjiao\Plugin\PHPMailer\class.phpmailer.php';
    	$mail = new \PHPMailer();

    	$orderid = $_REQUEST['id'];
    	$email = $_REQUEST['email'];
    	$name = $_REQUEST['userfname'];

    	$mail -> IsSMTP();

    	$mail -> Host = "smtp.163.com";

    	$mail -> SMTPAuth = true;

    	$mail -> CharSet = "UTF-8";

    	$mail ->　Encoding = "base64";

    	$mail -> Username = "dff_tianna@163.com";

    	$mail -> Password = "dff19930703";

    	$mail -> Subject = "广告位申请结果";

    	$mail -> From = "dff_tianna@163.com";

    	$mail -> FromName = "张家口公交公司广告业务部";

    	$mail -> AddAddress("$email","$name");
    	

    	$mail -> IsHTML(true);

    	// $message = '您好，您在我公司申请的广告位已经申请成功，我们将为您登记，请您尽快来我公司签合同';

    	$mail->Body = "您好，您在我公司申请的广告位已经申请成功，我们将为您登记，请您尽快来我公司签合同";
		// $mail->AltBody = "To view the message, please use an HTML compatible email viewer!"; //当邮件不支持

    	if(!$mail -> Send()) {
    		echo "邮件发送失败:".$mail -> ErrorInfo;
    	} else {
    		$this -> success('邮件发送成功',U('showlist'),2);
    	}



    }

    public function messageAdmin() {

    	require_once 'D:\phpStudy\WWW\zjkgj\gongjiao\Plugin\PHPMailer\class.phpmailer.php';
    	$mail = new \PHPMailer();

    	$orderid = $_REQUEST['id'];
    	$placeid = $_REQUEST['placeid'];
    	$name = $_REQUEST['userfname'];
    	$email = $_REQUEST['email'];

    	$mail -> IsSMTP();

    	$mail -> Host = "smtp.163.com";

    	$mail -> SMTPAuth = true;

    	$mail -> CharSet = "UTF-8";

    	$mail ->　Encoding = "base64";

    	$mail -> Username = "dff_tianna@163.com";

    	$mail -> Password = "dff19930703";

    	$mail -> Subject = "广告位申请结果";

    	$mail -> From = "dff_tianna@163.com";

    	$mail -> FromName = "张家口公交公司广告业务部";

    	$mail -> AddAddress($email);

    	$mail -> IsHTML(true);

    	// $message = '您好，您在我公司申请的广告位已经申请成功，我们将为您登记，请您尽快来我公司签合同';

    	$mail->Body = "您好，管理员。用户：'$name'申请的广告位：'$placeid'已经审批通过，请您尽快登记";
		// $mail->AltBody = "To view the message, please use an HTML compatible email viewer!"; //当邮件不支持

    	if(!$mail -> Send()) {
    		echo "邮件发送失败:".$mail -> ErrorInfo;
    	} else {

    		$order = D('Order');

    		$result = $order -> where("orderid='$orderid'") -> setField('orderstatus','已同意');

    		$this -> success('审核成功',U('showlist'),2);

    	}


    }


    public function disagree() {

    	require_once 'D:\phpStudy\WWW\zjkgj\gongjiao\Plugin\PHPMailer\class.phpmailer.php';
    	$mail = new \PHPMailer();

    	$orderid = $_REQUEST['id'];
    	$email = $_REQUEST['email'];
    	$name = $_REQUEST['userfname'];

    	$mail -> IsSMTP();

    	$mail -> Host = "smtp.163.com";

    	$mail -> SMTPAuth = true;

    	$mail -> CharSet = "UTF-8";

    	$mail ->　Encoding = "base64";

    	$mail -> Username = "dff_tianna@163.com";

    	$mail -> Password = "dff19930703";

    	$mail -> Subject = "广告位申请结果";

    	$mail -> From = "dff_tianna@163.com";

    	$mail -> FromName = "张家口公交公司广告业务部";

    	$address = $email;

    	$mail -> AddAddress("$email","$name");

    	$mail -> IsHTML(true);

    	$mail->Body = '您好，您在我公司申请的广告位由于信息不对等原因未能申请成功，如有任何问题可以本公司广告业务部联系。
    					联系电话：15734110164
    					联系邮箱：dff_tianna@163.com
    					感谢您的合作，谢谢！';

    	if(!$mail -> Send()) {
    		echo "邮件发送失败:".$mail -> ErrorInfo;
    	} else {

    		$order = D('Order');

    		$result = $order -> where("orderid='$orderid'") -> setField('orderstatus','不同意');

    		$this -> success('审核失败',U('showlist'),2);

    	}

    }

    public function delOrder($orderid) {

    	$order = D('Order');

    	$r = $order -> delete($orderid);

    	if($r) {

            $url = U('showlist');
            $this -> success("删除成功",$url);

        } else {

            $this -> error('删除失败');

        }


    }


}
