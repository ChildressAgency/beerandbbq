<div class="card">
  <div id="time-location-heading" class="card-header">
    <h2 class="mb-0">
      <button class="accordion-tab" type="button" data-toggle="collapse" data-target="#time-location" aria-expanded="false" aria-controls="time-location">
        Time & Location
      </button>
    </h2>
  </div>
  <div id="time-location" class="collapse" aria-labelledby="time-location-heading" data-parent="#main-content">
    <div class="card-body">
      <article>
        <header>
          <?php echo wp_kses_post(get_field('time_location_intro')); ?>
        </header>
      </article>
      <section class="map">
        <div class="container h-100">
          <div class="row h-100 flex-column justify-content-center">
            <div class="map-stripe col-md-5 offset-lg-1 flex-grow-1 d-flex align-items-center justify-content-center">
              <div class="location-info">
                <p><?php echo esc_html(get_field('event_date')); ?></p>
                <p><?php echo esc_html(get_field('event_time')); ?></p>
                <p><?php echo esc_html(get_field('event_location')); ?><br /><?php echo esc_html(get_field('event_address')); ?><br /><?php echo esc_html(get_field('event_city_state_zip')); ?></p>
                <a href="<?php echo esc_url(get_field('event_directions_link')); ?>" class="btn-cutout">Get Directions &gt;</a>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
  </div>
</div>