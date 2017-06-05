<template>
    <div id="suspend-container">
        <ul id="suspend-box">
            <li class="tec-contact">
                <img src="../img/tec-logo.png" alt="">
            </li>
            <li class="phone-contact">
                <span class="contact-title">咨询热线</span>
                <span class="contact-phone">11111111</span>
            </li>
            <li class="fun-panel">
                <span class="show-code" @click="showCode"></span>
                <span class="top-btn" @click="scrollTop"></span>
            </li>
        </ul>
        <div class="code-box" v-show="codeShow">
            <div class="code-container">
                <img src="../img/code.jpg" alt="" class="code">
            </div>
            <div class="mask" @click="hideCode"></div>
        </div>

    </div>

</template>
<style>
    #suspend-box{
            position: fixed;
            right:10px;
            top:245px;
            width: 50px;
        }
        #suspend-box li{
            width: 50px;
            height: 50px;
            text-align: center;
            padding: 0 3px;
            background: #f9fafb;
            border-bottom:1px solid #ddd;
        }
        #suspend-box .tec-contact{
            padding-top:3px;
            padding-bottom: 0;
        }
        .tec-contact img{
            width: 100%;
        }
        .phone-contact{
            line-height: 25px;
        }
        .phone-contact .contact-phone{
            font-size:10px;
            color:#E77522;
        }
        #suspend-box .fun-panel{
            height: 25px;
        }
        .fun-panel span{
            cursor:pointer;
            width: 24px;
            height: 25px;
            float: left;
            background: url('../img/fun-btn.png') no-repeat;
        }
        .fun-panel .show-code{
            width: 25px;
            background-position: left;
        }
        .fun-panel .top-btn {
            border-left: 1px solid #ddd;
            background-position: right;
        }
    .code-box{
        height: 1000px;
    }
    .mask{
        width: 100%;
        height: 1000px;
        position: fixed;
        left:0;top:0;
        background: #000;
        opacity: 0.5;
        z-index: 1;
    }
    .code-container{
        position: fixed;
        left: 50%;
        top: 50%;
        transform: translateX(-50%) translateY(-50%);
        padding: 10px;
        background: #fff;
        z-index: 10;
    }
</style>
<script>
    export default{
        data:function () {
            return {
                codeShow:false
            }
        },
        methods:{
            scrollTop:function () {
                window.scrollTo(0,0);
            },
            showCode:function () {
                this.codeShow = true;
            },
            hideCode:function () {
                this.codeShow = false;
            }
        }
    }
</script>