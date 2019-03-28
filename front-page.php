<?php get_header(); ?>
  <main>
    <div id="main-content" class="accordion">
      <?php get_template_part('vendors-sponsors'); ?>

      <?php get_template_part('time-location'); ?>

      <?php get_template_part('tickets'); ?>

      <?php get_template_part('sponsorship-information'); ?>

      <?php get_template_part('gallery'); ?>
    </div>
  </main>
<?php get_footer();