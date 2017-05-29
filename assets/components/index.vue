<template>
    <div id="#container">
        <admin-head></admin-head>
        <admin-panel></admin-panel>
    </div>
</template>
<script>
    import head from './admin_head.vue'
    import panel from './admin_panel.vue'
    export default{
        components:{
            'adminHead':head,
            'adminPanel':panel
        }
    }
</script>