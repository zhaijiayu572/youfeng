<template>
    <ul id="suspend-box">
        <li class="tec-contact">
            <img src="../img/tec-logo.png" alt="">
        </li>
        <li class="phone-contact">
            <span class="contact-title">咨询热线</span>
            <span class="contact-phone">11111111</span>
        </li>
        <li class="fun-panel">
            <span class="show-code"></span>
            <span class="top-btn"></span>
        </li>
    </ul>
</template>
<style>
#suspend-box{
            position: absolute;
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
        .fun-panel .top-btn{
            border-left: 1px solid #ddd;
            background-position: right;
        }
</style>
<script>

</script>