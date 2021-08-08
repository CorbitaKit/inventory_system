import Vue from 'vue';
import Vuex from 'vuex';
import api from 'axios';

import Swal from 'sweetalert2'
Vue.use(Vuex)



export const store = new Vuex.Store({

	state : {
		user : {
			firstname : '',
			lastname : '',
			email : '',
			password : '',
			role_id : ''
		},

		roles : [],
		users : [],
	},

	mutations : {

		setUsers : (state,payload)=>{

			
			state.users = payload
		},

		setRoles : (state,payload)=>{
			state.roles = payload
		},

		setUsers : (state,payload)=>{
			state.users = payload
		}

		
	},


	actions : {

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
		}


		
	},

	getters : {
		getUser : state => state.user,
		getUsers  : state=>  state.users,
		getRoles : state=>state.roles
		
	}
});