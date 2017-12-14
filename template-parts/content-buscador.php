<?php get_header(); ?>
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
