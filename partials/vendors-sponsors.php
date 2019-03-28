<div class="card">
  <div id="vendors-sponsors-heading" class="card-header">
    <h2 class="mb-0">
      <button class="accordion-tab" type="button" data-toggle="collapse" data-target="#vendors-sponsors" aria-expanded="false" aria-controls="vendors-sponsors">
        Vendors & Sponsors
      </button>
    </h2>
  </div>
  <div id="vendors-sponsors" class="collapse" aria-labelledby="vendors-sponsors-heading" data-parent="#main-content">
    <div class="card-body">
      <article>
        <header>
          <?php echo wp_kses_post(get_field('vendors_sponsors_intro')); ?>
        </header>
        <section class="sponsors">
          <div class="row">
            <div class="col-sm-3">
              <h3>Sponsors</h3>
              <a href="<?php echo esc_url(get_field('become_a_sponsor_link')); ?>" class="btn-cutout">Become A Sponsor</a>
            </div>
            <div class="col-sm-9">
              <?php echo wp_kses_post(get_field('sponsors_section_content')); ?>
            </div>
          </div>
          <?php if(have_rows('vip_sponsors')): ?>
            <div class="vip-sponsors">
              <h3>VIP Sponsors</h3>
              <ul class="list-unstyled d-flex justify-content-around flex-wrap text-center">
                <?php while(have_rows('vip_sponsors')): the_row(); ?>
                  <li>
                    <a href="<?php echo esc_url(get_sub_field('vip_sponsor_link')); ?>" target="_blank">
                      <?php 
                        //$vip_sponsor_img_id = get_post_meta(get_the_ID(), 'vip_sponsor_image', true);
                        $vip_sponsor_img_id = get_sub_field('vip_sponsor_image');
                        $vip_sponsor_img = wp_get_attachment_image_src($vip_sponsor_img_id, 'medium');
                        $vip_sponsor_img_url = $vip_sponsor_img[0];
                      ?>
                      <img src="<?php echo esc_url($vip_sponsor_img_url); ?>" class="rounded-circle" alt="<?php echo esc_html(get_sub_field('vip_sponsor_name')); ?> logo" />
                    </a>
                  </li>
                <?php endwhile; ?>
              </ul>
            </div>
          <?php endif; ?>
          <?php if(have_rows('sponsors')): ?>
            <div class="sponsors-list">
              <h3>Sponsors</h3>
              <ul class="list-unstyled d-flex justify-content-around flex-wrap text-center">
                <?php while(have_rows('sponsors')): the_row(); ?>
                  <li>
                    <a href="<?php echo esc_url(get_sub_field('sponsor_link')); ?>">
                      <?php
                        $sponsor_img_id = get_sub_field('sponsor_image');
                        $sponsor_img = wp_get_attachment_image_src($sponsor_image_id, 'thumbnail');
                        $sponsor_img_url = $sponsor_img[0];
                      ?>
                      <img src="<?php echo esc_url($sponsor_img_url); ?>" class="rounded-circle" alt="<?php echo esc_html(get_sub_field('sponsor_name')); ?> logo" />
                    </a>
                  </li>
                <?php endwhile; ?>
              </ul>
            </div>
          <?php endif; ?>
        </section>

        <section class="vendors">
          <div class="row">
            <div class="col-sm-3">
              <h3>Vendors</h3>
              <a href="<?php echo esc_url(get_field('become_a_vendor_link')); ?>" class="btn-cutout">Become a Vendor</a>
            </div>
            <div class="col-sm-9">
              <?php echo wp_kses_post(get_field('vendor_section_content')); ?>
            </div>
          </div>
          <?php if(have_rows('vendors')): ?>
            <div class="vendors-list">
              <ul class="list-unstyled d-flex justify-content-around flex-wrap text-center">
                <?php while(have_rows('vendors')): the_row(); ?>
                  <li>
                    <a href="<?php echo esc_url(get_sub_field('vendor_link')); ?>">
                      <?php
                        $vendor_img_id = get_sub_field('vendor_image');
                        $vendor_img = wp_get_attachment_image_src($vendor_img_id, 'thumbnail');
                        $vedor_img_url = $vendor_img[0];
                      ?>
                      <img src="<?php echo esc_url($vendor_img_url); ?>" class="rounded-circle" alt="<?php echo esc_html(get_sub_field('vendor_name')); ?> logo" />
                    </a>
                  </li>
                <?php endwhile; ?>
              </ul>
            </div>
          <?php endif; ?>
        </section>
      </article>
    </div>
  </div>
</div>
