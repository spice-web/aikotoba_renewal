import './assets/main.scss'

import { createApp } from 'vue'
// import App from './App.vue'
import Header from './HeaderComponent.vue'
import Footer from './FooterComponent.vue'

// createApp(App).mount('#app')
createApp(Header).mount('#header')
createApp(Footer).mount('#footer')
