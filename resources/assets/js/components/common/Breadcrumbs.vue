<template> 
    <div>
        <ol v-for="data in list" class="breadcrumb">
            <li>{{ data }}</li>
        </ol>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                
            }
        },
        props: ['list'],
        methods : {
        },
        mounted() {
            console.log('breadcrumbs mounted.')
        }
    }
</script>
