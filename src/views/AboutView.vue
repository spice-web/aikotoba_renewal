<script setup>
import clock01 from '@/assets/images/parts/clock01.webp'
import clock02 from '@/assets/images/parts/clock02.webp'
import clock03 from '@/assets/images/parts/clock03.webp'
import clock04 from '@/assets/images/parts/clock04.webp'
import clock05 from '@/assets/images/parts/clock05.webp'
import clock06 from '@/assets/images/parts/clock06.webp'
import clock07 from '@/assets/images/parts/clock07.webp'

const clockImages = [clock01, clock02, clock03, clock04, clock05, clock06, clock07]

// 1日の流れを午前・午後で分けて描画する
const dailyFlowSections = [
  {
    label: '午前',
    steps: [
      {
        clockIndex: 0,
        time: '9：30～10：00',
        lines: ['送迎＆来所']
      },
      {
        clockIndex: 1,
        time: '10：00～11：00',
        lines: ['児童発達支援 プログラム']
      },
      {
        clockIndex: 2,
        time: '11：00～12：00',
        lines: ['送迎＆帰宅', '（幼稚園、保育園にも送迎可）']
      }
    ]
  },
  {
    label: '午後',
    steps: [
      {
        clockIndex: 3,
        time: '13：00～16：00',
        lines: ['送迎＆来所']
      },
      {
        clockIndex: 4,
        time: '16：00～17：00',
        lines: ['放課後等デイサービス プログラム']
      },
      {
        clockIndex: 5,
        time: '17：00～17：30',
        lines: ['余暇時間']
      },
      {
        clockIndex: 6,
        time: '17：30～18：00',
        lines: ['送迎＆帰宅']
      }
    ]
  }
]
</script>

<template>
  <div class="c-bg__blue">
    <div id="flow" class="l-inner--lg">
      <div class="l-box--title p-about__box p-day__box">
        <h3 class="c-title__lv3">とある1日の流れ</h3>

        <div class="p-about-flow">
          <div
            v-for="(section, sectionIndex) in dailyFlowSections"
            :key="section.label"
            class="p-about-flow__section"
          >
            <div class="p-about-flow__section-title">{{ section.label }}</div>

            <div
              v-for="(step, stepIndex) in section.steps"
              :key="step.time"
              class="p-about-flow__step"
            >
              <div class="p-about-flow__time-row">
                <img
                  :src="clockImages[step.clockIndex]"
                  class="p-about-flow__clock"
                  alt=""
                  aria-hidden="true"
                />
                <div class="p-about-flow__time">{{ step.time }}</div>
              </div>

              <div class="p-about-flow__label">
                <template v-for="(line, lineIndex) in step.lines" :key="lineIndex">
                  <br v-if="lineIndex > 0" />{{ line }}
                </template>
              </div>

              <div
                v-if="stepIndex < section.steps.length - 1"
                class="p-about-flow__arrow"
                aria-hidden="true"
              >
              </div>
            </div>

            <div
              v-if="sectionIndex < dailyFlowSections.length - 1"
              class="p-about-flow__arrow p-about-flow__arrow--section"
              aria-hidden="true"
            >
            </div>
          </div>
        </div>

        <figure class="p-about__flow-fig">
          <img src="@/assets/images/about/bus.webp" alt="" width="100%" height="auto" />
        </figure>


      </div>
    </div>

<!--
============================================
ご利用料金
============================================
-->
    <div id="price" class="l-inner--lg">
      <div class="l-box--title p-about__box">
        <h3 class="c-title__lv3">ご利用料金</h3>
        <p class="center u-fz--lg">
          放課後等デイサービスの利用料金は、<br />
          厚生労働大臣が定める額に基づいた<br class="br-sp" />金額です。
        </p>
        <h4 class="c-title__box--no-border">負担上限月額</h4>
        <p class="note u-mb--lg center">
          ひと月に複数回ご利用の場合は世帯収入によってお支払いただく上限額が設定されます。<br />下記は、負担上限月額の表です。<br />
          ※市町村によっては助成が出る事もありますので詳しくはお住まいの役所へご確認ください。
        </p>

        <table class="p-about-table">
          <tr>
            <th class="p-about-table__title">世帯の収入状況</th>
            <th class="p-about-table__title">ご負担額</th>
          </tr>
          <tr class="p-about-table__item">
            <td>生活保護受給世帯</td>
            <td rowspan="2" class="u-color__main right">0円/月</td>
          </tr>
          <tr class="p-about-table__item">
            <td>非課税世帯</td>
          </tr>
          <tr class="p-about-table__item">
            <td>税課税世帯（約900万円以下）</td>
            <td class="u-color__main right">4,600円/月</td>
          </tr>
          <tr class="p-about-table__item">
            <td>世帯所得（900万円以上）</td>
            <td class="u-color__main right">37,200円/月</td>
          </tr>
        </table>
        <p class="note center">これから受給者証を申請される方は課税証明書をご準備ください。</p>

        <h4 class="c-title__box--no-border">ご利用料金の目安</h4>
        <p class="note u-mb--lg center">
          放課後等デイサービスの利用料金は、1割を自費でお支払いいただき、<br
            class="br-pc"
          />9割は都道府県・市町村が費用を負担しています。
        </p>
        <img src="@/assets/images/about/graph_sp.webp" width="100%" alt="" class="br-sp" />
        <img src="@/assets/images/about/graph_pc.webp" width="100%" alt="" class="br-pc" />
      </div>
    </div>
  </div>
</template>

<style scoped lang="scss">
$flow-step-column-pc: 284px;
$flow-time-width-pc: 284px;
$flow-clock-size: 1.7rem;
$flow-clock-gap: 0.35rem;
$flow-arrow-size: 1.25rem;
// PC用の実寸
$flow-clock-size-pc: 52px;
$flow-arrow-size-pc: 37px;
// PCで矢印をブルーラベルの中央に合わせる左オフセット
// クロックがラベル左端に半分重なる前提: ラベル左端 = クロック幅/2 + gap
// ラベル中央 = ラベル左端 + ラベル幅/2 → 矢印中央を合わせるため矢印幅/2を引く
$flow-arrow-offset-pc: calc($flow-clock-size-pc / 2 + $flow-clock-gap + $flow-time-width-pc / 2 - $flow-arrow-size-pc / 2 - 16px);
$flow-clock-images: (
  01: '../assets/images/parts/clock01.webp',
  02: '../assets/images/parts/clock02.webp',
  03: '../assets/images/parts/clock03.webp',
  04: '../assets/images/parts/clock04.webp',
  05: '../assets/images/parts/clock05.webp',
  06: '../assets/images/parts/clock06.webp',
  07: '../assets/images/parts/clock07.webp'
);

.p-about-flow {
  display: flex;
  flex-direction: column;
  align-items: center;
  gap: 1.5rem;
  margin-top: 1.5rem;

  &__section {
    width: min(100%, 420px);
    text-align: center;
    display: flex;
    flex-direction: column;
    align-items: center;
  }

  // 午前午後
  &__section-title {
    color: #118bd6;
    font-size: 1.25rem;
    font-weight: 700;
    letter-spacing: 0.05em;
    margin-bottom: 1rem;
  }

  &__step {
    display: flex;
    flex-direction: column;
    align-items: center;
    margin-bottom: 0.625rem;
  }

  &__time-row {
    display: inline-flex;
    align-items: center;
    gap: $flow-clock-gap;
  }

  &__clock {
    width: $flow-clock-size;
    height: $flow-clock-size;
    object-fit: contain;
    flex-shrink: 0;
    margin-right: calc($flow-clock-size / -2);
    position: relative;
    z-index: 1;
  }

  &__time {
    width: 10rem;
    padding: 0 0.9rem;
    line-height: 26px;
    border-radius: 999px;
    background: #118bd6;
    color: #fff;
    font-size: 0.875rem;
    font-weight: 700;
    letter-spacing: 0.08em;
    text-align: center;
    // 数字を等幅にして桁数の違いによるズレを防ぐ
    font-variant-numeric: tabular-nums;  
  }

  &__label {
    margin-top: 0.5rem;
    color: #4c4948;
    font-size: 1.125rem;
    line-height: 1.6;
    text-align: center;
  }

  &__arrow {
    // 上 = ラベル下の余白 / 下 = 矢印と次のクロックの余白
    margin: 1rem 0 0.45rem;
    width: 20px;
    height: 14px;
    background-image: url('../assets/images/icon/arrow_bl.svg');
    background-position: center;
    background-repeat: no-repeat;
    background-size: contain;
    transform: rotate(90deg);
    transform-origin: center;
  }

  &__arrow--section {
    margin: 0.8rem 0 0;
  }

  @media screen and (min-width: 850px) {
    &__section {
      width: 100%;
      align-items: flex-start;
    }

    &__section-title {
      font-size: 2rem;
      width: $flow-step-column-pc;
      align-self: unset;
      text-align: center;
      padding-left: 2rem;
    }

    &__step {
      display: grid;
      grid-template-columns: $flow-step-column-pc 1fr;
      grid-template-rows: auto auto;
      column-gap: 0.75rem;
      width: 100%;
      // 2行の説明文があってもブルーラベルと上端を揃える
      align-items: start;
    }

    &__time-row {
      grid-column: 1;
      grid-row: 1;
    }

    &__time {
      width: $flow-time-width-pc;
      font-size: 1.5rem;
      white-space: nowrap;
      line-height: 50px;
    }

    &__label {
      font-size: 2rem;
      margin-top: 0;
      grid-column: 2;
      grid-row: 1;
      text-align: left;
    }

    &__arrow {
      width: 37px;
      height: 27px;
      grid-column: 1;
      grid-row: 2;
      justify-self: start;
      margin-left: $flow-arrow-offset-pc;   // ← 左右位置（中央合わせ）
      margin-top: 2rem;                      // ← 上の余白：増やすと矢印が下がる
      margin-bottom: 1.5rem;                   // ← 下の余白：増やすと次のクロックとの間隔が広がる
    }

    &__arrow--section {
      grid-column: unset;
      grid-row: unset;
      margin-left: $flow-arrow-offset-pc;
      margin-right: 0;
    }

    &__clock {
      width: $flow-clock-size-pc;
      height: $flow-clock-size-pc;
      // PCではクロック幅の半分だけラベルに重ねる（重なり量を実寸に合わせる）
      margin-right: calc($flow-clock-size-pc / -2);
    }
  }
    // PCでは「時間ラベル + 説明文」を横並びにする
}

.p-about__box {
  position: relative;
}

.p-about__flow-fig {
  width: 210px;
  margin-top: 2rem;
  margin-left: auto;
  margin-right: auto;

  @media screen and (min-width: 1180px) {
    position: absolute;
    width: 380px;
    bottom: 50px;
    right: 106px;
  }
}

.p-day__box {
  @media screen and (min-width: 1180px) {
    padding-bottom: 300px;
  }
}
.c-title__lv3 {
  margin-bottom: 5rem;
}
</style>