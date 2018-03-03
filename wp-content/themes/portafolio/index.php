<?php get_header(); ?>
<body>
	<h1 class="page-heading max-width"><?= bloginfo('name'); ?></h1>

	<div class="grid max-width">
		<div class="block grid--item-9">
			<div class="block__title">
				Últimos Trabajos
			</div>
			<div class="block__body">
				<?php 
					$args = array('cat' => 5, 'author' => 'admin');
					$filter_posts = new WP_Query($args);
					if($filter_posts->have_posts()):
				?>
					<?php while ($filter_posts->have_posts()): ?>
						<?php $filter_posts->the_post(); ?>

						<article>							
							<h2><?php the_title(); ?></h2>
							<?php 
								if(has_post_thumbnail()):
									echo the_post_thumbnail_url('thumbnail');
								endif; 
							?>
							<?php the_excerpt(); ?>

							<footer>
								<div>
									<small><?php the_tags(); ?></small>
								</div>

								<div>
									<strong><?php the_author(); ?></strong>
								</div>
								<a href="<?php the_permalink(); ?>">Leer Más</a>
							</footer>
						</article>

					<?php endwhile; ?>
				<?php else: ?>
					<h4>No se encontraron entradas</h4>
				<?php endif; ?>
			</div>
		</div>

		<?php get_sidebar(); ?>
	</div>

	<?php get_footer(); ?>