<template>
    <div>
        <index-head></index-head>
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                <li data-target="#carousel-example-generic" data-slide-to="3"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox" id="carouselImgBox">
                <div class="item active">
                    <img class="carouselImg" src="../img/1.jpg">
                </div>
                <div class="item">
                    <img class="carouselImg" src="../img/2.jpg">
                </div>
                <div class="item">
                    <img class="carouselImg" src="../img/3.jpg">
                </div>
                <div class="item">
                    <img class="carouselImg" src="../img/4.jpg">
                </div>
            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <div class="find">
            <h4>找找你想要的</h4>
            <input type="text" class="find-input">
            <p class="find-love">520大胆爱，低至5.2折!  <span>来找芯网找你所想原件</span></p>
            <h6>按类别浏览&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;找产品信息</h6>
            <ul>
                <li><img src="../img/find1.gif"><p class="find-china-word">嵌入式芯片</p><p class="find-english-word">Embedded preiphera</p></li>
                <li><img src="../img/find2.gif"><p class="find-china-word">接口芯片</p><p class="find-english-word">interface chip</p></li>
                <li><img src="../img/find3.gif"><p class="find-china-word">传感器</p><p class="find-english-word">Interface chip</p></li>
                <li><img src="../img/find4.gif"><p class="find-china-word">逻辑芯片</p><p class="find-english-word">Embedded preiphera</p></li>
            </ul>
        </div>
        <div class="all-category">
            <div class="all-category-title">
                <hr class="all-category-hr1"><span class="all-category-title-word">所有类别</span><hr class="all-category-hr2">
            </div>
            <div class="all-category-body">
                <ul>
                    <li><img src="../img/allCategory1.gif"><p>免费找货</p></li>
                    <li><img src="../img/allCategory2.gif"><p>快速交货</p></li>
                    <li><img src="../img/allCategory3.gif"><p>全球货源</p></li>
                    <li><img src="../img/allCategory2.gif"><p>代购服务</p></li>
                </ul>
            </div>
        </div>
        <div style="height: 500px; width: 100%"></div>
    </div>
</template>
<script>
    import head from './indexHead.vue'
    export default{
        components:{
            'indexHead':head
        }
    }
</script>

<style scoped>
    #carouselImgBox .item .carouselImg{
        width: 100%;
        height: 400px;
    }
    .find h4{
        text-align: center;
        font-size: 14px;
        font-weight: 900;
        font-family: "Arial","Microsoft YaHei","黑体","宋体",sans-serif;
    }
    .find-input{
        width: 520px;
        height: 38px;
        margin-left: 50%;
        transform: translate(-50%);
        margin-top: 10px;
        background: url("../img/find.gif") no-repeat scroll 1% center transparent;
        padding-left: 40px;
        font-family: "Arial","Microsoft YaHei","黑体","宋体",sans-serif;
        font-size: 16px;
        font-weight: 600;
    }
    .find-love{
        font-family: "Arial","Microsoft YaHei","黑体","宋体",sans-serif;
        color: #FF0606;
        text-align: center;
    }
    .find p span{
        color: #A09F9F;
    }
    .find h6{
        text-align: center;
        color: #A09F9F;
        margin-top: 26px;
        margin-bottom: 22px;
    }
    .find ul{
        list-style: none;
        width: 620px;
        height: 142px;
        margin: 0 auto;
    }
    .find li{
        text-align: center;
        float: left;
        width: 155px;
    }
    .find ul li img{
        width: 90px;
        height: 93px;
    }
    .find-china-word{
        font-size: 14px;
        font-weight: 600;
        font-family: "Arial","Microsoft YaHei","黑体","宋体",sans-serif;
        color: #7C7474;
        margin: 16px 0 0 0;
    }
    .find-english-word{
        color: #A09F9F;
    }
    .all-category{
        margin-top: 38px;
        height: 316px;
        width: 100%;
    }
    .all-category-title{
        text-align: center;
        width: 694px;
        height: auto;
        margin: 0 auto;
    }
    .all-category-hr1{
        width: 292px;
        border-top: 1px solid #000000;
        float: left;
        margin-top: 8px;
    }
    .all-category-hr2{
        width: 292px;
        border-top: 1px solid #000000;
        float: right;
        margin-top: 8px;
    }
    .all-category-title-word{
        color: #0FA7F3;
        font-family: "Arial","Microsoft YaHei","黑体","宋体",sans-serif;
    }
    .all-category-body{
        height: 296px;
        width: 100%;
        background: url("../img/allCategory.gif")no-repeat left center transparent;
        margin-top: 12px;
        background-size: 100% 100%;
    }
    .all-category-body ul{
        position: absolute;
        margin-top: 80px;
        margin-left: 50%;
        transform: translate(-50%);
        width: 536px;
        height: 132px;
    }
    .all-category-body li{
        text-align: center;
        width: 134px;
        float: left;
        list-style: none;
    }
    .all-category-body img{
        width: 90px;
        height: 90px;
    }
    .all-category-body p{
        border-radius: 5px;
        margin: 12px auto;
        background-color: #6BD7FF;
        color: #ffffff;
        font-family: "Arial","Microsoft YaHei","黑体","宋体",sans-serif;
        width: 90px;
        height: 22px;
        line-height: 22px;
        font-size: 14px;
    }
</style>