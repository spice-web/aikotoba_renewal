<script>
import { defineComponent } from 'vue'
import { Splide, SplideSlide, SplideTrack } from '@splidejs/vue-splide'
import { AutoScroll } from '@splidejs/splide-extension-auto-scroll'

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
  },
  setup() {
    const extensions = {
      AutoScroll
    }
    const options = {
      // autoplay: true,
      autoScroll: {
        pauseOnHover: false,
        pauseOnFocus: false
      },
      //   autoScroll: autoScroll
      // },
      // interval: 2000,
      // speed: 150000,
      type: 'loop',
      arrows: false,
      perPage: 3,
      pagination: false,
      padding: '15%',
      gap: '10px',
      // extensions: extensions,
      breakpoints: {
        850: {
          padding: '20%',
          perPage: 1
        }
      }
    }
    return {
      extensions,
      options
    }
  }
})
</script>

<template>
  <Splide
    aria-label="スライダー"
    class="card01"
    :has-track="false"
    :options="options"
    :extensions="extensions"
  >
    <SplideTrack>
      <!-- 画像をループして各々のSplideSlideコンポーネントを作成 -->
      <SplideSlide v-for="(image, index) in images" :key="index">
        <img :src="image" width="100%" alt="" />
      </SplideSlide>
    </SplideTrack>
  </Splide>
</template>
