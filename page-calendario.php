<?php
/*
Template Name: Calendario
*/

get_header(); ?>
<?php get_template_part('template-parts/content','breadcrumbs'); ?>
<div class="container">
	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->
</div>
<?php get_template_part('template-parts/content','info_subdireccion') ?>

<?php
// get_sidebar();
get_footer();
