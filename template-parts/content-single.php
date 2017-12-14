<?php get_template_part('template-parts/content','breadcrumbs'); ?>

<div class="inner-content blog-single">

	<div class="container">
		<div class="row">
			<div class="col-sm-8">
				<div class="col-md-12 no-padding">
					<div class="donation-causes dc-single">
						<div class="text-center">
							<small>Publicado por <a href="#"><i class="fa fa-user"></i>  <?php the_author() ?></a></small>
							<h4><?php the_title() ?></h4>
						</div>
						
						<div class="meta-group">
							<time>
								<?php the_time('d') ?>
								<?php the_time('m') ?>
								<?php the_time('Y') ?>
								<span>|</span> 20 Comentarios
							</time>
						</div>
						
						<?php the_post_thumbnail('single') ?>
						
						<div class="gap-40"></div>
						<?php the_content() ?>

					</div>

					<div class="gap-60"></div>

					<div class="post-tags">
						<span>Etiquetas:</span>

						<a href="#"><?php the_tags( '',  ' - ', $after = '' ) ?></a>

					</div>			

				<div class="clearfix"></div>
				<div class="gap-60"></div>


				<div class="gap-60"></div>

				<div class="product-reviews">
					<h5 class="no-transform">Comentarios <?php contador_comentarios_wpbody() ?></h5>

					<div class="pr-comment center-content-md">
						<main>
							<img src="images/comments/1.jpg" class="img-responsive" alt=""/>
							<a href="#">Responder</a>
						</main>
						
						<div>
							<h4>
								Valkor Smith
								<em>Diciembre 7, 2017 at 12:21am</em>
							</h4>
							<p>Integer sollicitudin ligula non enim sodales Sewid commodo tempor are risus in euismod varius nullam Sed condimentum est libero</p>
						</div>
					</div>	
							
					<div class="pr-comment pr-subcomment center-content-md">
						<main>
							<img src="images/comments/2.jpg" class="img-responsive" alt=""/>
							<a href="#">Responder</a>
						</main>

						<div>
							<h4>
								Jess Qallery
								<em>Diciembre 7, 2017 at 12:21am</em>
							</h4>
							<p>Integer sollicitudin ligula non enim sodales Sewid commodo tempor are risus in euismod varius nullam Sed condimentum est libero</p>
						</div>
					</div>		

					<div class="pr-comment center-content-md">
						<main>
							<img src="images/comments/3.jpg" class="img-responsive" alt=""/>
							<a href="#">Responder</a>
						</main>

						<div>
							<h4>
								John Willis
								<em>Diciembre 7, 2017 at 12:21am</em>
							</h4>
							<p>Integer sollicitudin ligula non enim sodales Sewid commodo tempor are risus in euismod varius nullam Sed condimentum est libero</p>
						</div>
					</div>		
				</div>

					<div class="gap-40"></div>
					<div class="clearfix"></div>

					<div class="donors-list post-review">
						<h5 class="no-transform">Deja un comentario:</h5>

					<form>
						<input placeholder="Nombre" type="text">
						<input placeholder="Correo" type="email">
						<!-- <input placeholder="Subject" type="text"> -->
						
						<textarea placeholder="Mensaje"></textarea>				
						<button type="submit" class="btn">Enviar mensaje</button>
					</form>	

					</div>	
				
				</div>			
					
					
			</div><!-- col-8 -->
			<aside class="col-sm-4 sidebar">
				<div class="widget recent-posts">
					<?php get_sidebar('sidebar-principal') ?>
				</div>
			</aside>
				
		</div>

	</div>
</div>