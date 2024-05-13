import './assets/main.scss'
import './assets/js/typekit.js' // typekit.jsをインポート

import { createApp } from 'vue'
import App from './App.vue'
import router from './router'

import axios from 'axios'
import VueAxios from 'vue-axios'

const app = createApp(App)
// axiosをVueにインストール
app.use(router)
app.use(axios, VueAxios)

app.mount('#app')
