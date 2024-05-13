<script setup>
import ReturnTopButton from './ReturnTopButton.vue'
</script>

<template>
  <footer class="l-footer">
    <div class="l-flex-pc--sb l-footer__inner">
      <div>
        <div class="l-footer__logo-wrap">
          <div class="l-footer__logo"></div>
          <ul class="l-footer__contact">
            <li>
              <a href="tel:082-236-6375">
                <img
                  src="@/assets/images/icon/icon_tel.png"
                  alt="お電話はこちら"
                  width="27"
                  height="auto"
                />
              </a>
            </li>
            <li>
              <router-link to="/contact"
                ><img
                  src="@/assets/images/icon/icon_mail.png"
                  alt="お問い合わせはこちら"
                  width="27"
                  height="auto"
              /></router-link>
            </li>
            <li>
              <a
                href="https://www.instagram.com/aikotoba.1101/"
                target="_blank"
                rel="noopener noreferrer"
                ><img
                  src="@/assets/images/icon/icon_ig.png"
                  alt="あいことば療育ラボ横川公式インスタグラム"
                  width="27"
                  height="auto"
              /></a>
            </li>
          </ul>
        </div>
        <div class="l-footer__info nolink">
          <a class="nolink">事業所番号：3450219724</a><br />
          〒733-0013<br />
          広島県広島市西区横川新町12-13<br />
          TEL.<a class="nolink">082-236-6375</a> ／ FAX.<a class="nolink">082-553-0966</a><br />
          月～金 15:00～18:00 ／ 祝日13:00～18:00
        </div>
      </div>
      <div>
        <ul class="l-footer-nav bold">
          <li class="l-footer-nav__item">
            <router-link to="/#possible">あいことば療育ラボにできること</router-link>
          </li>
          <li class="l-footer-nav__item">
            <router-link to="/about">1日のながれ</router-link>
          </li>
          <li class="l-footer-nav__item">
            <router-link to="/about#price">ご利用料金</router-link>
          </li>
          <li class="l-footer-nav__item">
            <router-link to="/#company">事業所詳細</router-link>
          </li>
          <li class="l-footer-nav__item">
            <router-link to="/#map">アクセス</router-link>
          </li>
        </ul>
        <dl class="l-footer__company-logo">
          <dt>運営会社</dt>
          <dd>
            <img
              src="@/assets/images/logo/logo_laughlines.png"
              alt="株式会社ラフラインズ"
              width="100%"
            />
          </dd>
        </dl>
        <dl class="l-footer__company-logo second">
          <dt>グループ会社</dt>
          <dd>
            <a href="https://aireha.jp/" target="_blank">
              <img src="@/assets/images/logo/airehalogo_w.svg" alt="株式会社ラフラインズ" />
            </a>
            <a href="http://veritas-hiroshima.jp/" target="_blank" rel="noreferrer noopener">
              <img src="@/assets/images/logo/logo_veritas.gif" alt="ヴェリタス広島" />
            </a>
          </dd>
        </dl>
      </div>
    </div>

    <div class="l-footer__copy">Copyright 2024 Aikotoba Rehabilitation Lab Yokogawa</div>
    <router-link to="/contact" class="c-button__bottom">資料請求・お問い合わせ</router-link>
    <ReturnTopButton />
  </footer>
</template>
