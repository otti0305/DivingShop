<?php get_header(); ?>

<main>
  <!-- メインビュー -->
  <div class="sub-mv">
    <h1 class="sub-mv__title"><?php the_title(); ?></h1>
    <div class="sub-mv__img">
      <picture>
        <source media="(min-width: 768px)" srcset="<?php echo get_theme_file_uri(); ?>/images/common/contact-pc.jpg">
        <img img src="<?php echo get_theme_file_uri(); ?>/images/common/contact-sp.jpg" alt="海中を泳ぐ魚の群れ">
      </picture>
    </div>
  </div>

  <!-- パンくず -->
  <?php get_template_part('template-parts/breadcrumb') ?>

  <div class="page-contact page-contact-layout sub-illustration">
    <div class="page-contact__inner inner">
      <div class="page-contact__content">
        <?php
          if( have_posts()) {
            while ( have_posts()) {
              the_post();
              the_content();
            }
        }
        ?>
      </div>
    </div>
  </div>
</main>

<?php get_footer(); ?>