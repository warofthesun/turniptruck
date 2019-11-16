<?php get_header(); ?>
<!--FRONT-PAGE-->
<div id="content" class="front-page">
	<div id="main" class="twelvecol first clearfix" role="main">
		<?php $query = new WP_Query( 'pagename=landing-page' ); ?>
		<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
		<?php if (has_post_thumbnail( $query->ID ) ):
		$image = wp_get_attachment_image_src( get_post_thumbnail_id( $query->ID ), 'large' );
		$image = $image[0]; ?>
		<?php endif; ?>
		<div style="background-image: url('<?php echo $image; ?>');" class="landing-page">
			<section id="top">
				<div class="logo-bar">
					<div class="logo"></div>
				</div>
			</section>
			<div class="landing-page_header-info">
				<div class="left-header-info">
					<?php the_field('landing_page_header'); ?>
					<div class="page_subhead">
						<?php the_field('landing_page_content'); ?>
					</div>
				</div>
					<?php
						$link = get_field('holiday_special_link');
				    $link_url = $link['url'];
				    $link_target = $link['target'] ? $link['target'] : '_self';
			    ?>
			    <a class="blocks holiday bottom" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
					<?php
						$image = get_field('holiday_special');

						// vars
						$url = $image['url'];

						// thumbnail
						$size = 'landing_blocks';
						$thumb = $image['sizes'][ $size ];
					?>
					<div class="caption"><div class="small-caption"><?php the_field('holiday-caption-line-one');?></div><?php the_field('holiday-caption-line-two');?></div>
					<img src="<?php echo $thumb; ?>">
				</a>
				<?php
					$link = get_field('whats_on_sale_link');
					$link_url = $link['url'];
					$link_target = $link['target'] ? $link['target'] : '_self';
				?>
				<a class="blocks top" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
					<?php
						$image = get_field('whats_on_sale');

						// vars
						$url = $image['url'];

						// thumbnail
						$size = 'landing_blocks';
						$thumb = $image['sizes'][ $size ];
					?>
					<div class="caption"><div class="small-caption"><?php the_field('sale-caption-line-one');?></div><?php the_field('sale-caption-line-two');?></div>
					<img src="<?php echo $thumb; ?>">
				</a>
				<div class="blocks instagram top">
					<div class="caption">Our<div class="small-caption">Instagram</div></div>
					<?php echo do_shortcode ('[instagram-feed]'); ?>
				</div>
				<?php
					$link = get_field('weekly_menu_link');
					$link_url = $link['url'];
					$link_target = $link['target'] ? $link['target'] : '_self';
				?>
				<a class="blocks lunch bottom" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
					<?php
						$image = get_field('weekly_menu');

						// vars
						$url = $image['url'];

						// thumbnail
						$size = 'landing_blocks';
						$thumb = $image['sizes'][ $size ];
					?>
					<div class="caption"><div class="small-caption"><?php the_field('menu-caption-line-one');?></div><?php the_field('menu-caption-line-two');?></div>
					<img src="<?php echo $thumb; ?>">
				</a>
			</div>
		</div>
		<?php if (has_post_thumbnail( $query->ID ) ):
			$image = wp_get_attachment_image_src( get_post_thumbnail_id( $query->ID ), 'atg-back' );
			$image = $image[0]; ?>
		<?php endif; ?>
		<div class="inner-section-background">
			<section id="section-one" class="clearfix border">
				<div>
					<div class="main-content" >
						<?php the_field('turnip_truck_story'); ?>
					</div>
					<div class="mascot"></div>
				</div>
			</section>
		</div>
		<!-- BEGIN SECTION TWO -->
		<div class="inner-section-background" id="section-two">
			<section  class="clearfix border" >
				<div style="clear:left"></div>
				<div>
					<div class="content">
						<?php the_field('our_mission'); ?>
					</div>
				</div>
				<div class="brown-triangles"></div>
			</section>
		</div>
		<!--END SECTION TWO-->
		<!-- BEGIN SECTION THREE -->
		<div class="inner-section-background">
			<section id="section-three" class="clearfix border">
				<div>
					<div class="top-gradient"></div>
					<div class="content">
						<h2>
								<?php the_field('section_title'); ?>
						</h2>
						<div class="section-three-columns">
							<div class="column-one"><?php the_field('why_local_column_one'); ?></div>
							<div class="column-two"><?php the_field('why_local_column_two'); ?></div>
							<div class="column-three"><?php the_field('why_local_column_three'); ?></div>
						</div>
					</div>
				</div>
			</section>
		</div>
		<!--END SECTION THREE-->
		<!--BEGIN OUR FOUNDER-->
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
					<?php endwhile; endif; ?>
					<?php wp_reset_postdata(); ?>
					</div>
				</div>
			</section>
		</div>
		<!--END OUR FOUNDER-->
	</div>
	</div> <?php // end #main ?>
</div> <?php // end #content ?>
<?php get_footer(); ?>
