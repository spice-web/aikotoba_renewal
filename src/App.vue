<script setup>
import CustomDrawer from './components/DrawerMenu.vue'

import ContactComponent from './components/ContactComponent.vue'
import IgComponent from './components/IgComponent.vue'
import ReturnTopButton from './components/ReturnTopButton.vue'
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

  <footer class="l-footer">
    <div class="l-flex-pc--sb l-footer__inner">
      <div>
        <div class="l-footer__logo-wrap">
          <div class="l-footer__logo"></div>
          <ul class="l-footer__contact">
            <li>
              <a href="tel:082-236-6375">
                <img src="./assets/images/icon/icon_tel.png" alt="" width="27" height="auto" />
              </a>
            </li>
            <li>
              <router-link to="/contact"
                ><img src="./assets/images/icon/icon_mail.png" alt="" width="27" height="auto"
              /></router-link>
            </li>
            <li>
              <a href="" target="_blank" rel="noopener noreferrer"
                ><img src="./assets/images/icon/icon_ig.png" alt="" width="27" height="auto"
              /></a>
            </li>
          </ul>
        </div>
        <div class="l-footer__info">
          事業所番号：3450219724 〒733-0013<br />
          広島県広島市西区横川新町12-13<br />
          TEL.082-236-6375 ／ FAX.082-553-0966<br />
          月～金 15:00～18:00 ／ 祝日13:00～18:00
        </div>
      </div>
      <div>
        <ul class="l-footer-nav bold">
          <li class="l-footer-nav__item">
            <router-link to="/#possible">あいことば療育ラボにできること</router-link>
          </li>
          <li class="l-footer-nav__item">
            <router-link to="/about">1日のながれ</router-link>
          </li>
          <li class="l-footer-nav__item">
            <router-link to="/about#price">ご利用料金</router-link>
          </li>
          <li class="l-footer-nav__item">
            <router-link to="/#company">事業所詳細</router-link>
          </li>
          <li class="l-footer-nav__item">
            <router-link to="/#map">アクセス</router-link>
          </li>
        </ul>
        <div class="l-footer__company-logo">
          運営会社<img
            src="./assets/images/logo/logo_laughlines.png"
            alt="株式会社ラフラインズ"
            width="100%"
          />
        </div>
      </div>
    </div>

    <div class="l-footer__copy">Copyright 2024 Aikotoba Rehabilitation Lab Yokogawa</div>
    <router-link to="/contact" class="c-button__bottom">資料請求・お問い合わせ</router-link>
    <ReturnTopButton />
  </footer>
</template>
