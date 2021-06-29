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
		                    				<el-input placeholder="Please input. email address" v-model="user.email"></el-input>
		                    			</el-form-item>
		                  			</div>
                  				</div>

                  				<div class="col-md-6">
                  					<div class="form-group">
                  						<el-form-item label="Password">
			                    			
		                    				<el-input disabled v-model="user.password">
		                    					<el-button slot="append" icon="el-icon-view"></el-button>
		                    				</el-input>

		                  				</el-form-item>
		                  			</div>
                  				</div>
                  			</div>
                		</div>
                		<div class="card-footer">
                  			<div class="float-right">
                  				<router-link to="/userpage" class="btn btn-danger">Cancel</router-link>
                  				<button type="button" class="btn btn-primary" @click="addUser">Submit</button>
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
	
	export default{

		computed : {
			...mapGetters({
				user : 'getUser',
			})
		},
		methods : {
			...mapActions({
				addUser : 'addUser'
			})
		}
	};
</script>