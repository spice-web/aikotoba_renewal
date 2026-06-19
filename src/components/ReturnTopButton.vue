<template>
  <button
    class="c-button__goToTop"
    :class="{ 'is-visible': isVisible, 'is-docked': isDocked }"
    @click="returnTop"
  >
    <figure>
      <img src="../assets/images/icon/arrow.svg" width="100%" height="auto" alt="" />
    </figure>
  </button>
</template>

<script>
export default {
  data() {
    return {
      isVisible: false, // スクロールで出現
      isDocked: false, // フッターで停止
      footerEl: null,
      floatGap: 0, // フローティング時のbottom実寸（px）
      btnHeight: 0
    }
  },
  mounted() {
    this.footerEl = this.$el.closest('.l-footer')
    window.addEventListener('scroll', this.onScroll, { passive: true })
    window.addEventListener('resize', this.onResize, { passive: true })
    this.onResize()
  },
  beforeUnmount() {
    window.removeEventListener('scroll', this.onScroll)
    window.removeEventListener('resize', this.onResize)
  },
  methods: {
    measure() {
      // docked時はbottomがautoになるため、フローティング中だけ実寸を記憶
      const btn = this.$el
      this.btnHeight = btn.offsetHeight
      if (!this.isDocked) {
        const b = parseFloat(getComputedStyle(btn).bottom)
        if (!Number.isNaN(b)) this.floatGap = b
      }
    },
    onResize() {
      this.measure()
      this.onScroll()
    },
    onScroll() {
      // 少しスクロールしたら表示
      this.isVisible = window.scrollY > 300

      const footer = this.footerEl
      if (!footer) return

      const rect = footer.getBoundingClientRect()
      const isPc = window.matchMedia('(min-width: 850px)').matches

      if (isPc) {
        // PC: フッター下端が画面内に入ったら、フッター下端基準（元の位置）で固定
        this.isDocked = rect.bottom <= window.innerHeight
      } else {
        // SP: フローティング位置（画面下部）までフッター上部が上がってきたら、
        //     フッター上部基準（元の位置 top:20px）で固定
        const floatTop = window.innerHeight - this.floatGap - this.btnHeight
        this.isDocked = rect.top + 20 <= floatTop
      }
    },
    returnTop() {
      window.scrollTo({
        top: 0,
        behavior: 'smooth'
      })
    }
  }
}
</script>
