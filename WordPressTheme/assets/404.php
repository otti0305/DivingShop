<?php get_header(); ?>

  <main>
    <div class="not-found">
      <div class="not-found__inner inner">
        <div class="not-found__breadcrumb">
          <?php get_template_part('template-parts/breadcrumb') ?>
        </div>
        <h1 class="not-found__title">404</h1>
        <p class="not-found__text">申し訳ありません。<br>
          お探しのページが見つかりません。</p>
        <div class="not-found__link">
          <a href="<?php echo home_url( '/' ); ?>" class="PageTop">
            <div class="PageTop__content">
              <div class="PageTop__title">Page TOP</div>
              <div class="PageTop__icon"></div>
            </div>
          </a>
        </div>
      </div>
    </div>
  </main>

  <?php get_footer(); ?>
