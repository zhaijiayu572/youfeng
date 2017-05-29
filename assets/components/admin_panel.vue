<template>
    <div id="panel-container">
        <ul id="panelList" v-show="!hidden">
            <li v-for="(x,n) in panelList">
                <span class="panel-title" @click="toggleSubPanel(n)">{{ x.title }}</span>
                <transition name="slide">
                    <ul class="panel-body" v-show="x.isShow">
                        <li  v-for="y in x.content" @click="linkTo(y.src)">{{ y.title }}</li>
                    </ul>
                </transition>
            </li>
        </ul>
        <div class="controll-btn" @click="togglePanel" :class="{close:hidden}">
            
        </div>
    </div>
    
</template>
<script>
    export default{
        created:function(){
            this.init();
        },
        props:['whichMenu']
        ,
        data:function(){
            return {
                hidden:false,     //控制菜单的显示和隐藏
                panelList:[
                     {     //   第一级菜单
                         title:'user',       //菜单标题
                         name:'user',         //标识菜单的内容
                         content:[              //菜单内容
                             {
                                 title:'manage-user',    //内容的标题
                                 src:'admin/user/test'   //网页跳转的地址
                             }
                         ],
                         isShow:false,      //控制菜单内容的显示隐藏
                         
                     },
                     {
                         title:'order',
                         name:'order',
                         content:[
                             {
                                 title:'manage-order',
                                 src:'admin/user/test'
                             }
                         ],
                         isShow:false,
                     }
                    ],
            }
        },
        methods:{
            toggleSubPanel:function(index){
                this.panelList[index].isShow = !this.panelList[index].isShow;
            },
            linkTo:function(url){
                window.location.href = url;
            },
            init:function(){      //进行组件的初始化
                if(this.whichMenu == ''){
                    return false;
                }else{
                    for(var i=0;i<this.panelList.length;i++){
                        if(typeof(this.whichMenu) == 'object'){        //判断传入的是数组还是字符串
                            for(var j=0;j<this.whichMenu.length;j++){
                                if(this.panelList[i].name == this.whichMenu[j]){
                                    this.panelList[i].isShow = true;
                                }
                            }
                        }else{
                            if(this.panelList[i].name == this.whichMenu){
                                this.panelList[i].isShow = true;
                            }
                        }
                    }
                } 
            },
            togglePanel:function(){
                this.hidden = !this.hidden;
            }
        }
    }
</script>
<style>
    #panel-container{
        position:relative;
        width:230px;
        height:100%;
    }
    .controll-btn{
        margin-top:100px;
        width:20px;
        height:50px;
        padding-left:5px;
        float:left;
        border-radius: 0 5px 5px 0;
        background:url('../img/btn.png') no-repeat;
        background-color:#bbb;
        background-position:center left;
        background-origin:content-box;
    }
    .controll-btn.close{
        background-position:center right;
        padding-left:0;
        padding-right:5px;
    }
    #panelList{
        float:left;
        width:200px;
        background-color:rgba(238,238,238,0.98);
        height:100%;
    }
    #panelList .panel-title{
        display:block;
        text-align:center;
        line-height:36px;
        width:100%;
        height:36px;
        border-bottom:1px solid #ccc;
        font-size:20px;
        font-weight:500;
    }
    #panelList .panel-body{
        background:#ddd;
        color:#666;
    }
    
    #panelList .panel-body li{
        height:36px;
        width:100%;
        text-align:center;
        line-height:36px;
        font-size:15px;
    }
    #panelList .panel-body li:hover{
        background-color:#aaa;
    }
    
    .slide-enter-active, .slide-leave-active {
        transition: all .5s
    }
    .slide-enter, .slide-leave-active {
        transform:translateX(100px);
        opacity:0;
    }
</style>