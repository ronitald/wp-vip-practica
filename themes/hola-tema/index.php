<?php
/**
 * Plantilla principal.
 *
 * @package hola-tema
 */

get_header();
?>
<main>
	<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : ?>
			<?php the_post(); ?>
			<article>
				<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				<?php the_excerpt(); ?>
			</article>
		<?php endwhile; ?>
	<?php else : ?>
		<p><?php esc_html_e( 'No hay contenido todavía.', 'hola-tema' ); ?></p>
	<?php endif; ?>
</main>
<?php
get_footer();