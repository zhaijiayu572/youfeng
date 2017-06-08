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
</style>