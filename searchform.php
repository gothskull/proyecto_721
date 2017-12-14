<?php 
	$args = [
		'posts_per_page'  => -1,
		'post_type'       => 'usuarios',
		'orderby'         => 'title',
		'order'           => 'ASC'
	];
	$users = new WP_Query( $args );
?>
<?php 
	if(!is_front_page()):
		get_template_part('template-parts/content','breadcrumbs'); 
	endif;
	?>	
<div class="container">
	<div class="row">
		<?php if(is_page('buscador')): ?>
			<style>
				#buscador {
					margin-top: 100px;
					margin-bottom: 100px;
				}
			</style>
		<?php endif; ?>
		<div class="col-8 offset-2" id="buscador">
			<h4 class="text-center">Encuentra aquí las fechas de entrega<br> de bonos y fecha de talleres</h4>

				<?php	if($users->have_posts()): ?>
					<form class="search searchform" id="form_fecha" action="<?php echo home_url('/'); ?>" method="post">

							<!-- <span class="text"> -->
								<select id="searchUser" name="s">
									<option selected="selected">Escribe aquí tu nombre</option>
									<?php while($users->have_posts()) : $users->the_post() ?>
								  		<option value="<?php echo get_post_meta(get_the_ID(),'nvo_1113_nombre',true) ?>"><?php echo get_post_meta(get_the_ID(),'nvo_1113_nombre',true) ?></option>
									<?php endwhile;wp_reset_postdata(); ?>
								</select><br>
								<button type="submit" id="btn_buscar" class="btn btn-primary btn-block btn-small" value="<?php echo esc_attr_x('Buscar','submit button') ?>">Buscar</button>
								<input type="hidden" value="1" name="exact">
								<input type="hidden" value="usuarios" name="post_type">
								<?php $query_types = get_query_var('post_type'); ?>
						
							<!-- </span> -->
					</form>
				<?php endif; ?>
		</div>
	</div>
</div>

