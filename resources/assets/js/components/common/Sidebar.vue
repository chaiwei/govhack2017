<template>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- Sidebar user panel -->
            <div class="user-panel">
                <div class="pull-left image">
                  <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                </div>
                <div class="pull-left info">
                  <p>{{ user.name }}</p>
                  <a href="#"><i class="fa fa-circle text-success"></i> {{ user.status }}</a>
                </div>
            </div>
            <!-- search form
            <form action="#" method="get" class="sidebar-form">
                <div class="input-group">
                  <input type="text" name="q" class="form-control" placeholder="Search...">
                  <span class="input-group-btn">
                        <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                        </button>
                      </span>
                </div>
            </form> -->
            <!-- /.search form -->
            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu" data-widget="tree">
                <li class="header">MAIN NAVIGATION</li>
                <li v-for="(item, index) in menulist" :class="currentUrl === item.menuUrl ? 'active treeview':'treeview'">
                    <template v-if="item.menuUrl">
                      <router-link :to="item.menuUrl" @click.native="toggleName=''">
                        <i :class="['fa',item.menuIcon]" aria-hidden="true"></i>
                        <span>{{item.menuName}}</span> 
                      </router-link>
                    </template>
                    <template v-else-if="item.menuSubLink">
                      <a href="javascript:;" @click="isToggle(item.menuName,item.defaultActive)">
                        <i :class="['fa', item.menuIcon]"></i>
                        <span>{{item.menuName}}</span>
                        <span class="pull-right-container">
                          <i class="fa fa-angle-left pull-right"></i>
                        </span>
                      </a>
                      <transition name="sliderToggle" mode="out-in">
                        <ul class="treeview-menu" v-show="item.menuName === toggleName || item.defaultActive">
                          <li v-for="(subitem,subindex) in item.menuSubLink" :key="subindex" :class="currentUrl === subitem.menuUrl ? 'active':''">
                            <router-link :to="subitem.menuUrl">
                              <i :class="subitem.menuIcon"></i>
                              <span>{{subitem.menuName}}</span>
                            </router-link>
                          </li>
                        </ul>
                      </transition>
                    </template>
                </li> 
            </ul>
        </section>
    </aside>
  </template>

  <script>
    export default {
        data() {
            return {
                toggleName: '',
                currentUrl: '',
                menulist: [ 
                {
                  menuName: "Introduction",
                  menuIcon: "fa-home",
                  menuUrl: "/"
                }, 
                {
                  menuName: "Population Chart",
                  menuIcon: "fa-line-chart",
                  menuUrl: "/govhack/population"
                }, 
                {
                  menuName: "Tools",
                  menuIcon: "fa-wrench",
                  menuSubLink: [
                    {
                      menuName: "Address to Lat Lng",
                      menuUrl: "/govhack/address-to-latlng"
                    },
                    {
                      menuName: "Nearest AgeCare Provider",
                      menuUrl: "/govhack/search-nearest-agecare"
                    }
                  ]
                }],
                user: {
                    name: 'Administrator',
                    status: 'online'
                }
            }
        },
        watch: {
          '$route'() {
            this.currentUrl = this.$route.fullPath;
          }

        },
        methods : {
            init () {
                var $vm = this;
                axios.get('/ajax/notification').then(response => {
                    $vm.items = response.data;
                });
            },
            isToggle(name, defaultActive) {
              //this.clearDefaultActive(); 
              //defaultActive ? false : name !== this.toggleName ? this.toggleName = name : this.toggleName = '';  
            },
            clearDefaultActive() {
               
            }
        },
        mounted() {
            console.log('Sidebar mounted.')
        }
    }
</script>
