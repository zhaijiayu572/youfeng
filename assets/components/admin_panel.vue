<template>
    <ul id="panel" >
        <li v-for="x in panelList">
            <a href="javacript:;" class="panel-title">{{ x.title }}</a>
            <ul class="panel-body">
                <li  v-for="y in x.content">{{ y }}</li>
            </ul>
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
                         content:['manage-user']
                     },
                     {
                         title:'order',
                         content:['manage-order']
                     }
                    ]
            }
        }
    }
</script>
<style>
    
</style>