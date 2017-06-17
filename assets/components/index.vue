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
            <p>520大胆爱，低至5.2折!  <span>来找芯网找你所想原件</span></p>
        </div>
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
    .find p{
        font-family: "Arial","Microsoft YaHei","黑体","宋体",sans-serif;
        color: #FF0606;
        text-align: center;
    }
    .find p span{
        color: #A09F9F;
    }
</style>