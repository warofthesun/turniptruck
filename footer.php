<!--FOOTER.PHP-->
			<footer class="footer" role="contentinfo" itemscope itemtype="http://schema.org/WPFooter">

				<div id="inner-footer" class="wrap cf">

					<nav role="navigation">
						<?php wp_nav_menu(array(
    					'container' => 'div',                           // enter '' to remove nav container (just make sure .footer-links in _base.scss isn't wrapping)
    					'container_class' => 'footer-links cf',         // class of container (should you choose to use it)
    					'menu' => __( 'Footer Links', 'bonestheme' ),   // nav name
    					'menu_class' => 'nav footer-nav cf',            // adding custom nav class
    					'theme_location' => 'footer-links',             // where it's located in the theme
    					'before' => '',                                 // before the menu
    					'after' => '',                                  // after the menu
    					'link_before' => '',                            // before each link
    					'link_after' => '',                             // after each link
    					'depth' => 0,                                   // limit the depth of the nav
    					'fallback_cb' => 'bones_footer_links_fallback'  // fallback function
						)); ?>
					</nav>
					<?php $query = new WP_Query( 'pagename=landing-page' ); ?>
					<?php
						// The Loop
						if ( $query->have_posts() ) {
							while ( $query->have_posts() ) {
								$query->the_post();
								?>
					<div class="social-icons">
						<a href="https://facebook.com/<?php the_field('facebook_link'); ?>" target="_blank" class="starter-icons-facebook"></a>
						<a href="https://twitter.com/<?php the_field('twitter_link'); ?>" target="_blank" class="starter-icons-twitter"></a>
						<a href="https://instagram.com/<?php the_field('instagram_link'); ?>" target="_blank" class="starter-icons-instagram"></a><br>
						<a href="http://theturniptruck.applicantpro.com/jobs/" target="_blank" class="apply">Apply for a Job</a>
					</div>

					<div class="footer-info">
					<?php
					
						the_field('footer_info');
						}
					}
					/* Restore original Post Data */
					wp_reset_postdata();
					?>
					<p class="source-org copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?>.</p>
					</div>
					

				</div>

			</footer>

		</div>

		<?php // all js scripts are loaded in library/bones.php ?>
		<?php wp_footer(); ?>

	</body>

</html> <!-- end of site. what a ride! -->
