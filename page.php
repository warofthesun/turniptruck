<?php get_header(); ?>
<!--PAGE.PHP-->
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), '' ); $image = $image[0]; ?>
			<div id="content">
				<div class="page-header"  style="background-image: url('<?php echo $image; ?>'); background-repeat:no-repeat;">
					<header class="article-header">

						<h1 class="page-title" itemprop="headline"><?php the_title(); ?></h1>

					</header> <?php // end article header ?>
				</div>
				<div class="content-group">
					
					<div id="inner-content" class="cf">

							<main id="main" class="m-all t-2of3 d-7of7 cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

								
								<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

									

									<section class="entry-content cf" itemprop="articleBody">
									<div class="page-headline"><?php the_field('page_headline'); ?></div>
									<div class="page-subhead"><?php the_field('page_subhead'); ?></div>
									<section class="entry-content cf" itemprop="articleBody">
									
										<div>
											<?php
										// the content (pretty self explanatory huh)
										the_content();
										?>
										</div>
										

									<?php
										endwhile; else : endif; 
										wp_reset_postdata(); 
									?>
										
									</section> <?php // end article section ?>
										
									</section> <?php // end article section ?>

									<footer class="article-footer cf">

									</footer>

									

								</article>
																	
							</main>
					</div>
				</div>
			</div>

<?php get_footer(); ?>
