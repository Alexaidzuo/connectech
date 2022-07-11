<?php
/**
 * Template part for displaying single news.
 *
 * @package connectech
 */

?>

<article class="article-news">

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'connectech' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php connectech_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->

