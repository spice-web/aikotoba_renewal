import './assets/main.scss'
import './assets/js/typekit.js' // typekit.jsをインポート

import { createApp } from 'vue'
import App from './App.vue'
import router from './router'

const app = createApp(App)
app.use(router)

app.mount('#app')
