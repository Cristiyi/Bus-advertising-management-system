<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <meta http-equiv=content-type content="text/html; charset=utf-8" />
        <link href="<?php echo (C("BACK_CSS_URL")); ?>/admin.css" type="text/css" rel="stylesheet" />
    </head>
    <body>
        <table cellspacing=0 cellpadding=0 width="100%" style="background-color:#3c8dbc;" border=0>
            <tr height=56>
                <td width=280 style="background-color:#3c8dbc;"><h1 style="color: #fff">张家口公交广告管理系统</h1></td>
                <td style="font-weight: bold; color: #fff; padding-top: 20px"
                    align=middle>当前用户：<?php echo (session('adminname')); ?> &nbsp;&nbsp; <a style="color: #fff"
                                                        href=""
                                                        target=main>修改口令</a> &nbsp;&nbsp; <a style="color: #fff"
                                                        onclick="if (confirm('确定要退出吗？')) return true; else return false;"
                                                        href="<?php echo U('Admin/logout');?>" target=_top>退出系统</a>
                </td>
                <td align=right width=268 style="background-color:#3c8dbc;"></td></tr></table>
        <!-- <table cellspacing=0 cellpadding=0 width="100%" border=0>
            <tr bgcolor=#1c5db6 height=4>
                <td></td>
            </tr>
        </table> -->
    </body>
</html>