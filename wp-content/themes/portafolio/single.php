<?php get_header(); ?>
<body>

			<div class="block__body">
				<?php if(have_posts()): ?>
					<?php while (have_posts()): ?>
						<?php the_post(); ?>
					<main class="max-width">						
						<article class="block">							
							<h1 class="page-heading max-width"><?php the_title(); ?></h1>
							<div class="block__title">Escrito por: <?php the_author(); ?></div>
							<div class="block__body">								
								<?php the_content(); ?>

								<footer>
									<div>
										<small><?php the_tags(); ?></small>
									</div>
								</footer>
							</div>
						</article>
					</main>	

					<?php endwhile; ?>
				<?php else: ?>
					<h4>No se encontraron entradas</h4>
				<?php endif; ?>
				<?php wp_reset_postdata(); ?>
			</div>
		</div>

	<?php get_footer(); ?>