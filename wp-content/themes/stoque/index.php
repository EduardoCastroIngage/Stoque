<?php get_header(); ?>

<main>
        <?php if (have_posts()):while (have_posts()):the_post(); ?>
          <?php endwhile; ?>
          <?php else: endif; ?>
  </main>

<?php get_footer(); ?>