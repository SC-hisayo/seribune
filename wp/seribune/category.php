<?php get_header(); ?>

<main>

  <div class="container">

    <h2 class="session-title">
      <img src="<?php echo get_template_directory_uri(); ?>/images/wave_kamome_line_1979-1.png" alt="" class="session-title-bg">
      <?php single_cat_title(); ?>
      <img src="<?php echo get_template_directory_uri(); ?>/images/wave_kamome_line_1979-1.png" alt="" class="session-title-bg">
    </h2>
    <div class="box">
      <div class="content">
        <?php if (have_posts()) : ?>
          <?php while (have_posts()) : the_post(); ?>
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
                  <!-- 抜粋判定、なければ投稿内容を取得してくる -->
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
        <?php else : ?>
          <div class="content-text">
            <p>記事がありません</p>
          </div>
        <?php endif; ?>
      </div>
    </div>

</main>

<?php get_footer(); ?>