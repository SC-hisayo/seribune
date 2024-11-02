<?php get_header(); ?>

<!-- 投稿データ取得クエリを作成 -->

<?php

$excludeCategory = ['active', 'ivent',]; // 除外カテゴリ
$postsLimit = 5; // 一覧表示数

// 除外カテゴリからIDを取得
$exclude_ids = array_map(function ($excludeCategory) {
  $category = get_category_by_slug($excludeCategory);
  return $category ? $category->term_id : null;
}, $excludeCategory);

// 有効なカテゴリIDのみ取得
$exclude_ids = array_filter($exclude_ids);

// お知らせ、活動内容、イベントのクエリを作成
$newsQuery = new WP_Query([
  'category__not_in' => $exclude_ids,
  'posts_per_page' => $postsLimit,
]);
$newsCountQuery = new WP_Query([
  'category__not_in' => $exclude_ids,
]);
$activeQuery = new WP_Query([
  'category_name' => 'active',
  'posts_per_page' => $postsLimit,
]);
$activeCountQuery = new WP_Query([
  'category_name' => 'active',
]);
$iventQuery = new WP_Query([
  'category_name' => 'ivent',
  'posts_per_page' => $postsLimit,
]);
$iventCountQuery = new WP_Query([
  'category_name' => 'ivent',
]);

// カテゴリIDの取得
$newsCategoryId = get_category_by_slug('news')->term_id;
$activeCategoryId = get_category_by_slug('active')->term_id;
$iventCategoryId = get_category_by_slug('ivent')->term_id;
?>
<main>

  <div class="container">

    <div class="top-img">
      <img src="<?php echo get_template_directory_uri(); ?>/images/S__41877524.jpg" alt="">
    </div>

    <section id="news">
      <div class="box">
        <h2 class="session-title">
          <img src="<?php echo get_template_directory_uri(); ?>/images/wave_kamome_line_1979-1.png" alt="" class="session-title-bg">
          お知らせ
          <img src="<?php echo get_template_directory_uri(); ?>/images/wave_kamome_line_1979-1.png" alt="" class="session-title-bg">
        </h2>
        <div class="content">
          <ul class="content-text">
            <?php if ($newsQuery->have_posts()) : ?>
              <?php while ($newsQuery->have_posts()) : $newsQuery->the_post(); ?>
                <li>
                  <a href="<?php the_permalink() ?>"><?php the_time('Y/m/d') ?> <?php the_title(); ?></a>
                </li>
              <?php endwhile; ?>
              <?php if ($newsCountQuery->post_count > $postsLimit) : ?>
                <?php if ($newsCategoryId) : ?>
                  <a class="more-link" href="<?php echo get_category_link($newsCategoryId); ?>">もっと見る</a>
                <?php else : ?>
                  <p>newsカテゴリがありません。</p>
                <?php endif; ?>
              <?php endif; ?>
            <?php else : ?>
              <li>
                <p>記事がありません。</p>
              </li>
            <?php endif; ?>
            <?php wp_reset_postdata(); ?>
          </ul>
        </div>
      </div>
    </section>

    <section id="kyoukai">
      <div class="box">
        <h2 class="session-title">
          <img src="<?php echo get_template_directory_uri(); ?>/images/wave_kamome_line_1979-1.png" alt="" class="session-title-bg">
          協会について
          <img src="<?php echo get_template_directory_uri(); ?>/images/wave_kamome_line_1979-1.png" alt="" class="session-title-bg">
        </h2>
        <div class="content">
          <div class="top-img">
            <img src="<?php echo get_template_directory_uri(); ?>/images/協会.jpg" alt="" class="kyoukai-img">
          </div>
          <div class="content-text">
            <p>
              当協会は昭和59年10月16日に発足されました。
              競り舟は1987年に長崎のペーロンを真似て始まったとされています。
              漕ぎ手10人で舟の速さを競い合うシンプルな競技です。
            </p>
            <p>
              類似スポーツとしてドラゴンボート、沖縄のハーリー、長崎のペーロンがあります。
              長崎のペーロンを真似て始まった競り舟ですが、ペーロン自体、中国のドラゴンボートが伝わったことが起源とされています。
              中国から長崎へ、長崎から水俣へ舟漕ぎの文化は広まったと言われています。
              諸説ありますが、舟や漕ぎ手の数は違えど、ルーツは同じということになります。
            </p>
            <p>
              水俣の夏の風物詩として地域から愛されている競り舟という伝統を絶やさない為、普及活動をおこなっています。
              過去を乗り越え綺麗になった水俣の海、川をもっと知ってもらうために舟漕ぎ文化を発信していきます。
            </p>
          </div>
        </div>
      </div>
    </section>

    <section id="active">
      <div class="box">
        <h2 class="session-title">
          <img src="<?php echo get_template_directory_uri(); ?>/images/wave_kamome_line_1979-1.png" alt="" class="session-title-bg">
          活動内容
          <img src="<?php echo get_template_directory_uri(); ?>/images/wave_kamome_line_1979-1.png" alt="" class="session-title-bg">
        </h2>

        <div class="content">
          <?php if ($activeQuery->have_posts()) : ?>
            <?php while ($activeQuery->have_posts()) : $activeQuery->the_post(); ?>
              <a class="panel" href="<?php the_permalink(); ?>">
                <div class="panel-img">
                  <!-- アイキャッチ画像判定、 なければ固定画像を取得-->
                  <?php if (has_post_thumbnail()) : ?>
                    <img src="<?php the_post_thumbnail_url('small'); ?>" alt="">
                  <?php else : ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/S__41877524.jpg" alt="">
                  <?php endif; ?>
                </div>
                <div class="panel-body">
                  <h3 class="panel-title"><?php the_title(); ?></h3>
                  <p class="panel-text">
                    <!-- 抜粋判定、なければ本文の先頭50文字を取得してくる -->
                    <?php if (has_excerpt()) : ?>
                      <?php echo get_the_excerpt(); ?>
                    <?php else : ?>
                      これには抜粋が設定されていません。
                    <?php endif; ?>
                  </p>
                  <div class="panel-metadata">
                    <p class="panel-create-date"><time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y/m/d'); ?></time></p>
                  </div>
                </div>
              </a>
            <?php endwhile; ?>
            <?php if ($activeCountQuery->post_count > $postsLimit) : ?>
              <?php if ($activeCategoryId) : ?>
                <a class="more-link" href="<?php echo get_category_link($activeCategoryId); ?>">もっと見る</a>
              <?php else : ?>
                <p>activeカテゴリがありません。</p>
              <?php endif; ?>
            <?php endif; ?>
          <?php else : ?>
            <p>記事がありません</p>
          <?php endif; ?>
          <?php wp_reset_postdata(); ?>

        </div>

      </div>
    </section>

    <section id="ivent">
      <div class="box">
        <h2 class="session-title">
          <img src="<?php echo get_template_directory_uri(); ?>/images/wave_kamome_line_1979-1.png" alt="" class="session-title-bg">
          イベント
          <img src="<?php echo get_template_directory_uri(); ?>/images/wave_kamome_line_1979-1.png" alt="" class="session-title-bg">
        </h2>

        <div class="content">
          <div class="d-grid gap-2 col-6 mx-auto btn-ivent">
            <?php if ($iventQuery->have_posts()) : ?>
              <?php while ($iventQuery->have_posts()) : $iventQuery->the_post(); ?>
                <a class="btn btn-info" type="button" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
              <?php endwhile; ?>
              <?php if ($iventCountQuery->post_count > $postsLimit) : ?>
                <?php if ($iventCategoryId) : ?>
                  <a class="more-link" href="<?php echo get_category_link($iventCategoryId); ?>">もっと見る</a>
                <?php else : ?>
                  <p>iventカテゴリがありません。</p>
                <?php endif; ?>
              <?php endif; ?>
            <?php else : ?>
              <p>記事がありません</p>
            <?php endif; ?>
            <?php wp_reset_postdata(); ?>

          </div>
        </div>
      </div>
    </section>

  </div>

</main>

<?php get_footer(); ?>