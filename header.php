<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "container" div.
 *
 * @package GreaterJacksonHabitatTheme2018
 * @since FoundationPress 1.0.0
 */

?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<?php wp_head(); ?>
	</head>
	<?php
	// Events Calendar, why
	wp_reset_postdata();
	?>
	<body <?php body_class( array(
		'offcanvas',
	)); ?>>
		
	<?php do_action( 'gjh_body_start' ); ?>

	<?php get_template_part( 'template-parts/mobile-off-canvas' ); ?>

	<header class="site-header" role="banner" data-sticky-container>
		<div class="sticky-top-bar" data-sticky data-options="anchor: page; marginTop: 0; stickyOn: small;">
			
			<div class="row">
				<div class="small-12 columns">
				
					<div class="site-title-bar title-bar">
						<div class="title-bar-left">
							<span class="site-mobile-title title-bar-title show-for-small-only">
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">

									<div class="svg-container">
										<?php echo file_get_contents( THEME_DIR . '/dist/assets/images/GreaterJackson_Hz_Black.svg' ); ?>
									</div>

								</a>
							</span>
                            <button class="alignright menu-icon" type="button" data-toggle="off-canvas-menu"></button>
						</div>
					</div>

					<nav class="site-navigation top-bar" role="navigation">
						<div class="site-desktop-title top-bar-title hide-for-small-only">
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">

								<div class="svg-container">
									<?php echo file_get_contents( THEME_DIR . '/dist/assets/images/GreaterJackson_Hz_Black.svg' ); ?>
								</div>

							</a>
						</div>
						<div class="top-bar-right">
							<?php foundationpress_top_bar_r(); ?>
						</div>
					</nav>
					
				</div>
			</div>
			
		</div>
		
	</header>

	<div class="container">
