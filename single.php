<?php get_header(); ?>
<!--SINGLE.PHP-->
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), '' ); $image = $image[0]; ?>
			<div id="content">
        <div class="page-header"  >
          <header class="article-header">

            <h1 class="page-title blog" itemprop="headline"><?php the_title(); ?></h1>
            

          </header> <?php // end article header ?>
          <?php
                    endwhile; else : endif; 
                  ?>
        </div>
        <div class="content-group">
  				<div id="inner-content" class="wrap cf">
          <div style="background-color:white;width:100%;float:left;">
  					<main id="main" class="m-all t-3of3 d-5of7 cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

  						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

  							<article id="post-<?php the_ID(); ?>" <?php post_class('cf'); ?> role="article" itemscope itemprop="blogPost" itemtype="http://schema.org/BlogPosting">
                <header class="article-header entry-header">

                  
                </header> <?php // end article header ?>

                  
                  <div class="blog-image">
                  <?php 
                  if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
                    the_post_thumbnail('large');
                  } 
                  ?>
                  </div>
                  <section class="entry-content cf" itemprop="articleBody"  style="min-height:0px;">
                    <?php
                      // the content (pretty self explanatory huh)
                      the_content();

                      /*
                       * Link Pages is used in case you have posts that are set to break into
                       * multiple pages. You can remove this if you don't plan on doing that.
                       *
                       * Also, breaking content up into multiple pages is a horrible experience,
                       * so don't do it. While there are SOME edge cases where this is useful, it's
                       * mostly used for people to get more ad views. It's up to you but if you want
                       * to do it, you're wrong and I hate you. (Ok, I still love you but just not as much)
                       *
                       * http://gizmodo.com/5841121/google-wants-to-help-you-avoid-stupid-annoying-multiple-page-articles
                       *
                      */
                      wp_link_pages( array(
                        'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'bonestheme' ) . '</span>',
                        'after'       => '</div>',
                        'link_before' => '<span>',
                        'link_after'  => '</span>',
                      ) );
                    ?>
                  </section> <?php // end article section ?>

                  <footer class="article-footer">

                    <?php printf( __( 'filed under', 'bonestheme' ).': %1$s', get_the_category_list(', ') ); ?>

                    <?php the_tags( '<p class="tags"><span class="tags-title">' . __( 'Tags:', 'bonestheme' ) . '</span> ', ', ', '</p>' ); ?>

                  </footer> <?php // end article footer ?>

                  <?php //comments_template(); ?>

                </article> <?php // end article ?>

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
        </div>
			</div>

<?php get_footer(); ?>
