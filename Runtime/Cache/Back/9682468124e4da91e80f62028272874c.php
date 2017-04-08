<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <meta http-equiv=content-type content="text/html; charset=utf-8" />
        <link href="<?php echo (C("BACK_CSS_URL")); ?>/admin.css" type="text/css" rel="stylesheet" />
        <script language=javascript>
            function expand(el)
            {
                childobj = document.getElementById("child" + el);

                if (childobj.style.display == 'none')
                {
                    childobj.style.display = 'block';
                }
                else
                {
                    childobj.style.display = 'none';
                }
                return;
            }
        </script>
        
    </head>
    <body>
        <table height="100%" cellspacing=0 cellpadding=0 width=170
               background=<?php echo (C("BACK_IMG_URL")); ?>/menu_bg.jpg border=0>
               <tr>
                <td valign=top align=middle>
                    <table cellspacing=0 cellpadding=0 width="100%" border=0>

                        <tr>
                            <td height=10></td></tr></table>
                    <table cellspacing=0 cellpadding=0 width=150 border=0>

                        <tr height=22>
                            <td style="padding-left: 30px" background=<?php echo (C("BACK_IMG_URL")); ?>/menu_bt.jpg><a
                                    class=menuparent onclick=expand(1)
                                    href="javascript:void(0);">关于我们</a></td></tr>
                        <tr height=4>
                            <td></td></tr></table>
                    <table id=child1 style="display: none" cellspacing=0 cellpadding=0
                           width=150 border=0>
                        <tr height=20>
                            <td align=middle width=30><img height=9
                                                           src="<?php echo (C("BACK_IMG_URL")); ?>/menu_icon.gif" width=9></td>
                            <td><a class=menuchild
                                   href="#"
                                   target=main>公司简介</a></td></tr>
                        <tr height=20>
                            <td align=middle width=30><img height=9
                                                           src="<?php echo (C("BACK_IMG_URL")); ?>/menu_icon.gif" width=9></td>
                            <td><a class=menuchild
                                   href="#"
                                   target=main>荣誉资质</a></td></tr>
                        <tr height=4>
                            <td colspan=2></td></tr></table>
                    <table cellspacing=0 cellpadding=0 width=150 border=0>
                        <tr height=22>
                            <td style="padding-left: 30px" background=<?php echo (C("BACK_IMG_URL")); ?>/menu_bt.jpg><a
                                    class=menuparent onclick=expand(2)
                                    href="javascript:void(0);">新闻中心</a></td></tr>
                        <tr height=4>
                            <td></td></tr></table>
                    <table id=child2 style="display: none" cellspacing=0 cellpadding=0
                           width=150 border=0>
                        <tr height=20>
                            <td align=middle width=30><img height=9
                                                           src="<?php echo (C("BACK_IMG_URL")); ?>/menu_icon.gif" width=9></td>
                            <td><a class=menuchild
                                   href="#"
                                   target=main>公司新闻</a></td></tr>
                        <tr height=4>
                            <td colspan=2></td></tr></table>


<?php if(is_array($auth_infoA)): foreach($auth_infoA as $key=>$v): ?><table cellspacing=0 cellpadding=0 width=150 border=0>
    <tr height=22><td style="padding-left: 30px" background=<?php echo (C("BACK_IMG_URL")); ?>/menu_bt.jpg>
    <a class=menuparent onclick=expand(<?php echo ($v["authid"]); ?>)
                href="javascript:void(0);"><?php echo ($v["authname"]); ?></a></td></tr>
    <tr height=4><td></td></tr></table>
<table id="child<?php echo ($v["authid"]); ?>" style="display: none" cellspacing=0 cellpadding=0
       width=150 border=0>
    <?php if(is_array($auth_infoB)): foreach($auth_infoB as $key=>$vv): if($vv['authpid'] == $v['authid']): ?><tr height=20><td align=middle width=30><img height=9
     src="<?php echo (C("BACK_IMG_URL")); ?>/menu_icon.gif" width=9></td>
     <td>
     <a class=menuchild href="/zjkgj/gongjiao/index.php/Back/<?php echo ($vv["authc"]); ?>/<?php echo ($vv["autha"]); ?>" target="right"><?php echo ($vv["authname"]); ?></a></td></tr><?php endif; endforeach; endif; ?>
</table><?php endforeach; endif; ?>


                    <table cellspacing=0 cellpadding=0 width=150 border=0>

                        <tr height=22>
                            <td style="padding-left: 30px" background=<?php echo (C("BACK_IMG_URL")); ?>/menu_bt.jpg><a
                                    class=menuparent onclick=expand(0)
                                    href="javascript:void(0);">个人管理</a></td></tr>
                        <tr height=4>
                            <td></td></tr></table>
                    <table id=child0 style="display: none" cellspacing=0 cellpadding=0
                           width=150 border=0>

                        <tr height=20>
                            <td align=middle width=30><img height=9
                                                           src="<?php echo (C("BACK_IMG_URL")); ?>/menu_icon.gif" width=9></td>
                            <td><a class=menuchild
                                   href=""
                                   target=main>修改口令</a></td></tr>
                        <tr height=20>
                            <td align=middle width=30><img height=9
                                                           src="<?php echo (C("BACK_IMG_URL")); ?>/menu_icon.gif" width=9></td>
                            <td><a class=menuchild
                                   onclick="if (confirm('确定要退出吗？')) return true; else return false;"
                                                        href="<?php echo U('Admin/logout');?>" target=_top>退出系统</a></td></tr></table></td>
                <td width=1 bgcolor=#d1e6f7></td>
            </tr>
        </table>
    </body>
</html>