<?php get_header(); ?>
<div>
  <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
      <h2>
        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
      </h2>
      <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y年m月d日(l)'); ?></time>
      <p><?php the_category(', '); ?></p>
      <p><?php the_content('Read more'); ?></p>
    <?php endwhile; ?>
  <?php endif; ?>

  <?php previous_post_link('%link', '前の記事へ'); ?>
  <?php next_post_link('%link', '次の記事へ'); ?>
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>