				<div id="sidebar-right" class="sidebar" role="complementary">

					<?php if ( is_active_sidebar( 'sidebar-right' ) ) : ?>
            <!--Follow us Widget-->
            <div id="followus" class="widget followus">
              <h4 class="widgettitle">FOLLOW US</h4>
              <ul>
                <li>
                  <a class="follow facebook" href="https://www.facebook.com/chouchoutw?fref=ts" target="_blank"><i class="fa fa-facebook fa-fw"></i>&nbsp; FANS</a>
                </li>
                <li>
                  <a class="follow googleplus" href="https://plus.google.com/+chouchoutw" target="_blank"><i class="fa fa-google-plus fa-fw"></i>&nbsp; G +</a>
                </li>
                <li>
                  <a class="follow instagram" href="http://instagram.com/instagram_chouchou" target="_blank"><i class="fa fa-instagram fa-fw"></i>&nbsp; SNAPS</a>
                <li>
                  <a class="follow feedly" href="http://cloud.feedly.com/#subscription%2Ffeed%2Fhttp%3A%2F%2Fchouchou.tw%2Ffeed" target="_blank"><i class="fa fa-rss fa-fw"></i>&nbsp; FEED</a>
                </li>
              </ul>
            </div>
            <!-- Facepile Widget -->
            <div class="fb-like-box widget" data-href="https://www.facebook.com/chouchoutw?fref=ts" data-width="380" data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="false" data-show-border="true"></div>

						<?php dynamic_sidebar( 'sidebar-right' ); ?>

					<?php else : ?>

						<?php
							/*
							 * This content shows up if there are no widgets defined in the backend.
							*/
						?>

						<div class="no-widgets">
							<p><?php _e( 'This is a widget ready area. Add some and they will appear here.', 'bonestheme' );  ?></p>
						</div>

					<?php endif; ?>

				</div>
