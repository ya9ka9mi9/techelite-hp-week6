<?php get_header(); ?>

<main>

<!-- ① ヒーロー -->
<section class="hero" aria-label="メインビジュアル">
  <img class="hero__bg" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/hero.jpg" alt="" width="1440" height="900" fetchpriority="high">
  <div class="hero__body">
    <h1 class="hero__catch">大自然と調和する、<br class="u-sp">極上の癒し。</h1>
    <p class="hero__lead">大分の自然環境と共に、<br>身も心も癒やされる<br class="u-sp">至福のひとときを提供します。</p>
  </div>
  <p class="hero__scroll" aria-hidden="true">SCROOLL</p>
</section>

<!-- ② 導入 -->
<section class="intro" aria-label="ごあいさつ">
  <div class="intro__inner">
    <div class="intro__body">
      <img class="intro__logo" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/logo-gold.png" alt="楽園雅苑 RAKUENGAEN" width="260" height="102" loading="lazy">
      <p class="intro__text">自然美に囲まれた楽園で、<br>贅沢な癒しのひとときを<br>お過ごしください。</p>
    </div>
    <img class="intro__img-main" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/intro-main.jpg" alt="紅葉を望む座敷" width="610" height="460" loading="lazy">
    <img class="intro__img-sub" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/intro-sub.jpg" alt="季節の料理" width="250" height="250" loading="lazy">
  </div>
</section>

<!-- ③ お部屋 -->
<section class="rooms" id="rooms">
  <div class="container">
    <img class="rooms__pattern" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/pattern-seigaiha.png" alt="" width="241" height="128" loading="lazy">
    <h2 class="section-head">
  <span class="section-head__ja">お部屋</span>
  <span class="section-head__en" lang="en">room</span>
</h2>
    <p class="section-lead">「楽園雅苑」の豪華なお部屋は、大分県自然の美しさと格式の高いサービスが調和した完璧な空間を提供します。桜花の調べが響くプレミアスィート、静寂の庭園に囲まれたデラックスルーム、そして自然のぬくもりを感じるスタンダードルーム。どの部屋も極上の癒しとくつろぎがお待ちしております。贅沢な温泉体験と非日常のくつろぎをお楽しみください。</p>

    <!-- タブ：押すと下のお部屋が切り替わる（js/main.js） -->
    <div class="room-tabs" role="tablist" aria-label="お部屋の種類">
              <button class="room-tabs__tab" type="button" role="tab" id="tab-standard"
                aria-controls="panel-standard" aria-selected="true">
          スタンダードルーム<br>- 自然のぬくもり -        </button>
              <button class="room-tabs__tab" type="button" role="tab" id="tab-deluxe"
                aria-controls="panel-deluxe" aria-selected="false">
          デラックスルーム<br>- 静寂の庭園 -        </button>
              <button class="room-tabs__tab" type="button" role="tab" id="tab-premium"
                aria-controls="panel-premium" aria-selected="false">
          プレミアスィート<br>- 桜花の調べ -        </button>
          </div>

          <div class="room-panel" role="tabpanel" id="panel-standard" aria-labelledby="tab-standard" >
        <img class="room-panel__img" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/room-standard.jpg" alt="大きな窓から庭を望む和室" width="1200" height="650" loading="lazy">
        <div class="room-panel__body">
          <h3 class="room-panel__title">自然のぬくもり</h3>
          <p class="room-panel__text">「自然のぬくもり」スタンダードルームは、自然との共感を感じるお部屋です。山の景色を楽しむことができ、ナチュラルリトリートプランには朝食が含まれています。心地よいぬくもりとくつろぎのひとときを提供します。</p>
        </div>
      </div>
          <div class="room-panel" role="tabpanel" id="panel-deluxe" aria-labelledby="tab-deluxe" hidden>
        <img class="room-panel__img" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/room-deluxe.jpg" alt="こたつのある広い和室" width="1200" height="650" loading="lazy">
        <div class="room-panel__body">
          <h3 class="room-panel__title">静寂の庭園</h3>
          <p class="room-panel__text">「静寂の庭園」デラックスルームは、静寂と美しさに包まれた部屋です。個別の温泉ビューバルコニーからは、美しい庭園と温泉の景色が広がります。ロマンティックゲットアウェイプランで、特別なひとときを過ごしましょう。</p>
        </div>
      </div>
          <div class="room-panel" role="tabpanel" id="panel-premium" aria-labelledby="tab-premium" hidden>
        <img class="room-panel__img" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/room-premium.jpg" alt="木のぬくもりを感じるラウンジ" width="1200" height="650" loading="lazy">
        <div class="room-panel__body">
          <h3 class="room-panel__title">桜花の調べ</h3>
          <p class="room-panel__text">「桜花の調べ」プレミアスィートは、最高級のラグジュアリーを追求した特別なお部屋です。広々とした空間に、温泉露天風呂が設けられ、そこからは四季折々の美しい景色を楽しむことができます。</p>
        </div>
      </div>
      </div>
</section>

<!-- ④ プラン -->
<section class="plan" id="plan">
  <div class="container">
    <img class="plan__pattern" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/pattern-ichimatsu.png" alt="" width="235" height="78" loading="lazy">
    <h2 class="section-head">
  <span class="section-head__ja">プラン</span>
  <span class="section-head__en" lang="en">plan</span>
</h2>
    <ul class="plan__list">
              <li class="plan-card">
          <h3 class="plan-card__title">スタンダードルーム<br>- 自然のぬくもり -</h3>
          <ul class="plan-card__info">
            <li>一泊の値段 : 30,000円/1部屋</li>
            <li>チェックイン時間 : 16:00</li>
            <li>チェックアウト時間 : 10:00</li>
          </ul>
          <a href="/contact.php?plan=standard" class="btn btn--pill plan-card__btn">予約<span class="visually-hidden">（スタンダードルーム）</span></a>
        </li>
              <li class="plan-card">
          <h3 class="plan-card__title">デラックスルーム<br>- 静寂の庭園 -</h3>
          <ul class="plan-card__info">
            <li>一泊の値段 : 50,000円/1部屋</li>
            <li>チェックイン時間 : 14:00</li>
            <li>チェックアウト時間 : 12:00</li>
          </ul>
          <a href="/contact.php?plan=deluxe" class="btn btn--pill plan-card__btn">予約<span class="visually-hidden">（デラックスルーム）</span></a>
        </li>
              <li class="plan-card">
          <h3 class="plan-card__title">プレミアスィート<br>- 桜花の調べ -</h3>
          <ul class="plan-card__info">
            <li>一泊の値段 : 100,000円</li>
            <li>チェックイン時間 : 15:00</li>
            <li>チェックアウト時間 : 11:00</li>
          </ul>
          <a href="/contact.php?plan=premium" class="btn btn--pill plan-card__btn">予約<span class="visually-hidden">（プレミアスィート）</span></a>
        </li>
          </ul>
  </div>
</section>

<!-- ⑤ 四季 -->
<section class="seasons" id="season">
  <div class="container">
    <h2 class="section-head">
  <span class="section-head__ja">四季</span>
  <span class="section-head__en" lang="en">seasons</span>
</h2>
    <p class="section-lead">「楽園雅苑」は、大分県自然の美しさが四季折々に変化する場所です。春には桜花が舞い、夏には新緑が輝き、秋には紅葉が魅了し、冬には雪景色が広がります。四季折々の風景や風味を楽しむためのアクティビティや特別なイベントが用意されています。どの季節に訪れても、自然の美しさに囲まれた楽園で贅沢なひとときを過ごしませんか？</p>
  </div>
  <div class="seasons__gallery">
    <img class="seasons__img-main" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/season-main.jpg" alt="紅葉に彩られた湖" width="1020" height="536" loading="lazy">
    <img class="seasons__cloud seasons__cloud--1" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/cloud-1.png" alt="" width="211" height="93" loading="lazy">
    <img class="seasons__img-fall" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/season-waterfall.jpg" alt="新緑に囲まれた滝" width="230" height="300" loading="lazy">
    <img class="seasons__img-sub" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/season-sub.jpg" alt="雪景色の露天風呂" width="586" height="338" loading="lazy">
    <img class="seasons__cloud seasons__cloud--2" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/cloud-2.png" alt="" width="155" height="55" loading="lazy">
  </div>
  <!-- 四季の写真スライダー：左右の矢印で1枚ずつ動く（最後まで行くと最初に戻る） -->
    <div class="season-slider" role="region" aria-roledescription="カルーセル" aria-label="四季の写真">
    <div class="season-slider__viewport">
      <ul class="season-slider__track">
                    <li class="season-slider__item" aria-hidden="true">
              <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/season-strip-1.jpg" alt="" width="340" height="244" loading="lazy">
            </li>
                      <li class="season-slider__item" aria-hidden="true">
              <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/season-strip-2.jpg" alt="" width="340" height="244" loading="lazy">
            </li>
                      <li class="season-slider__item" aria-hidden="true">
              <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/season-strip-3.jpg" alt="" width="340" height="244" loading="lazy">
            </li>
                      <li class="season-slider__item" aria-hidden="true">
              <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/season-strip-4.jpg" alt="" width="340" height="244" loading="lazy">
            </li>
                      <li class="season-slider__item" aria-hidden="true">
              <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/season-strip-5.jpg" alt="" width="340" height="244" loading="lazy">
            </li>
                      <li class="season-slider__item">
              <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/season-strip-1.jpg" alt="桜の咲く渓谷" width="340" height="244" loading="lazy">
            </li>
                      <li class="season-slider__item">
              <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/season-strip-2.jpg" alt="崖沿いの山道と新緑" width="340" height="244" loading="lazy">
            </li>
                      <li class="season-slider__item">
              <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/season-strip-3.jpg" alt="霧氷に覆われた山" width="340" height="244" loading="lazy">
            </li>
                      <li class="season-slider__item">
              <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/season-strip-4.jpg" alt="菜の花畑と一本の木" width="340" height="244" loading="lazy">
            </li>
                      <li class="season-slider__item">
              <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/season-strip-5.jpg" alt="紅葉と湯けむりの東屋" width="340" height="244" loading="lazy">
            </li>
                      <li class="season-slider__item" aria-hidden="true">
              <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/season-strip-1.jpg" alt="" width="340" height="244" loading="lazy">
            </li>
                      <li class="season-slider__item" aria-hidden="true">
              <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/season-strip-2.jpg" alt="" width="340" height="244" loading="lazy">
            </li>
                      <li class="season-slider__item" aria-hidden="true">
              <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/season-strip-3.jpg" alt="" width="340" height="244" loading="lazy">
            </li>
                      <li class="season-slider__item" aria-hidden="true">
              <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/season-strip-4.jpg" alt="" width="340" height="244" loading="lazy">
            </li>
                      <li class="season-slider__item" aria-hidden="true">
              <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/season-strip-5.jpg" alt="" width="340" height="244" loading="lazy">
            </li>
                </ul>
    </div>
    <button class="season-slider__btn season-slider__btn--prev" type="button" aria-label="前の写真へ"></button>
    <button class="season-slider__btn season-slider__btn--next" type="button" aria-label="次の写真へ"></button>
  </div>
  <div class="section-more">
    <a href="/service.php" class="btn btn--outline">楽園雅苑のサービス</a>
  </div>
</section>

<!-- ⑥ アクセス -->
<section class="top-access" id="access">
  <div class="container">
    <h2 class="section-head">
  <span class="section-head__ja">アクセス</span>
  <span class="section-head__en" lang="en">access</span>
</h2>
  </div>
  <div class="top-access__map">
    <iframe src="https://maps.google.com/maps?q=%E5%A4%A7%E5%88%86%E7%9C%8C%E7%94%B1%E5%B8%83%E5%B8%82%E5%BA%84%E5%86%85%E7%94%BA%E6%B8%95&z=14&output=embed"
            title="楽園雅苑の地図" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>
  <div class="container">
    <div class="top-access__address">
      <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/logo-gold.png" alt="楽園雅苑 RAKUENGAEN" width="169" height="66" loading="lazy">
      <p>〒879-5425<br class="u-sp"> 大分県由布市　庄内町渕</p>
    </div>
    <p class="top-access__text">当宿からのアクセスは便利で、お車や公共交通機関をご利用いただけます。<br>自家用車をご利用の場合、ご宿泊の方には無料の駐車場がご用意されております。<br>公共交通機関をご利用の場合、最寄り駅からはバス、タクシー、またはレンタサイクルを利用してお越しいただけます。</p>
  </div>
</section>

<!-- ⑦ ブログ -->
<section class="top-blog" id="blog">
  <div class="container">
    <h2 class="section-head">
  <span class="section-head__ja">ブログ</span>
  <span class="section-head__en" lang="en">blog</span>
</h2>
    <div class="card-list">
        <!-- 新着3件だけ -->
        <article class="post-card">
  <a href="/blog-detail.php" class="post-card__link">
    <img class="post-card__img" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/blog-01.jpg" alt="湯けむりが立ちのぼる温泉地" loading="lazy" width="380" height="230">
    <div class="post-card__body">
      <time class="post-card__date" datetime="2026-10-20">2026/10/20</time>
      <h3 class="post-card__title">湯けむりの里を歩く。宿から足をのばして地獄めぐりへ</h3>
      <span class="post-card__tag">観光地</span>
    </div>
  </a>
</article>
        <!-- 新着3件だけ -->
        <article class="post-card">
  <a href="/blog-detail.php" class="post-card__link">
    <img class="post-card__img" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/blog-02.jpg" alt="温泉につかるニホンザル" loading="lazy" width="380" height="230">
    <div class="post-card__body">
      <time class="post-card__date" datetime="2026-10-12">2026/10/12</time>
      <h3 class="post-card__title">温泉に入るサルの話。冬の湯けむり豆知識</h3>
      <span class="post-card__tag">豆知識</span>
    </div>
  </a>
</article>
        <!-- 新着3件だけ -->
        <article class="post-card">
  <a href="/blog-detail.php" class="post-card__link">
    <img class="post-card__img" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/blog-03.jpg" alt="料理を盛り付ける料理長の手元" loading="lazy" width="380" height="230">
    <div class="post-card__body">
      <time class="post-card__date" datetime="2026-10-05">2026/10/05</time>
      <h3 class="post-card__title">料理長が語る、秋の会席に込めた想い</h3>
      <span class="post-card__tag">料理</span>
    </div>
  </a>
</article>
          </div>
    <div class="section-more">
      <a href="/blog.php" class="btn btn--outline">ブログ一覧はこちら</a>
    </div>
  </div>
</section>

<!-- ⑧ お知らせ -->
<section class="top-news" id="news">
  <div class="container">
    <h2 class="section-head">
  <span class="section-head__ja">お知らせ</span>
  <span class="section-head__en" lang="en">news</span>
</h2>
    <ul class="news-list">
        <!-- 最新3件だけ -->
        <li class="news-item">
  <a href="/news-detail.php" class="news-item__link">
    <time class="news-item__date" datetime="2026-10-15">2026/10/15</time>
    <span class="news-item__title">年末年始のご予約受付を開始しました</span>
    <span class="news-item__arrow" aria-hidden="true"></span>
  </a>
</li>
        <!-- 最新3件だけ -->
        <li class="news-item">
  <a href="/news-detail.php" class="news-item__link">
    <time class="news-item__date" datetime="2026-10-01">2026/10/01</time>
    <span class="news-item__title">秋の会席「紅葉膳」の提供を始めました</span>
    <span class="news-item__arrow" aria-hidden="true"></span>
  </a>
</li>
        <!-- 最新3件だけ -->
        <li class="news-item">
  <a href="/news-detail.php" class="news-item__link">
    <time class="news-item__date" datetime="2026-09-20">2026/09/20</time>
    <span class="news-item__title">露天風呂のメンテナンスに伴う休止のお知らせ</span>
    <span class="news-item__arrow" aria-hidden="true"></span>
  </a>
</li>
          </ul>
    <div class="section-more">
      <a href="/news.php" class="btn btn--outline">お知らせ一覧はこちら</a>
    </div>
  </div>
</section>

</main>

<?php get_footer(); ?>
