<?php 
/**
 * Template Name: Página con Sidebar
 */
?>
<?php get_header(); ?>

				<?php if(have_posts()): ?>
					<?php while (have_posts()): ?>
						<?php the_post(); ?>
						<h1 class="page-heading max-width"><span>Titulo: </span><?php the_title(); ?></h1>

						<div class="grid max-width">
							<div class="block grid--item-9">
								<div class="block__body">
									<?php the_content(); ?>
								</div>
							</div>
							<?php get_sidebar(); ?>
						</div>
					<?php endwhile; ?>
				<?php else: ?>
					<h4>No se encontraron entradas</h4>
				<?php endif; ?>
	<?php get_footer(); ?>