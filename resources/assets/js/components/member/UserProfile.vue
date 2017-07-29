<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Account Information</div>

                    <div class="panel-body">
                        <div>
							<label class="col-xs-6">Username</label>
							<div class="form-group col-xs-6">
								<input v-model="user.username" class="form-control" />
							</div>
						</div>
						<div>
							<label class="col-xs-6">Name</label>
							<div class="form-group col-xs-6">
								<input v-model="user.name" class="form-control" />
							</div>
						</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
		data(){
			return {
				user: {
					username: '',
					name: ''
				}
			}
		},
		methods : {
			init () {
				var $vm = this;
				axios.get('/ajax/member/userprofile').then(response => {
					$vm.user.username = response.data.email;
					$vm.user.name = response.data.name;
				});
			}
		},
        mounted() {
			this.init();
            console.log('Component mounted.')
        }
    }
</script>
