<?php get_header(); ?>
<!--PAGE-OUR_STORES.PHP-->
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), '' ); $image = $image[0]; ?>
			<div id="content">
				<div class="page-header"  style="background-image: url('<?php echo $image; ?>'); background-repeat:no-repeat;">
					<header class="article-header">

						<h1 class="page-title" itemprop="headline"><?php the_title(); ?></h1>

					</header> <?php // end article header ?>
				</div>
				<div class="woodgrain"></div>
				<div class="content-group">
					
					<div id="inner-content" class="cf">

							<main id="main" class="m-all t-3of3 d-7of7 cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

								
								<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
									<section class="entry-content cf" itemprop="articleBody">
									<div class="page-headline"><?php the_field('page_headline'); ?></div>
									<div class="page-subhead"><?php the_field('page_subhead'); ?></div>
									<?php endwhile; endif; ?>
									<?php query_posts( array( 'post_type' => 'our_stores', ) ); 
										if (have_posts()) : while (have_posts()) : the_post(); ?>
										<div class="stores">
											<div class="store_slider"><?php the_field('header_slider'); ?></div>
											<div class="store_name"><?php the_title(); ?></div>
											<div class="store_info"><?php the_field('store_info'); ?><a class="info_link" href="https://maps.google.com?saddr=Current+Location&daddr=<?php the_field('store_address_link'); ?>" target="_blank"><?php the_field('store_address'); ?></a> <span class="mobile_hide"><?php the_field('store_phone_number'); ?></span> <a class="mobile_show info_link" href="tel:+1<?php the_field('store_phone_number_link'); ?>"><?php the_field('store_phone_number'); ?></a></div>
											<div class="store_content"><?php the_content(); ?></div>
										</div>
										<div class="bottom_border"></div>

									<?php
										endwhile; else : endif; 
										wp_reset_postdata(); 
									?>
										
									</section> <?php // end article section ?>

									
									

								</article>
																	
								
								
																	
							</main>
					</div>
				</div>
			</div>

<?php get_footer(); ?>
