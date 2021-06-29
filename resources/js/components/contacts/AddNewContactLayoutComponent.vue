<template>
	<div>
		<section class="content">
			<div class="container-fluid">
				<div class="content-header">
			      <div class="container-fluid">
			        <div class="row mb-2">
			          <div class="col-sm-6">
			            <h1 class="m-0">Add Contact Page</h1>
			          </div>
			        </div>
			      </div>
			    </div>
			    <div class="card card-default">
              		<div class="card-header">
                		<h3 class="card-title">Contact information</h3>
              		</div>
              		<el-form label-position="right" label-width="100px">
                		<div class="card-body">
                  			<div class="row">
                  				<div class="col-md-6">
                  					<div class="form-group">
		                    			<el-form-item label="First Name">
		                    				<el-input placeholder="Please input firstname"></el-input>
		                    			</el-form-item>
		                  			</div>
                  				</div>
                  				<div class="col-md-6">
                  					<div class="form-group">
		                    			<el-form-item label="Last Name">
		                    				<el-input placeholder="Please input lastname"></el-input>
		                    			</el-form-item>
		                  			</div>
                  				</div>
                  			</div>
                  			<div class="row">
                  				<div class="col-md-6">
                  					<div class="form-group">
		                    			<el-form-item label="Email Address">
		                    				<el-input placeholder="Please input email address" ></el-input>
		                    			</el-form-item>
		                  			</div>
                  				</div>

                  				<div class="col-md-6">
                  					<div class="form-group">
                  						<el-form-item label="Number">
			                    			
		                    				<el-input placeholder="Please input phone number" ></el-input>

		                  				</el-form-item>
		                  			</div>
                  				</div>
                  			</div>


                		</div>
                		<div class="card-footer">
                  			<div class="float-right">
                  				<router-link to="/contactpage" class="btn btn-danger">Cancel</router-link>
                  				<button type="button" class="btn btn-primary">Submit</button>
                  			</div>
                		</div>
              		</el-form>
            	</div>

			</div>
		</section>
	</div>
</template>


<script>

	
	
	export default{

		
	};
</script>