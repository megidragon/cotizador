import Vue from "vue";
import VueLang from "@eli5/vue-lang-js";
import VModal from 'vue-js-modal/dist/index.nocss.js'
import 'vue-js-modal/dist/styles.css'

class Core {
    initGlobalState()
    {
        const store = Vue.observable({
            state: {
                is_loading: false
            }
        })
        const actions = {
            set(field, value) {
                store[field] = value;
            },
            destroy(field) {
                delete (store[field]);
            }}
        Vue.prototype.$store = store
        Vue.prototype.$actions = actions
    }

    initComponentAutoImport()
    {
        const files = require.context('./components', true, /\.vue$/i);
        files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));
    }

    initLang()
    {
        const source = require(`./${process.env.MIX_APP_LANG}.js`);

        Vue.use(VueLang, {
            messages: source,
            locale: process.env.MIX_APP_LANG,
        })
    }

    initModalHandler()
    {
        Vue.use(VModal)
    }
}

export default new Core();
