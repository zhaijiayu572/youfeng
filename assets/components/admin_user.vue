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
                    <input type="text" id="input1" v-model="selectPhone" placeholder="请输入手机号" onkeyup="this.value=this.value.replace(/\D/g,'')" onafterpaste="this.value=this.value.replace(/\D/g,'')">
                    <button class="btn1" @click="isShow">检索信息</button>
                </div>
            </div>
            <table v-show="tableShow">
                <tr>
                    <td>用户公司</td>
                    <td>用户名称</td>
                    <td>用户电话</td>
                    <td>用户邮箱</td>
                    <td>操作</td>
                </tr>
                <tr>
                    <td>{{userCompany}}</td>
                    <td>{{userName}}</td>
                    <td>{{userPhone}}</td>
                    <td>{{userEmail}}</td>
                    <td><button class="btn1" @click="ale">重置密码</button></td>
                </tr>
            </table>
            <div class="mask" v-show="changeMaskShow">
                <div class="con-bg">
                    <p class="con-p">提示</p>
                    <div class="con-body">是否将用户的密码重置</div>
                    <div class="con-footer"><button class="con-yes" @click="changepass_yes">确认</button><button class="con-no" @click="changepass_no">取消</button></div>
                </div>
            </div>
            <div class="mask" v-show="emailMaskShow">
                <div class="con-bg">
                    <p class="con-p">提示</p>
                    <div class="con-body">密码邮件已经发送至用户邮箱请注意查收</div>
                    <div class="con-footer"><button class="con-yes emailYes" @click="sendOutEmail">确认</button></div>
                </div>
            </div>
            <div class="mask" v-show="phoneMaskShow">
                <div class="con-bg">
                    <p class="con-p">提示</p>
                    <div class="con-body">您输入的手机号码有误</div>
                    <div class="con-footer"><button class="con-yes emailYes" @click="phoneShow">确认</button></div>
                </div>
            </div>
            <div class="mask" v-show="phoneNoneMaskShow">
                <div class="con-bg">
                    <p class="con-p">提示</p>
                    <div class="con-body">您输入的用户不存在</div>
                    <div class="con-footer"><button class="con-yes emailYes" @click="phoneNone">确认</button></div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import head from './admin_head.vue'
    import panel from './admin_panel.vue'
    import axios from 'axios'
    export default{
        data:function(){
            return{
                tableShow:false,
                changeMaskShow:false,
                emailMaskShow:false,
                phoneMaskShow:false,
                phoneNoneMaskShow:false,
                userCompany:"",
                userName:"",
                userPhone:"",
                userEmail:"",
                selectPhone:""
            }
        },
        components:{
            'adminHead':head,
            'adminPanel':panel
        },
        methods:{
            ale(){
                this.changeMaskShow = true;
            },
            isShow(){
                if(this.selectPhone != "" && this.selectPhone.length == 11){
                    axios.get('admin/user/getMsg?phone='+this.selectPhone).then((res)=>{
                        if(res.data){
                            this.userCompany = res.data[0].user_company;
                            this.userName = res.data[0].user_name;
                            this.userPhone = res.data[0].user_phone;
                            this.userEmail = res.data[0].user_email;
                            this.tableShow = true;
                        }else{
                            this.phoneNoneMaskShow = true;
                        }
                    })
                }else{
                    this.phoneMaskShow = true;
                }
            },
            changepass_yes(){
                axios.get('admin/user/sendEmail?email='+this.userEmail).then((res)=>{
                    if(res.data == 1){
                        this.emailMaskShow = true;
                    }
                })
                this.changeMaskShow = false
            },
            changepass_no(){
                this.changeMaskShow = false
            },
            sendOutEmail(){
                this.emailMaskShow = false
            },
            phoneShow(){
                this.phoneMaskShow = false
            },
            phoneNone(){
                this.phoneNoneMaskShow = false
            }
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
    .btn1{
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
    .btn1:focus,
    .btn1.focus {
        color: #fff;
        background-color: #449d44;
        border-color: #255625;
    }
    .btn1:hover {
        color: #fff;
        background-color: #449d44;
        border-color: #398439;
    }
    .btn1:active,
    .btn1.active {
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
        width: 80%;
        margin: 0 auto;
        margin-top: 45px;
    }
    table td{
        border: 1px solid #c5bcbc;
        padding: 10px;
        line-height: 20px;
        text-align: center;
    }
    .mask{
        top: 0px;
        left: 0px;
        position: fixed;
        width: 100%;
        height: 700px;
        background-color: rgba(249,249,242,0.3);
        z-index: 5;
    }
    .con-bg{
        z-index: 5;
        position: fixed;
        width: 350px;
        height: 150px;
        border: 1px solid #999;
        top: 100px;
        left: 40%;
        background-color: rgba(255,255,255,1);
    }
    .con-p{
        background-color: rgba(204,204,204,1);
        color: rgba(255,255,255,1);
        font-size: 15px;
        line-height: 30px;
        padding-left: 10px;
    }
    .con-body{
        height: 50px;
        text-align: center;
        color: rgba(21,24,27,1);
        font-size: 16px;
        padding-top: 30px;
    }
    .con-yes, .con-no{
        background-color: rgba(204,204,204,1);
        color: rgba(255,255,255,1);
        width: 60px;
        height: 30px;
        margin-left: 20.6%;
        border-radius: 5px;
    }
    .emailYes{
        margin-left: 40.6%;
    }
</style>