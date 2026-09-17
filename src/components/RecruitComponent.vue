<template>
  <transition name="recruit-slide">
    <figure v-if="isScrolled && !isAtBottom"> 
      <a href="https://laughlines.saiyo-kakaricho.com/entry/offer/list" target="_blank" rel="noopener noreferrer">
        <img src="@/assets/images/banner/willsapo_recruit.png" alt="Recruitment Image" />
      </a>
    </figure>
  </transition>
</template>

<script lang="ts">
// スクロールしたら右端に固定される採用情報のバナーを表示するコンポーネント
import { defineComponent } from 'vue';

export default defineComponent({
  name: 'RecruitComponent',

  data() {
    return {
      isScrolled: false,
      isAtBottom: false,
    };
  },

  mounted() {
    window.addEventListener('scroll', this.handleScroll);
    this.handleScroll(); // 初期表示時にスクロール位置をチェック
  },

  beforeUnmount() {
    window.removeEventListener('scroll', this.handleScroll);
  },

  methods: {
    handleScroll() {
      const scrollBottom = window.scrollY + window.innerHeight >= document.documentElement.scrollHeight - 2; // ページの一番下に到達したかどうかを判定
      this.isScrolled = window.scrollY > 100; // スクロール位置が100pxを超えたらバナーを表示
      this.isAtBottom = scrollBottom; // ページの一番下に到達したかどうかを更新
    },
  },
})
</script>

<style lang="css" scoped>
figure {
  position: fixed;
  top: 50%;
  right: 0;
  z-index: 101;
  width: 175px;
  margin: 0;
  text-align: center;
  transform: translateY(-50%);
}

.recruit-slide-enter-active,
.recruit-slide-leave-active {
  transition:
    transform 0.8s ease,
    opacity 0.8s ease;
}

.recruit-slide-enter-from,
.recruit-slide-leave-to {
  opacity: 0;
  transform: translate(100%, -50%);
}

img {
  display: block;
  width: 100%;
  height: auto;
}

@media (max-width: 849px) {
  figure {
    display: none;
  }
}
</style>