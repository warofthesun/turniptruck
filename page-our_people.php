<?php
/*
Template Name: Our People
*/
?>
<?php get_header(); ?>
<!--PAGE-OUR_PEOPLE.PHP-->
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
									<section class="entry-content cf our-people-container" itemprop="articleBody">
									<div class="page-headline"><?php the_field('page_headline'); ?></div>
									<div class="page-subhead"><?php the_field('page_subhead'); ?></div>
									<div style="max-width: 640px;margin: 0 auto;float: none;">
									<?php endwhile; endif; ?>
									<?php query_posts( array( 'post_type' => 'our_people', ) ); 
									 while ( have_posts() ) : the_post();?>
										<a class="our-people eModal-post-<?php the_ID();?>" href="<?php the_permalink();?>">
											<div>
											
											<?php the_post_thumbnail('our-people'); ?>
											<div class="bio-expand"></div>

											</div>
										    <div class="title"><?php the_title();?></div>
										    <div class="store_position"><?php the_field('store_position'); ?></div>
										</a>
										<?php 
										
										echo do_shortcode("[modal id='post-". get_the_ID() ."' size='medium' ]" .  "<div class='our-people-modal'><div class='additional_image'><img src='" . get_field('additional_image') . "'/></div><div class='our-people-modal-content'><div class='title'>" . get_the_title() . "</div><div class='store_position'>" . get_field('store_position') . "</div><div class='content'>" . get_the_content() . "</div><div class='contact'><a href='mailto:'" . get_field('email_address') . ">" . get_field('email_address') . "</a><div class='phone_number'>" . get_field('phone_number') . "</div></div></div></div>" . "[/modal]");

										?>

									<?php
										endwhile; 
										wp_reset_postdata(); 
									?>
									</div>
									</section> <?php // end article section ?>
								</article>
							</main>
					</div>
				</div>
			</div>

<?php get_footer(); ?>
