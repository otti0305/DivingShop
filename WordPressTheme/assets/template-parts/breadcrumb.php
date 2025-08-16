<!-- パンくず -->
<?php if( function_exists('bcn_display')) : ?>
  <nav class="breadcrumb layout-breadcrumb">
    <div class="breadcrumb__inner inner">
      <?php bcn_display(); ?>
    </div>
  </nav>
<?php endif; ?>