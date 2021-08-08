<template>
	<div>
		<section class="content">
			<div class="container-fluid">
				<div class="content-header">
			      <div class="container-fluid">
			        <div class="row mb-2">
			          <div class="col-sm-6">
			            <h1 class="m-0">User Page</h1>
			          </div>

			          
			        </div>
			      </div>
			    </div>
			    <div class="row">
		          	<div class="col-12">
		            	<div class="card">
		              		<div class="card-header">
		                		<h3 class="card-title">User List</h3>
	                			<div class="card-tools">
	                  				<div class="input-group input-group-sm" style="width: 250px;">
	                    				<input type="text" name="table_search" class="form-control float-right" placeholder="Search">
                    					<div class="input-group-append">
                      						<button type="submit" class="btn btn-default">
                        						<i class="fas fa-search"></i>
                      						</button>
                    					</div>
	                  				</div>
	                			</div>
		              		</div>

	              			<div class="card-body table-responsive p-0">
	                			<table class="table table-bordered text-nowrap">
	                  				<thead>
	                    				<tr>
	                      					<th>ID</th>
	                      					<th>Email</th>
	                      					<th>Name</th>
	                      					<th>Role</th>
	                      					<th>Action</th>
	                    				</tr>
	                  				</thead>
	                  				<tbody>
	                    				<tr v-for="(user, i) in users">
	                      					<td>{{ user.id }}</td>
	                      					<td>{{ user.email}}</td>
	                      					<td>{{ user.name }}</td>
	                      					<td><span class="tag tag-success">{{ user.role.name }}</span></td>
	                      					<td>
	                      						<button class="btn btn-danger btn-xs">
	                      							<i class="fa fa-trash"></i>
	                      						</button>

	                      						<button class="btn btn-primary btn-xs">
	                      							<i class="fa fa-edit"></i>
	                      						</button>
	                      					</td>
	                    				</tr>		
	                  				</tbody>
	                			</table>
	             	 		</div>

	             	 		<div class="card-footer p-1">

	             	 			<div class="mailbox-controls" >
		             	 			<div class="float-right">
					                 
					                  <div class="btn-group">
					                    <button type="button" class="btn btn-success btn-md" @click="addUser">
					                      Add  new user
					                    </button>
					                  
					                  </div>
					                  <!-- /.btn-group -->
					                </div>
					            </div>
					           
	             	 		</div>
	             	 		
	            		</div>
	          		</div>
	       	 	</div>
			</div>
		</section>
	</div>
</template>


<script>

	import {mapGetters,mapActions} from 'vuex'


	export default{
		data() {
      		return {}
    	},

    	computed : {
    		...mapGetters({
    			users : 'getUsers'
    		})
    	},

    	created(){
    		this.fetchUsers()
    	},

    	methods : {

    		...mapActions({
    			fetchUsers : 'fetchUsers'
    		}),
    		addUser(){
    			this.$router.push('/adduser')
    		}
    	}

	};
</script>