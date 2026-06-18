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
  <div class="c-drawer__menu" :class="{ active: isActive }">
    <ul class="c-drawer__nav">
      <li><router-link to="/" @click="close">トップ</router-link></li>
      <li>
        <router-link to="/#possible" @click="close">ウィルサポにできること</router-link>
      </li>
      <li><router-link to="/about" @click="close">とある1日のながれ</router-link></li>
      <li><router-link to="/about#price" @click="close">ご利用料金</router-link></li>
      <li>
        <router-link to="/#flow" @click="close">ご利用までの流れ</router-link>
      </li>
      <li><router-link to="/#office" @click="close">事業所一覧</router-link></li>
      <li><router-link to="/contact" @click="close">お問い合わせ</router-link></li>
      <li><router-link to="/privacy" @click="close">プライバシーポリシー</router-link></li>
    </ul>
  </div>
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
    },
    close() {
      this.isActive = false
      document.body.style.overflowY = 'auto'
    }
  }
}
</script>
