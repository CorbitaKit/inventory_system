import Vue from 'vue'
import VueRouter from 'vue-router'

//Components

import DashboardLayout from './components/dashboard/DashboardLayoutComponent.vue'

//User component
import UserPageLayout from './components/dashboard/User/UserLayoutComponent.vue'
import AddNewUserLayout from './components/dashboard/User/AddUserLayoutComponent.vue'

//Item components
import ItemPageLayout from './components/dashboard/Item/ItemLayoutComponent.vue'
import AddNewItemLayout from './components/dashboard/Item/AddItemLayoutComponent.vue'

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
	},
	{
		path : '/itempage',
		component : ItemPageLayout
	},
	{
		path : '/additem',
		component : AddNewItemLayout
	}


]


export default new VueRouter({routes,mode:'history',base : __dirname})
