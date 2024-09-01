<?php get_header(); ?>

<h2><?php the_search_query(); ?>の検索結果 : <?php echo $wp_query->found_posts; ?>件</h2>
<php if(have_posts()) : ?>
  <?php while(have_posts()) : the_post() ?>
    <h3><?php the_title(); ?></h3>
    <div class="post">
      <?php if (has_post_thumbnail('Read more')) ; ?>
        <p class="postThumbnail"><?php the_post_thumbnail(); ?></p>
      <?php endif; ?>
      <p><?php the_content('詳細はこちら'); ?></p>
    </div>
  <?php endwhile; ?>
<?php else : ?>
  <p>検索結果はありませんでした。</p>
<?php endif; ?>

<?php get_footer(); ?>
