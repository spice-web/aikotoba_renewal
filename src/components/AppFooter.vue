<script setup>
import ReturnTopButton from './ReturnTopButton.vue'
import { SITE_INFO } from '@/constants/siteInfo'
</script>

<template>
  <footer class="l-footer">
    <div class="l-flex-pc--sb l-footer__inner">
      <div>
        <div class="l-footer__logo-wrap">
          <div class="l-footer__logo">
            <picture>
              <source
                srcset="@/assets/images/logo/wsp_logo_w.webp"
                media="(max-width: 767px)"
              />
              <source
                srcset="@/assets/images/logo/wsp_logo_white_wide.webp"
                media="(min-width: 768px)"
              />
              <img
                src="@/assets/images/logo/wsp_logo_white_wide.webp"
                alt="ウィルサポ"
                width="100%"
              />
            </picture>
            <div class="l-footer__logo-text">
              放課後等デイサービス・児童発達支援
              <span>ウィルサポ</span>
            </div>
          </div>
          <ul class="l-footer__contact">
            <li>
              <a :href="`tel:${SITE_INFO.contactTelHref}`">
                <img
                  src="@/assets/images/icon/icon_tel.webp"
                  alt="お電話はこちら"
                  width="32"
                  height="32"
                />
              </a>
            </li>
            <li>
              <router-link to="/contact"
                ><img
                  src="@/assets/images/icon/icon_mail.webp"
                  alt="お問い合わせはこちら"
                  width="32"
                  height="32"
              /></router-link>
            </li>
            <li>
              <a
                :href="SITE_INFO.instagramUrl"
                target="_blank"
                rel="noopener noreferrer"
                ><img
                  src="@/assets/images/icon/icon_ig.webp"
                  alt="ウィルサポ公式インスタグラム"
                  width="32"
                  height="32"
              /></a>
            </li>
          </ul>
        </div>
        <div class="l-footer__info-wrap">
          <div class="l-footer__info nolink">
            運営会社 / 株式会社ラフラインズ<br />
            ［営業時間］ 8：30～17：30<br />
            〒734-0023 広島市南区東雲本町１丁目14-16-1<br />
            TEL.<a class="nolink">{{ SITE_INFO.contactTelHref }}</a><br />
          </div>
          <figure class="l-footer-nav__logo">
            <img src="@/assets/images/logo/logo_laughlines_short.webp" alt="株式会社ラフラインズ" width="100%" />
          </figure>
        </div>
      </div>
      <div>
        <ul class="l-footer-nav">
          <li class="l-footer-nav__item">
            <router-link to="/#possible">ウィルサポにできること</router-link>
          </li>
          <li class="l-footer-nav__item">
            <router-link to="/about">とある1日のながれ</router-link>
          </li>
          <li class="l-footer-nav__item">
            <router-link to="/about#price">ご利用料金</router-link>
          </li>
          <li class="l-footer-nav__item">
            <router-link to="/about#flow">ご利用までの流れ</router-link>
          </li>
          <li class="l-footer-nav__item">
            <router-link to="/#office">事業所一覧</router-link>
          </li>
          <li class="l-footer-nav__item">
            <router-link to="/contact">お問い合わせ</router-link>
          </li>
          <li class="l-footer-nav__item">
            <router-link to="/privacy">プライバシーポリシー</router-link>
          </li>
        </ul>
        <dl class="l-footer__company-logo">
          <dt>運営会社</dt>
          <dd>
            <a href="https://laughlines.jp/" target="_blank" rel="noopener">
              <img
                src="@/assets/images/logo/logo_laughlines.webp"
                alt="株式会社ラフラインズ"
                width="100%"
            />
            </a>
          </dd>
        </dl>
        <dl class="l-footer__company-logo second">
          <dt>グループ会社</dt>
          <dd>
            <a href="https://aireha.jp/" target="_blank" rel="noopener">
              <img src="@/assets/images/logo/airehalogo_w.svg" alt="株式会社ラフラインズ" />
            </a>
            <a href="http://veritas-hiroshima.jp/" target="_blank" rel="noopener">
              <img src="@/assets/images/logo/logo_veritas.gif" alt="ヴェリタス広島" />
            </a>
          </dd>
        </dl>
      </div>
    </div>

    <div class="l-footer__copy">Copyright 2026.WILLSAPO</div>
    <router-link to="/contact" class="c-button__bottom">
      お問い合わせ
    </router-link>
    <router-link to="/contact" class="c-button__top">
      資料請求・お問い合わせ
    </router-link>
    <ReturnTopButton />
  </footer>
</template>