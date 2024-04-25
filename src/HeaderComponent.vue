<script setup>
import Drawer from './components/DrawerMenu.vue'
</script>

<template>
  <h1 class="l-header__logo">
    <img
      src="./assets/images/logo/logo_side_k.png"
      alt="あいことば療育ラボ横川"
      width="auto"
      height="100%"
    />
  </h1>

  <ul class="l-header__nav">
    <li class="l-header__nav-item">
      <a href="index.html#possible">あいことば療育ラボにできること</a>
    </li>
    <li class="l-header__nav-item"><a href="about.html">1日のながれ</a></li>
    <li class="l-header__nav-item"><a href="about.html#price">ご利用料金</a></li>
    <li class="l-header__nav-item"><a href="index.html#company">事業所詳細</a></li>
  </ul>

  <Drawer />
</template>

<script></script>
