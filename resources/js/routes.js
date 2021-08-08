import Vue from 'vue'
import VueRouter from 'vue-router'

//Components
import DashboardLayout from './components/dashboard/DashboardLayoutComponent.vue'
import UserPageLayout from './components/dashboard/User/UserLayoutComponent.vue'
import AddNewUserLayout from './components/dashboard/User/AddUserLayoutComponent.vue'



Vue.use(VueRouter)


const routes = [

	{
		path : "/dashboard",
		component : DashboardLayout

	},
	{
		path : '/userpage',
		component : UserPageLayout
	},
	{
		path : '/adduser',
		component : AddNewUserLayout,
		props : true
	}


]


export default new VueRouter({routes,mode:'history',base : __dirname})
