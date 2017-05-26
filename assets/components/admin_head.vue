<template>
    <nav id="admin_nav">
        <div class="log">
            <img src="" alt="" class="logo-img">
        </div>
        <div class="user-info">
            <a href="javascript:;" class="username">{{ "欢迎您"+username }}</a>
            <a href="javascript:;">注销</a>
        </div>
    </nav>
</template>
<script>
    import axios from 'axios'
    export default{
        created:function () {
            axios.get('admin/user/is_login')
                .then(function (res) {
                    console.log(res.data);
                })
        },
        data:function () {
            return {
                username:''
            }
        }
    }
</script>
<style>
    #admin_nav{
        width: 100%;
        height: 45px;
        background: #000;
    }
</style>