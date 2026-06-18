<script setup>
import CustomDrawer from './components/DrawerMenu.vue'

import ContactComponent from './components/ContactComponent.vue'
import IgComponent from './components/IgComponent.vue'
import FooterComponent from './components/AppFooter.vue'
</script>

<template>
  <header class="l-header">
    <div class="">
      <router-link :to="{ name: 'Home' }" class="l-header__logo">
        <img
          src="./assets/images/logo/wsp_logo_wide.webp"
          alt="放課後等デイサービス・児童発達支援ウィルサポ"
          width="100%"
          height="auto"
        />
      </router-link>
    </div>

    <ul class="l-header__nav">
      <li class="l-header__nav-item">
        <router-link to="/#possible">ウィルサポにできること</router-link>
      </li>
      <li class="l-header__nav-item">
        <router-link to="/#flow">ご利用までの流れ</router-link>
      </li>
      <li class="l-header__nav-item">
        <router-link to="/about">1日のながれ</router-link>
      </li>
      <li class="l-header__nav-item"><router-link to="/about#price">ご利用料金</router-link></li>
      <li class="l-header__nav-item"><router-link to="/#office">事業所詳細</router-link></li>
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
        document.title = routeInstance.meta.title + ' | 放課後等デイサービス・児童発達支援ウィルサポ'
      } else {
        document.title = '放課後等デイサービス・児童発達支援ウィルサポ'
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
            '「ウィルサポ」は、未就学児童から高校生まで発達状況に合わせて一貫した療育を継続的に受けて頂ける事業所です。あらゆる背景をもった子どもたちが、身体的・精神的に自分らしく暮らせる社会をめざして、さまざまなプログラムをご用意しております。'
          )
      }
    }
  }
}
</script>
