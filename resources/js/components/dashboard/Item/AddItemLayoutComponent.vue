<template>
	<div>
		<section class="content">
			<div class="container-fluid">
				<div class="content-header">
			      <div class="container-fluid">
			        <div class="row mb-2">
			          <div class="col-sm-6">
			            <h1 class="m-0">Add Item Page</h1>
			          </div>
			        </div>
			      </div>
			    </div>
			    <div class="card card-default">
              		<div class="card-header">
                		<h3 class="card-title">Item information</h3>
              		</div>
              		<el-form label-position="right" label-width="100px" :model="item">
                		<div class="card-body">
                  			<div class="row">
                  				<div class="col-md-6">
                  					<div class="form-group">
		                    			<el-form-item label="Item Name" is-error>

		                    				<el-input placeholder="Please input item name" is-error  v-model="item.name"></el-input>
		                    				<span class="error" v-if="errors.name">{{ errors.name[0] }}</span>
		                    			</el-form-item>


		                    		
		                  			</div>
                  				</div>
                  				<div class="col-md-6">
                  					<div class="form-group">
		                    			<el-form-item label="Date arrive">
		                    				<el-date-picker
										      v-model="item.date_arrive"
										      type="date"
										       value-format="yyyy-MM-DD"
										      placeholder="Pick a day">
										    </el-date-picker>
										    <span class="error" v-if="errors.date_arrive">{{ errors.date_arrive[0] }}</span>
		                    			</el-form-item>
		                  			</div>
                  				</div>
                  			</div>
                  			<div class="row">
                  				<div class="col-md-2">
                  					<div class="form-group">
		                    			<el-form-item label="Quantity">
		                    				<el-input v-model="item.quantity"></el-input>
		                    				<span class="error" v-if="errors.quantity">{{ errors.quantity[0] }}</span>
		                    			</el-form-item>
		                  			</div>
                  				</div>
                  				<div class="col-md-4">
                  					<div class="form-group">
		                    			<el-form-item label="Utility">
		                    				<el-select v-model="item.utility" placeholder="Select">
											    <el-option
											      v-for="util in utils"
											      :key="util.value"
											      :label="util.label"
											      :value="util.value">
											    </el-option>
											    
											  </el-select>
											  <span class="error" v-if="errors.utility">{{ errors.utility[0] }}</span>
		                    			</el-form-item>
		                  			</div>
                  				</div>

                  				<div class="col-md-6">
                  					<div class="form-group">
                  						<el-form-item label="Price">
			                    			
		                    				<el-input v-model="item.price" placeholder="Please input price"> 
		                    				
		                    				</el-input>
		                    				<span class="error" v-if="errors.price">{{ errors.price[0] }}</span>
		                  				</el-form-item>
		                  			</div>
                  				</div>
                  			</div>
                  			
                		</div>
                		<div class="card-footer">
                  			<div class="float-right">
                  				<router-link to="/userpage" class="btn btn-danger">Cancel</router-link>
                  				<button type="button" class="btn btn-primary" @click="storeItem">Submit</button>
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
				
				utils : [
					{
						'value' : 'pc(s)',
						'label' : 'Pc(s)'
					},
					{
						'value' : 'bundle',
						'label' : 'Bundle'
					},
					{
						'value' : 'pack(s)',
						'label' : 'Pack(s)'
					},
					{
						'value' : 'dozen',
						'label' : 'Dozen'
					}
				],

				errors : [],
			}
		},

		created(){
			
			
		},

		computed : {
			...mapGetters({
				item : 'getItem'
			})
		},
		methods : {
			...mapActions({
				saveItem : 'saveItem'
			}),

			storeItem(){
				const res = this.saveItem(this.item)

				res.then(response=>{
					Swal.fire('success','Item created successfully','success');

					this.$router.push('/itempage');
					
				}).catch(err=>{
					this.errors = err.response.data

					Swal.fire('error','Please check all fields','error')
				})
			},


		},


	};
</script>
<style scoped>
	.el-date-editor, .el-select{
		width : 100% !important;
	}

	.error{
		color:red;
	}
</style>