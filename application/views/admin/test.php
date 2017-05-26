<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <base href="<?php echo site_url()?>">
    <link rel="stylesheet" href="assets/css/reset.css">
    <style>
        #admin_nav{
            width: 100%;
            height: 45px;
            background: #ccc;
        }
        .logo{
            float: left;
            height: 45px;
            margin-left: 20px;
        }
        .logo-img{
            height: 100%;
        }
        .user-info{
            float: right;
            /*width: 200px;*/
            height: 100%;
            line-height: 45px;
            margin-right: 20px;
        }
        .user-info a{
            height: 100%;
            margin: 0 10px;
            float: left;
            font-size: 15px;
            cursor: pointer;
            padding: 0 10px;
        }
        .user-info a:hover{
            background: #7f7f7f;
        }
    </style>
</head>
<body>
<div id="app"></div>
<script src="assets/js/adminMessage.js"></script>
<!--<nav id="admin_nav">-->
    <!--<div class="logo">-->
        <!--<img src="img/logo.png" alt="" class="logo-img">-->
    <!--</div>-->
    <!--<div class="user-info">-->
        <!--<a href="javascript:;" class="username">{{ "欢迎您"+username }}</a>-->
        <!--<a href="javascript:;">注销</a>-->
    <!--</div>-->
<!--</nav>-->
</body>
</html>