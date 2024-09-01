<?php get_header(); ?>

<main>

  <section class="container">
    <div class="top-img">
      <img src="<?php echo get_template_directory_uri(); ?>/images/S__41877524.jpg" alt="" class="seribune">
    </div>

    <div class="news" id="news">
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

    <div class="kyoukai" id="kyoukai">
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

    <div class="active" id="active">
      <div class="kyoukai">
        <h2 class="news-name">
          <img src="<?php echo get_template_directory_uri(); ?>/images/wave_kamome_line_1979-1.png" alt="" class="kamome">
          活動内容
          <img src="<?php echo get_template_directory_uri(); ?>/images/wave_kamome_line_1979-1.png" alt="" class="kamome">
        </h2>
      </div>
      <div class="active-content">
        <img src="./S__41877524.jpg" alt="" class="taikai">
        <p class="active-text">
          【水俣市競り舟大会】<br>
          2024年度で49回目を迎えた伝統ある大会市が主催し当協会は主管として参加。
        </p>
      </div>

      <div class="active-content1">
        <img src="./ミニドラ.jpg" alt="" class="taikai1">
        <p class="active-text1">
          【ミニドラゴンカップ】<br>
          2022年度より競り舟、ドラゴンSUPを使用した４人制のレースを水俣川で実施。<br>
          (補員含め５人までエントリー可) <br>
          2022年：65名参加(16チーム) <br>
          2023年：100名参加(24チーム) <br>
          キッチンカー３台でマルシェも実施 <br>

        </p>
      </div>

      <div class="active-content2">
        <img src="./体験会.jpg" alt="" class="taikai2">
        <p class="active-text2">
          【練習会・体験会】<br>
          練習会：週に１～２度開催(水・土) <br>
          体験会：不定期に開催 　　10月7日に水俣在住の外国人向けイベント実施 <br>

        </p>
      </div>
    </div>

    <div class="ivent" id="ivent">

      <div class="kyoukai">
        <h2 class="news-name">
          <img src="<?php echo get_template_directory_uri(); ?>/images/wave_kamome_line_1979-1.png" alt="" class="kamome">
          イベント
          <img src="<?php echo get_template_directory_uri(); ?>/images/wave_kamome_line_1979-1.png" alt="" class="kamome">
        </h2>
      </div>

      <div class="d-grid gap-2 col-6 mx-auto btn-ivent">
        <button class="btn btn-info" type="button">Minamata Paddle Festival</button>
        <button class="btn btn-info" type="button">ミニドラゴンカップ</button>
        <button class="btn btn-info" type="button">体験会</button>
      </div>
    </div>

  </section>

</main>

<?php get_footer(); ?>