<template>
    <div>
        <!--<section class="content-header">
          <h1>
            <span ></span>
            <small ></small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Forms</a></li>
            <li class="active">General Elements</li>
          </ol>
        </section>-->
        <router-view ref="page"></router-view>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Page mounted.')
        }
    }
</script>
