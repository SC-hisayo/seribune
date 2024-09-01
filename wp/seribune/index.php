<?php get_header(); ?>

<main>

  <div class="container">
    
    <div class="top-img">
      <img src="<?php echo get_template_directory_uri(); ?>/images/S__41877524.jpg" alt="" class="seribune">
    </div>

    <section id="news">
      <div class="news">
        <h2 class="news-name">
          <img src="<?php echo get_template_directory_uri(); ?>/images/wave_kamome_line_1979-1.png" alt="" class="kamome">
          お知らせ
          <img src="<?php echo get_template_directory_uri(); ?>/images/wave_kamome_line_1979-1.png" alt="" class="kamome">
        </h2>
      </div>
      <div class="news-content">
        <?php if (have_posts()) : ?>
          <?php while (have_posts()) : the_post(); ?>
            <p class="news-text">
              <a class="link-color" href="<?php the_permalink() ?>"><?php the_date() ?> <?php the_title(); ?></a>
            </p>
          <?php endwhile; ?>
        <?php else : ?>
          <p>記事がありません</p>
        <?php endif; ?>
      </div>
    </section>

    <section id="kyoukai">
      <div class="kyoukai">
        <h2 class="news-name">
          <img src="<?php echo get_template_directory_uri(); ?>/images/wave_kamome_line_1979-1.png" alt="" class="kamome">
          競り舟協会について
          <img src="<?php echo get_template_directory_uri(); ?>/images/wave_kamome_line_1979-1.png" alt="" class="kamome">
        </h2>
      </div>
      <div class="kyoukai-content">
        <img src="<?php echo get_template_directory_uri(); ?>/images/協会.jpg" alt="" class="kyoukai-img">
        <p class="kyoukai-text">
          当協会は昭和 59 年 10 月 16 日に発足されました。 <br>
          競り舟は1987年に長崎のペーロンを真似て始まったとされています。<br>
          漕ぎ手10人で舟の速さを競い合うシンプルな競技です。 <br>
          類似スポーツとしてドラゴンボート、沖縄のハーリー、長崎のペーロンがあります。<br>
          長崎のペーロンを真似て始まった競り舟ですが、ペーロン自体、中国のドラゴンボートが伝わったことが起源とされています。<br>
          中国から長崎へ、長崎から水俣へ舟漕ぎの文化は広まったと言われています。<br>
          諸説ありますが、舟や漕ぎ手の数は違えど、ルーツは同じということになります。<br>

          水俣の夏の風物詩として地域から愛されている競り舟という伝統を絶やさない為、普及活動をおこなっています。<br>
          過去を乗り越え綺麗になった水俣の海、川をもっと知ってもらうために舟漕ぎ文化を発信していきます。
        </p>
      </div>
    </section>

    <section id="active">
      <div class="active">
        <div class="kyoukai">
          <h2 class="news-name">
            <img src="<?php echo get_template_directory_uri(); ?>/images/wave_kamome_line_1979-1.png" alt="" class="kamome">
            活動内容
            <img src="<?php echo get_template_directory_uri(); ?>/images/wave_kamome_line_1979-1.png" alt="" class="kamome">
          </h2>
        </div>

        <?php if (have_posts()) : ?>
          <?php while (have_posts()) : the_post(); ?>
            <div class="active-content">
              <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail(); ?>
                <p class="active-text"><?php the_title(); ?></p>
                <p class="active-text"><?php the_content(); ?></p>
              </a>
            </div>
          <?php endwhile; ?>
        <?php else : ?>
          <p>記事がありません</p>
        <?php endif; ?>

      </div>
    </section>

    <section id="ivent">
      <div class="ivent">
        <div class="kyoukai">
          <h2 class="news-name">
            <img src="<?php echo get_template_directory_uri(); ?>/images/wave_kamome_line_1979-1.png" alt="" class="kamome">
            イベント
            <img src="<?php echo get_template_directory_uri(); ?>/images/wave_kamome_line_1979-1.png" alt="" class="kamome">
          </h2>
        </div>

        <div class="d-grid gap-2 col-6 mx-auto btn-ivent">

          <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
              <a class="btn btn-info" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            <?php endwhile; ?>
          <?php else : ?>
            <p>記事がありません</p>
          <?php endif; ?>

        </div>
      </div>
    </section>

  </div>

</main>

<?php get_footer(); ?>