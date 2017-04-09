<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <title>修改员工信息</title>
        <meta http-equiv="content-type" content="text/html;charset=utf-8">
        <link href="<?php echo (C("BACK_CSS_URL")); ?>/mine.css" type="text/css" rel="stylesheet">
        <link href="<?php echo (C("BACK_CSS_URL")); ?>/bootstrap.min.css" type="text/css" rel="stylesheet" />
        <link rel="stylesheet" href="//cdn.bootcss.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="//cdn.bootcss.com/ionicons/2.0.1/css/ionicons.min.css">

        <style>

        .back {
          position: absolute;
          top: -5px;
          right: 100px;
        }

        </style>
    </head>

    <body>

        <div class="div_head">
            <span>
                <span style="float:left">当前位置是：员工管理-》修改员工信息</span>
                <span style="float:right;margin-right: 8px;font-weight: bold">
                    <a style="text-decoration: none" href="<?php echo U('Index/index');?>" class="back"><button type="button" class="btn btn-info btn-sm">返回</button></a>
                </span>
            </span>
        </div>
        <div></div>

        <div style="font-size: 13px;margin: 10px 5px" class="form-group">
            <form action="/zhangjiakou/bus/index.php/Back/Admin/updpassword.html" method="post" enctype="multipart/form-data">
            <input type="hidden" name="adminid" value="<?php echo ($info["adminid"]); ?>"></input>
            <table class="table table-striped" width="100%" id="general-tab-tb">
                <tr>
                    <td>密码</td>
                    <td><input type="text" name="password" value="<?php echo ($info["password"]); ?>" /></td>
                </tr>


                <tr>
                    <td colspan="2" align="center">
                        <!-- <i class="fa fa-pencil"></i><input type="button" class="btn btn-success" value="修改" onclick="submit()"> -->
                        <button type="button" class="btn btn-success" onclick="submit()"><i class="fa fa-pencil"></i>修改</button>
                    </td>
                </tr>
            </table>
            </form>
        </div>
    </body>
</html>