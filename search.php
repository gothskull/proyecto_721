<?php
get_header(); ?>
<?php get_template_part('template-parts/content','breadcrumbs'); ?>
<div class="inner-content si-single">
	<div class="container">
			<header>
				<h5 class="text-center">Fechas de Entrega de Bonos y Talleres Para :</h5>
				<!-- <h5 class="text-center"><?php printf(esc_html__('Fechas de Entrega de Bonos y Talleres Para : %s','discapacidad'),'<br><span>'.get_search_query().'</span>'); ?></h5> -->
			</header>
			<?php if(isset($_POST['post_type'])): 

				$type    = $_POST['post_type'];
				$buscar  = $_POST['s'];

				if($type == 'usuarios'):

				$args = [
					'posts_per_page'   => -1,
					'orderby'          => 'title',
					'order'            => 'ASC',
					's'                => $buscar,
				];
				$user = new WP_Query($args);
			?>
				<?php if($user->have_posts()): ?>
					<div id="contenedor_fechas" class="row center-content">

						<?php while($user->have_posts()) : $user->the_post() ?>
							<div class="col-sm-4 offset-2">
								<div class="sponsor-item">
									<img class="ellipse-13" src="<?php echo get_post_meta(get_the_ID(),'nvo_1113_foto',true) ?>" alt="">
									
									<div id="info_user">
									<p class="first"><span class="primary-color">Nombre:</span><br> <?php echo get_post_meta(get_the_ID(),'nvo_1113_nombre',true) ?></p>
									<p><span class="primary-color">Age: </span>15 Years</p>
									<p><span class="primary-color">Bono tipo: </span> <?php echo get_post_meta(get_the_ID(),'nvo_1113_bono',true) ?></p>
									<p><span class="primary-color">Barrio: </span><?php echo get_the_term_list($post->ID,'barrio','','','') ?></p>
									</div>
									
									<!-- <a href="#" class="btn">Sponsor Now</a> -->
									
								</div>
							</div>
							<div class="col-sm-6">
								<div class="si-single-inner">
									<h4><?php echo get_post_meta(get_the_ID(),'nvo_1113_nombre',true) ?></h4>
										<h5 class="primary-color">Taller</h5>	
										<p>
											<strong><i class="fa fa-calendar"></i> Fecha: </strong><?php echo get_the_term_list($post->ID,'fecha_taller','','','') ?> <br>
											<strong><i class="fa fa-clock-o"></i> Hora: </strong><?php echo get_the_term_list($post->ID,'hora_taller','','','') ?> <br>
									    	<strong><i class="fa fa-home"></i> Lugar: </strong><span><?php echo get_the_term_list($post->ID,'lugar_taller','','','') ?></span><br>
									    	<strong><i class="fa fa-map-marker"></i> Dirección: </strong><span> <?php echo $terms->description?></span>
										</p>
										<h5 class="primary-color">Entrega de Bonos</h5>	
										<p>
											<strong><i class="fa fa-calendar"></i> Fecha: </strong><?php echo get_the_term_list($post->ID,'fecha_bono','','','') ?> <br>
											<strong><i class="fa fa-clock-o"></i> Hora: </strong><?php echo get_the_term_list($post->ID,'hora_bono','','','') ?> <br>
									    	<strong><i class="fa fa-home"></i> Lugar: </strong><span><?php echo get_the_term_list($post->ID,'lugar_Bono','','','') ?></span><br>
									    	<strong><i class="fa fa-map-marker"></i> Dirección: </strong><span></span>
										</p>

										<div class="clearfix"></div>
										<div class="gap-20"></div>

										
							
								</div>
							</div>	
							
						<?php endwhile;wp_reset_postdata(); ?>
					
					</div>
					<div class="col-6 offset-3">
						<?php $dictamen = get_page_by_title( 'buscador'); ?>
						<h3 class="text-center">
							<a  href="<?php echo esc_attr(get_permalink($dictamen)) ?>"><?php echo __('Hacer una nueva búsqueda', 'Avada'); ?></a>
						</h3>
					</div>

				<?php else:?>
					<div class="noFounds text-center">
						<?php printf(esc_html__('No se encontraron resultados para : %s','discapacidad'),'<span>'.get_search_query().'</span>'); ?>
					</div>
				
					<?php endif; ?>
				<?php endif; ?>

			<?php endif; ?>
	</div>
</div>

<?php
// get_sidebar();
get_footer();
