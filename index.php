<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package discapacidad
 */

get_header(); ?>

	<?php get_template_part('template-parts/content','breadcrumbs'); ?>
	<div id="primary" class="content-area container">
		<main id="main" class="site-main">
		<?php
			$args = [
				'post_type'      => 'post',
				'orderby'        => 'date',
				'order'          => 'DESC',
				'posts_per_page' => 6
			];
			$entradas = new WP_Query($args);
		if ( $entradas->have_posts() ) :

			if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>

			<?php
			endif;
			?>
			<div class="row">
				<?php
				/* Start the Loop */
				while ($entradas-> have_posts() ) : $entradas->the_post();

					/*
					 * Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					

					get_template_part( 'template-parts/content', 'blog' );

				endwhile; ?>
				</div>

				<?php

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->
	<?php get_template_part('template-parts/content','info_subdireccion') ?>
<?php
// get_sidebar();
get_footer();
