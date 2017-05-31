<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
?>


<!DOCTYPE HTML>
<base href="<?php echo site_url()?>">
<html>
<head>
    <meta charset="utf-8">
    <title>产品查询</title>
    <style>
        #container{
            position: absolute;
            bottom: 200px;
            right: 50px;
        }
        #link{
            display: block;
            /*background: red;*/
            position: relative;
            left: 40%;
            margin: 0 auto;
        }
    </style>
</head>
<body>
<div id="container">
    <h4>产品库存查询</h4>
    <table class="table table-border table-bordered table-bg table-hover table-sort">
        <thead>
        <tr class="text-c">
            <th width="40"><input name="" type="checkbox" value=""></th>
            <th width="80">序号</th>
            <th width="100">产品名</th>
            <th width="100">数量</th>
            <th width="80">标准</th>
            <th width="150">类型</th>
            <th width="200">描述</th>
            <th width="60">价格</th>
            <th width="100">库存量</th>
        </tr>
        </thead>
        //后台数据循环输出
        <?php foreach ($product as $key=>$value)
        {
            ?>
            <tbody>
            <tr class="text-c">
                <td width="40"><input name="" type="checkbox" value=""></td>
                <td width="80"><?php echo $value->product_id?></td>
                <td><?php echo $value->product_title?></td>
                <td><?php echo $value->product_quantity?></td>
                <td><?php echo $value->product_standard?></td>
                <td><?php echo $value->product_type?></td>
                <td><?php echo $value->product_description?></td>
                <td><?php echo $value->product_price?></td>
                <td><?php echo $value->product_sellnum?></td>
            </tr>
            </tbody>
            <?php
        }
        ?>
    </table>
    //创建分页链接
    <div id="link">
        <?php
        echo $this->pagination->create_links();
        ?>
    </div>
</div>


</body>
</html>