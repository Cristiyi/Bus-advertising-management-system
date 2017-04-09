<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8" />

        <title>类型列表</title>
        <link href="<?php echo (C("BACK_CSS_URL")); ?>/bootstrap.min.css" type="text/css" rel="stylesheet" />
        <link href="<?php echo (C("BACK_CSS_URL")); ?>/mine.css" type="text/css" rel="stylesheet" />
        <link rel="stylesheet" href="//cdn.bootcss.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="//cdn.bootcss.com/ionicons/2.0.1/css/ionicons.min.css">
    </head>
    <body>
        <style>
            .tr_color{background-color: #9F88FF}
            .add {
              position:absolute;
              top:-8px;
              right:185px;
            }
        </style>
        <div class="div_head">
            <span>
                <span style="float: left;">当前位置是：分类管理-》广告分类列表</span>
                <span style="float: right; margin-right: 8px; font-weight: bold;">
                    <a style="text-decoration: none;" href="<?php echo U('tianjia');?>" class="add"><button type="button" class="btn btn-success btn-sm"><i class="fa fa-plus"></i>添加分类</button></a>
                </span>
            </span>
        </div>
        <div></div>
        <!-- <div class="div_search">
            <span>
                <form action="#" method="get">
                    品牌<select name="s_product_mark" style="width: 100px;">
                        <option selected="selected" value="0">请选择</option>
                        <option value="1">苹果apple</option>
                    </select>
                    <input value="查询" type="submit" />
                </form>
            </span>
        </div> -->
        <div style="font-size: 13px; margin: 10px 5px;text-align:center">
            <table class="table table-striped table-hover" width="100%">
                <tbody><tr style="font-weight: bold;">
                        <td>类型编号</td>
                        <td>类型名称</td>
                        <td colspan="2">操作</td>
                    </tr>
                    <?php if(is_array($info)): foreach($info as $key=>$v): ?><tr id="<?php echo ($v["cateid"]); ?>">
                        <td><?php echo ($v["cateno"]); ?></td>
                        <td><a href="#"><?php echo ($v["catename"]); ?></a></td>
                        <td><a href="<?php echo U('upd',array('cateid'=>$v['cateid']));?>"<button type="button" class="btn btn-warning"><i class="fa fa-pencil"></i>修改</button></a></td>
                        <td><a href="/zhangjiakou/bus/index.php/Back/Category/delCate/cateid/<?php echo ($v["cateid"]); ?>" onclick="return confirm('你确定删除该类型吗')"><button type="button" class="btn btn-danger"><i class="fa fa-trash"></i>删除</button></a></td>
                    </tr><?php endforeach; endif; ?>
                    <tr>
                        <td colspan="20" style="text-align: center;">
                            [1]
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </body>
</html>