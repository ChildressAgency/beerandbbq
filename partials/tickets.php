<div class="card">
  <div id="tickets-heading" class="card-header">
    <h2 class="mb-0">
      <button class="accordion-tab" type="button" data-toggle="collapse" data-target="#tickets" aria-expanded="false" aria-controls="tickets">
        Tickets
      </button>
    </h2>
  </div>
  <div id="tickets" class="collapse" aria-labelledby="tickets-heading" data-parent="#main-content">
    <div class="card-body">
      <article>
        <header>
          <?php echo wp_kses_post(get_field('tickets_intro')); ?>
        </header>
        <section class="ticket-info">
          <div class="row">
            <div class="col-sm-3">
              <h3>Tickets</h3>
            </div>
            <div class="col-sm-9">
              <?php echo wp_kses_post(get_field('tickets_section_content')); ?>
              <p class="free">FREE</p>
              <a href="<?php echo esc_url(get_field('buy_ticket_link')); ?>" class="btn-cutout">GET YOUR TICKET NOW</a>
            </div>
          </div>
        </section>
      </article>
    </div>
  </div>
</div>
