<script setup>
import TopSlider from '@/components/TopSlider.vue'
import IndexSlider from '@/components/IndexSlider.vue'
import officeList from '@/components/officeList.vue'
import scheduleImg1 from '@/assets/images/about/wsp_p015.webp'
import scheduleImg2 from '@/assets/images/about/wsp_p016.webp'
import scheduleImg3 from '@/assets/images/about/wsp_p017.webp'
import scheduleImg4 from '@/assets/images/about/wsp_p018.webp'
import sliderImg1 from '@/assets/images/slider/wsp_p010.webp'
import sliderImg2 from '@/assets/images/slider/wsp_p011.webp'
import sliderImg3 from '@/assets/images/slider/wsp_p012.webp'
import sliderImg4 from '@/assets/images/slider/wsp_p013.webp'
import sliderImg5 from '@/assets/images/slider/wsp_p014.webp'

// ご利用までの流れ
const scheduleSteps = [
  {
    title: 'お問い合わせ',
    text: ['まずはお気軽に', 'お問い合わせください。'],
    img: scheduleImg1
  },
  {
    title: '見学、体験',
    text: ['雰囲気を見学・体験いただきます。気になることはご相談ください！'],
    img: scheduleImg2
  },
  {
    title: 'ご契約',
    text: ['内容にご納得いただいてのご契約となりますのでご安心ください'],
    img: scheduleImg3
  },
  {
    title: '利用開始',
    text: ['まずはお気軽に', 'お問い合わせください'],
    img: scheduleImg4
  }
]

// データの定義
const data2 = {
  images: [sliderImg1, sliderImg2, sliderImg3, sliderImg4, sliderImg5]
}
</script>

<template>
  <div id="top-slider">
    <TopSlider class="top-slider" :images="data2.images" />
  </div>

  <!-- introduction -->
  <div style="overflow-x: clip">
    <div class="p-intro__wrap">
      <picture class="p-intro__img01">
        <source
          srcset="@/assets/images/top/top_001_bg_pc.webp"
          media="(min-width: 850px)"
        />
        <img src="@/assets/images/top/top_001_bg.webp" width="100%" alt="" />
      </picture>
      <!-- <div class="p-intro__content">
        <img src="@/assets/images/logo/logomark.webp" alt="" class="p-intro__logo" />
        <p class="p-intro__text">
          ウィルサポは<br />ケア児・発達障害児童にも<br />
          対応したインクルーシブ<br />療育を提供する放課後等<br />デイサービスです
        </p>
      </div> -->
    </div>
    <div class="center bold p-intro__foot">
      ひとりひとりに合った<br
        class="br-sp"
      />オーダーメイドの支援計画を提供し、<br />お子様が主役となって自発的に活動ができるように<br />ご支援させていただきます。
      <div class="p-intro__foot-img">
        <figure>
          <img src="@/assets/images/top/top_illu005.webp" width="118" height="auto" alt="" />
        </figure>
        <figure>
          <img src="@/assets/images/top/top_illu006.webp" width="152" height="auto" alt="" />
        </figure>
      </div>
    </div>
  </div>
  
  <!-- メインコンテンツ -->
  <div class="c-bg__dark-blue p-index-main__contents">
    <div class="walking-figure">
      <img src="@/assets/images/top/walking_figure.webp" alt="" width="100%" height="auto" />
      <img
        src="@/assets/images/top/top_illu_title01.webp"
        width="125"
        height="auto"
        alt=""
        class="p-page-headline__img --left"
      />
      <img
        src="@/assets/images/top/top_illu_title02.webp"
        width="125"
        height="auto"
        alt=""
        class="p-page-headline__img --right"
      />
    </div>
    <h2 id="possible" class="c-title__label p-page-headline__title p-page-headline__title--pink">
      ウィルサポにできること
    </h2>
    <h2 class="c-title__lv2 u-mb--0">
      こんな事で<br class="br-sp" />お困りではありませんか？？
    </h2>
    <ul class="okomari__list">
      <li class="okomari__item"><img src="@/assets/images/top/okomari01.webp" alt="" width="100%" /></li>
      <li class="okomari__item"><img src="@/assets/images/top/okomari02.webp" alt="" width="100%" /></li>
      <li class="okomari__item"><img src="@/assets/images/top/okomari03.webp" alt="" width="100%" /></li>
      <li class="okomari__item"><img src="@/assets/images/top/okomari04.webp" alt="" width="100%" /></li>
    </ul>

    <div class="p-index-main__inner">
      <h2 class="c-title__lv2 ">
        ウィルサポでは、<br class="br-sp" />お子様の発達を<br />『あそび×ソーシャルスキル』<br class="br-sp" />をテーマに<br />サポートしています。
      </h2>
  
      <div class="p-index-main__catch-box">
        <!-- オブジェクト -->
        <figure class="p-index-main__object">
          <img src="@/assets/images/top/wsp_png04.webp" alt="" width="100%" height="auto" />
        </figure>
        <div class="p-index-main__catch">
          ～SST・創造・感覚統合・体験を<br class="br-sp" />柱としたプログラム～
        </div>
      </div>
  
      <ul class="p-index-main__program-list">
        <li class="p-index-main__program-list__item"><figure><img src="@/assets/images/program/program_sst.webp" alt="" width="100%" height="auto"><figcaption>SST</figcaption></figure></li>
        <li class="p-index-main__program-list__item">
          <figure>
            <img src="@/assets/images/program/program_creative.webp" alt="" width="100%" height="auto">
            <figcaption>創作活動</figcaption>
          </figure>
          </li>
        <li class="p-index-main__program-list__item"><figure><img src="@/assets/images/program/program_sensory.webp" alt="" width="100%" height="auto"><figcaption>感覚統合</figcaption></figure></li>
        <li class="p-index-main__program-list__item"><figure><img src="@/assets/images/program/program_nature.webp" alt="" width="100%" height="auto"><figcaption>体験活動</figcaption></figure></li>
      </ul>


<!--
==================================================== 
サポート
====================================================
-->
      <div class="p-index-main__support-block">
        <div>
          <h3 class="c-title__lv4 p-index-main__support-title">
            発達の遅れがあるお子様への<br class="br-sp" />療育の提供、<br class="br-pc" />放課後等の<br class="br-sp" />居場所の提供を行なっています。
          </h3>
          <p class="p-index-main__support-text u-color--white u-mb--xs">
            第三の世界と言われる放課後の大切な時間を大人も子ども一緒になって関わり、学んでいきます。<br />
            失敗して良い時期にたくさん失敗もして、様々な人にも助けられ、少しずつ自分の力で乗り越えていけるように応援していきます。
          </p>
        </div>
        <figure class="p-index-main__support-figure">
          <img src="@/assets/images/program/wsp_p009.webp" alt="" width="100%" height="auto" />
        </figure>
      </div>
<!-- サポート -->
    </div><!-- ./l-inner -->

    <div class="p-index-button__wrap">
      <router-link to="/about#price" class="c-button--white c-button--top">ご利用料金</router-link>
      <router-link to="/about" class="c-button--white c-button--top">とある1日の流れ</router-link>
    </div>

    <IndexSlider class="splide" :images="data2.images" />

  </div><!-- メインコンテンツ -->

<!-- ご利用までの流れ -->
  <div id="flow" class="l-inner">
    <div class="p-page-headline__title c-title__label c-title__label--gigyosho">ご利用までの流れ</div>

    <div class="p-about-schedule__mainWrap">
      <div
        v-for="(step, index) in scheduleSteps"
        :key="index"
        class="p-about-schedule__wrap"
      >
        <figure :class="['p-about-schedule__item-fig', { '--last': index === scheduleSteps.length - 1 }]">
          <span>{{ index + 1 }}</span>
          <img :src="step.img" alt="" width="100%" height="auto" />
        </figure>
        <div>
          <div class="p-about-schedule__title">{{ step.title }}</div>
          <div :class="['p-about-schedule__item', { '--last': index === scheduleSteps.length - 1 }]">
            <template v-for="(line, i) in step.text" :key="i">
              <br v-if="i > 0" />{{ line }}
            </template>
          </div>
        </div>
      </div>
    </div>
  </div><!-- ./l-inner -->
<!-- ご利用までの流れ -->

  <!-- 事業所一覧 -->
  <div id="office" class="p-page-headline__title c-title__label c-title__label--gigyosho">事業所一覧</div>
  <officeList />
</template>

<style scoped lang="scss">
// .index-title__bg-star {
//   position: relative;
//   z-index: 0;
//   &:before {
//     content: '';
//     position: absolute;
//     display: block;
//     top: 50%;
//     left: 50%;
//     transform: translate(-50%, -50%);
//     width: 375px;
//     height: 160px;
//     background-image: url('../assets/images/parts/star_04.webp');
//     background-repeat: no-repeat;
//     background-position: center center;
//     background-size: 375px 160px;
//     z-index: -1;
//   }
// }
.p-index-main__contents {
  position: relative;
  padding-top: 5rem;
  padding-bottom: 1.25rem;
  margin-bottom: 120px;
}

.walking-figure {
  z-index: 101;
  position: absolute;
  width: 310px;
  top: -60px;
  left: 50%;
  transform: translateX(-50%);
  img {
    &:nth-child(2), &:nth-child(3) {
      display: none;
    }
  }
  @media screen and (min-width: 1080px) {
    img {
      &:first-child {
        display: none;
      }
    }
    img {
      &:nth-child(2), &:nth-child(3) {
        display: block;
      }
    }
    width: 1098px;
    top: -100px;
    display: grid;
    grid-template-columns: 1fr 1fr;
    column-gap: 600px;
  }
}

.okomari {
  &__list {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 0rem;
    margin-top: 2rem;
    margin-bottom: 60px;

    @media screen and (min-width: 850px) {
      grid-template-columns: repeat(4, 1fr);
      margin-top: -1rem;
      margin-bottom: 133px;
    }
  }
  &__item {
    img {
      width: 100%;
      height: auto;
    }
  }
}
.splide {
  margin-bottom: 0;
}
</style>
