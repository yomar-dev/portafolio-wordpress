<?php get_header(); ?>
<body>
	<h1 class="page-heading max-width"><?= bloginfo('name'); ?></h1>

	<div class="grid max-width">
		<div class="block grid--item-9">
			<div class="block__title">
				Últimos Trabajos
			</div>
			<div class="block__body">
				<?php if(have_posts()): ?>
					<?php while (have_posts()): ?>
						<?php the_post(); ?>

						<article>							
							<h2><?php the_title(); ?></h2>
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