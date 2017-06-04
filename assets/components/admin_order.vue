<template>
   <div id="order">
        <admin-head></admin-head>
        <admin-panel></admin-panel>
        <admin-right :props="msg">
            <span slot="delete">批量删除</span>
            <span slot="add">添加</span>
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
   // var table_items=["id","账户","公司名称","订单号","订单状态","订单交易号","订单备注","支付方式","创建时间","结束时间"];   
    var table_items=[
        ["id","order_id"],//必须传递数据库的主键
        ["账户","user_accout"],
        ["公司名称","user_company"],
        ["订单号","order_no"],
        ["订单状态","order_status"],
        ["订单交易号","trade_no"],
        ["订单备注","order_memo"],
        ["支付方式","order_payway"],
        ["创建时间","create_time"],
        ["结束时间","finish_time"]];       
    export default{
        created:function(){
            
        },
        components:{
            adminHead:head,
            adminPanel:panel,
            adminRight:right
        },
        data:function(){
            return {
                msg:{
                    "title_main":"订单",//一级标题
                    "title_sub":"订单管理",//二级标题
                    "search_placeholder":"输入搜索的订单号",//搜索提示
                    "search_url":"order/searchInfor",//搜索地址
                    "totalNum_url":"order/allNum",//取得全部数据地址
                    "talble_items":table_items,//表单列表项
                    "pageNum":3,//每页显示的数量，如不需要分页则为false
                    },
            }
        },
        methods:{
            
        }
    }
</script>