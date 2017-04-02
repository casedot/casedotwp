<?php
/**
* The template for displaying the footer
*
* Contains the closing of the "off-canvas-wrap" div and all content after.
*
* @package FoundationPress
* @since FoundationPress 1.0.0
*/

?>

  </section>  
  <div id="footer-container">
    <div class="contact-container footer">
      <a href="mailto:mike@casedot.com" class="contact trigger-overlay" data-href="connect-overlay" onclick="return false">Get in Touch <i class="fa fa-paper-plane"></i></a>
    </div>
    <footer id="footer">
      <?php do_action( 'foundationpress_before_footer' ); ?>
        <?php dynamic_sidebar( 'footer-widgets' ); ?>
          <?php do_action( 'foundationpress_after_footer' ); ?>
            <div class="section-divider"></div>
			<section class="footer-links">        
				<ul class="menu">
					<li class="menu-item"><a href="http://allyourbase.com/" class="home-link">c.</a></li>
					<li class="menu-item"><a href="http://github.com/casedot" target="_blank">github.com/casedot</a></li>
					<li class="menu-item"><a href="http://behance.net/casedot" target="_blank">behance.net/casedot</a></li>
				</ul>
				<ul class="menu copyright">
					<li>&copy; <?php echo date("Y"); ?> casedot.com</li>
				</ul>
			</section>
    </footer>
  </div>

  <?php do_action( 'foundationpress_layout_end' ); ?>

    <?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) === 'offcanvas' ) : ?>
      </div>
      <!-- Close off-canvas wrapper inner -->
      </div>
      <!-- Close off-canvas wrapper -->
      </div>
      <!-- Close off-canvas content wrapper -->
      <?php endif; ?>


        <?php wp_footer(); ?>
          <?php do_action( 'foundationpress_before_closing_body' ); ?>
            </body>

            </html>