<?php 
	$args = [
		'posts_per_page'  => 1,
		'post_type'       => 'post',
		'orderby'         => 'date',
		'order'           => 'DESC'
	];
	$slider = new WP_Query($args);
?>
<?php if($slider->have_posts()): ?>
	<div class="item text-center">
		<?php while($slider->have_posts()):$slider->the_post() ?>

			<a href="<?php echo get_permalink( ($page->ID)) ?>" >
				<?php the_post_thumbnail('home_post') ?>
				<div class="icon">
					<img class="layer" src="<?php echo get_template_directory_uri().'/images/final/other/01/2_1.png'?>" alt="">
				</div>
				<h3><?php the_title() ?></h3>
			</a>
			<div class="text-justify">
				<?php echo get_excerpt_home() ?>
			</div>
			<a href="<?php echo get_permalink( ($page->ID)) ?>" class="btn btn-block btn-primary btn-sm">Ver Más</a >
			
			
		<?php endwhile;wp_reset_postdata() ?>
	</div>
<?php endif ?>

<?php $page = get_page_by_title( 'Eventos') ?>
	
