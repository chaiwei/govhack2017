<template> 
    <li class="dropdown messages-menu">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          <i class="fa fa-bell-o"></i>
          <span class="label label-warning">{{ items.length }}</span>
        </a>
        <ul class="dropdown-menu">
            <li class="header">You have {{ items.length }} notifications</li>
            <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                    <li v-for="item in items">
                        <a href="#">{{ item.message }}</a>
                    </li>
                </ul>
            </li>
            <li class="footer"><router-link to="/notifications">View all</router-link></li>
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
                axios.get('/ajax/notification').then(response => {
                    $vm.items = response.data;
                });
            }
        },
        mounted() {
            this.init();
            console.log('notifcation mounted.')
        }
    }
</script>
