require('./bootstrap')
import Vue from 'vue'
import Vuex from 'vuex'
import router from './routes'
import Core from './core'

Vue.use(Vuex)
Vue.config.devtools = true

// Autoimport components
Core.initComponentAutoImport()

// Init global state
Core.initGlobalState()

// Init Lang
Core.initLang()

// Init Lang
Core.initModalHandler()

// Init app
// noinspection JSUnusedLocalSymbols
import App from './app.vue'
const app = new Vue({
    el: '#app',
    router,
    components: { App }
});
