export default function(Vue){
	Vue.requestService = {

		getRequest(url){
			return axios.get(url).then(response=>{ return response}).catch(err=>{ return err});
			
		},

		postRequest(url,data){
			return axios.post(url,data).then(response=>{ return response}).catch(err=>{ return err});
		},

		deleteRequest(url){
			return axios.post(url).then(response=>{return response}).catch(err=> {return err})
		}
	}

	Object.defineProperties(Vue.prototype,{
		$requestService : {
			get : () => {
				return Vue.requestService
			}
		}
	})
}