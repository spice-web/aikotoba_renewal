import { createRouter, createWebHistory } from 'vue-router'
import HomeView from '../views/HomeView.vue'
import AboutView from '../views/AboutView.vue'
import ContactView from '../views/ContactView.vue'
import PrivacyView from '../views/PrivacyView.vue'
import NotFound from '../views/NotFound.vue'

const router = createRouter({
  history: createWebHistory(),
  routes: [
    {
      path: '/',
      component: HomeView,
      name: 'Home',
      meta: {
        title: '',
        desc: '「ウィルサポ」は、未就学児童から高校生まで発達状況に合わせて一貫した療育を継続的に受けて頂ける事業所です。あらゆる背景をもった子どもたちが、身体的・精神的に自分らしく暮らせる社会をめざして、さまざまなプログラムをご用意しております。'
      }
    },
    {
      path: '/about',
      component: AboutView,
      name: 'About',
      meta: {
        title: '放課後等デイサービス・児童発達支援ウィルサポについて',
        desc: 'ウィルサポでの1日の流れや放課後等デイサービスの利用料金などについてご紹介します。'
      }
    },
    {
      path: '/contact',
      component: ContactView,
      name: 'Contact',
      meta: {
        title: 'お問い合わせ',
        desc: 'ウィルサポへのお問い合わせはこちらから。お電話、メール、お問い合わせフォームでのお問い合わせを受け付けています。'
      }
    },
    {
      path: '/privacy',
      component: PrivacyView,
      name: 'Privacy',
      meta: {
        title: 'プライバシーポリシー',
        desc: 'ウィルサポのプライバシーポリシーについてご案内します。個人情報の取り扱いについてご確認ください。'
      }
    },
    {
      // not found
      path: '/:catchAkk([^/]*)*',
      component: NotFound,
      name: 'NotFound',
      meta: {
        title: 'ページが見つかりません',
        desc: 'お探しのページが見つかりませんでした。'
      }
    }
  ],
  scrollBehavior(to) {
    if (to.hash) {
      return { el: to.hash, behavior: 'smooth' }
    } else {
      return { top: 0 }
    }
  }
})
export default router
