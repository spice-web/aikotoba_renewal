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
      autoplay: true,
      interval: 3000,
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
    aria-label="ウィルサポTOPスライダー"
  >
    <SplideTrack>
      <SplideSlide class="top-slide top-slide--01">
        <picture class="top-slide__picture">
          <source media="(min-width: 850px)" srcset="@/assets/images/slider/top_pc01.webp" />
          <img src="@/assets/images/slider/top_sp01.webp" alt="" />
        </picture>
      </SplideSlide>
      <SplideSlide class="top-slide top-slide--02">
        <picture class="top-slide__picture">
          <source media="(min-width: 850px)" srcset="@/assets/images/slider/top_pc02.webp" />
          <img src="@/assets/images/slider/top_sp02.webp" alt="" />
        </picture>
      </SplideSlide>
      <SplideSlide class="top-slide top-slide--03">
        <picture class="top-slide__picture">
          <source media="(min-width: 850px)" srcset="@/assets/images/slider/top_pc03.webp" />
          <img src="@/assets/images/slider/top_sp03.webp" alt="" />
        </picture>
      </SplideSlide>
      <SplideSlide class="top-slide top-slide--04">
        <picture class="top-slide__picture">
          <source media="(min-width: 850px)" srcset="@/assets/images/slider/top_pc04.webp" />
          <img src="@/assets/images/slider/top_sp04.webp" alt="" />
        </picture>
      </SplideSlide>
    </SplideTrack>
    <ul class="splide__pagination"></ul>
  </Splide>
</template>
