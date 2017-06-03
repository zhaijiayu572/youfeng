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
                    /
                    <a href="#">未回复</a>
                </h2>
            <!-- 私信展示栏-->
            <div class="message-panel">
                <ul class="msg-list">
                    <li v-for="(data,index) in messageList">
                        <div class="msg-container">
                            <div class="msg-top">
                                <span class="user-name">{{ data.user_name }}</span>
                                <span class="date">{{ data.add_time }}</span>
                            </div>
                            <div class="msg-content">
                                <h3 class="msg-title">{{ data.message_title }}</h3>
                                <p class="msg-body">
                                    {{ data.message_content }}
                                </p>
                                <a href="#" class="show-more">显示更多</a>
                            </div>
                            
                            <div class="fun-list">
                                <span class="delete" @click="deleteMsg(index)">删除</span>
                                <span class="reply" @click="replyOpen(index)">回复</span>
                            </div>
                        </div>
                      </li>
                </ul>                
            </div>
            <!-- 回复栏-->
            <div class="reply-container" v-show="replyShow">
                <div class="top">
                    <span class="title">回复:{{ replyTo.user_name }}</span>
                    <span class="close-btn" @click="replyClose"><img src="../img/close-btn.gif" alt=""></span>
                </div>
                <div class="reply-body">
                    <textarea class="reply-content" v-model="replyContent"></textarea>
                    <button class="reply-btn" @click="reply">回复</button>
                </div>
            </div>
            <div class="control-panel">
                <span class="next" v-show="controlPanel.lastShow" @click="showLast">上一页</span>
                <span class="last" v-show="controlPanel.nextShow" @click="showNext">下一页</span>
            </div>
        </div>
    </div>
    
</template>
<script>
    //后台管理私信的组件
    import axios from 'axios';
    import head from './admin_head.vue';
    import panel from './admin_panel.vue';
    export default{
        created:function(){
            this.init();
        },
        components:{
            adminHead:head,
            adminPanel:panel
        },
        data:function(){
            return {
                replyShow:false,    //控制回复框的显示和隐藏
                replyTo:{},           //回复的人的信息
                replyContent:'',      //回复的内容
                messageList:[],       //存放所有私信的对象
                pageNum:0,
                perPage:1,
                index:0,
                controlPanel:{           //控制上一页和下一页的显示
                    lastShow:false,
                    nextShow:false
                }
                
            }
        },
        methods:{
            init:function(){          //进行数据的初始化
                var _this = this;
                axios.get('admin/message/get_all_unreply_num')
                    .then(function(res){
                        _this.pageNum = Math.ceil(res.data/_this.perPage);
                        if(_this.pageNum>1){      //根据总页数判断是否显示下一页 
                            _this.controlPanel.nextShow = true;   
                        }
                        _this.getMessage(_this.index);
                    })
            },
            getMessage:function(index){         //获取消息 index是当前的位置
                axios.get('admin/message/get_message',{
                    params:{
                        perPage:this.perPage,
                        index:index
                    } 
                }).then(function(res){
                    this.messageList = res.data;       //数据的渲染
                }.bind(this))
            },
            replyClose:function(){          //关闭回复框
                this.replyShow = false;
                this.replyContent = '';
            },
            replyOpen:function(index){             //显示回复框
                if(this.messageList[index] != this.replyTo){
                    this.replyContent = '';
                }
                this.replyTo = this.messageList[index];        //进行回复对象的赋值
                this.replyTo.index = index;
                this.replyShow = true;
            },
            reply:function(){       //回复
                var params = new URLSearchParams();
                params.append('replyContent', this.replyContent);
                params.append('user_id', this.replyTo.user_id);
                params.append('message_id',this.replyTo.message_id);
                axios.post('admin/message/reply', params)
                    .then(function(res){
                        if(res.data == "success"){
                            alert("回复成功");
                            this.replyClose();
                            this.messageList.splice(this.replyTo.index,1);
                        }else{
                            alert("回复失败，请重试");
                        }
                    }.bind(this)) 
            },
            deleteMsg:function(index){        //删除消息
                var deleteObj = this.messageList[index];
                axios.get('admin/message/delete?message_id='+deleteObj.message_id)
                    .then(function(res){
                        if(res.data == 'success'){
                            alert("删除成功");
                            this.messageList.splice(index,1);
                        }else{
                            alert("删除失败");
                        }
                    }.bind(this));
            },
            showNext:function(){    //显示下一页
                this.index++;
                this.controlPanel.lastShow = true;
                if(this.index == this.pageNum-1){
                    this.controlPanel.nextShow = false;
                }
                this.getMessage(this.index);
            },
            showLast:function(){          //显示上一页
                this.index--;
                this.controlPanel.nextShow = true;
                if(this.index == 0){
                    this.controlPanel.lastShow = false;
                }
                this.getMessage(this.index);
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
    .reply-container .top .close-btn img{
        width:15px;
        height:15px;
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
    .control-panel{
        float:right;
        margin-right:200px;
    }
    .control-panel span{
        display:inline-block;
        padding:5px 10px;
        margin:10px;
        background:#449d44;
        border-radius:5px;
        cursor:pointer;
        color:#fff;
    }
</style>