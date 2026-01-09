<script setup>
import TopSlider from '@/components/TopSlider.vue'
import IndexSlider from '@/components/IndexSlider.vue'
import GoogleMap from '@/components/GoogleMap.vue'

// データの定義
const data1 = {
  images: [
    // '/images/slider/image003.jpg',
    // '/images/slider/image004.jpg',
    '/images/slider/image005.jpg',
    '/images/slider/image001.jpg',
    '/images/slider/image011.jpg',
    '/images/slider/image012.jpg'
  ]
}

const data2 = {
  images: [
    '/images/slider/image006.jpg',
    '/images/slider/image007.jpg',
    '/images/slider/image008.jpg',
    '/images/slider/image010.jpg'
  ]
}
</script>

<template>
  <div id="top-slider">
    <TopSlider class="top-slider" />
  </div>

  <!-- introduction -->
  <div style="overflow-x: clip">
    <div class="p-intro__wrap">
      <figure class="p-intro__img01 br-sp">
        <img src="@/assets/images/top/top_001_bg.png" width="100%" alt="" />
      </figure>
      <figure class="p-intro__img01 br-pc">
        <img src="@/assets/images/top/top_001_bg_pc.svg" width="1803" height="889" alt="" />
      </figure>
      <div class="p-intro__content">
        <img src="@/assets/images/logo/logomark.png" alt="" class="p-intro__logo" />
        <p class="p-intro__text">
          あいことば療育ラボ横川は<br />ケア児・発達障害児童にも<br />
          対応したインクルーシブ<br />療育を提供する放課後等<br />デイサービスです
        </p>
      </div>
    </div>
    <div class="center bold p-intro__foot">
      ひとりひとりに合った<br
        class="br-sp"
      />オーダーメイドの支援計画を提供し、<br />お子様が主役となって自発的に活動ができるように<br />ご支援いたします。
      <div class="p-intro__foot-img">
        <figure>
          <img src="@/assets/images/top/top_illu003.png" width="65" height="auto" alt="" />
        </figure>
        <figure>
          <img src="@/assets/images/top/top_illu004.png" width="65" height="auto" alt="" />
        </figure>
      </div>
    </div>
  </div>

  <!-- headline -->
  <div class="c-bg__blue p-page-headline">
    <div class="p-page-headline__wrap">
      <h2 id="possible" class="c-title__label p-page-headline__title">
        あいことば療育ラボ横川だから<br />できること
      </h2>
      <img
        src="@/assets/images/top/top_illu_title01.png"
        width="125"
        height="auto"
        alt=""
        class="p-page-headline__img --left"
      />
      <img
        src="@/assets/images/top/top_illu_title02.png"
        width="125"
        height="auto"
        alt=""
        class="p-page-headline__img --right"
      />
    </div>
  </div>

  <!-- メインコンテンツ -->
  <div class="c-bg__blue">
    <h2 class="c-title__lv2 br-pc">
      専門スタッフによる充実した療育と医療的ケアで、お子さまの成長を支えます。
    </h2>

    <!-- 上段スライダー -->
    <IndexSlider :images="data1.images" />

    <h2 class="c-title__lv2 br-sp index-title__bg-star">
      専門スタッフによる<br />充実した療育と医療的ケアで、<br />お子さまの成長を支えます。
    </h2>

    <div class="l-inner l-grid-pc--col3-auto p-index-main__contents">
      <div class="l-box">
        <h3 class="c-title__box">一人ひとりに寄り添う<br />細やかな療育を</h3>
        <p>
          個性を大事にし、個別療育や協調性や思いやりなどのソーシャルスキルを養うために集団療育も取り入れています。
        </p>
      </div>
      <div class="l-box">
        <h3 class="c-title__box">専門職員による<br />充実した療育を</h3>
        <p>
          訪問看護ステーションが併設しており、在宅支援との密な連携を行い、看護師、理学療法士、作業療法士、言語聴覚士など、それぞれの専門性を発揮した支援プログラムでお子様の成長をお手伝いいたします。
        </p>
      </div>
      <div class="l-box">
        <h3 class="c-title__box">専門スタッフによる<br />医療的ケアを</h3>
        <p>主治医の指示書を基に、看護師および研修を受けた専門スタッフが医療的ケアを行います。</p>
        <ul class="c-list__blue p-index-main__list">
          <li>人工呼吸器による呼吸管理</li>
          <li>経鼻、胃ろうなどの経管栄養</li>
          <li>吸引、吸入</li>
          <li>人工肛門（ストーマ）の管理</li>
          <li>導尿</li>
          <li>血糖値測定やインスリン注射</li>
          <li>発作時の対応</li>
          <li>バイタルチェック</li>
        </ul>
      </div>
    </div>

    <div class="p-index-main__contents--down">
      <!-- 下段 -->
      <div class="l-inner l-grid-pc--col3-auto p-index-main__contents">
        <div class="l-box">
          <h3 class="c-title__box">親と子の双方に<br />寄り添ったサポートを</h3>
          <p>
            お子さまが快適に過ごせることはもちろん、ご家族の休息時間等を生み出すレスパイトケアを提供。保護者の方と面談やペアレントトレーニングを重ね、親と子の双方に寄り添ったサポートをいたします。また必要に応じて、お子さまが通う学校等との情報共有・連携も行います。
          </p>
        </div>
        <div class="l-box">
          <h3 class="c-title__box">地域や社会とつながる<br />さまざまな体験活動</h3>
          <p>
            体験では、「見る（視覚）」「聞く（聴覚）」「味わう（味覚）」「嗅ぐ（嗅覚）」「触れる（触覚）」を働かせ、物事を感覚的にとらえることができます。また、さまざまな体験活動を通じて家族や周囲の人々、地域や社会とつながることで、子どもは居場所の確保や共存の精神、自他共に大切するということを学べます。
          </p>
        </div>
        <div class="l-box">
          <h3 class="c-title__box">併設する訪問看護<br />ステーションとの連携</h3>
          <p>
            併設する訪問看護ステーションの看護師・療法士と連携し、より細やかな配慮のもとでケアと支援を行い、お子さまとご家族が安心して過ごせる環境を提供します。在宅等での困りごとを共有し、課題に一緒に取り組みます。
          </p>
          <ul class="c-icon__list">
            <li>コミュニケーション練習</li>
            <li>摂食練習</li>
            <li>書字練習</li>
            <li>箸・スプーン練習</li>
            <li>ボタンやひも結び練習</li>
            <li>等</li>
          </ul>
        </div>
      </div>

      <IndexSlider class="splide p-index-main__contents--down-slider" :images="data2.images" />
    </div>

    <div class="p-index-button__wrap">
      <router-link to="/about#price" class="c-button--blue c-button--top">料金について</router-link>
      <router-link to="/about" class="c-button--blue">一日の流れ</router-link>
    </div>
  </div>

  <!-- company -->
  <div id="company" class="p-index-about__logo">
    <img
      src="@/assets/images/logo/logo_up_k.png"
      width="100%"
      height="auto"
      alt="あいことば療育ラボ横川"
      class="p-index-about__img"
    />
  </div>
  <div class="l-inner--lg">
    <div class="l-box--blue l-box--sm p-index-about__def">
      <dl class="c-list__blue">
        <dt>活動内容</dt>
        <dd>
          ソーシャルスキルトレーニング(SST) ／ <span class="is-nowrap">感覚統合あそび</span> ／<br
            class="br-pc"
          />創作あそび ／ <span class="is-nowrap">自然体験など</span>
        </dd>
      </dl>
      <dl class="c-list__blue">
        <dt>時間</dt>
        <dd>月～金 15:00～18:00 ／<br />祝日13:00～18:00</dd>
      </dl>
      <dl class="c-list__blue">
        <dt>サービス種別</dt>
        <dd>障害児通所系サービス、<br />放課後等デイサービス</dd>
      </dl>
      <dl class="c-list__blue">
        <dt>事業所番号</dt>
        <dd><a class="nolink">3450219724</a></dd>
      </dl>
      <dl class="c-list__blue">
        <dt>住所</dt>
        <dd>
          〒733-0013<br />広島県広島市西区横川新町12-13
          <router-link to="/#map" class="p-index-about__icon">MAP</router-link>
        </dd>
      </dl>
      <dl class="c-list__blue">
        <dt>電話</dt>
        <dd><a class="nolink">082-236-6375</a></dd>
      </dl>
      <dl class="c-list__blue">
        <dt>FAX</dt>
        <dd><a class="nolink">082-553-0966</a></dd>
      </dl>
      <dl class="c-list__blue">
        <dt>自治体名</dt>
        <dd>広島市</dd>
      </dl>
    </div>
  </div>

  <div id="map"></div>
  <!-- google map -->
  <div class="c-map__wrap">
    <div class="c-title__map">ACCESS</div>
    <GoogleMap />
  </div>
</template>

<style scoped lang="scss">
.index-title__bg-star {
  position: relative;
  z-index: 0;
  &:before {
    content: '';
    position: absolute;
    display: block;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 375px;
    height: 160px;
    background-image: url('../assets/images/parts/star_04.png');
    background-repeat: no-repeat;
    background-position: center center;
    background-size: 375px 160px;
    z-index: -1;
  }
}

.p-index-button__wrap {
  padding-bottom: 7rem;
  background-image: url('../assets/images/parts/star_04.png');
  background-repeat: no-repeat;
  background-position: center center;
  background-size: 375px 160px;
}
</style>
