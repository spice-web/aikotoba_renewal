<template>
  <div ref="map" class="c-map"></div>
</template>

<script>
export default {
  data() {
    return {
      map: ''
    }
  },
  mounted() {
    let timer = setInterval(() => {
      if (window.google) {
        clearInterval(timer)
        this.map = new window.google.maps.Map(this.$refs.map, {
          center: { lat: 34.407343, lng: 132.447197 },
          zoom: 16
        })
      }
    }, 500)
  }
}
</script>
