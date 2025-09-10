import './assets/main.css';
import { createApp } from 'vue';
import { createPinia } from 'pinia';
import './assets/tailwind.css';
import App from './App.vue';
import router from './router';

const app = createApp(App);

// Disable Vue DevTools
app.config.devtools = false;

app.use(createPinia());
app.use(router);

router.beforeEach((to, from, next) => {
    console.warn = () => {}; // Disable all console warnings
    next();
});

app.mount('#app');