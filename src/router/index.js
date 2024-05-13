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
        desc: 'あいことば療育ラボ横川は広島県広島市にあるケア児・発達障害児童にも対応したインクルーシブ療育を提供する放課後等デイサービスです。株式会社 ラフラインズが運営しています。'
      }
    },
    {
      path: '/about',
      component: AboutView,
      name: 'About',
      meta: {
        title: 'あいことば療育ラボ横川について',
        desc: 'あいことば療育ラボ横川での1日の流れや放課後等デイサービスの利用料金などについてご紹介します。'
      }
    },
    {
      path: '/contact',
      component: ContactView,
      name: 'Contact',
      meta: {
        title: 'お問い合わせ',
        desc: 'あいことば療育ラボ横川へのお問い合わせはこちらから。お電話、メール、お問い合わせフォームでのお問い合わせを受け付けています。'
      }
    },
    {
      path: '/privacy',
      component: PrivacyView,
      name: 'Privacy',
      meta: {
        title: 'プライバシーポリシー',
        desc: 'あいことば療育ラボ横川のプライバシーポリシーについてご案内します。個人情報の取り扱いについてご確認ください。'
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
