import router from './routes.js'
import GlobalImport from './plugins/global-import.js'
import {store} from './store';




require('./bootstrap');

window.Vue = require('vue');


Vue.use(GlobalImport)
const app = new Vue({
    router,
    store,
    computed:{
		currentPage(){
			return this.$route.path
		}
	},
}).$mount("#app");
