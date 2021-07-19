require('./bootstrap');



import { createApp }  from 'vue';
import App from './components/App.vue'
import router from './router';
import store from './store';
import VueLoading from 'vue-loading-overlay';
import 'vue-loading-overlay/dist/vue-loading.css';
import PrimeVue from 'primevue/config';
import Dialog from 'primevue/dialog';



axios.defaults.withCredentials = true;

store.dispatch('getUser').then(()=>{
    createApp(App)
        .use(router)
        .use(store)
        .use(VueLoading)
        .use(PrimeVue)
        .use(Dialog)
        .mount("#app");
})

