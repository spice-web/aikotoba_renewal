import './assets/main.scss'
import './assets/js/typekit.js' // typekit.jsをインポート

import { createApp } from 'vue'
// import Vue from 'vue'
import App from './App.vue'
import router from './router'

// axiosをインポート
// import axios from 'axios'
// import VueAxios from 'vue-axios'

const app = createApp(App)
app.use(router)
app.mount('#app')

// axiosをVueにインストール
// app.use(VueAxios, axios)
