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
          <p><?php the_content('Read more'); ?></p>
        <?php endwhile; ?>
      <?php endif; ?>

    </div>
  </div>

</main>

<?php get_footer(); ?>