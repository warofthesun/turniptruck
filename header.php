<!doctype html>
<!--HEADER.PHP-->
<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
		<link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
		<meta charset="utf-8">

		<?php // force Internet Explorer to use the latest rendering engine available ?>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<title><?php wp_title(''); ?></title>

		<?php // mobile meta (hooray!) ?>
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1"/>

		<?php // icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) ?>
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-touch-icon.png">
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<![endif]-->
		<?php // or, set /favicon.ico for IE10 win ?>
		<meta name="msapplication-TileColor" content="#f01d4f">
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">
            <meta name="theme-color" content="#121212">

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<?php // wordpress head functions ?>
		<?php wp_head(); ?>
		<?php // end of wordpress head ?>

		<?php // drop Google Analytics Here ?>
		<?php // end analytics ?>

	</head>

	<body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">

		<div id="container">

			<header class="header" role="banner" itemscope itemtype="http://schema.org/WPHeader">

				<div id="inner-header" class="header-wrap cf">

					<?php // to use a image just replace the bloginfo('name') with your img src and remove the surrounding <p> ?>
					<a href="<?php echo home_url(); ?>" rel="nofollow" class="tt-logo"><?php bloginfo('name'); ?></a>
					<?php if(get_field('add_mercato_buttons', 'option') ) :
						$field = get_field_object('color', 'option');
						$value = $field['value'];
					?>
					<div class="mercato-badge">
						<?php
							$homepage_badge = get_field('homepage_badge', 'option');
							$link = get_field('alternate_link', 'option');
							$link_url = $link['url'];
							$link_title = $link['title'];
							$link_target = $link['target'] ? $link['target'] : '_self';
							if( !empty($homepage_badge) ):
								$url = $homepage_badge['url'];
								$title = $homepage_badge['title'];
								$alt = $homepage_badge['alt'];
								$caption = $homepage_badge['caption'];

								// thumbnail
								$size = 'large';
								$thumb = $homepage_badge['sizes'][ $size ];
								$width = $homepage_badge['sizes'][ $size . '-width' ];
								$height = $homepage_badge['sizes'][ $size . '-height' ]; ?>
								<a href="<?php echo esc_url( $link_url ); ?>" title="<?php echo $link_title; ?>" class="alternate-mercato-badge_home">
							  	<img src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>" />
							  </a>

							<?php elseif( $link ): ?>
								<a href="<?php echo esc_url( $link_url ); ?>" class="mercato-merchant-anchor" target="<?php echo esc_attr( $link_target ); ?>"><img src="https://dye1fo42o13sl.cloudfront.net/buttons/store-marketing/201909_01/<?php the_field('delivery_or_online', 'option'); ?>-badge-<?php echo esc_attr($value); ?>@2x.png" onmouseover="this.src='https://dye1fo42o13sl.cloudfront.net/buttons/store-marketing/201909_01/<?php the_field('delivery_or_online', 'option'); ?>-badge-<?php echo esc_attr($value); ?>@2x.png'" onmouseout="this.src='https://dye1fo42o13sl.cloudfront.net/buttons/store-marketing/201909_01/<?php the_field('delivery_or_online', 'option'); ?>-badge-<?php echo esc_attr($value); ?>@2x.png'" alt="Shop Mercato.com" width="200" height="200"></a>
						    </a>
						<?php else : ?>
						<a href="https://www.mercato.com/shop/the-turnip-truck?utm_source=1257.The_Turnip_Truck&amp;utm_medium=shopnow" class="mercato-merchant-anchor" target="_blank"><img src="https://dye1fo42o13sl.cloudfront.net/buttons/store-marketing/201909_01/<?php the_field('delivery_or_online', 'option'); ?>-badge-<?php echo esc_attr($value); ?>@2x.png" onmouseover="this.src='https://dye1fo42o13sl.cloudfront.net/buttons/store-marketing/201909_01/<?php the_field('delivery_or_online', 'option'); ?>-badge-<?php echo esc_attr($value); ?>@2x.png'" onmouseout="this.src='https://dye1fo42o13sl.cloudfront.net/buttons/store-marketing/201909_01/<?php the_field('delivery_or_online', 'option'); ?>-badge-<?php echo esc_attr($value); ?>@2x.png'" alt="Shop Mercato.com" width="200" height="200"></a>
						<?php endif; ?>
					</div>
					<?php endif; ?>

					<div class="mobile-nav">
						<div class="header-buttons">
							<?php if(get_field('add_mercato_buttons', 'option') ) :
								$field = get_field_object('color', 'option');
								$value = $field['value'];
							?>
								<div class="mercato-button_mobile">
									<?php
										$header_badge = get_field('header_badge', 'option');
										$link = get_field('alternate_link', 'option');
										$link_url = $link['url'];
										$link_title = $link['title'];
										$link_target = $link['target'] ? $link['target'] : '_self';
										if( !empty($header_badge) ):
											$url = $header_badge['url'];
											$title = $header_badge['title'];
											$alt = $header_badge['alt'];
											$caption = $header_badge['caption'];

											// thumbnail
											$size = 'large';
											$thumb = $header_badge['sizes'][ $size ];
											$width = $header_badge['sizes'][ $size . '-width' ];
											$height = $header_badge['sizes'][ $size . '-height' ]; ?>
											<a href="<?php echo esc_url( $link_url ); ?>" title="<?php echo $link_title; ?>" class="alternate-mercato-badge_mobile">
										  	<img src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>" />
										  </a>

										<?php elseif( $link ): ?>
												<a href="<?php echo esc_url( $link_url ); ?>" class="mercato-merchant-anchor" target="<?php echo esc_attr( $link_target ); ?>"><img src="https://dye1fo42o13sl.cloudfront.net/buttons/store-marketing/201909_01/shop-now-<?php if( get_field('delivery_or_online' , 'option') == 'delivery' ) : ?>delivery-<?php endif; ?>btn-<?php echo esc_attr($value); ?>@2x.png" onmouseover="this.src='https://dye1fo42o13sl.cloudfront.net/buttons/store-marketing/201909_01/shop-now-<?php if( get_field('delivery_or_online' , 'option') == 'delivery' ) : ?>delivery-<?php endif; ?>btn-<?php echo esc_attr($value); ?>-hover@2x.png'" onmouseout="this.src='https://dye1fo42o13sl.cloudfront.net/buttons/store-marketing/201909_01/shop-now-<?php if( get_field('delivery_or_online' , 'option') == 'delivery' ) : ?>delivery-<?php endif; ?>btn-<?php echo esc_attr($value); ?>@2x.png'" alt="Shop Mercato.com" width="210" height="auto"></a>
									<?php else : ?>
								<a href="https://www.mercato.com/shop/the-turnip-truck?utm_source=1257.The_Turnip_Truck&amp;utm_medium=shopnow" class="mercato-merchant-anchor" target="_blank"><img src="https://dye1fo42o13sl.cloudfront.net/buttons/store-marketing/201909_01/shop-now-<?php if( get_field('delivery_or_online' , 'option') == 'delivery' ) : ?>delivery-<?php endif; ?>btn-<?php echo esc_attr($value); ?>@2x.png" onmouseover="this.src='https://dye1fo42o13sl.cloudfront.net/buttons/store-marketing/201909_01/shop-now-<?php if( get_field('delivery_or_online' , 'option') == 'delivery' ) : ?>delivery-<?php endif; ?>btn-<?php echo esc_attr($value); ?>-hover@2x.png'" onmouseout="this.src='https://dye1fo42o13sl.cloudfront.net/buttons/store-marketing/201909_01/shop-now-<?php if( get_field('delivery_or_online' , 'option') == 'delivery' ) : ?>delivery-<?php endif; ?>btn-<?php echo esc_attr($value); ?>@2x.png'" alt="Shop Mercato.com" width="210" height="auto"></a>
								<?php endif; ?>
							</div>
						<?php endif; ?>
						<div class="vote-now_mobile">
							<?php
								$vote_now = get_field('vote_now_button', 'option');
								$link = get_field('button_link', 'option');
								$link_url = $link['url'];
								$link_title = $link['title'];
								$link_target = $link['target'] ? $link['target'] : '_self';
								if( !empty($vote_now) ):
									$url = $vote_now['url'];
									$title = $vote_now['title'];
									$alt = $vote_now['alt'];
									$caption = $vote_now['caption'];

									// thumbnail
									$size = 'large';
									$thumb = $vote_now['sizes'][ $size ];
									$width = $vote_now['sizes'][ $size . '-width' ];
									$height = $vote_now['sizes'][ $size . '-height' ]; ?>

									<a href="<?php echo esc_url( $link_url ); ?>" title="<?php echo $link_title; ?>" class="vote-now">
										<img src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>" />
										<h4><?php echo $link_title; ?></h4>
									</a>
								<?php endif; ?>
						</div>
						</div>
					</div>

					<nav role="navigation" itemscope itemtype="http://schema.org/SiteNavigationElement">
						<?php wp_nav_menu(array(
    					         'container' => false,                           // remove nav container
    					         'container_class' => 'menu cf',                 // class of container (should you choose to use it)
    					         'menu' => __( 'The Main Menu', 'bonestheme' ),  // nav name
    					         'menu_class' => 'nav top-nav cf',               // adding custom nav class
    					         'theme_location' => 'main-nav',                 // where it's located in the theme
    					         'before' => '',                                 // before the menu
        			               'after' => '',                                  // after the menu
        			               'link_before' => '',                            // before each link
        			               'link_after' => '',                             // after each link
        			               'depth' => 0,                                   // limit the depth of the nav
    					         'fallback_cb' => ''                             // fallback function (if there is one)
						)); ?>

					</nav>

				</div>
				<?php $query = new WP_Query( 'pagename=landing-page' ); ?>
				<?php
					// The Loop
					if ( $query->have_posts() ) {
						while ( $query->have_posts() ) {
							$query->the_post();
							?>
				<div class="woodgrain">
					<div class="social-icons wrap">
								<?php if(get_field('add_mercato_buttons', 'option') ) :
									$field = get_field_object('color', 'option');
									$value = $field['value'];
								?>
								<div class="mercato-button">
									<?php
										$header_badge = get_field('header_badge', 'option');
										$link = get_field('alternate_link', 'option');
										$link_url = $link['url'];
										$link_title = $link['title'];
										$link_target = $link['target'] ? $link['target'] : '_self';
										if( !empty($header_badge) ):
											$url = $header_badge['url'];
											$title = $header_badge['title'];
											$alt = $header_badge['alt'];
											$caption = $header_badge['caption'];

											// thumbnail
											$size = 'large';
											$thumb = $header_badge['sizes'][ $size ];
											$width = $header_badge['sizes'][ $size . '-width' ];
											$height = $header_badge['sizes'][ $size . '-height' ]; ?>
											<a href="<?php echo esc_url( $link_url ); ?>" title="<?php echo $link_title; ?>" class="alternate-mercato-badge_header">
										  	<img src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>" />
										  </a>

										<?php elseif( $link ): ?>
												<a href="<?php echo esc_url( $link_url ); ?>" class="mercato-merchant-anchor" target="<?php echo esc_attr( $link_target ); ?>"><img src="https://dye1fo42o13sl.cloudfront.net/buttons/store-marketing/201909_01/shop-now-<?php if( get_field('delivery_or_online' , 'option') == 'delivery' ) : ?>delivery-<?php endif; ?>btn-<?php echo esc_attr($value); ?>@2x.png" onmouseover="this.src='https://dye1fo42o13sl.cloudfront.net/buttons/store-marketing/201909_01/shop-now-<?php if( get_field('delivery_or_online' , 'option') == 'delivery' ) : ?>delivery-<?php endif; ?>btn-<?php echo esc_attr($value); ?>-hover@2x.png'" onmouseout="this.src='https://dye1fo42o13sl.cloudfront.net/buttons/store-marketing/201909_01/shop-now-<?php if( get_field('delivery_or_online' , 'option') == 'delivery' ) : ?>delivery-<?php endif; ?>btn-<?php echo esc_attr($value); ?>@2x.png'" alt="Shop Mercato.com" width="210" height="auto"></a>
									<?php else : ?>
									<a href="https://www.mercato.com/shop/the-turnip-truck?utm_source=1257.The_Turnip_Truck&amp;utm_medium=shopnow" class="mercato-merchant-anchor" target="_blank"><img src="https://dye1fo42o13sl.cloudfront.net/buttons/store-marketing/201909_01/shop-now-<?php if( get_field('delivery_or_online' , 'option') == 'delivery' ) : ?>delivery-<?php endif; ?>btn-<?php echo esc_attr($value); ?>@2x.png" onmouseover="this.src='https://dye1fo42o13sl.cloudfront.net/buttons/store-marketing/201909_01/shop-now-<?php if( get_field('delivery_or_online' , 'option') == 'delivery' ) : ?>delivery-<?php endif; ?>btn-<?php echo esc_attr($value); ?>-hover@2x.png'" onmouseout="this.src='https://dye1fo42o13sl.cloudfront.net/buttons/store-marketing/201909_01/shop-now-<?php if( get_field('delivery_or_online' , 'option') == 'delivery' ) : ?>delivery-<?php endif; ?>btn-<?php echo esc_attr($value); ?>@2x.png'" alt="Shop Mercato.com" width="150" height="auto"></a>
									<?php endif; ?>
								</div>
							<?php endif; ?>


						<a href="https://www.facebook.com/<?php the_field('facebook_link', 'options'); ?>" target="_blank" class="starter-icons-facebook"></a>
						<a href="https://twitter.com/<?php the_field('twitter_link', 'options'); ?>" target="_blank" class="starter-icons-twitter"></a>
						<a href="https://instagram.com/<?php the_field('instagram_link', 'options'); ?>" target="_blank" class="starter-icons-instagram"></a>
					</div>
				</div>
				<?php


					}
				}
				/* Restore original Post Data */
				wp_reset_postdata();
				?>

			</header>
