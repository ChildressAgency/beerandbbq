<?php get_header(); ?>
  <main>
    <div id="main-content" class="accordion">
      <?php get_template_part('partials/vendors-sponsors'); ?>

      <?php get_template_part('partials/time-location'); ?>

      <?php get_template_part('partials/tickets'); ?>

      <?php get_template_part('partials/sponsorship-information'); ?>

      <?php get_template_part('partials/gallery'); ?>
    </div>
  </main>
<div id="gallery-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="gallery-modal-label" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 id="gallery-modal-label" class="modal-title"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

      </div>
    </div>
  </div>
</div>
<?php get_footer();