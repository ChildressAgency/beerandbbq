<div class="card">
  <div id="sponsorship-information-heading" class="card-header">
    <h2 class="mb-0">
      <button class="accordion-tab" type="button" data-toggle="collapse" data-target="#sponsorship-information" aria-expanded="false" aria-controls="sponsorship-information">
        Sponsorship Information
      </button>
    </h2>
  </div>
  <div id="sponsorship-information" class="collapse" aria-labelledby="sponsorship-information-heading" data-parent="#main-content">
    <div class="card-body">
      <article>
        <header>
          <?php echo wp_kses_post(get_field('sponsorship_intro')); ?>
        </header>
        <?php 
          $sponsorship_levels = get_field('sponsorship_levels');
          if($sponsorship_levels): ?>
            <section class="sponsor-levels">
              <ul class="nav nav-pills flex-column flex-sm-row nav-justified" id="levels-tab" role="tablist">
                <?php foreach($sponsorship_levels as $level): ?>
                  <?php 
                    $level_name = esc_html($level['level_name']); 
                    $level_slug = sanitize_title($level_name);
                  ?>
                  <li class="nav-item">
                    <a href="#level-<?php echo $level_slug; ?>" class="nav-link active" id="levels-tab-<?php echo $level_slug; ?>" data-toggle="pill" role="tab" aria-controls="level-<?php echo $level_slug; ?>" aria-selected="true"><?php echo $level_name; ?></a>
                  </li>
                <?php endforeach; ?>
              </ul>
              <div id="levels-content" class="tab-content">
                <div id="level-music" class="tab-pane fade show active" role="tabpanel" aria-labelledby="levels-tab-music">
                  <?php foreach($sponsorship_levels as $level): ?>
                    <article>
                      <header>
                        <h3>Music Sponsor</h3>
                        <p>(<?php echo esc_html($level['number_available']); ?> available)</p>
                      </header>
                      <p class="mb-0"><strong>WHAT YOU GET</strong></p>
                      <?php echo wp_kses_post($level['what_you_get']); ?>
                      <p class="mb-0 mt-4"><strong>SO HOW MUCH IS IT?</strong></p>
                      <p class="price">$<?php echo esc_html($level['price']); ?></p>
                      <a href="<?php echo esc_url($level['contact_link']); ?>" class="btn-cutout">Contact Us Today</a>
                    </article>
                  <?php endforeach; ?>
                </div>
              </div>
            </section>
        <?php endif; ?>
      </article>
    </div>
  </div>
</div>
