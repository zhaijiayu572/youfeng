<template>
    <div id="message-page">
        <admin-head></admin-head>
        <admin-panel></admin-panel>
        <div class="test"></div>
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
        }
    }
</script>
<style>
    .test{
        height:200px;
        background:#000;
    }
</style>