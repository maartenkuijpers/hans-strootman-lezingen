<?php
/**
 * The template part for displaying results in search pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Colinear
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>

		<?php colinear_post_thumbnail(); ?>
	</header><!-- .entry-header -->

	<div class="entry-summary">
		<?php the_excerpt(); ?>
        <a class="more-link" href="<?php esc_url( get_permalink() ) ?>"><?php__( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'colinear' )?></a>
	</div><!-- .entry-summary -->
        

</article><!-- #post-## -->
