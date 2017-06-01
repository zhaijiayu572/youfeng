<template>
    <div id="message-page">
    <!-- 页面头部-->
        <admin-head></admin-head>
        <div id="container">
        <!-- 侧边栏-->
            <admin-panel></admin-panel>
            <!-- 头部的导航 -->
            <h2 class="panel-name">
                    <a href="#">首页</a>
                    /
                    <a href="#">私信管理</a>
                </h2>
            <!-- 私信展示栏-->
            <div class="message-panel">
                <ul class="msg-list">
                    <li>
                        <div class="msg-container">
                            <div class="msg-top">
                                <span class="user-name">hello</span>
                                <span class="date">2014-12-12</span>
                            </div>
                            <div class="msg-content">
                                <h3 class="msg-title">你好，测试</h3>
                                <p class="msg-body">
                                    这是我的测试数据
                                </p>
                                <a href="#" class="show-more">显示更多</a>
                            </div>
                            
                            <div class="fun-list">
                                <span class="delete">删除</span>
                                <span class="reply" @click="replyOpen">回复</span>
                            </div>
                        </div>
                      </li>
                </ul>                
            </div>
            <!-- 回复栏-->
            <div class="reply-container" v-show="replyShow">
                <div class="top">
                    <span class="title">回复:hello</span>
                    <span class="close-btn" @click="replyClose">X</span>
                </div>
                <div class="reply-body">
                    <textarea class="reply-content"></textarea>
                    <button class="reply-btn">回复</button>
                </div>
            </div>
                    
        </div>
    </div>
    
</template>
<script>
    //后台管理私信的组件
    import head from './admin_head.vue';
    import panel from './admin_panel.vue';
    export default{
        components:{
            adminHead:head,
            adminPanel:panel
        },
        data:function(){
            return {
                replyShow:false,    //控制回复框的显示和隐藏
                replyTo:{},           //回复的人的信息
                messageList:[],       //存放所有私信的对象
            }
        },
        methods:{
            replyClose:function(){          //关闭回复框
                this.replyShow = false;
            },
            replyOpen:function(){             //显示回复框
                this.replyShow = true;
            }
        }
    }
</script>
<style>
    .clearfix:after{
       content: "";
        display: block;
        clear: both;
        height: 0;
        overflow: hidden;
        zoom: 1; 
    }
    #container{
        width:100%;
        position:relative;
    }
    .message-panel{
        margin-left:230px;
    }
    .panel-name{
        margin-left:200px;
        height:50px;
        font-size:15px;
        line-height:50px;
        padding-left:5px;
    }
    .msg-list li{
        margin-top:5px;
    }
   .msg-list li .msg-container{
        width:400px;
        padding:10px 10px 20px;
        border-radius:10px;
        background: #ddd;
        overflow: hidden;
        box-shadow:2px 2px 1px #555;
    }
    .msg-container .msg-top{
        width:100%;
        height:20px;
        padding:3px 5px;
        line-height:20px;
        font-size: 15px;
    }
    .msg-container .msg-top .username{
        float: left;
    }
    .msg-container .msg-top .date{
        float: right;
        margin-right:10px;
    }
    .msg-content{
        width: 100%;
        clear: both;
    }
    .msg-content .msg-title{
        font-size: 17px;
        margin-top: 10px;
        margin-left: 15px;
    }
    .msg-body{
        width: 100%;
        margin-left: 20px;
        padding: 5px;
        font-size:12px;
        color: #666;
    }
    .msg-content .show-more{
        margin-left:300px;
        display: block;
        margin-top: 10px;
    }
    .fun-list{
        float: right;
        margin-top:20px;
    }
    .fun-list span{
        margin: 0 10px;
        font-size: 12px;
        background: #333;
        padding: 7px;
        border-radius: 5px;
        color: #fff;
        cursor: pointer;
    }
    .fun-list span.delete{
        background: #d9534f;
    }
    .fun-list span.reply{
        background: #449d44;
    }
    /* 回复栏的样式 */
    .reply-container{
        width:300px;
        height:200px;
        padding: 0 10px 10px; 
        position: fixed;
        right: 100px;
        top:30%;
       
        border: 1px solid #aaa;
        border-radius: 5px;
        background: #29303f;
    }
    .reply-container .top{
        width: auto;
        padding: 5px 10px;
        overflow: hidden
    }
    .reply-container .top .title{
        font-size:15px;
        float: left;
        color: #fff;
    }
    .reply-container .top .close-btn{
        float: right;
    }
    .reply-container .reply-body{
        width: 100%;    
    }
    .reply-body .reply-content{
        width: 95%;
        padding: 5px;
        height: 130px;
        box-shadow: 1px 1px 1px #ccc;
        border-radius: 5px;
        border: none;
    }
    .reply-body .reply-btn{
        outline: none;
        border: none;
        border-radius: 5px;
        float: right;
        margin-right:10px;
        background: #449d44;
        padding: 5px 8px;
        color: #fff;
        margin-top: 10px; 
    }
</style>