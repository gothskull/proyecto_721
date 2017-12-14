<?php get_header() ?>
<div class="home-slider-1">
	<div class="slider">
		<?php 
			$args = [
				'posts_per_page'  => 4,
				'post_type'       => 'post',
				'orderby'         => 'date',
				'order'           => 'DESC'
			];
			$slider = new WP_Query($args);
		?>
		<?php if($slider->have_posts()): ?>

			<ul class="bxslider">
				<?php while($slider->have_posts()):$slider->the_post() ?>

					<li>
						<a href="<?php the_permalink() ?>">
							<?php the_post_thumbnail('slider') ?>
						</a>
					</li>
					
					
				<?php endwhile;wp_reset_postdata() ?>
			</ul>

		<?php endif ?>
	</div>
</div>


	<div class="container">
		<br><br>
		<div class="poverty-progress">
			 <h4>Proyecto <span class="primary-color text-uppercase"><b>1113</b></span></h4>
			<p>Por una ciudad incluyente y sin barreras</p>
		</div>
		<div class="row">
			<div class="col-md-4">
				<div class="item text-center">
					<?php $page = get_page_by_title( 'Bono y talleres') ?>
					<a href="<?php echo get_permalink( ($page->ID)) ?>" >
						<img class="thumb" src="<?php echo get_template_directory_uri().'/images/final/other/01/mercado.jpg'?>" alt="">
						<div class="icon">
							<img class="layer" src="<?php echo get_template_directory_uri().'/images/final/other/01/1_1.png'?>" alt="">
						</div>
						<h3>BONOS Y TALLERES</h3>
					</a>
					<p>Enterate de las fechas de reuniones a talleres y entrega de bonos aquí.</p>
					<a href="<?php echo get_permalink( ($page->ID)) ?>" class="btn btn-block btn-primary btn-sm">Ver Más</a >
				</div>
			</div>
			<div class="col-md-4">
				<?php require_once get_template_directory().'/custom_post/eventos-post.php' ?>
			</div>
			<div class="col-md-4">
				<?php require_once get_template_directory().'/custom_post/blog-post.php' ?>
			</div>
		</div>
	</div>
	<br><br>
	<br><br>
	<div class="urgent-causes">
		<?php get_search_form() ?>
	</div>
	


<div class="countries">
	<div class="container">
		<h2>Barrios y Lugares de Interes<br>Localidad de <span class="text-uppercase"><b>Tunjuelito</b></span></h2>
		<div class="gap-40"></div>
		<div class="row">
			<div class="col-md-3 col-sm-6">
				<small>1.</small>
				<h4><strong>Venecia &nbsp;&nbsp;</strong><span>Salón Comunal</span></h4>
				<div class="gap-40"></div>
				<small>2.</small>
				<h4><strong>Subdirección Local de&nbsp;&nbsp;</strong><span>Tunjuelito</span></h4>
			</div>
			<div class="col-sm-6 hidden-sm">
				<img class="img-responsive" src="<?php echo get_template_directory_uri().'/images/final/map-2.png'?>" alt="">
			</div>
			<div class="col-md-3 col-sm-6">
				<small>3.</small>
				<h4><strong>Metro &nbsp;&nbsp;</strong><span> Alqueria</span></h4>
				<div class="gap-40"></div>
				<small>4.</small>
				<h4><strong>Salón de la cultura &nbsp;&nbsp;</strong><span>El Carmen</span></h4>
			</div>
		</div>
	</div>
</div>
			
	

	
	<div class="charity-events bg-gray">
		<div class="container">
		<?php 
			$args = [
				'posts_per_page'  => 3,
				'post_type'       => 'post',
				'orderby'         => 'date',
				'order'           => 'DESC'
			];
			$slider = new WP_Query($args);
		?>
		<?php if($slider->have_posts()): ?>

			
		<?php endif ?>
		<div class="heading text-center gap-50">
			<h2>Últimas noticias de nuestro blog</h2>
			<p>Proyecto 1113</p>
			<img src="<?php echo get_template_directory_uri().'/images/final/sep.png'?>" class="center-block" alt=""/>
		</div>
		
		<div class="row">
				<?php while($slider->have_posts()):$slider->the_post() ?>

					<div class="col-sm-4">
						<div class="item">
							<div class="thumb">
								<?php the_post_thumbnail('home_post') ?>
								<a href="#">
								<div class="map">
									<div class="inner">
										<img src="<?php echo get_template_directory_uri().'/images/final/marker.png'?>" alt="">
									</div>
								</div>
								</a>
							</div>
							<div class="date">
								<span class="primary-color">Date:</span> 01 December 2017
							</div>
							
								<a href="<?php the_permalink() ?>">
									<h4><?php the_title() ?></h4>
								</a>
							
							<?php echo get_excerpt_home() ?>
							<p>Publicado por: <?php the_author() ?></p>
						</div>
					</div>
					
					
				<?php endwhile;wp_reset_postdata() ?>
			
			
			
		</div>
	</div>
</div>


<?php get_template_part('template-parts/content','info_subdireccion') ?>

<?php get_footer() ?>