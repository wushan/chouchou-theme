<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="wrap cf">

						<main id="main" class="main-wrapper" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article">

								<header class="article-header">
                  <?php
                  // Must be inside a loop.
                    if ( has_post_thumbnail() ) {
                        // Set the proper thumbnail size tag in functions.php
                        ?><div class="article-feature-thumbnail"><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_post_thumbnail('bones-thumb-600-f'); ?></a></div><?php
                      }
                      else {
                        echo '';
                    }
                  ?>

									<h1 class="h2 entry-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>


								</header>

								<section class="entry-content cf">
									<?php the_excerpt(); ?>
								</section>

								<footer class="article-footer cf">
                  <p class="byline entry-meta vcard">
                    <?php printf( __( '%1$s', 'bonestheme' ),
                      /* the time the post was published */
                      '<time class="updated entry-time" datetime="' . get_the_time('Y-m-d') . '" itemprop="datePublished">' . get_the_time(get_option('date_format')) . '</time>'
                    ); ?>
                  </p>
									<div class="footer-comment-count">
										<?php comments_number( __( '<i class="fa fa-comment-o fa-lg"></i><div class="comment-counts">0</div>', 'bonestheme' ), __( '<i class="fa fa-comment-o fa-lg"></i><div class="comment-counts">1</div>', 'bonestheme' ), __( '<i class="fa fa-heart-o fa-lg hot"></i><div class="comment-counts">%</div>', 'bonestheme' ) );?>
									</div>

                  <?php the_views() ?>
                  <?php printf( '<div class="footer-category">' . __('<em>in</em>', 'bonestheme' ) . ': %1$s</div>' , get_the_category_list(', ') ); ?>

								</footer>

							</article>

							<?php endwhile; ?>

									<?php bones_page_navi(); ?>

							<?php else : ?>

									<article id="post-not-found" class="hentry cf">
											<header class="article-header">
												<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
										</header>
											<section class="entry-content">
												<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
										</section>
										<footer class="article-footer">
												<p><?php _e( 'This is the error message in the index.php template.', 'bonestheme' ); ?></p>
										</footer>
									</article>

							<?php endif; ?>


						</main>

					<?php get_sidebar(); ?>

				</div>

			</div>


<?php get_footer(); ?>
