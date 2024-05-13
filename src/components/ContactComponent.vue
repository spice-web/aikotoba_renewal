<template>
  <!-- お問い合わせ -->
  <div class="c-bg__blue">
    <div class="l-inner--lg l-contact">
      <div class="l-contact__box">
        <h4 class="c-title__box u-no-border u-fz-lg c-title__contact">
          お気軽に<br class="br-sp" />お問い合わせください
        </h4>
        <div class="l-contact__head">
          <div class="u-color__dark-blue bold l-contact__tel">
            <img src="../assets/images/icon/icon_tel_b.png" alt="" class="l-contact__tel-icon" /><a
              class="nolink"
              >082-236-6375</a
            >
          </div>
          <div class="center">【受付時間】<br />月～金15:00～18:00 ／ 祝日13:00～18:00</div>
          <a href="tel:082-236-6375" class="nolink c-button--tel l-contact__button"
            ><span>お電話でお問い合わせ</span></a
          >
        </div>
        <div class="l-contact__border"></div>
        <div class="l-contact__foot">
          <div class="u-color__dark-blue bold l-contact__mail">aikotoba.1101@gmail.com</div>
          <div class="center">【受付時間】<br />24時間 ／ 365日</div>
          <router-link to="/contact" class="c-button--mail l-contact__button"
            ><span>メールでお問い合わせ</span></router-link
          >
        </div>
      </div>
    </div>
  </div>
</template>
