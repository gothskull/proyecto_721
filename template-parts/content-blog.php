 <article class="col-sm-4 gap-30 entrada">
	<div class="blog-post text-center">
		<a href="<?php the_permalink() ?>">
			<div class="thumb">
				<?php echo the_post_thumbnail( ) ?>
			</div>
		</a>
		<div class="post-meta">
			<i class="fa fa-user"></i> Escrito por <a href="#"><?php the_author() ?></a>
		</div>
		<div class="">
			<time datetime="2016-12-12">
				<?php the_time('d') ?>
				<span><?php the_time('M')?></span>
				<span><?php the_time('Y')?></span>
			</time>
		</div>
		<h4><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h4>
		<div class="text-justify">
			<?php echo get_excerpt() ?>
		</div>
		<a href="<?php the_permalink()?>" class="btn btn-block btn-primary btn-xs">Ver más</a>
        
	</div>
</article>
	