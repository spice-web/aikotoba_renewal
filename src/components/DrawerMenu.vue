<template>
  <!-- ハンバーガーアイコン -->
  <div class="c-drawer__btn" :class="{ active: isActive }" @click="toggle">
    <span></span>
    <span></span>
    <span></span>
  </div>

  <!-- オーバーレイ背景 -->
  <div class="c-drawer__bg" :class="{ active: isActive }"></div>

  <!-- ドロワーメニュー -->
  <ul class="c-drawer__menu" :class="{ active: isActive }">
    <!-- ここにメニューコンテンツを挿入 -->
    <ul class="c-drawer__nav">
      <li><router-link to="/">トップ</router-link></li>
      <li><router-link to="/about#possible">あいことば療育ラボにできること</router-link></li>
      <li><router-link to="/about">1日のながれ</router-link></li>
      <li><router-link to="/about#price">ご利用料金</router-link></li>
      <li><router-link to="/index#company">事業所詳細</router-link></li>
      <li><router-link to="/index#map">アクセス</router-link></li>
      <li><router-link to="/contact">お問い合わせ</router-link></li>
    </ul>
  </ul>
</template>

<script>
export default {
  data() {
    return {
      isActive: false
    }
  },
  methods: {
    toggle() {
      this.isActive = !this.isActive
      if (this.isActive) {
        document.body.style.overflowY = 'hidden'
      } else {
        document.body.style.overflowY = 'auto'
      }
    }
  }
}
</script>
