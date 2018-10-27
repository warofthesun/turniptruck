<?php
/*
Template Name: Our Farmers
*/
?>
<?php get_header(); ?>
<!--PAGE-OUR_FARMERS.PHP-->
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
									<?php query_posts( array( 'post_type' => 'our_farmers', ) ); 
										if (have_posts()) : while (have_posts()) : the_post(); ?>

										<div class="farm">
											<div class="left_column">
												<a href="http://www.<?php the_field('farm_website'); ?>" target="_blank" class="farmer_profile"><?php the_post_thumbnail('farmer-profile'); ?></a>
											</div>
											<div class="right_column">
												<a href="http://www.<?php the_field('farm_website'); ?>" target="_blank" class="farm_name"><?php the_title(); ?></a>
												<div class="farm_location"><?php the_field('farm_location'); ?></div>
												<div class="farm_content"><?php the_content(); ?></div>
											</div>
											
											<div class="farm_quote"><?php the_field('farm_quote'); ?></div>
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
