<script setup></script>
<template>
  <div class="c-bg__blue">
    <div class="l-inner--lg l-inner--title">
      <div class="l-box--title">
        <h3 class="c-title__lv3">お問い合わせ</h3>
        <p class="bold center">
          ご不明点などございましたら、<br class="br-sp" />お気軽にお問い合わせください。
        </p>
        <form action="" method="POST" class="l-form p-form__wrap">
          <div class="l-form__wrap">
            <label for="name">お名前 ※必須</label>
            <input id="name" type="text" name="name" required />
          </div>
          <!-- よみがな -->
          <div class="l-form__wrap">
            <label for="kana">よみがな ※必須</label>
            <input id="kana" type="text" name="kana" required />
          </div>
          <!-- 電話 -->
          <div class="l-form__wrap">
            <label for="tel">電話番号 ※必須</label>
            <input id="tel" type="tel" name="tel" required />
          </div>
          <!-- メールアドレス -->
          <div class="l-form__wrap">
            <label for="email">メールアドレス ※必須</label>
            <input id="email" type="email" name="email" required />
          </div>
          <!-- お問い合わせ内容 ※必須 -->
          <div class="l-form__wrap">
            <label for="content">お問い合わせ内容 ※必須</label>
            <textarea id="content" name="content" required rows="8"></textarea>
          </div>

          <div class="l-form__wrap p-form__privacy">
            <div><a href="">プライバシーポリシー</a>について</div>
            <div>
              <!-- 同意して入力内容を送信する -->
              <input id="agree" type="checkbox" name="agree" value="1" required />
              <label for="agree" class="center">同意して入力内容を送信する</label>
            </div>
          </div>

          <button type="submit" name="btn_submit" class="c-button--blue p-form__button">
            送信
          </button>
        </form>
      </div>
    </div>
  </div>
</template>
