<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <title>添加广告位</title>
        <meta http-equiv="content-type" content="text/html;charset=utf-8">
        <link href="<?php echo (C("BACK_CSS_URL")); ?>/mine.css" type="text/css" rel="stylesheet">
        <link href="<?php echo (C("BACK_CSS_URL")); ?>/bootstrap.min.css" type="text/css" rel="stylesheet" />
        <link rel="stylesheet" href="//cdn.bootcss.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="//cdn.bootcss.com/ionicons/2.0.1/css/ionicons.min.css">
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
                <span style="float:left">当前位置是：广告位管理-》添加广告位</span>
                <span style="float:right;margin-right: 8px;font-weight: bold">
                    <a style="text-decoration: none" href="<?php echo U('showlist');?>" class="back"><button type="button" class="btn btn-info btn-sm">返回</button></a>
                </span>
            </span>
        </div>
        <div></div>

        <div style="font-size: 13px;margin: 10px 5px" class="form-group">
            <form action="/zhangjiakou/bus/index.php/Back/Place/tianjia.html" method="post" enctype="multipart/form-data">
            <table width="100%" class="table table-striped">

                <tr>
                    <td>广告位编号</td>
                    <td><input type="text" name="placeno" /></td>
                </tr>

                <tr>
                    <td>广告位位置</td>
                    <td><input type="text" name="location" /></td>
                </tr>
                <tr>
                    <td>广告位状态</td>
                    <td><input type="text" name="status" /></td>
                </tr>
                <tr>
                    <td>广告位分类</td>
                    <td>
                        <select name="catename">
                            <option value="0">请选择</option>
                            <?php if(is_array($cateinfo)): foreach($cateinfo as $key=>$v): ?><option value="<?php echo ($v["catename"]); ?>"><?php echo ($v["catename"]); ?></option><?php endforeach; endif; ?>
                        </select>
                    </td>
                </tr>

               <!--  <tr>
                    <td>商品品牌</td>
                    <td>
                        <select name="f_goods_brand_id">
                            <option value="0">请选择</option>
                            {foreach from=$s_brand_info key=_k item=_v}
                            <option value="<?php echo ($_v["brand_id"]); ?>"><?php echo ($_v["brand_name"]); ?></option>
                            {/foreach}
                        </select>
                    </td>
                </tr> -->
                <tr>
                    <td>广告位价格</td>
                    <td><input type="text" name="price" /></td>
                </tr>
                <tr>
                    <td>广告编号</td>
                    <td><input type="text" name="adverno" /></td>
                </tr>
               <!--  <tr>
                    <td>广告位图片</td>
                    <td><input type="file" name="f_goods_image" /></td>
                </tr> -->
                <tr>
                    <td>广告位详细描述</td>
                    <td>
                        <input type="text" name="description" />
                    </td>
                </tr>

                <tr>
                    <td colspan="2" align="center">
                        <button type="button" class="btn btn-success" onclick="submit()"><i class="fa fa-plus"></i>添加</button>
                    </td>
                </tr>
            </table>
            </form>
        </div>
    </body>
</html>