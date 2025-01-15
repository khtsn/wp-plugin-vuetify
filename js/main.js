import * as Vue from 'vue'
// import * as Vuetify from 'vuetify'

// const vuetify = Vuetify.createVuetify()
const app = Vue.createApp({
    data() {
        return {
            message: 'Hello Vuetify!'
        }
    }
})

// app.use(vuetify)
app.mount('#app')