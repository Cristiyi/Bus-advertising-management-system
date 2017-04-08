<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8" />

        <title>审核列表</title>
        <link href="<?php echo (C("BACK_CSS_URL")); ?>/bootstrap.min.css" type="text/css" rel="stylesheet" />
        <link href="<?php echo (C("BACK_CSS_URL")); ?>/mine.css" type="text/css" rel="stylesheet" />
        <script src="<?php echo (C("BACK_JS_URL")); ?>/jquery.min.js"></script>
        <link rel="stylesheet" href="//cdn.bootcss.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="//cdn.bootcss.com/ionicons/2.0.1/css/ionicons.min.css">
    </head>
    <body>
        <style>
            .tr_color{background-color: #9F88FF}
        </style>
        <div class="div_head">
            <span>
                <span style="float: left;">当前位置是：订单管理-》订单审核</span>
                <span style="float: right; margin-right: 8px; font-weight: bold;">
                    <!-- <a style="text-decoration: none;" href="<?php echo U('tianjia');?>">【添加广告位】</a> -->
                </span>
            </span>
        </div>
        <div></div>
        <div class="div_search">
            <span>
                <form action="#" method="get">
                    类别<select name="s_product_mark" style="width: 100px;">
                        <option selected="selected" value="0">请选择</option>
                        <option value="1">苹果apple</option>
                    </select>
                    <input value="查询" type="submit" />
                </form>
            </span>
        </div>
        <div style="font-size: 13px; margin: 10px 5px;text-align:center">
            <table class="table table-striped table-hover" width="100%">
                <tbody><tr style="font-weight: bold;">
                        <td>订单用户名</td>
                        <td>订单用户姓名</td>
                        <td>订单用户公司名</td>
                        <td>订单类型</td>
                        <td>订单广告位id</td>
                        <td>订单用户名电话</td>
                        <td>订单用户邮箱</td>
                        <td>订单用户手机</td>
                        <td>订单广告位位置</td>
                        <td>订单广告位价格</td>
                        <td>订单内容简介</td>
                        <td colspan="2">操作</td>
                    </tr>
                    <?php if(is_array($info)): foreach($info as $key=>$v): ?><tr id="order">
                        <td><?php echo ($v["orderuname"]); ?></td>
                        <td><?php echo ($v["orderufname"]); ?></td>
                        <td><?php echo ($v["ordercname"]); ?></td>
                        <td><?php echo ($v["ordertype"]); ?></td>
                        <td><?php echo ($v["placeid"]); ?></td>
                        <td><?php echo ($v["orderuphone"]); ?></td>
                        <td><?php echo ($v["orderuemail"]); ?></td>
                        <td><?php echo ($v["orderumphone"]); ?></td>
                        <td><?php echo ($v["orderlocation"]); ?></td>
                        <td><?php echo ($v["orderprice"]); ?></td>
                        <td><?php echo ($v["orderdes"]); ?></td>
                        <td><a href="<?php echo U('agree',array('id'=>$v['orderid'],'email'=>$v['orderuemail'],'userfname'=>$v['orderufname']));?>"><button type="button" class="btn btn-warning">同意</button></a></td>
                        <td><a href="<?php echo U('disagree',array('id'=>$v['orderid'],'email'=>$v['orderuemail'],'userfname'=>$v['orderufname']));?>"><button type="button" class="btn btn-danger">不同意</button></a></td>
                        <td><a href="<?php echo U('messageAdmin',array('id'=>$v['orderid'],'userfname'=>$v['orderufname'],'placeid'=>$v['placeid'],'email'=>'yipengfei0824@163.com'));?>"><button type="button" class="btn btn-primary">通知管理员</button></a></td>
                    </tr><?php endforeach; endif; ?>

                    <tr>
                        <td colspan="20" style="text-align: center;">
                            <?php echo ($pagelist); ?>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </body>
</html>