<script setup>
import CustomDrawer from './components/DrawerMenu.vue'

import ContactComponent from './components/ContactComponent.vue'
import IgComponent from './components/IgComponent.vue'
import FooterComponent from './components/AppFooter.vue'
</script>

<template>
  <header class="l-header">
    <h1 class="l-header__logo">
      <router-link :to="{ name: 'Home' }">
        <img
          src="./assets/images/logo/logo_side_k.png"
          alt="あいことば療育ラボ横川"
          width="auto"
          height="100%"
        />
      </router-link>
    </h1>

    <ul class="l-header__nav">
      <li class="l-header__nav-item">
        <router-link to="/#possible">あいことば療育ラボにできること</router-link>
      </li>
      <li class="l-header__nav-item">
        <router-link :to="{ name: 'About' }">1日のながれ</router-link>
      </li>
      <li class="l-header__nav-item"><router-link to="/about#price">ご利用料金</router-link></li>
      <li class="l-header__nav-item"><router-link to="/#company">事業所詳細</router-link></li>
    </ul>

    <CustomDrawer />
  </header>

  <!-- RouterViewによって<main>に付与するクラスを切り替えたい -->
  <main class="l-main">
    <RouterView />
    <ContactComponent />
    <IgComponent />
  </main>

  <FooterComponent />
</template>

<script>
// ページタイトルとdescriptionを設定する
export default {
  watch: {
    $route(routeInstance) {
      this.createTitleDesc(routeInstance)
    }
  },
  mounted: function () {
    this.createTitleDesc(this.$route)
  },
  methods: {
    // titleをセットするメソッド
    createTitleDesc: function (routeInstance) {
      // titleを設定する処理
      if (routeInstance.meta.title) {
        document.title = routeInstance.meta.title + ' | あいことば療育ラボ横川'
      } else {
        document.title = 'あいことば療育ラボ横川'
      }

      // descriptionを設定する処理
      if (routeInstance.meta.desc) {
        document
          .querySelector('meta[name="description"]')
          .setAttribute('content', routeInstance.meta.desc)
      } else {
        document
          .querySelector('meta[name="description"]')
          .setAttribute(
            'content',
            'あいことば療育ラボ横川は、広島市西区横川新町にある放課後等デイサービスです。'
          )
      }
    }
  }
}
</script>
