<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package discapacidad
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'discapacidad' ); ?></a>

	<header id="masthead" class="site-header">
		 <div class="top-bar">
			<div class="container">
				<div class="row">
					<div class="col-sm-6 hidden-xs">
						<p>
							<a href="<?php echo esc_url( home_url( '/' )) ?>">
							<i class="fa fa-home primary-color"></i> &nbsp;Proyecto 1113 - Subdirección Local de Tunjuelito
							</a>
						</p>
					</div>
					<div class="col-sm-6">
						<?php 
							wp_nav_menu( array(
								'theme_location'  => 'top-menu',
								'menu'            => 'div',
								'container'       => 'div',
								'container_class' => 'superior-container',
								'container_id'    => 'superior-container',
								'menu_class'      => 'menu-superior',
								'menu_id'         => 'menu-superior',
								'echo'            => true,
								'fallback_cb'     => 'wp_page_menu',
								'items_wrap'      => '<ul id = "%1$s" class = "%2$s">%3$s</ul>',
								'depth'           => 0,
							) );
						?>
					</div>
				</div>
			</div>
		</div>
		<div class=" container container-menu-principal">
			<div class="site-branding">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
					<img class="img-responsive" src="<?php echo get_template_directory_uri().'/images/final/logo_1113_70.png' ?>" alt="">
		    	</a>
			</div><!-- .site-branding -->
			
			<nav id="site-navigation" class="main-navigation">
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'discapacidad' ); ?></button>
				<?php
					wp_nav_menu( array(
						'theme_location'  => 'header-menu',
						'container'       => 'div',
						'container_class' => 'container-menu',
						'container_id'    => 'container-menu',
						'menu_class'      => 'menu-principal',
						'menu_id'         => 'menu-principal',
						'echo'            => true,
						'fallback_cb'     => 'wp_page_menu',
						'before'          => '',
						'after'           => '',
						'link_before'     => '',
						'link_after'      => '',
						'items_wrap'      => '<ul id = "%1$s" class = "%2$s">%3$s</ul>',
						'depth'           => 0,
					) );
				?>
			</nav><!-- #site-navigation --></div>
	</header><!-- #masthead -->

	<div id="content" class="site-content ">
