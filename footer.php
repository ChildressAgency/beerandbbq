  <footer id="footer">
    <div id="contacts">
      <div class="row no-gutters">
        <div class="col-md-6 stay-informed">
          <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
            <div class="flipper">
              <div class="front d-flex justify-content-center align-items-center">
                <h2>Stay Informed</h2>
              </div>
              <div class="back d-flex justify-content-center align-items-center">
                <?php echo do_shortcode(get_field('contact_form_shortcode', 'option')); ?>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 beer-sponsor d-flex justify-content-center align-items-center">
          <div class="overlay"></div>
          <h2>Become a Sponsor</h2>
          <div class="beer-foam">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/beer-foam.png" class="img-fluid" alt="beer foam" />
            <div class="foam-1"></div>
            <div class="foam-2"></div>
            <div class="foam-3"></div>
            <div class="foam-4"></div>
            <div class="foam-5"></div>
            <div class="foam-6"></div>
            <div class="foam-7"></div>
          </div>
          <div class="liquid">
            <div class="bubble bubble1"></div>
            <div class="bubble bubble2"></div>
            <div class="bubble bubble3"></div>
            <div class="bubble bubble4"></div>
            <div class="bubble bubble5"></div>
            <div class="bubble bubble6"></div>
            <div class="bubble bubble7"></div>
            <div class="bubble bubble8"></div>
          </div>
          <?php echo do_shortcode(get_field('sponsor_contact_form_shortcode', 'option')); ?>
        </div>
      </div>
    </div>
    <div id="footer-bottom">
      <div class="container">
        <div class="row">
          <div class="col-sm-6">
            <a href="https://www.businetsinc.com/" class="footer-logo" target="_blank">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/businets-logo-color.png" class="img-fluid d-block mx-auto" alt="Businets Logo" />
            </a>
            <a href="https://childressagency.com" class="footer-logo" target="_blank">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/CA_Logo.svg" class="img-fluid d-block mx-auto" alt="Childress Agency Logo" />
            </a>
          </div>
          <div class="col-sm-6 text-center">
            <div class="contact-copyright">
              <p>Businets and Childress Beer & BBQ</p>
              <p>GET IN TOUCH<br />
                <?php 
                  $footer_email = get_field('footer_email', 'option');
                  $footer_phone = get_field('footer_phone', 'option');
                ?>
                <a href="mailto:<?php echo esc_html($footer_email); ?>"><?php echo esc_html($footer_email); ?></a><br />
                <a href="tel:<?php echo esc_html($footer_phone); ?>"><?php echo esc_html($footer_phone); ?></a>
              </p>
              <p class="copyright">&copy;2019 Businets Inc. | &copy;2019 Childress Agency | Website designed by <a href="https://childressagency.com">Childress Agency</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <?php wp_footer(); ?>
</body>
</html>