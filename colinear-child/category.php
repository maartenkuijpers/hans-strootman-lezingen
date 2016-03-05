<?php
/**
 * The template for displaying all single posts.
 *
 * @package Colinear
 */

if (is_category( )) {
	$cat = get_query_var('cat');
	$yourcat = get_category ($cat);
	if ( $yourcat->count == 1 )
	{
		$pages_in_category = get_posts( array ( 'category' => $yourcat->cat_ID ) );
		foreach ( $pages_in_category as $page ) {
			wp_redirect( get_page_link( $page->ID ) );
			exit();
		}
	}
}
 
get_header(); ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'template-parts/content', 'single' ); ?>

			<?php
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>

		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>