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
  }
})
</script>

<template>
  <Splide
    :has-track="false"
    :options="{
      type: 'loop',
      arrows: false,
      rewind: true,
      padding: '20%',
      gap: '10px',
      breakpoints: {
        850: {
          padding: 0,
          gap: 0
        }
      }
    }"
    aria-label="あいことば療育ラボ横川TOPスライダー"
  >
    <SplideTrack>
      <SplideSlide></SplideSlide>
      <SplideSlide></SplideSlide>
      <SplideSlide></SplideSlide>
    </SplideTrack>
    <ul class="splide__pagination"></ul>
  </Splide>
</template>
