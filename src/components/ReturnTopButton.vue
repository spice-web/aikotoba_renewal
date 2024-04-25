<template>
  <button class="c-button__goToTop" @click="returnTop">
    <figure>
      <img src="../assets/images/icon/arrow.svg" width="100%" height="auto" alt="" />
    </figure>
  </button>
</template>

<script>
export default {
  methods: {
    returnTop() {
      window.scrollTo({
        top: 0,
        behavior: 'smooth'
      })
    }
  }
}
</script>
