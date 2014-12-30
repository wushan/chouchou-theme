<?php
/* ------------------------------------------------------------------------- *
 *  Video page template
 *  ___________________________________________________
 *
 *  Template name: Video Page
/* ------------------------------------------------------------------------- */


// Custom Post Classes
$classes = array(
    'single-template-1',
	'page-template-normal',
    'clearfix'
);
$args = array(
  'tax_query' => array(
    array(
      'taxonomy' => 'post_format',
      'field' => 'slug',
      'terms' => 'post-format-video'
    )
  )
);
query_posts( $args );

?>
<?php get_header(); ?>

      <div id="content">

        <div id="inner-content" class="wrap cf">

            <main id="main" class="main-wrapper" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
              <div class="main-inner">
              <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

              <article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

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
                  <h1 class="page-title h3"><?php the_title(); ?></h1>




                </header>

                <section class="entry-content cf" itemprop="articleBody">

                </section>


                <footer class="article-footer cf">
                  <p class="byline vcard">
                    <?php printf( __( '<span class="author">%3$s</span>', 'bonestheme' ), get_the_time('Y-m-j'), get_the_time(get_option('date_format')), get_the_author_link( get_the_author_meta( 'ID' ) )); ?>
                  </p>
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

              <?php endwhile; else : ?>

                  <article id="post-not-found" class="hentry cf">
                      <header class="article-header">
                        <h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
                    </header>
                      <section class="entry-content">
                        <p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
                    </section>
                    <footer class="article-footer">
                        <p><?php _e( 'This is the error message in the page-custom.php template.', 'bonestheme' ); ?></p>
                    </footer>
                  </article>

              <?php endif; ?>
              </div>
            </main>

        </div>

      </div>


<?php get_footer(); ?>
