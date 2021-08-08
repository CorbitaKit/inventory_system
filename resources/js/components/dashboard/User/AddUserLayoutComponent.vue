<template>
	<div>
		<section class="content">
			<div class="container-fluid">
				<div class="content-header">
			      <div class="container-fluid">
			        <div class="row mb-2">
			          <div class="col-sm-6">
			            <h1 class="m-0">Add User Page</h1>
			          </div>
			        </div>
			      </div>
			    </div>
			    <div class="card card-default">
              		<div class="card-header">
                		<h3 class="card-title">User information</h3>
              		</div>
              		<el-form label-position="right" label-width="100px" :model="user">
                		<div class="card-body">
                  			<div class="row">
                  				<div class="col-md-6">
                  					<div class="form-group">
		                    			<el-form-item label="First Name">
		                    				<el-input placeholder="Please input firstname" v-model="user.firstname"></el-input>
		                    			</el-form-item>
		                  			</div>
                  				</div>
                  				<div class="col-md-6">
                  					<div class="form-group">
		                    			<el-form-item label="Last Name">
		                    				<el-input placeholder="Please input lastname" v-model="user.lastname"></el-input>
		                    			</el-form-item>
		                  			</div>
                  				</div>
                  			</div>
                  			<div class="row">
                  				<div class="col-md-6">
                  					<div class="form-group">
		                    			<el-form-item label="Email Address">
		                    				<el-input placeholder="Please input email address" v-model="user.email"></el-input>
		                    			</el-form-item>
		                  			</div>
                  				</div>

                  				<div class="col-md-6">
                  					<div class="form-group">
                  						<el-form-item label="Password">
			                    			
		                    				<el-input v-model="user.password" :type="pwType" placeholder="Please input password"> 
		                    					<el-button slot="append" icon="el-icon-view" @click="showPassword"></el-button>
		                    				</el-input>

		                  				</el-form-item>
		                  			</div>
                  				</div>
                  			</div>
                  			<div class="row">
                  				<div class="col-md-6">
                  					<div class="form-group">
                  						<el-form-item label="Role">
			                    			
		                    				<el-select v-model="user.role_id" placeholder="Select">
											    <el-option
											      v-for="role in roles"
											      :key="role.value"
											      :label="role.label"
											      :value="role.value">
											    </el-option>
											  </el-select>

		                  				</el-form-item>
		                  			</div>
                  				</div>
                  			</div>
                		</div>
                		<div class="card-footer">
                  			<div class="float-right">
                  				<router-link to="/userpage" class="btn btn-danger">Cancel</router-link>
                  				<button type="button" class="btn btn-primary" @click="storeUser">Submit</button>
                  			</div>
                		</div>
              		</el-form>
            	</div>

			</div>
		</section>
	</div>
</template>


<script>

	import {mapGetters,mapActions} from 'vuex'
	import Swal from 'sweetalert2'


	export default{

		data(){
			return {
				
				pwType : 'password'
			}
		},

		created(){
			this.getRoles()
			
		},

		computed : {
			...mapGetters({
				user : 'getUser',
				roles : 'getRoles',
			})
		},
		methods : {
			...mapActions({
				saveUser  : 'saveUser',
				getRoles : 'fetchRoles',

			}),

			async storeUser(){

			

				const res = this.saveUser(this.user)
				
				res.then(response=>{

					Swal.fire('success','User created successfully','success')

					this.$router.push('/userpage')
				}).catch(err=>{

					console.log(err.messages)

					Swal.fire('error','Please fill all fields','error')
				})

				

				
			},

		
			showPassword(){

				this.pwType = this.pwType === 'password' ? 'text' : 'password'
			},

		
		}
	};
</script>
<style scoped>
	.el-select{
		width : 100% !important;
	}
</style>