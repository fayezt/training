import { createApp } from 'vue'
import App from './App.vue'
import 'bootstrap/scss/bootstrap.scss';
import router from './router';
import store from './store';
import 'swiper/css/bundle';
import './assets/css/fontAwesome5Pro.css';
import 'bootstrap';
import BootstrapVue3 from "bootstrap-vue-3";
import "bootstrap-vue-3/dist/bootstrap-vue-3.css";
import './assets/scss/main.scss';
import Toast from "vue-toastification";
// Import the CSS or use your own!
import "vue-toastification/dist/index.css";
const options = {
    // You can set your default options here
};
let app = createApp(App);
app.use(router)
app.use(store)
app.use(BootstrapVue3);
app.use(Toast, options);
app.mount('#app');
