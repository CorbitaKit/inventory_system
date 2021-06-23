import ElementUI from 'element-ui';
import 'element-ui/lib/theme-chalk/index.css';
import locale from 'element-ui/lib/locale/lang/en'



const GlobalImports = {
	install(vue){
		Vue.use(ElementUI, {locale})
	}
}

export default GlobalImports