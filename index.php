<?php get_header(); ?>
<main>
  <div class="container">
    <?php
      if(have_posts()){
        while(have_posts()){
          the_post();
          echo '<h1>' . the_title() . '</h1>';
          the_content();
        }
      }
    ?>
  </div>
</main>
<?php get_footer();