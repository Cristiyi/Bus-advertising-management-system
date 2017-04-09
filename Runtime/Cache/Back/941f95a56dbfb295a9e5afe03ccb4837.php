<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8" />

        <title>广告列表</title>
        <link href="<?php echo (C("BACK_CSS_URL")); ?>/bootstrap.min.css" type="text/css" rel="stylesheet" />
        <link href="<?php echo (C("BACK_CSS_URL")); ?>/mine.css" type="text/css" rel="stylesheet" />
        <script src="<?php echo (C("BACK_JS_URL")); ?>/jquery.min.js"></script>
        <link rel="stylesheet" href="//cdn.bootcss.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="//cdn.bootcss.com/ionicons/2.0.1/css/ionicons.min.css">
    </head>
    <body>
        <style>
            .tr_color{background-color: #9F88FF}
            .add {
              position:absolute;
              top:-8px;
              right:135px;
            }
        </style>
        <div class="div_head">
            <span>
                <span style="float: left;">当前位置是：广告管理-》广告列表</span>
                <span style="float: right; margin-right: 8px; font-weight: bold;">
                    <a style="text-decoration: none;" href="<?php echo U('tianjia');?>" class="add"><button type="button" class="btn btn-success btn-sm"><i class="fa fa-plus"></i>添加广告</button></a>
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
        <div style="font-size: 13px; margin: 10px 5px;">
            <table class="table table-striped table-hover" width="100%">
                <tbody><tr style="font-weight: bold;">
                        <td>编号</td>
                        <td>类别</td>
                        <td>广告图片</td>
                        <td>开始时间</td>
                        <td>结束时间</td>
                        <td>广告位编号</td>
                        <td  colspan="2">操作</td>
                    </tr>
                    <?php if(is_array($info)): foreach($info as $key=>$v): ?><tr id="place_<?php echo ($v["placeid"]); ?>" width="100" height="100">
                        <td width="90" height="30"><a href="#"><?php echo ($v["adverno"]); ?></a></td>
                        <td width="100" height="30"><?php echo ($v["catename"]); ?></td>
                        <td width="150" height="150"><img src="<?php echo (C("UPLOAD_PATH")); echo (substr($v["adverimg"],2)); ?>" width="100" height="100" alt="暂无图片"></td>
                        <td width="100" height="30"><?php echo ($v["starttime"]); ?></td>
                        <td width="100" height="30"><?php echo ($v["endtime"]); ?></td>
                        <td width="100" height="30"><?php echo ($v["placeno"]); ?></td>
                        <td width="100" height="30"><a href="<?php echo U('upd',array('adverid'=>$v['adverid']));?>"><button type="button" class="btn btn-warning"><i class="fa fa-pencil"></i>修改</button></a></td>
                        <td width="100" height="30"><a href="/zhangjiakou/bus/index.php/Back/Adver/delAdver/adverid/<?php echo ($v["adverid"]); ?>" onclick="return confirm('确定删除这个广告吗？')"><button type="button" class="btn btn-danger"><i class="fa fa-trash"></i>删除</button></a></td>
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