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
				    <el-table 
					:data="tableData.filter(data => !search || data.name.toLowerCase().includes(search.toLowerCase()))" 
					style="width: 100%">
	    			<el-table-column
	      				label="Date"
	      				prop="date">
	    			</el-table-column>
	    			<el-table-column
	      				label="Name"
	      				prop="name">
	    			</el-table-column>
	    			<el-table-column
	      				align="right">
	      				<template slot="header" slot-scope="scope">
	        				<el-input
	          					v-model="search"
	          					size="mini"
	          					placeholder="Type to search"/>
	      				</template>
	      				<template slot-scope="scope">
	        				<el-button
	          					size="mini"
	          					@click="handleEdit(scope.$index, scope.row)">Edit</el-button>
	        				<el-button
	          					size="mini"
	          					type="danger"
	          					@click="handleDelete(scope.$index, scope.row)">Delete</el-button>
	      				</template>
	    			</el-table-column>
	  			</el-table>
			</div>
			
		</section>
	</div>
</template>


<script>
	export default{
		data() {
      		return {
        		tableData: [
        		{
          			date: '2016-05-03',
          			name: 'Tom',
          			address: 'No. 189, Grove St, Los Angeles'
        		}, 
		        {
		          date: '2016-05-02',
		          name: 'John',
		          address: 'No. 189, Grove St, Los Angeles'
		        }, 
		        {
		          date: '2016-05-04',
		          name: 'Morgan',
		          address: 'No. 189, Grove St, Los Angeles'
		        }, 
		        {
		          date: '2016-05-01',
		          name: 'Jessy',
		          address: 'No. 189, Grove St, Los Angeles'
		        }
        	],
        search: '',
      }
    },

	};
</script>