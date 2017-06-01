<template>
    <div>
        <admin-head></admin-head>
        <admin-panel></admin-panel>
        <div id="body">
            <div id="head">
                <p class="word">用户密码管理</p>
            </div>
            <div id="select">
                <div class="center">
                    <input type="text" id="input1" placeholder="请输入手机号"><button id="btn1">检索信息</button>
                </div>
            </div>
            <table border="1">
                <tr>
                    <td>用户公司</td>
                    <td>用户名称</td>
                    <td>用户电话</td>
                    <td>用户邮箱</td>
                    <td>操作</td>
                </tr>
                <tr>
                    <td>111</td>
                    <td>222</td>
                    <td>333</td>
                    <td>444</td>
                    <td><button>重置密码</button></td>
                </tr>
            </table>
        </div>
    </div>
</template>

<script>
    import head from './admin_head.vue'
    import panel from './admin_panel.vue'
    export default{
        components:{
            'adminHead':head,
            'adminPanel':panel
        }
    }
</script>

<style scoped>
    #panel-container{
        margin-top: 44px;
    }
    #body{
        margin-left: 200px;
        padding-left: 30px;
        width: auto;
        min-height:800px;
    }
    #head{
        background-color: #FCFCFC;
        width: auto;
        height: 40px;
        margin-left: -30px;
    }
    .word{
        color: #000000;
        font-family: "Arial","Microsoft YaHei","黑体","宋体",sans-serif;
        font-size: 15px;
        line-height: 40px;
        margin-left: 10px;
    }
    #select{
        width: auto;
        height: 60px;
    }
    .center{
        display: block;
        margin:0 auto;
        width: 300px;
        height: auto;
        line-height: 60px;
    }
    #btn1{
        margin-left: 5px;
        display: inline-block;
        padding: 6px 12px;
        margin-bottom: 0;
        font-size: 14px;
        font-weight: normal;
        line-height: 1.42857143;
        text-align: center;
        white-space: nowrap;
        -ms-touch-action: manipulation;
        touch-action: manipulation;
        cursor: pointer;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        background-image: none;
        border: 1px solid transparent;
        border-radius: 4px;
        color: #fff;
        background-color: #5cb85c;
        border-color: #4cae4c;
    }
    #btn1:focus,
    #btn1.focus {
        color: #fff;
        background-color: #449d44;
        border-color: #255625;
    }
    #btn1:hover {
        color: #fff;
        background-color: #449d44;
        border-color: #398439;
    }
    #btn1:active,
    #btn1.active {
        background-image: none;
        outline: 0;
        -webkit-box-shadow: inset 0 3px 5px rgba(0, 0, 0, .125);
        box-shadow: inset 0 3px 5px rgba(0, 0, 0, .125);
    }
    #input1{
        padding-left: 6px;
        width: 150px;
        height: 30px;
        font-size: 14px;
        color: #555;
        background-color: #fff;
        background-image: none;
        border: 1px solid #ccc;
        border-radius: 4px;
        -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
        box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
        -webkit-transition: border-color ease-in-out .15s, -webkit-box-shadow ease-in-out .15s;
        -o-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
        transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
    }
    #input1:focus {
        border-color: #66afe9;
        outline: 0;
        -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075), 0 0 8px rgba(102, 175, 233, .6);
        box-shadow: inset 0 1px 1px rgba(0,0,0,.075), 0 0 8px rgba(102, 175, 233, .6);
    }
    #input1::-moz-placeholder {
        color: #999;
        opacity: 1;
    }
    #input1:-ms-input-placeholder {
        color: #999;
    }
    #input1::-webkit-input-placeholder {
        color: #999;
    }
    #input1::-ms-expand {
        background-color: transparent;
        border: 0;
    }
    table{
        width: 600px;
        height: 200px;
        border: 1px solid #00CC00;
    }
</style>