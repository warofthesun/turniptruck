<?php get_header(); ?>
<!--FRONT-PAGE_ORIGINAL-WORKING.PHP-->
	<div id="content" class="front-page">
		<div id="main" class="twelvecol first clearfix" role="main">
			<?php
			$query = new WP_Query( 'pagename=landing-page' );
			?>
			<?php
				// The Loop
				if ( $query->have_posts() ) {
					while ( $query->have_posts() ) {
						$query->the_post();
					?>
					<?php
					if (has_post_thumbnail( $query->ID ) ):
						$image = wp_get_attachment_image_src( get_post_thumbnail_id( $query->ID ), 'large' );
						$image = $image[0];
						else :
						$image = get_stylesheet_directory_uri() . '/images/default_cat_img.jpg';
						endelse;
						endif;
						}
					}

				?>
				<div style="background-image: url('<?php echo $image; ?>');" class="landing-page">
					<section id="top">
						<div class="logo-bar">
							<div class="logo"></div>
						</div>
					</section>
				</div>
					<?php
					$query = new WP_Query( 'pagename=section-one' );
					?>
					<?php
						// The Loop
						if ( $query->have_posts() ) {
							while ( $query->have_posts() ) {
								$query->the_post();
							?>
							<?php
							if (has_post_thumbnail( $query->ID ) ):
								$image = wp_get_attachment_image_src( get_post_thumbnail_id( $query->ID ), 'atg-back' );
								$image = $image[0];
								else :
								$image = get_stylesheet_directory_uri() . '/images/default_cat_img.jpg';
								endelse;
								endif;
							?>
			<div class="inner-section-background">
				<section id="section-one" class="clearfix border">
				<div>
				<div class="main-content" >
					<?php
						the_content();
						}
					}
					/* Restore original Post Data */
					wp_reset_postdata();
					?>
				</div>
				<div class="mascot"></div>
				</div>
			</section>
			</div>
			<!-- BEGIN SECTION TWO -->
			<?php
			$query = new WP_Query( 'pagename=section-two' );
			?>
			<?php
				// The Loop
				if ( $query->have_posts() ) {
					while ( $query->have_posts() ) {
						$query->the_post();
					?>
					
			<div class="inner-section-background">
				<section id="section-two" class="clearfix border">
				
				<div style="clear:left"></div>
				<div>
					<div class="content">
					<?php
						the_content();
						}
					}
					/* Restore original Post Data */
					wp_reset_postdata();
					?>
					</div>
				</div>
				<div class="black-triangles"></div>
			</section>
			</div>
			<!--END SECTION TWO-->
			<!-- BEGIN SECTION THREE -->
			<?php
			$query = new WP_Query( 'pagename=section-three' );
			?>
			<?php
				// The Loop
				if ( $query->have_posts() ) {
					while ( $query->have_posts() ) {
						$query->the_post();
					?>
					
			<div class="inner-section-background">
				<section id="section-three" class="clearfix border">
				<div>
					<div class="content">

						<?php

							the_content();
							 
							}
						} ?>
						<div class="section-three-columns">
							<div class="column-one"><?php the_field('column_one'); ?></div>
							<div class="column-two"><?php the_field('column_two'); ?></div>
							<div class="column-three"><?php the_field('column_three'); ?></div>
						</div>

						
						<?php
						/* Restore original Post Data */
						wp_reset_postdata();
						?>

					</div>
				</div>
			</section>
			</div>
			<!--END SECTION THREE-->
		</div>
		</div> <?php // end #main ?>
	</div> <?php // end #content ?>

<?php get_footer(); ?>
