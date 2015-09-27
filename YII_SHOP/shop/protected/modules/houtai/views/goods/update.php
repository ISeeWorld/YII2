<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <title>修改商品</title>
        <meta http-equiv="content-type" content="text/html;charset=utf-8">
        <link href="<?php echo HOUTAI_CSS_URL; ?>mine.css" type="text/css" rel="stylesheet">
    </head>

    <body>

        <div class="div_head">
            <span>
                <span style="float:left">当前位置是：商品管理-》修改商品信息</span>
                <span style="float:right;margin-right: 8px;font-weight: bold">
                    <a style="text-decoration: none" href="./index.php?r=houtai/goods/showccccccccccccccccccccccccccccccc">【返回】</a>
                </span>
            </span>
        </div>
        <div></div>


<!--        'goods_id' => 'Goods',
            'goods_name' => '商品名称',
            'goods_weight' => '商品重量',
            'goods_price' => '商品价格',
            'goods_number' => '商品数量',
            'goods_category_id' => '商品分类',
            'goods_brand_id' => '商品品牌',
            'goods_introduce' => '商品介绍',
            'goods_big_img' => '商品大图片',
            'goods_small_img' => '商品小图片',
            'goods_create_time' => '创建时间', -->
        <div style="font-size: 13px;margin: 10px 5px">
    <!-- <form action="./admin.php?c=goods&a=add" method="post" enctype="multipart/form-data"> -->
        <?php $form=$this->beginwidget('CActiveForm') ;?>
            <table border="1" width="100%" class="table_a">
                <tr>
                   <!--  <td>商品名称</td> -->
                    <td>
                    <?php echo $form->labelEx($goods_model_view,'goods_name'); ?>  
                    </td>
                    <!-- <td><input type="text" name="f_goods_name" /></td> -->
                    <td>
                    <?php echo $form->textField($goods_model_view,'goods_name'); ?>    
                    </td>

                </tr>

                <tr>
                   <!--  <td>商品名称</td> -->
                    <td>
                    <?php echo $form->labelEx($goods_model_view,'goods_weight'); ?>  
                    </td>
                    <!-- <td><input type="text" name="f_goods_name" /></td> -->
                    <td>
                    <?php echo $form->textField($goods_model_view,'goods_weight'); ?>    
                    </td>

                </tr>

             

                <tr>
                   <!--  <td>商品名称</td> -->
                    <td>
                    <?php echo $form->labelEx($goods_model_view,'goods_number'); ?>  
                    </td>
                    <!-- <td><input type="text" name="f_goods_name" /></td> -->
                    <td>
                    <?php echo $form->textField($goods_model_view,'goods_number'); ?>    
                    </td>

                </tr>
<!--                 <tr>
                    <td>商品分类</td>

                    <td>
                        <select name="f_goods_category_id">
                            <option value="0">请选择</option>
                            {foreach from=$s_category_info key=_k item=_v}
                            <option value="{$_v.category_id}">{$_v.category_name}</option>
                            {/foreach}
                        </select>
                    </td>
                </tr> -->
<!--                 <tr>
                    <td>商品品牌</td>
                    <td>
                        <select name="f_goods_brand_id">
                            <option value="0">请选择</option>
                            {foreach from=$s_brand_info key=_k item=_v}
                            <option value="{$_v.brand_id}">{$_v.brand_name}</option>
                            {/foreach}
                        </select>
                    </td>
                </tr> -->
                  <tr>
                   <!--  <td>商品名称</td> -->
                    <td>
                    <?php echo $form->labelEx($goods_model_view,'goods_price'); ?>  
                    </td>
                    <!-- <td><input type="text" name="f_goods_name" /></td> -->
                    <td>
                    <?php echo $form->textField($goods_model_view,'goods_price'); ?>    
                    </td>

                </tr>
<!--                 <tr>
                    <td>商品图片</td>
                    <td><input type="file" name="f_goods_image" /></td>
                </tr> -->
                </tr>

                <tr>
                   <!--  <td>商品名称</td> -->
                    <td>
                    <?php echo $form->labelEx($goods_model_view,'goods_introduce'); ?>  
                    </td>
                    <!-- <td><input type="text" name="f_goods_name" /></td> -->
                    <td>
                    <?php echo $form->textArea($goods_model_view,'goods_introduce'); ?>    
                    </td>

                </tr>
                
                <tr>
                    <td colspan="2" align="center">
                        <input type="submit" value="修改">
                    </td>
                </tr>  
            </table>
            <!-- </form> -->
        </div>
    <?php $form=$this->endwidget('CActiveForm') ;?>
    </body>
</html>