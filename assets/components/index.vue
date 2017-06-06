<template>
    <div>
        <index-head></index-head>
        <div id="container">
            <div class="imgList" style="left: -600px;">
                <img src="../img/1.jpg">
            </div>
            <div class="circle">
                <span index="1"></span>
                <span index="2"></span>
                <span index="3"></span>
                <span index="4"></span>
            </div>
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
    #container{
        width: 100%;
        height: 302px;

    }
    .imgList img{
        width: 100%;
        height: 302px;
        z-index: 1;
        float: left;
    }
    .circle{
        z-index: 2;
        float: left;
        width: 62px;
        height: 8px;
        background-color: #00CC00;
    }
    .circle span{
        float: left;
        width: 5px;
        height: 5px;
        border-radius: 5px;
        background-color: red;/*#F1F1F1*/
    }
</style>