<?php get_header(); ?>

			<div id="content">

        <!--Lets make the Video Embed here if it is an video post-->
        <?php if ( get_post_meta( get_the_ID(), 'video', true ) ) : ?>
            <div class="wide-video-wrapper">
              <div class="wide-video-inner">
              <?php
              $vidstring = get_post_meta( get_the_ID(), 'video', true );

              echo $wp_embed->shortcode(array(), $vidstring);
              ?>
              </div>
            </div>
        <?php else :?>
          <!-- No Video Links in this post -->
        <?php endif; ?>
        <!-- End Video -->

				<div id="inner-content" class="wrap cf">
        <?php get_sidebar('sidebar-left'); ?>
					<main id="main" class="main-wrapper" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<?php
								/*
								 * Ah, post formats. Nature's greatest mystery (aside from the sloth).
								 *
								 * So this function will bring in the needed template file depending on what the post
								 * format is. The different post formats are located in the post-formats folder.
								 *
								 *
								 * REMEMBER TO ALWAYS HAVE A DEFAULT ONE NAMED "format.php" FOR POSTS THAT AREN'T
								 * A SPECIFIC POST FORMAT.
								 *
								 * If you want to remove post formats, just delete the post-formats folder and
								 * replace the function below with the contents of the "format.php" file.
								*/
								get_template_part( 'post-formats/format', get_post_format() );
							?>

						<?php endwhile; ?>

						<?php else : ?>

							<article id="post-not-found" class="hentry cf">
									<header class="article-header">
										<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
									</header>
									<section class="entry-content">
										<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
									</section>
									<footer class="article-footer">
											<p><?php _e( 'This is the error message in the single.php template.', 'bonestheme' ); ?></p>
									</footer>
							</article>

						<?php endif; ?>

					</main>

					<?php get_sidebar(); ?>

				</div>

			</div>

<?php get_footer(); ?>
