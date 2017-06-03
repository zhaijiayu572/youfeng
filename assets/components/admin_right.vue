/*右边数据表组件*/
<template>
    <div class="right_box">
       <div class="right_title">
         <span>首页 ></span>
         <span>{{data.title_main}} ></span>
         <span>{{data.title_sub}}</span>
       </div>
       <div class="right_search">
          <input type="text" v-bind:placeholder="data.search_placeholder" v-model="value">
          <button @click="search">点击搜索</button>
       </div>
       <div class="right_content">
          <div class="content_title">
             <slot name="delete"></slot>
             <slot name="add"></slot>
             <span>共有数据：{{totalNum}}条</span>
          </div>
          <div class="content_table">
             <table>
                <tr>
                   <td><input type="checkbox"></td>
                   <td v-for="item in data.talble_items" class="table_title">
                      {{item.trim()}}
                   </td>
                </tr>
                <tr v-for="list in dataList">
                    <td><input type="checkbox"></td>
                    
                </tr>
             </table>
          </div>
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
            padding: 20px 20px;
            text-align: center;
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
                outline: none;
            }
        }
        .right_content{
            .content_title{
                height: 100%;
                line-height: 31px;
                padding: 10px;
                background-color: #f5fafe;
                overflow: hidden;
                span{
                    font-size:$fontSize;
                    display: inline-block;
                    height: 31px;
                    padding: 4px 12px;
                    color: white;
                    background-color: #5a98de;
                    border-color: #5a98de;
                    cursor: pointer;
                    border-radius: 5px;
                }
                span :hover{
                    opacity: 0.5;
                }
                span:first-child{
                    background-color: #dd514c;
                    border-color: #dd514c;
                }
                span:last-child{
                    float: right;                 
                }
            }
            .content_table{
                table{
                    width:100%;
                    td{
                        padding: 8px;
                        text-align:center;
                        line-height:20px;
                        border:1px solid black;
                    }
                    .table_title{
                        font-weight: bold;
                        font-size:$fontSize;
                    }
                }

            }
        }
    }
</style>
<script>
import axios from "axios";
axios.defaults.baseURL = 'admin/';
export default{
    created:function(){
        this.do_totalNum();
    },
    props:['props'],
    data:function(){
        return {
            data: this.props,//父组建的传值
            totalNum: 0,//所有信息数量
            dataList: [],//信息内容
            value:"",//搜索框中的值
            };
    },
    computed:{
        
    },
    methods:{
        do_totalNum:function(){
            var prams = new FormData();
            prams.append("value",this.value);
            axios.post(this.data.totalNum_url,prams).then(function(data){
                this.totalNum = data.data;
            }.bind(this));
        },
        do_getInfor:function(){

        },
        search:function(){
            var prams = new FormData();
            prams.append("value",this.value);
            axios.post(this.data.search_url,prams).then(function(data){
                this.dataList = data.data;
            }.bind(this));
           this.do_totalNum();      
        },
    }

}
</script>