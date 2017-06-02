<template>
   <div id="order">
      
        <admin-right :props="msg">
            <span slot="delete"  class="contet_delete">批量删除</span>
            <span slot="add"  class="content_add">添加</span>
        </admin-right>
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
        },
        data:function(){
            return {
                msg:{
                    "title_main":"hahah",
                    "title_sub":"xixi",
                    "search_placeholder":"输入搜索的订单号",
                    "search_url":"",
                    }
            }
        }
    }
</script>