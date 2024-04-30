<script>
import { defineComponent } from 'vue'
import { Splide, SplideSlide, SplideTrack } from '@splidejs/vue-splide'
// Splide.jsのCSSをインポート
import '@splidejs/vue-splide/css'

export default defineComponent({
  components: {
    Splide,
    SplideSlide,
    SplideTrack
  },
  props: {
    images: {
      type: Array,
      required: true
    }
  }
})
</script>

<template>
  <Splide
    aria-label="スライダー"
    class="card01"
    :has-track="false"
    :options="{
      autoplay: true,
      interval: 0,
      speed: 150000,
      pauseOnHover: false,
      pauseOnFocus: false,
      type: 'loop',
      arrows: false,
      perPage: 3,
      pagination: false,
      padding: '15%',
      gap: '10px',
      breakpoints: {
        850: {
          padding: '20%',
          perPage: 1
        }
      }
    }"
  >
    <SplideTrack>
      <!-- 画像をループして各々のSplideSlideコンポーネントを作成 -->
      <SplideSlide v-for="(image, index) in images" :key="index">
        <img :src="image" width="100%" alt="" />
      </SplideSlide>
    </SplideTrack>
  </Splide>
</template>
