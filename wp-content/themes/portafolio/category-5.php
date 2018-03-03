<?php get_header(); ?>

	<h1 class="page-heading max-width">Categoria: <?= single_cat_title(); ?></h1>

	<div class="grid max-width">
		<div class="block grid--item-9">
			<div class="block__body grid">
				<?php if(have_posts()): ?>
					<?php while (have_posts()): ?>
						<?php the_post(); ?>

						<article class="block grid--item-4">							
							<h2 class="block__title"><?php the_title(); ?></h2>
							<div class="block__body">
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
							</div>

						</article>

					<?php endwhile; ?>
				<?php else: ?>
					<h4>No se encontraron entradas</h4>
				<?php endif; ?>
				<?php wp_reset_postdata(); ?>
			</div>
		</div>
		<?php get_sidebar(); ?>
	</div>

	<?php get_footer(); ?>