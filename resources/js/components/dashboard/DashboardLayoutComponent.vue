<template>
	<div>

		<section class="content">

			<div class="container-fluid">
				<div class="content-header">
			      <div class="container-fluid">
			        <div class="row mb-2">
			          <div class="col-sm-6">
			            <h1 class="m-0">Dashboard</h1>
			          </div><!-- /.col -->
			          
			        </div><!-- /.row -->
			      </div><!-- /.container-fluid -->
			    </div>
				<widget></widget>

			</div>

		</section>

	</div>

</template>

<script>
	import Widget from './DashboardWidget/WidgetLayoutComponent.vue';
	export default{

		components : {
			Widget
		}
	};
</script>