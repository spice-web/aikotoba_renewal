<script setup></script>

<template>
  <div class="c-bg__blue">
    <div id="flow" class="l-inner--lg">
      <div class="l-box--title p-about__box">
        <h3 class="c-title__lv3">1日の流れ</h3>

        <!-- 1 -->
        <div class="p-about-schedule__wrap">
          <div class="p-about-schedule__item-heading">
            <span>1</span>
            <div class="p-about-schedule__title">お迎え</div>
          </div>
          <div class="p-about-schedule__item">
            スタッフがご自宅・学校まで<br />お迎えに上がります。
          </div>
          <figure class="p-about-schedule__item-fig">
            <img src="@/assets/images/about/image011.jpg" alt="" width="100%" height="auto" />
          </figure>
        </div>

        <!-- 2 -->
        <div class="p-about-schedule__wrap">
          <div class="p-about-schedule__item-heading">
            <span>2</span>
            <div class="p-about-schedule__title">余暇活動</div>
          </div>
          <div class="p-about-schedule__item">
            子ども自身が自己選択できるように多くの選択肢を用意し、リラックスできる環境を整えプログラムに参加しやすいように雰囲気作りを行います。
          </div>
          <figure class="p-about-schedule__item-fig">
            <img src="@/assets/images/about/image012.jpg" alt="" width="100%" height="auto" />
          </figure>
        </div>

        <!-- 3 -->
        <div class="p-about-schedule__wrap">
          <div class="p-about-schedule__item-heading">
            <span>3</span>
            <div class="p-about-schedule__title">プログラム</div>
          </div>
          <div class="p-about-schedule__item">個別支援計画をもとに、療育を行っております。</div>
          <figure class="p-about-schedule__item-fig">
            <img src="@/assets/images/about/image013.jpg" alt="" width="100%" height="auto" />
          </figure>
        </div>

        <!-- 4 -->
        <div class="p-about-schedule__wrap">
          <div class="p-about-schedule__item-heading">
            <span>4</span>
            <div class="p-about-schedule__title">自宅へお送り</div>
          </div>
          <div class="p-about-schedule__item --last">
            到着時に、スタッフがご家族様へお子様のご様子を報告いたします。
          </div>
          <figure class="p-about-schedule__item-fig --last">
            <img src="@/assets/images/about/image014.jpg" alt="" width="100%" height="auto" />
          </figure>
        </div>
      </div>
    </div>

    <div id="price" class="l-inner--lg">
      <div class="l-box--title p-about__box">
        <h3 class="c-title__lv3">ご利用料金</h3>
        <p class="bold center u-fz--lg">
          放課後等デイサービスの利用料金は、<br />
          厚生労働大臣が定める額に基づいた<br class="br-sp" />金額です。
        </p>
        <h4 class="c-title__box--no-border">負担上限月額</h4>
        <p class="u-fz l-box__text u-mb--lg">
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
        <p class="l-box__text u-fz u-mb--lg">
          放課後等デイサービスの利用料金は、1割を自費でお支払いいただき、<br
            class="br-pc"
          />9割は都道府県・市町村が費用を負担しています。
        </p>
        <img src="@/assets/images/about/graph_sp.png" width="100%" alt="" class="br-sp" />
        <img src="@/assets/images/about/graph_pc.png" width="100%" alt="" class="br-pc" />
      </div>
    </div>
  </div>
</template>
