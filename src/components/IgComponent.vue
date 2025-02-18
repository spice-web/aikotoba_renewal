<template>
  <!-- インスタグラム -->
  <div class="c-bg__blue">
    <div class="l-inner--lg">
      <div class="c-title__ig">Instagram</div>
      <!-- インスタグラム投稿一覧 -->
      <div class="embedsocial-hashtag" data-ref="ed8aeccabb32e5d0de279ee50ade36ebd628c9b3">
        <a
          class="feed-powered-by-es feed-powered-by-es-feed-img es-widget-branding"
          href="https://embedsocial.jp/"
          target="_blank"
          title="EmbedSocialで作成しました"
        >
          <img src="https://embedsocial.com/cdn/icon/embedsocial-logo.webp" alt="EmbedSocial" />
          <div class="es-widget-branding-text">EmbedSocialで作成しました</div>
        </a>
      </div>
    </div>
  </div>
</template>

<script>
;(function (d, s, id) {
  var js
  if (d.getElementById(id)) {
    return
  }
  js = d.createElement(s)
  js.id = id
  js.src = 'https://embedsocial.com/cdn/ht.js'
  d.getElementsByTagName('head')[0].appendChild(js)
})(document, 'script', 'EmbedSocialHashtagScript')
</script>

<style scoped lang="scss">
.l-inner--lg {
  padding-bottom: 5rem;
}
.c-title__ig {
  margin-bottom: 2rem;
  @media (min-width: 850px) {
    margin-bottom: 3.5rem;
  }
}

// 現在はウィジェット使用のため非表示
.box {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(110px, 1fr));
  gap: 0.5rem;
  img {
    width: 100%;
    aspect-ratio: 1;
    object-fit: cover;
  }
  @media (min-width: 850px) {
    grid-template-columns: repeat(auto-fit, minmax(230px, 1fr));
    gap: 2rem;
  }
}
</style>
