<?php get_header(); ?>
<!--PAGE.PHP-->
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<div id="content">
				<div class="page-header">
					<header class="article-header">

						<h1 class="page-title" itemprop="headline"><?php the_title(); ?></h1>

					</header> <?php // end article header ?>
				</div>
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
