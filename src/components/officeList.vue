<template>
  <div class="l-inner--lg">
    <div class="office-wrap">
      <div
        v-for="(office, index) in offices"
        :key="office.name"
        class="office-item__wrap"
      >
        <div class="office-item">
          <div class="office-title">
            <span class="office-category">
              <template v-if="office.categoryPcLines">
                <span class="br-sp">{{ office.category }}</span>
                <span class="br-pc">
                  <template v-for="(line, lineIndex) in office.categoryPcLines" :key="lineIndex">
                    <br v-if="lineIndex > 0" />{{ line }}
                  </template>
                </span>
              </template>
              <template v-else>
                {{ office.category }}
              </template>
            </span>
            <template v-if="office.namePcLines">
              <p class="office-name br-sp">{{ office.name }}</p>
              <p class="office-name br-pc">
                <template v-for="(line, lineIndex) in office.namePcLines" :key="lineIndex">
                  <br v-if="lineIndex > 0" />{{ line }}
                </template>
              </p>
            </template>
            <template v-else>
              <p class="office-name">{{ office.name }}</p>
            </template>
          </div>
          <div class="office-table" role="table" :aria-label="`${office.name} 事業所情報`">
            <template v-for="item in office.items" :key="item.label">
              <div class="office-head" role="rowheader">{{ item.label }}</div>
              <div class="office-data" role="cell">{{ item.value }}</div>
            </template>
          </div>

          <a
            v-if="office.linkUrl"
            :href="office.linkUrl"
            class="office-link office-link--sp"
            target="_blank"
            rel="noopener noreferrer"
            :aria-label="`${office.name} のリンクを開く`"
          >
            <img :src="instaIcon" alt="" />
          </a>

          <a
            v-if="office.linkUrl && office.qrImage"
            :href="office.linkUrl"
            class="office-link office-link--pc"
            target="_blank"
            rel="noopener noreferrer"
            :aria-label="`${office.name} のリンクを開く`"
          >
            <img :src="office.qrImage" alt="" />
          </a>
        </div>
        <div :ref="(el) => setMapRef(el, index)" class="c-map"></div>
      </div>
    </div>
  </div>
</template>

<script>
import instaIcon from '../assets/images/icon/instaicon.webp'
import qrSsts from '../assets/images/qr/qr_ssts.webp'
import qrHatsukaichi from '../assets/images/qr/qr_hatsukaichi.webp'
import qrItsukaichi from '../assets/images/qr/qr_itsukaichi.webp'
import qrYokogawa from '../assets/images/qr/qr_yokogawa.webp'

export default {
  data() {
    return {
      instaIcon,
      mapElements: [],
      maps: [],
      offices: [
        {
          category: '児童発達支援',
          name: 'ウィルサポキッズ 廿日市SSTs',
          namePcLines: ['ウィルサポキッズ', '廿日市SSTs'],
          linkUrl: 'https://www.instagram.com/willsapo.kh/',
          qrImage: qrSsts,
          mapCenter: { lat: 34.352013, lng: 132.337524 },
          items: [
            { label: 'サービス種別', value: '児童発達支援、放課後等デイサービス' },
            { label: '事業所番号', value: '3452700226' },
            { label: '営業時間', value: '平日10：00～19：00\n休日9：00～18：00' },
            { label: '所在地', value: '広島県廿日市市住吉1-5-26\nローレルコート1階' },
            { label: 'TEL', value: '0829-30-8723' },
            { label: '利用定員', value: '10名' }
          ]
        },
        {
          category: '放課後等デイサービス',
          name: 'ウィルサポキャンパス 廿日市',
          namePcLines: ['ウィルサポキャンパス', '廿日市'],
          linkUrl: 'https://www.instagram.com/willsapo.ch/',
          qrImage: qrHatsukaichi,
          mapCenter: { lat: 34.352013, lng: 132.337524 },
          items: [
            { label: 'サービス種別', value: '放課後等デイサービス' },
            { label: '事業所番号', value: '3452700234' },
            { label: '営業時間', value: '平日10：00～19：00\n休日9：00～18：00' },
            { label: '所在地', value: '広島県廿日市市住吉1-5-26\nローレルコート2階' },
            { label: 'TEL', value: '0829-30-8724' },
            { label: '利用定員', value: '10名' }
          ]
        },
        {
          category: '勇志国際高等学校（通信制高校）提携サポート校',
          categoryPcLines: ['勇志国際高等学校（通信制高校）', '提携サポート校'],
          name: 'ウィルサポ学園',
          namePcLines: ['ウィルサポ学園'],
          mapCenter: { lat: 34.352013, lng: 132.337524 },
          items: [
            { label: '営業時間', value: '平日10：00～12：00' },
            { label: '所在地', value: '広島県廿日市市住吉1-5-26\nローレルコート2階' },
            { label: 'TEL', value: '0829-30-8724' },
            { label: '利用定員', value: '10名程度' }
          ]
        },
        {
          category: '放課後等デイサービス・児童発達支援',
          name: 'ウィルサポ 五日市',
          namePcLines: ['ウィルサポ', '五日市'],
          linkUrl: 'https://www.instagram.com/willsapo.ki/',
          qrImage: qrItsukaichi,
          mapCenter: { lat: 34.370251, lng: 132.367508 },
          items: [
            { label: 'サービス種別', value: '放課後等デイサービス・児童発達支援' },
            { label: '事業所番号', value: '3450223015' },
            { label: '営業時間', value: '平日10：00～19：00\n休日9：00～18：00' },
            { label: '所在地', value: '広島県広島市佐伯区五日市駅前3-3-11' },
            { label: 'TEL', value: '082-236-7022' },
            { label: '利用定員', value: '10名' }
          ]
        },
        {
          category: '重心型放課後等デイサービス',
          name: 'ウィルサポプラス 横川',
          namePcLines: ['ウィルサポプラス', '横川'],
          linkUrl: 'https://www.instagram.com/willsapo.plus/',
          qrImage: qrYokogawa,
          mapCenter: { lat: 34.407207, lng: 132.447159 },
          items: [
            { label: 'サービス種別', value: '重心型放課後等デイサービス' },
            { label: '事業所番号', value: '3450223338' },
            { label: '営業時間', value: '平日10：00～19：00\n休日9：00～18：00' },
            { label: '所在地', value: '広島県広島市西区横川新町12-13' },
            { label: 'TEL', value: '082-236-6375' },
            { label: '利用定員', value: '5名' }
          ]
        }
      ]
    }
  },
  mounted() {
    let timer = setInterval(() => {
      if (window.google && this.mapElements.length === this.offices.length) {
        clearInterval(timer)
        this.initAllMaps()
      }
    }, 500)
  },
  methods: {
    setMapRef(el, index) {
      if (el) {
        this.mapElements[index] = el
      }
    },
    getAddress(office) {
      const addressItem = office.items.find((item) => item.label === '所在地')
      return addressItem ? addressItem.value : ''
    },
    initOfficeMap(office, index) {
      const googleMaps = window.google.maps
      const mapEl = this.mapElements[index]
      if (!mapEl) {
        return
      }

      const fallbackCenter = office.mapCenter || { lat: 34.352013, lng: 132.337524 }
      const map = new googleMaps.Map(mapEl, {
        center: fallbackCenter,
        zoom: 16
      })
      this.maps[index] = map

      if (office.mapCenter) {
        new googleMaps.Marker({
          position: office.mapCenter,
          map
        })
        return
      }

      const address = this.getAddress(office)
      if (!address) {
        return
      }

      const geocoder = new googleMaps.Geocoder()
      geocoder.geocode({ address }, (results, status) => {
        if (status === 'OK' && results && results[0]) {
          map.setCenter(results[0].geometry.location)
          new googleMaps.Marker({
            position: results[0].geometry.location,
            map
          })
        }
      })
    },
    initAllMaps() {
      this.offices.forEach((office, index) => {
        this.initOfficeMap(office, index)
      })
    }
  }
}
</script>

<style scoped lang="scss">
.l-inner--lg {
  padding-top: 0;
  padding-bottom: 0;
  margin-bottom: 132px;

   @media screen and (min-width: 850px) {
    margin-bottom: 228px;
   }
}

.office-wrap {
  display: flex;
  flex-direction: column;
  gap: 20px;

  @media screen and (min-width: 850px) {
    flex-direction: row;
    flex-wrap: wrap;
    justify-content: center;
    column-gap: 2rem;
    row-gap: 1.5rem;
  }
  @media screen and (min-width: 1280px) {
    column-gap: 1rem;
  }
}

.office-item {
  position: relative;

  &__wrap {
    border-radius: 12px;
    background-color: #EAF5FC;

    @media screen and (min-width: 850px) {
      width: calc(50% - 1rem);
      display: flex;
      flex-direction: column;
    }

    @media screen and (min-width: 1280px) {
      width: calc(33.3333% - 0.666rem);
    }
  }

}

.office-link {
  position: absolute;
  right: 0.5rem;
  bottom: 1.25rem;
  display: inline-flex;

  img {
    display: block;
  }

  &--sp {
    width: 62px;
    height: 62px;
  }

  &--pc {
    display: none;
  }

  @media screen and (min-width: 850px) {
    &--sp {
      display: none;
    }

    &--pc {
      display: inline-flex;
      width: 84px;
      height: 84px;
    }
  }
}

.office-table {
  display: grid;
  grid-template-columns: auto 1fr;
  margin-bottom: 40px;
  letter-spacing: 0;
  column-gap: 1rem;
  line-height: 1.5;
  font-size: 12px;

  @media screen and (min-width: 850px) {
    font-size: 14px;
    letter-spacing: 0.42px;
    line-height: 1.75;
  }
}

.office-head,
.office-data {
  white-space: pre-wrap;
}

.office-item {
  padding: 2rem 1.25rem;

  @media screen and (min-width: 850px) {
    flex: 1 1 auto;
  }
}

.office-title {
  text-align: center;
  color: #008BCD;
  font-size: 20px;
  font-weight: bold;
  line-height: 1.5;
  padding-bottom: 0.75rem;
  margin-bottom: 0.75rem;
  border-bottom: dotted 1px #008BCD;
  span {
    text-align: center;
    display: block;
    font-size: 0.875rem;
    font-weight: bold;
    letter-spacing: 0;
  }

  .br-pc {
    display: none;
  }

  .br-sp {
    display: block;
  }

  .office-name {
    margin: 0;
  }

  @media screen and (min-width: 850px) {
    min-height: 8.5rem;
    display: flex;
    flex-direction: column;
    justify-content: center;
    font-size: 2rem;

    .br-sp {
      display: none;
    }

    .br-pc {
      display: block;
    }

    span {
      font-size: 1.125rem;
    }
  }
}

.c-map {
  width: 100%;
  height: 260px;
  border-radius: 0 0 12px 12px;

  .gm-err-container {
    border-radius: 0 0 12px 12px;
  }
}

</style>
