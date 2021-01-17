<?php
/*
 Template Name: General Use
 *
 * This is your custom page template. You can create as many of these as you need.
 * Simply name is "page-whatever.php" and in add the "Template Name" title at the
 * top, the same way it is here.
 *
 * When you create your page, you can just select the template and viola, you have
 * a custom page template to call your very own. Your mother would be so proud.
 *
 * For more info: http://codex.wordpress.org/Page_Templates
*/
?>

<?php get_header(); ?>
<!--PAGE-GENERAL.PHP-->
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

									
									

								</article>
																	
								
								
																	
							</main>
					</div>
				</div>
			</div>


<?php get_footer(); ?>
