<?php get_header(); ?>

<main>

  <div class="container">
    <div class="single">
      <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
          <h2 class="single-title"><?php the_title(); ?></h2>
          <div class="single-metadata">
            <p>公開日: <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_date(); ?></time></p>
            <p>更新日: <time datetime="<?php the_modified_time('Y-m-d'); ?>"><?php the_modified_date(); ?></time></p>
            <p><?php the_category(', '); ?></p>
          </div>
          <div class="single-eye-catch">
            <!-- アイキャッチ画像判定、 なければ固定画像を取得-->
            <?php if (has_post_thumbnail()) : ?>
              <img src="<?php the_post_thumbnail_url('small'); ?>" alt="">
            <?php else : ?>
              <img src="<?php echo get_template_directory_uri(); ?>/images/S__41877524.jpg" alt="">
            <?php endif; ?>
          </div>
          <!-- 本文 -->
          <?php the_content('Read more'); ?>
        <?php endwhile; ?>
      <?php endif; ?>

    </div>
  </div>

</main>

<?php get_footer(); ?>