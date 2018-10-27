<?php
/*
 Template Name: Blog
*/
?>

<?php get_header(); ?>
<!--PAGE-BLOG.PHP-->
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), '' ); $image = $image[0]; ?>
			<div id="content">
				<div class="page-header"  style="background-image: url('<?php echo $image; ?>'); background-repeat:no-repeat;">
					<header class="article-header">

						<h1 class="page-title" itemprop="headline"><?php the_title(); ?></h1>

					</header> <?php // end article header ?>
					<?php
										endwhile; else : endif; 
									?>
				</div>
				<div class="woodgrain"></div>
				<div class="content-group">
					
					<div id="inner-content" class="cf" >
						<div style="background-color:white;width:100%;float:left;">
							<main id="main" class="m-all t-3of3 d-5of7 cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

								<?php query_posts('post_type=post&post_status=publish&posts_per_page=10&paged='. get_query_var('paged')); ?>
								<?php if( have_posts() ): ?>

        						<?php while( have_posts() ): the_post(); ?>
									<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article">

								<header class="article-header">

									<h1 class="h2 entry-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
									<p class="byline entry-meta vcard">
                                                                        <?php printf( __( 'Posted', 'bonestheme' ).' %1$s %2$s',
                       								/* the time the post was published */
                       								'<time class="updated entry-time" datetime="' . get_the_time('Y-m-d') . '" itemprop="datePublished">' . get_the_time(get_option('date_format')) . '</time>',
                       								/* the author of the post */
                       								'<span class="by">'.__( 'by', 'bonestheme').'</span> <span class="entry-author author" itemprop="author" itemscope itemptype="http://schema.org/Person">' . get_the_author_link( get_the_author_meta( 'ID' ) ) . '</span>'
                    							); ?>
									</p>

								</header>
								<div class="blog-image">
								<?php 
								if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
								  the_post_thumbnail('large');
								} 
								?>
								</div>
								<section class="entry-content cf" style="min-height:0px;">
									<?php the_excerpt(); ?>
								</section>

								<footer class="article-footer cf">
									<p class="footer-comment-count">
										<?php comments_number( __( '<span>No</span> Comments', 'bonestheme' ), __( '<span>One</span> Comment', 'bonestheme' ), __( '<span>%</span> Comments', 'bonestheme' ) );?>
									</p>


					                 	<?php printf( '<p class="footer-category">' . __('filed under', 'bonestheme' ) . ': %1$s</p>' , get_the_category_list(', ') ); ?>

					                  <?php the_tags( '<p class="footer-tags tags"><span class="tags-title">' . __( 'Tags:', 'bonestheme' ) . '</span> ', ', ', '</p>' ); ?>


								</footer>

								</article>
									<?php endwhile; endif; ?>
								
							</main>
							<?php get_sidebar(); ?>
						</div>
					</div>

				</div>
			</div>


<?php get_footer(); ?>
