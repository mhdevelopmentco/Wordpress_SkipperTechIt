<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <title>Skipper - Programmatic advertising platform</title>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" cotent="Programmatic advertising platform that aggregates all campaigns budgets, data and KPI’s in one dashboard - designed and built specifically for mobile advertisers.">
	<meta name="keywords" content="Mobile app distribution, Mobile app marketing, Programmatic Marketing, Platform, Programmatic advertising platform, Marketing Intelligence Platform, Performance media solution, Digital marketer, Shopping, iOS, Android, Unified Mobile Marketing Platform, single dashboard, programmatic performance, self-serve ad platform, self-serve advertising platform, Self Serve Platform for Advertisers, Self advertiser, advertising network, ad network, mobile advertising, Mobile Ad Network, mobile advertising technology platform, App marketing, App distribution, App advertising, App installs, App promotion, App discovery, Mobile advertising, Advertising, Quality user acquisition, ASO, CPI, Monetization, Optimize, Native app, Traffic Marketplace">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/css/bootstrap.min.css">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<?php wp_head(); ?>
	<script src="<?php echo get_template_directory_uri();?>/js/bootstrap.min.js"></script>
	<script src="<?php echo get_template_directory_uri()?>/js/jquery.min.js"></script>
	<script src="<?php echo get_template_directory_uri()?>/js/jquery.lazyload.min.js"></script>	
</head>

<body <?php body_class(); ?>>
		<header id="masthead" class="site-header site-inner" role="banner">
			<div class="site-header-main roboto-17">
				<button type="button" id="menu-toggle" class="navbar-toggle" data-toggle="collapse"data-target="site-header-menu">
					<span class="icon-bar main-bg"></span>
					<span class="icon-bar main-bg"></span>
					<span class="icon-bar main-bg"></span>
				</button>

				<div class="site-branding">
					<?php twentysixteen_the_custom_logo(); ?>

				</div><!-- .site-branding -->

				<!--Login and signup menu-->

				<div class="site-right-menu roboto-17">
					<button class="login-bt" id="login_menu_bt">Log in</button>
					<button class="login-bt" id="signup_menu_bt">Sign up</button>
				</div>


				<!-- main menu -->
				
				<?php if ( has_nav_menu( 'primary' ) || has_nav_menu( 'social' ) ) : ?>
					

					<div id="site-header-menu" class="site-header-menu">
						<?php if ( has_nav_menu( 'primary' ) ) : ?>
							<nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Primary Menu', 'twentysixteen' ); ?>">
								<?php
									wp_nav_menu( array(
										'theme_location' => 'primary',
										'menu_class'     => 'primary-menu',
									 ) );
								?>
							</nav><!-- .main-navigation -->
						<?php endif; ?>

						<?php if ( has_nav_menu( 'social' ) ) : ?>
							<nav id="social-navigation" class="social-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Social Links Menu', 'twentysixteen' ); ?>">
								<?php
									wp_nav_menu( array(
										'theme_location' => 'social',
										'menu_class'     => 'social-links-menu',
										'depth'          => 1,
										'link_before'    => '<span class="screen-reader-text">',
										'link_after'     => '</span>',
									) );
								?>
							</nav><!-- .social-navigation -->
						<?php endif; ?>
					</div><!-- .site-header-menu -->
				<?php endif; ?>


				

			</div><!-- .site-header-main -->

			<?php if ( get_header_image() ) : ?>
				<?php
					/**
					 * Filter the default twentysixteen custom header sizes attribute.
					 *
					 * @since Twenty Sixteen 1.0
					 *
					 * @param string $custom_header_sizes sizes attribute
					 * for Custom Header. Default '(max-width: 709px) 85vw,
					 * (max-width: 909px) 81vw, (max-width: 1362px) 88vw, 1200px'.
					 */
					$custom_header_sizes = apply_filters( 'twentysixteen_custom_header_sizes', '(max-width: 709px) 85vw, (max-width: 909px) 81vw, (max-width: 1362px) 88vw, 1200px' );
				?>
				<div class="header-image">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
						<img src="<?php header_image(); ?>" srcset="<?php echo esc_attr( wp_get_attachment_image_srcset( get_custom_header()->attachment_id ) ); ?>" sizes="<?php echo esc_attr( $custom_header_sizes ); ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
					</a>
				</div><!-- .header-image -->
			<?php endif; // End header image check. ?>

			
		</header><!-- .site-header -->

		<div id="content" class="site-content">
