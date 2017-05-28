<template>
    <nav id="admin_nav">
        <div class="logo">
            <img src="../img/logo.png" alt="" class="logo-img">
        </div>
        <div class="user-info">
            <a href="javascript:;" class="username">{{ "欢迎您"+username }}</a>
            <a href="javascript:;">注销</a>
        </div>
    </nav>
</template>
<script>
    import axios from 'axios'
    var pic = require('../img/logo.png')
    export default{
        created:function () {
            axios.get('admin/user/is_login')
                .then(function (res) {
                    console.log(res.data);
                })
        },
        data:function () {
            return {
                username:'',
                // pic:pic
            }
        }
    }
</script>
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