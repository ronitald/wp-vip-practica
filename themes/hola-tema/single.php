<?php
/**
 * Plantilla de una entrada individual.
 *
 * @package hola-tema
 */

get_header();
?>
<main>
	<h2><?php esc_html_e( 'Estoy en single', 'hola-tema' ); ?></h2>
	<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : ?>
			<?php the_post(); ?>
			<article>
				<h3><?php the_title(); ?></h3>
				<?php the_content(); ?>
			</article>
		<?php endwhile; ?>
	<?php endif; ?>
</main>
<?php
get_footer();