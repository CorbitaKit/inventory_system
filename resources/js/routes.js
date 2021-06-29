import Vue from 'vue'
import VueRouter from 'vue-router'

//Components
import DashboardLayout from './components/dashboard/DashboardLayoutComponent.vue'
import ContactListLayout from './components/contacts/ContactListLayoutComponent.vue'
import AddNewContactLayout from './components/contacts/AddnewContactLayoutComponent.vue'



Vue.use(VueRouter)


const routes = [

	{
		path : "/dashboard",
		component : DashboardLayout

	},
	{
		path : '/contactpage',
		component : ContactListLayout
	},
	{
		path : '/addcontact',
		component : AddNewContactLayout,
		props : true
	}


]


export default new VueRouter({routes,mode:'history',base : __dirname})
