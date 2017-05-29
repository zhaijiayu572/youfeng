<template>
    
    <ul id="panelList" >
        <li v-for="(x,n) in panelList">
            <a href="javacript:;" class="panel-title" @click="togglePanel(n)">{{ x.title }}</a>
            <transition name="slide">
                <ul class="panel-body" v-show="x.isShow">
                <li  v-for="y in x.content">{{ y }}</li>
            </ul>
            </transition>
        </li>
    </ul>
</template>
<script>
    export default{
        data:function(){
            return {
                panelList:[
                     {
                         title:'user',
                         content:['manage-user'],
                         isShow:false
                     },
                     {
                         title:'order',
                         content:['manage-order','aaa','cccc'],
                         isShow:true
                     }
                    ],
            }
        },
        methods:{
            togglePanel:function(index){
                this.panelList[index].isShow = !this.panelList[index].isShow;
            }
        }
    }
</script>
<style>
    #panelList{
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
        background:
        rgba(238,238,238,0.98);
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
        background-color:#ddd;
    }
    .slide-enter-active, .slide-leave-active {
        transition: all .5s
    }
    .slide-enter, .slide-leave-active {
        transform:translateX(100px);
        opacity:0;
    }
</style>