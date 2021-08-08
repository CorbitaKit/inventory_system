import ElementUI from 'element-ui';
import 'element-ui/lib/theme-chalk/index.css';
import locale from 'element-ui/lib/locale/lang/en'
import requestService from './../services/requestService.js'





const GlobalImports = {
	install(vue){
		Vue.use(ElementUI, {locale})
		Vue.use(requestService)
	}
}

export default GlobalImports