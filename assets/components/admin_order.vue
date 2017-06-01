<template>
   <div id="order">
        <admin-head></admin-head>
        <admin-panel></admin-panel>
        <admin-right></admin-right>
   </div>
</template>
<style lang="scss">
#panel-container{
    margin-top:45px;
}
</style>
<script>
    import head from './admin_head.vue';
    import panel from './admin_panel.vue';
    import right from './admin_right.vue';
    export default{
        components:{
            adminHead:head,
            adminPanel:panel,
            adminRight:right
        }
    }
</script>