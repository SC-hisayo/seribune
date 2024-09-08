<?php get_header(); ?>

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
            <?php if (have_posts()) : ?>
              <?php while (have_posts()) : the_post(); ?>
                <li>
                  <a href="<?php the_permalink() ?>"><?php the_date() ?> <?php the_title(); ?></a>
                </li>
              <?php endwhile; ?>
            <?php else : ?>
              <li>
                <p>記事がありません</p>
              </li>
            <?php endif; ?>
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
          <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
              <a class="panel" href="<?php the_permalink(); ?>">
                <img src="<?php the_post_thumbnail_url(); ?>" alt="" class="panel-image">
                <div class="panel-body">
                  <h3 class="panel-title"><?php the_title(); ?></h3>
                  <p class="panel-text">2024年度で49回目を迎えた伝統ある大会市が主催し当協会は主管として参加。</p>
                </div>
              </a>
            <?php endwhile; ?>
          <?php else : ?>
            <p>記事がありません</p>
          <?php endif; ?>

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
            <?php if (have_posts()) : ?>
              <?php while (have_posts()) : the_post(); ?>
                <a class="btn btn-info" type="button" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
              <?php endwhile; ?>
            <?php else : ?>
              <p>記事がありません</p>
            <?php endif; ?>

          </div>
        </div>
      </div>
    </section>

  </div>

</main>

<?php get_footer(); ?>