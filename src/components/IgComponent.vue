<template>
  <!-- インスタグラム -->
  <div class="c-bg__blue">
    <div class="l-inner--lg">
      <div class="c-title__ig">Instagram</div>
      <!-- インスタグラム投稿一覧 -->
      <ul class="box">
        <li v-for="post in posts" :key="post.id">
          <a :href="post.permalink" target="_blank">
            <!-- 動画の場合 -->
            <img
              v-if="post.media_type === 'VIDEO'"
              controls
              :src="post.thumbnail_url"
              :alt="post.caption"
              style="max-width: 100%"
            />
            <!-- 画像の場合 -->
            <img v-else :src="post.media_url" :alt="post.caption" style="max-width: 100%" />
            <!-- Instagramへのリンク -->
          </a>
        </li>
      </ul>
    </div>
  </div>
</template>

<script>
import axios from 'axios'

export default {
  data() {
    return {
      posts: []
    }
  },
  mounted() {
    this.fetchPosts()
  },
  methods: {
    async fetchPosts() {
      try {
        const response = await axios.get('/api/instagram_api.json')
        this.posts = response.data.data
      } catch (error) {
        console.error('Error fetching posts: ', error)
      }
    }
  }
}
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
.box {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(110px, 1fr));
  gap: 0.75rem;
  img {
    width: 100%;
    aspect-ratio: 1;
    object-fit: cover;
  }
  @media (min-width: 850px) {
    gap: 2rem;
  }
}
</style>
