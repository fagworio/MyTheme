 <!-- Footer
    ============================================= -->
    <footer id="footer" class="dark">

      <!-- Copyrights
      ============================================= -->
      <div id="copyrights">

        <div class="container clearfix">

          <div class="col_half">
		  <span id="jf-copyright-text"><?php echo get_theme_mod( 'jf_footer_copyright_text' ); ?></span> <br>
			<?php
				if (  get_theme_mod( 'jf_report_file' ) ) {
					?>
					<a href="<?php echo get_theme_mod( 'jf_report_file' ) ?>"><?php _e('Download Reports', 'jf') ?></a><br>
					<?php
				}
			?>
            <div class="copyright-links">
				<?php
					if( get_theme_mod( 'jf_footer_tos_page' ) ) {
						?><a href="<?php the_permalink( get_theme_mod( 'jf_footer_tos_page' ) ); ?>">Terms of Use</a> /
						<?php
					}

					if( get_theme_mod( 'jf_footer_privacy_page' ) ) {
						?><a href="<?php the_permalink( get_theme_mod( 'jf_footer_privacy_page' ) ); ?>">Privacy Policy</a>
						<?php
					}
					 
				?>
            </div>
          </div>

          <div class="col_half col_last tright">
            <div class="fright clearfix">
				<?php
                  
                  if( get_theme_mod( 'jf_facebook_handle' ) ) {
                    ?>
                      <a href="https://www.facebook.com/<?php echo get_theme_mod( 'jf_facebook_handle' ); ?>" class="social-icon si-small si-borderless si-facebook">
						<i class="icon-facebook"></i>
						<i class="icon-facebook"></i>
                      </a>
                    <?php
                  }

                  if( get_theme_mod( 'jf_twitter_handle' ) ) {
                    ?>
                      <a href="https://twitter.com/<?php echo get_theme_mod( 'jf_twitter_handle' ); ?>" class="social-icon si-small si-borderless  si-twitter">
						<i class="icon-twitter"></i>
						<i class="icon-twitter"></i>
                      </a>
                    <?php
                  }

                  if( get_theme_mod( 'jf_instagram_handle' ) ) {
                    ?>
                      <a href="https://www.instagram.com/<?php echo get_theme_mod( 'jf_instagram_handle' ); ?>" class="social-icon si-small si-borderless  si-instagram">
						<i class="icon-instagram2"></i>
						<i class="icon-instagram2"></i>
                      </a>
                    <?php
                  }

                ?>
            </div>

            <div class="clear"></div>

			<?php
			 if( get_theme_mod( 'jf_email_handle' ) ) {
				?>
				  <a href="mailto:<?php echo get_theme_mod( 'jf_email_handle' ); ?>" class="si-email3">
					<span class="ts-icon"><i class="icon-email3"></i></span><span class="ts-text"><?php echo get_theme_mod( 'jf_email_handle' ); ?></span>
				  </a>
				<?php
			  }
			
			?> <span class="middot">&middot;</span>
	
			<?php 
				if( get_theme_mod( 'jf_phone_handle' ) ) {
                    ?>
                      <a href="tel:<?php echo get_theme_mod( 'jf_phone_handle' ); ?>" class="si-call">
                        <span class="ts-icon"><i class="icon-call"></i></span><span class="ts-text"><?php echo get_theme_mod( 'jf_phone_handle' ); ?></span>
                      </a>
                    <?php
                  }
			?>
          </div>

        </div>

      </div><!-- #copyrights end -->

    </footer><!-- #footer end -->
  </div><!-- #wrapper end -->

  <!-- Go To Top
  ============================================= -->
  <div id="gotoTop" class="icon-angle-up"></div>

  <!-- External JavaScripts
  ============================================= -->
  <?php wp_footer(); ?>

</body>

</html>