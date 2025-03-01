import { createApp } from 'vue';
import App from './App.vue';
import router from './router';
import './assets/styles.css'; // Importing global CSS


createApp(App)
    .use(router)
    .mount('#app');
