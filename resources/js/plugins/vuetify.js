import Vue from 'vue'
import Vuetify from 'vuetify'
import 'vuetify/dist/vuetify.min.css'

Vue.use(Vuetify)

const opts = {
    theme:{
         themes: {
            light: {
                primary: '#E20000',
                secondary: '#001659',
            },
        },
    }
}

export default new Vuetify(opts)
