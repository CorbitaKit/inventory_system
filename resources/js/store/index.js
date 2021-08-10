import Vue from 'vue';
import Vuex from 'vuex';
import api from 'axios';

import Swal from 'sweetalert2'
Vue.use(Vuex)



export const store = new Vuex.Store({

	state : {

		user_logged_in : [],
		user : {
			firstname : '',
			lastname : '',
			email : '',
			password : '',
			role_id : ''
		},

		roles : [],
		users : [],
		item : {
			name : '',
			date_arrive : '',
			qty : '',
			utility : '',
			price : 0
		},
		items : [],
	},

	mutations : {

		setUserLoggedIn : (state,payload)=>{


			state.user_logged_in = JSON.parse(payload)
		},

		setUsers : (state,payload)=>{

			
			state.users = payload
		},

		setRoles : (state,payload)=>{
			state.roles = payload
		},

		setUsers : (state,payload)=>{

			console.log(payload)
			state.users = payload
		},


		setUser : (state, payload)=>{
			state.user = payload
		},

		setItems : (state, payload)=>{
			state.items = payload
		}

		
	},


	actions : {


		getUserLoggedIn(context){


			context.commit('setUserLoggedIn',$('#user').val())
		},

		async fetchRoles(context, payload){

			const response = await api.get('/api/get-roles')

			context.commit('setRoles',response.data)
		},


		async saveUser(context,payload){
			const response  = await api.post('/api/store-user',payload)
			return response
		},

		async fetchUsers(context){
			api.get('/api/get-users')
			.then(response=>{
				context.commit('setUsers',response.data)
			})
		},

		async deleteUser(context,payload){
		 	const response = await api.delete('/api/delete-user/'+payload)
		 	return response
		},

		async fetchUser(context,payload){
			const response = await api.get('/api/get-user/'+payload)

			context.commit('setUser',response.data)

			return response
		},

		async saveItem(context,payload){
			const response = await axios.post('/api/store-item',payload)

			return response
		},

		fetchItems(context){
			api.get('/api/get-items')
			.then(response=>{
				context.commit('setItems',response.data)
			})
		}


		
	},

	getters : {
		getUser : state => state.user,
		getUsers  : state=>  state.users,
		getRoles : state=>state.roles,
		getUserLoggedIn : state=>state.user_logged_in,
		getItem : state=>state.item,
		getItems : state=>state.items
		
	}
});