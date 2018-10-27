<?php get_header(); ?>
<!--FRONT-PAGE-->
	<div id="content" class="front-page">
		<div id="main" class="twelvecol first clearfix" role="main">
			<?php query_posts('category_name=section-three'); ?>

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
					<div class="landing-page_header-info">
						<div class="left-header-info"><?php the_field('landing_page_header'); ?>
							<div class="page_subhead"><?php the_field('landing_page_content'); ?></div>
						</div>
						<div style="clear:both"></div>
						<div class="blocks instagram">
							<div class="caption">Our<div class="small-caption">Instagram</div></div>
							<?php echo do_shortcode ('[instagram-feed]'); ?>

						</div>
						<a href="/on-sale" class="blocks sale">
							<div class="caption"><div class="small-caption">What's on</div>Sale?</div>
							<img src="<?php the_field('whats_on_sale'); ?>">

						</a>
						<a href="/our-menu" class="blocks lunch">
							<div class="caption"><div class="small-caption">What's</div>Cooking?</div>
							<img src="<?php the_field('weekly_menu'); ?>">

						</a>

					</div>
				</div>
					
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
						 the_field('turnip_truck_story'); 
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
				// The Loop
				if ( $query->have_posts() ) {
					while ( $query->have_posts() ) {
						$query->the_post();
					?>
					
			<div class="inner-section-background" id="section-two">
				<section  class="clearfix border" >
				
				<div style="clear:left"></div>
				<div>
					<div class="content">
					<?php
						the_field('our_mission');
						}
					}
					/* Restore original Post Data */
					wp_reset_postdata();
					?>
					</div>
				</div>
				<div class="brown-triangles"></div>
			</section>
			</div>
			<!--END SECTION TWO-->
			<!-- BEGIN SECTION THREE -->
			
			<?php
				// The Loop
				if ( $query->have_posts() ) {
					while ( $query->have_posts() ) {
						$query->the_post();
					?>
					
			<div class="inner-section-background">
				<section id="section-three" class="clearfix border">
				<div>
					<div class="top-gradient"></div>
					<div class="content">

						<h2><?php

							the_field('section_title');
							 
							}
						} ?></h2>
						<div class="section-three-columns">
							<div class="column-one"><?php the_field('why_local_column_one'); ?></div>
							<div class="column-two"><?php the_field('why_local_column_two'); ?></div>
							<div class="column-three"><?php the_field('why_local_column_three'); ?></div>
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
			<!--BEGIN OUR FOUNDER-->
			<?php
				// The Loop
				if ( $query->have_posts() ) {
					while ( $query->have_posts() ) {
						$query->the_post();}
						}
					?>
			<div class="inner-section-background">
				<section id="section-four" class="clearfix border">
				<div>
					<div class="content">
						<div>
							<div class="founder_title_mobile"><?php the_field('founder_title'); ?></div>
							<div class="founder_headshot"><img src="<?php the_field('founder_headshot'); ?>"></div>
							<div class="founder_title"><?php the_field('founder_title'); ?></div>
							<div class="our_founder"><?php the_field('our_founder'); ?></div>	
						</div>

						
						<?php
						/* Restore original Post Data */
						wp_reset_postdata();
						?>

					</div>
				</div>
				</section>
			</div>
			<!--END OUR FOUNDER-->
		</div>
		</div> <?php // end #main ?>
	</div> <?php // end #content ?>

<?php get_footer(); ?>
