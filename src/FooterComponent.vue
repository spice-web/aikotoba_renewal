<script setup>
import ReturnTopButton from './components/ReturnTopButton.vue'
</script>

<template>
  <div class="l-flex-pc--sb l-footer__inner">
    <div>
      <div class="l-footer__logo-wrap">
        <div class="l-footer__logo"></div>
        <ul class="l-footer__contact">
          <li>
            <a href="tel:082-236-6375"
              ><img src="./assets/images/icon/icon_tel.png" alt="" width="27" height="auto"
            /></a>
          </li>
          <li>
            <a href="contact.html"
              ><img src="./assets/images/icon/icon_mail.png" alt="" width="27" height="auto"
            /></a>
          </li>
          <li>
            <a href="" target="_blank" rel="noopener noreferrer"
              ><img src="./assets/images/icon/icon_ig.png" alt="" width="27" height="auto"
            /></a>
          </li>
        </ul>
      </div>
      <div class="l-footer__info">
        事業所番号：3450219724 〒733-0013<br />
        広島県広島市西区横川新町12-13<br />
        TEL.082-236-6375 ／ FAX.082-553-0966<br />
        月～金 15:00～18:00 ／ 祝日13:00～18:00
      </div>
    </div>
    <div>
      <ul class="l-footer-nav bold">
        <li class="l-footer-nav__item"><a href="">あいことば療育ラボにできること</a></li>
        <li class="l-footer-nav__item"><a href="about.html">1日のながれ</a></li>
        <li class="l-footer-nav__item"><a href="about.html#price">ご利用料金</a></li>
        <li class="l-footer-nav__item"><a href="index.html#company">事業所詳細</a></li>
        <li class="l-footer-nav__item"><a href="index.html#map">アクセス</a></li>
      </ul>
      <div class="l-footer__company-logo">
        運営会社<img
          src="./assets/images/logo/logo_laughlines.png"
          alt="株式会社ラフラインズ"
          width="100%"
        />
      </div>
    </div>
  </div>

  <div class="l-footer__copy">Copyright 2024 Aikotoba Rehabilitation Lab Yokogawa</div>
  <a href="/contact.html" class="c-button__bottom">資料請求・お問い合わせ</a>
  <ReturnTopButton />
</template>
