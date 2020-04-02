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
						<a href="https://www.mercato.com/shop/the-turnip-truck?utm_source=1257.The_Turnip_Truck&amp;utm_medium=shopnow" class="mercato-merchant-anchor" target="_blank"><img src="https://dye1fo42o13sl.cloudfront.net/buttons/store-marketing/201909_01/<?php the_field('delivery_or_online', 'option'); ?>-badge-<?php echo esc_attr($value); ?>@2x.png" onmouseover="this.src='https://dye1fo42o13sl.cloudfront.net/buttons/store-marketing/201909_01/<?php the_field('delivery_or_online', 'option'); ?>-badge-<?php echo esc_attr($value); ?>@2x.png'" onmouseout="this.src='https://dye1fo42o13sl.cloudfront.net/buttons/store-marketing/201909_01/<?php the_field('delivery_or_online', 'option'); ?>-badge-<?php echo esc_attr($value); ?>@2x.png'" alt="Shop Mercato.com" width="200" height="200"></a>
					</div>
					<?php endif; ?>
					<?php // if you'd like to use the site description you can un-comment it below ?>
					<?php // bloginfo('description'); ?>
					<div class="mobile-nav">
						<?php if(get_field('add_mercato_buttons', 'option') ) :
							$field = get_field_object('color', 'option');
							$value = $field['value'];
						?>
							<div class="mercato-button_mobile">
							<a href="https://www.mercato.com/shop/the-turnip-truck?utm_source=1257.The_Turnip_Truck&amp;utm_medium=shopnow" class="mercato-merchant-anchor" target="_blank"><img src="https://dye1fo42o13sl.cloudfront.net/buttons/store-marketing/201909_01/shop-now-<?php if( get_field('delivery_or_online' , 'option') == 'delivery' ) : ?>delivery-<?php endif; ?>btn-<?php echo esc_attr($value); ?>@2x.png" onmouseover="this.src='https://dye1fo42o13sl.cloudfront.net/buttons/store-marketing/201909_01/shop-now-<?php if( get_field('delivery_or_online' , 'option') == 'delivery' ) : ?>delivery-<?php endif; ?>btn-<?php echo esc_attr($value); ?>-hover@2x.png'" onmouseout="this.src='https://dye1fo42o13sl.cloudfront.net/buttons/store-marketing/201909_01/shop-now-<?php if( get_field('delivery_or_online' , 'option') == 'delivery' ) : ?>delivery-<?php endif; ?>btn-<?php echo esc_attr($value); ?>@2x.png'" alt="Shop Mercato.com" width="150" height="auto"></a>
						</div>
					<?php endif; ?>
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
								<a href="https://www.mercato.com/shop/the-turnip-truck?utm_source=1257.The_Turnip_Truck&amp;utm_medium=shopnow" class="mercato-merchant-anchor" target="_blank"><img src="https://dye1fo42o13sl.cloudfront.net/buttons/store-marketing/201909_01/shop-now-<?php if( get_field('delivery_or_online' , 'option') == 'delivery' ) : ?>delivery-<?php endif; ?>btn-<?php echo esc_attr($value); ?>@2x.png" onmouseover="this.src='https://dye1fo42o13sl.cloudfront.net/buttons/store-marketing/201909_01/shop-now-<?php if( get_field('delivery_or_online' , 'option') == 'delivery' ) : ?>delivery-<?php endif; ?>btn-<?php echo esc_attr($value); ?>-hover@2x.png'" onmouseout="this.src='https://dye1fo42o13sl.cloudfront.net/buttons/store-marketing/201909_01/shop-now-<?php if( get_field('delivery_or_online' , 'option') == 'delivery' ) : ?>delivery-<?php endif; ?>btn-<?php echo esc_attr($value); ?>@2x.png'" alt="Shop Mercato.com" width="150" height="auto"></a>
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
