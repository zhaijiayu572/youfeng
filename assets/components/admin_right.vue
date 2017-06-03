
/*右边数据表组件*/
<template>
    <div class="right_box">
       <div class="right_title">
         <span>首页 ></span>
         <span>{{data.title_main}} ></span>
         <span>{{data.title_sub}}</span>
       </div>
       <div class="right_search">
          <input type="text" v-bind:placeholder="data.search_placeholder">
          <button>点击搜索</button>
       </div>
    </div>
</template>
<style lang="scss">
    $fontSize:14px;
    .right_box{
        width:100%;
        height:100%;
        .right_title{
          font-size:$fontSize;
          background-color: #f5f5f5;
          border-bottom: 1px solid #e5e5e5;
          line-height: 39px;
          height: 39px;
          padding: 0 20px;
        }
        .right_search{
            
            input{
               border: solid 1px #ddd;
               height: 31px;
               padding: 4px;
               width: 250px;
            }
            button{
                cursor: pointer;
                text-align: center;
                font-weight: 400;
                white-space: nowrap;
                height: 34px;
                padding: 4px;
                color: #fff;
                background-color: #429842;
                border-color: #429842;
            }
        }
    }
</style>
<script>
export default{
    
    props:['props'],
    data:function(){
        return {data: this.props};
    },

}
</script>