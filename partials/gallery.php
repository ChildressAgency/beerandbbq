<div class="card">
  <div id="last-year-gallery-heading" class="card-header">
    <h2 class="mb-0">
      <button class="accordion-tab" type="button" data-toggle="collapse" data-target="#last-year-gallery" aria-expanded="false" aria-controls="last-year-gallery">
        2018 Gallery
      </button>
    </h2>
  </div>
  <div id="last-year-gallery" class="collapse" aria-labelledby="last-year-gallery-heading" data-parent="#main-content">
    <div class="card-body">
      <article>
        <header>
          <?php echo wp_kses_post(get_field('gallery_intro')); ?>
        </header>
        <section class="gallery">
          <?php
            $images = get_field('gallery');
            if($images): ?>
              <ul class="list-unstyled d-flex justify-content-around flex-wrap text-center">
                <?php foreach($images as $image): ?>
                  <li>
                    <a href="#gallery-modal" data-toggle="modal" data-target="#gallery-modal" data-img_url="<?php echo esc_url($image['url']); ?>" data-img_title="<?php echo esc_html($image['title']); ?>">
                      <img src="<?php echo esc_url($image['url']); ?>" class="img-fluid mx-auto" alt="<?php echo esc_html($image['alt']); ?>" title="<?php echo esc_html($image['title']); ?>" style="max-width:340px;" />
                    </a>
                  </li>
                <?php endforeach; ?>
              </ul>
            <?php endif; ?>
        </section>
      </article>
    </div>
  </div>
</div>

