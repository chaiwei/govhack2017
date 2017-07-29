<template> 
    <li class="dropdown messages-menu">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          <i class="fa fa-flag-o"></i>
          <span class="label label-danger">{{ items.length }}</span>
        </a>
        <ul class="dropdown-menu">
            <li class="header">You have {{ items.length }} announcement</li>
            <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                    <li v-for="item in items">
                        <a href="#">{{ item.message }}</a>
                    </li>
                </ul>
            </li>
            <li class="footer"><router-link to="/announcement">View all</router-link></li>
        </ul>
    </li>
</template>

<script>
    export default {
        data() {
            return {
                items: []
            }
        },
        methods : {
            init () {
                var $vm = this;
                axios.get('/ajax/announcement').then(response => {
                    $vm.items = response.data;
                });
            }
        },
        mounted() {
            this.init();
            console.log('announcement mounted.')
        }
    }
</script>
