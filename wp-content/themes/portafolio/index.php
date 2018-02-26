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
								<small><?php the_tags(); ?> <?php the_author(); ?></small>
							</footer>
						</article>

					<?php endwhile; ?>
				<?php endif; ?>
			</div>
		</div>

		<?php get_sidebar(); ?>
	</div>

	<?php get_footer(); ?>