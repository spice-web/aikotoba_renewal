<template>
  <div class="c-bg__blue c-box--title">
    <div class="l-inner--lg l-inner--title">
      <div class="l-box--title p-about__box">
        <h3 class="c-title__lv3">お問い合わせ</h3>
        <p class="bold center u-mb--lg">
          ご不明点などございましたら、<br class="br-sp" />お気軽にお問い合わせください。
        </p>
        <form class="l-form p-form__wrap" action="" method="POST">
          <div class="l-form__wrap">
            <label for="name">お名前 ※必須</label>
            <input id="name" v-model="name" type="text" name="name" required @blur="touched.name = true" />
            <p class="error">{{ touched.name ? errors.name : '' }}</p>
          </div>
          <!-- よみがな -->
          <div class="l-form__wrap">
            <label for="kana">フリガナ(カタカナのみ) ※必須</label>
            <input id="kana" v-model="kana" type="text" name="kana" @blur="touched.kana = true" />
            <p class="error">{{ touched.kana ? errors.kana : '' }}</p>
          </div>
          <!-- 電話 -->
          <div class="l-form__wrap">
            <label for="tel">電話番号(ハイフンなし) ※必須</label>
            <input id="tel" v-model="tel" type="tel" name="tel" @blur="touched.tel = true" />
            <p class="error">{{ touched.tel ? errors.tel : '' }}</p>
          </div>
          <!-- メールアドレス -->
          <div class="l-form__wrap">
            <label for="email">メールアドレス ※必須</label>
            <input id="email" v-model="email" type="email" name="email" required @blur="touched.email = true" />
            <p class="error">{{ touched.email ? errors.email : '' }}</p>
          </div>
          <!-- お問い合わせ内容 ※必須 -->
          <div class="l-form__wrap">
            <label for="content">お問い合わせ内容 ※必須</label>
            <textarea id="content" v-model="content" name="content" required rows="8" @blur="touched.content = true"></textarea>
            <p class="error">{{ touched.content ? errors.content : '' }}</p>
          </div>

          <div class="l-form__wrap p-form__privacy">
            <div><router-link to="privacy">プライバシーポリシー</router-link>について</div>
            <div>
              <!-- 同意して入力内容を送信する -->
              <input id="agree" v-model="agree" type="checkbox" name="agree" value="1" required @change="touched.agree = true" />
              <label for="agree" class="center">同意して入力内容を送信する</label>
              <p class="error">{{ touched.agree ? errors.agree : '' }}</p>
            </div>
          </div>

          <button v-if="!valid" :disabled="!valid" type="button" class="c-button--disabled">
            未入力の必須項目があります
          </button>

          <button
            v-else-if="valid"
            type="button"
            class="
            c-button--pink
            p-form__button"
            @click="submit"
          >
            送信
          </button>
        </form>
        <transition name="fade">
          <div v-if="result" class="p-contact-result">{{ result }}</div>
        </transition>
      </div>
    </div>
  </div>
</template>

<script>
import axios from 'axios'

export default {
  data: function () {
    return {
      name: '',
      kana: '',
      tel: '',
      email: '',
      content: '',
      agree: '',
      result: '',
      touched: {
        name: false,
        kana: false,
        tel: false,
        email: false,
        content: false,
        agree: false
      }
    }
  },
  computed: {
    checkName: function () {
      if (!this.name) {
        return 'お名前を入力してください'
      }
      return ''
    },
    checkKana: function () {
      if (!this.kana) {
        return 'フリガナを入力してください'
      } else if (!this.validKatakana(this.kana)) {
        return 'フリガナをカタカナで入力してください'
      }
      return ''
    },
    checkTel: function () {
      if (!this.tel) {
        return '電話番号を入力してください'
      } else if (!this.validTel(this.tel)) {
        return '電話番号をハイフンなしで入力してください'
      }
      return ''
    },
    checkEmail: function () {
      if (!this.email) {
        return 'メールアドレスを入力してください'
      } else if (!this.validEmail(this.email)) {
        return 'メールアドレスを正しく入力してください'
      }
      return ''
    },
    checkAgree: function () {
      if (!this.agree) {
        return 'プライバシーポリシーに同意してください'
      }
      return ''
    },
    checkContent: function () {
      if (!this.content) {
        return 'お問い合わせ内容を入力してください'
      }
      return ''
    },
    errors: function () {
      const errors = {
        name: this.checkName,
        kana: this.checkKana,
        tel: this.checkTel,
        email: this.checkEmail,
        content: this.checkContent,
        agree: this.checkAgree
      }
      for (var key in errors) {
        if (errors[key] === '' || errors[key] === null || errors[key] === undefined) {
          delete errors[key]
        }
      }
      return errors
    },
    valid: function () {
      return !Object.keys(this.errors).length
    }
  },
  methods: {
    submit: async function () {
      const result = await this.send()
      this.result = result
      if (result === '送信しました') {
        this.result = '送信が完了しました'
        this.clear()
      }
    },
    send: async function () {
      const url = 'https://willsapo.laughlines.jp/api/mail.php'
      const params = {
        name: this.name,
        kana: this.kana,
        tel: this.tel,
        email: this.email,
        content: this.content,
        agree: this.agree
      }
      console.log('送信するデータ：', params) // フォームデータをログに出力
      return await axios
        .post(url, params)
        .then(function (res) {
          return res.data
        })
        .catch(function (error) {
          console.log(error)
        })
    },
    validKatakana: function (kana) {
      const re = /^[ァ-ンｧ-ﾝ\x20\u3000ﾞﾟ]*$/
      return re.test(kana)
    },
    validTel: function (tel) {
      const re = /^[0-9]{2,4}[0-9]{2,4}[0-9]{3,4}$/
      return re.test(tel)
    },
    validEmail: function (email) {
      const re =
        /^[a-zA-Z0-9_+-]+(.[a-zA-Z0-9_+-]+)*@([a-zA-Z0-9][a-zA-Z0-9-]*[a-zA-Z0-9]*\.)+[a-zA-Z]{2,}$/
      return re.test(email)
    },
    clear: function () {
      this.name = ''
      this.kana = ''
      this.tel = ''
      this.email = ''
      this.content = ''
      this.touched = {
        name: false,
        kana: false,
        tel: false,
        email: false,
        content: false,
        agree: false
      }
    }
  }
}
</script>

<style scoped lang="scss">
.c-title__lv3 {
  margin-bottom: 2.5rem;
  @media screen and (min-width: 850px) {
    margin-bottom: 5rem;
  }
}

.p-contact-result {
  margin-top: 20px;
  text-align: center;
  font-size: 1rem;
  /* color: red; */
}
</style>
