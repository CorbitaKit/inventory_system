import Vue from 'vue';
import Vuex from 'vuex';
import api from 'axios';

Vue.use(Vuex)




export const store = new Vuex.Store({

	state : {
		contact : {
			firstname : '',
			lastname : '',
			email : '',
			phone : ''
		},
		contacts : [],
	},

	mutations : {

		addNewContact(state,payload){

			// console.log(payload)
			state.contacts.push(payload)
		},

		getContacts(state,payload){

			state.contacts = payload
		},


		setContact(state,payload){
			state.contact = payload
		}
	},


	actions : {

		async addAction(state,payload){


			const new_contact = await axios.post('/api/storecontact',payload)

			state.commit("addNewContact",new_contact)
		},

		async fetchContacts(state){
			const response = await axios.get('/api/getcontacts')

			state.commit('getContacts',response.data)
		},

		async fetchContact(state,payload){
			const contact = await axios.get('/api/getcontact/'+payload)
			state.commit("setContact",contact.data)
		}


	},


	getters : {

		getContact : state => state.contact,
		getAllContact : state => state.contacts
	}

});