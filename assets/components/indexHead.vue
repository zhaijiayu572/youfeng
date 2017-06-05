<template>
    <div class="head">
        <div class="logoBox"><img src="../img/logo.gif" id="logo"></div>
        <ul>
            <div class="line"></div><li>主页<span class="headSmallTitle">THE HOME PAGE</span></li>
            <li>品牌中心<span class="headSmallTitle">MILK TEA PRODUCT</span></li>
            <li>芯指数<span class="headSmallTitle">STORE DISPLAY</span></li>
            <li>商品分类<span class="headSmallTitle">BRAND</span></li>
            <li>批量查询<span class="headSmallTitle">PROBLEM SOLVING</span></li>
            <li>关于我们<span class="headSmallTitle">JOIN IN COOPERATION</span></li>
        </ul>
    </div>
</template>

<script>

</script>

<style scoped>
    .head{
        width: 100%;
        height: 76px;
    }
    .logoBox{
        margin-top: 20px;
        margin-bottom: 13px;
        margin-right: 46px;
        margin-left: 2.2%;
        width: 15.18%;
        height: 44px;
        float: left;
    }
    #logo{
        width: 100%;
        height: 44px;
    }
    ul{
        margin-top: 21px;
        margin-bottom: 17px;
        width: 62.59%;
        height: 44px;
        float: left;
    }
    ul li{
        float: left;
        list-style-type: none;
        width: 16.6%;
        height: 39px;
        line-height: 39px;
        color: #666666;
        font-size: 19px;
        text-align: center;
        font-weight: 900;
        letter-spacing: 2px;
        font-family: "Arial","Microsoft YaHei","黑体","宋体",sans-serif;
    }
    .headSmallTitle{
        color: #9d9d9d;
        letter-spacing: normal;
        line-height: normal;
        font-weight: normal;
        font-size:12px;
        -webkit-transform: scale(0.70);
        float: left;
        margin-top: -10px;
        width: 100%;
        height: 14px;
        overflow: hidden;
    }
    .line{

    }
</style>