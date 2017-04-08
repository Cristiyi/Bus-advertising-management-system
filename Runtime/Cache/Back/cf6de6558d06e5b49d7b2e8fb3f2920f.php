<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8" />

        <title>广告位列表</title>
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
              right:120px;
            }
        </style>
        <div class="div_head">
            <span>
                <span style="float: left;">当前位置是：广告位管理-》广告位列表</span>
                <span style="float: right; margin-right: 8px; font-weight: bold;">
                    <a style="text-decoration: none;" href="<?php echo U('tianjia');?>" class="add"><button type="button" class="btn btn-success btn-sm"><i class="fa fa-plus"></i>添加广告位</button></a>
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
                        <td>编号</td>
                        <td>类别</td>
                        <td>状态</td>
                        <td>位置</td>
                        <td>价格</td>
                        <td>广告编号</td>
                        <td>简介</td>
                        <td colspan="2">操作</td>
                    </tr>
                    <?php if(is_array($info)): foreach($info as $key=>$v): ?><tr id="place">
                        <td><a href="#"><?php echo ($v["placeno"]); ?></a></td>
                        <td><?php echo ($v["catename"]); ?></td>
                        <td><?php echo ($v["status"]); ?></td>
                        <td><?php echo ($v["location"]); ?></td>
                        <td><?php echo ($v["price"]); ?></td>
                        <td><?php echo ($v["adverno"]); ?></td>
                        <td><?php echo ($v["description"]); ?></td>
                        <td><a href="<?php echo U('upd',array('placeid'=>$v['placeid']));?>"><button type="button" class="btn btn-warning"><i class="fa fa-pencil"></i>修改</button></a></td>
                        <td><a href="/zjkgj/gongjiao/index.php/Back/Place/delPlace/placeid/<?php echo ($v["placeid"]); ?>" onclick="return confirm('确定删除这个广告吗？')"><button type="button" class="btn btn-danger"><i class="fa fa-trash"></i>删除</button></a></td>
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