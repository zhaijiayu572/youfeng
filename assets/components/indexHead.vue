<template>
    <div class="head">
        <div class="logoBox"><img src="../img/logo.gif" id="logo"></div>
        <ul>
            <div class="titleLine"></div><li><a href="#" class="titleLink">主页</a><span class="headSmallTitle">THE HOME PAGE</span></li>
            <div class="titleLine"></div><li><a href="#" class="titleLink">品牌中心</a><span class="headSmallTitle">MILK TEA PRODUCT</span></li>
            <div class="titleLine"></div><li><a href="#" class="titleLink">芯指数</a><span class="headSmallTitle">STORE DISPLAY</span></li>
            <div class="titleLine"></div><li><a href="#" class="titleLink">商品分类</a><span class="headSmallTitle">BRAND</span></li>
            <div class="titleLine"></div><li><a href="#" class="titleLink">批量查询</a><span class="headSmallTitle">PROBLEM SOLVING</span></li>
            <div class="titleLine"></div><li><a href="#" class="titleLink">关于我们</a><span class="headSmallTitle">JOIN IN COOPERATION</span></li>
            <div class="titleLine"></div>
        </ul>
        <div class="login" v-show="logdisplay">
            <span class="loginButton" @click="loginDisplay">登录</span>
            <div class="loginLine"></div>
            <span class="register">注册</span>
        </div>
        <div class="login" v-show="personalDisplay">
            <span class="loginButton personalButton" @click="personalButton">个人中心</span>
            <div class="loginLine personalLine"></div>
            <img src="../img/shoppingCart.gif" class="shoppingCart">
        </div>
    </div>
</template>

<script>
    export default{
        data:()=>{
            return{
                logdisplay:true,
                personalDisplay:false
            }
        },
        methods:{
            loginDisplay(){
                this.logdisplay = false;
                this.personalDisplay = true;
            },
            personalButton(){
                this.logdisplay = true;
                this.personalDisplay = false;
            }
        }
    }
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
        width: 16.3%;
        height: 39px;
        line-height: 39px;
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
    .titleLine{
        background-color: #7A7A7A;
        height: 34px;
        width: 2px;
        float: left;
        margin-top: 8px;
    }
    .titleLink{
        text-decoration: none;
        color: #666666;
    }
    .login{
        width: 106px;
        height: 38px;
        float: left;
        text-align: center;
        margin-bottom: 14px;
        margin-top: 24px;
        margin-left: 3.88%;
    }
    .loginButton{
        margin-top: 9px;
        float: left;
        width: 49%;
        height: 20px;
    }
    .register{
        margin-top: 9px;
        float: left;
        width: 49%;
        height: 20px;
    }
    .loginLine{
        background-color: #000;
        width: 1px;
        height: 19px;
        margin-top: 12px;
        float: left;
    }
    .personalButton{
        color: #F40C28;
        font-size: 12px;
        text-align: left;
    }
    .personalLine{
        background-color: #F40C28;
        height: 15px;
        margin-top: 10.5px;
        margin-left: 2px;
        margin-right: 2px;
    }
    .shoppingCart{
       margin-top: 12px;
    }
</style>