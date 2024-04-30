// ;<script
//   src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB52U-Pc96wo0fF7mATON0UAiYRjte_K5c&callback=initMap"
//   async
//   defer
// ></script>

// var map
// function initMap() {
//   var target = document.querySelector('.c-map')
//   var empire = { lat: 34.407343, lng: 132.447197 }
//   //Empire State Bldg の緯度（latitude）と経度（longitude）
//   map = new google.maps.Map(target, {
//     center: empire,
//     zoom: 16
//   })

//   var marker = new google.maps.Marker({
//     position: empire,
//     map: map,
//     animation: google.maps.Animation.DROP,
//     icon: 'https://maps.google.com/mapfiles/ms/micons/red-dot.png'
//   })
// }

data: () => ({
  latitude: 34.407343,
  longitude: 132.447197
}),
methods: {
  showMap() {
    const target = document.querySelector('.c-map')
    const empire = { lat: this.latitude, lng: this.longitude }
    this.map = new google.maps.Map(target, {
      center: empire,
      zoom: 16
    })
    const marker = new google.maps.Marker({
      position: empire,
      map: this.map,
      animation: google.maps.Animation.DROP,
      icon: 'https://maps.google.com/mapfiles/ms/micons/red-dot.png'
    })
  }
}
