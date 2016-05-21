<?php
/**
 * The template for displaying all single posts.
 *
 * @package Colinear
 */

get_header();
?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<div id="content">
			<?php
			// we add this, to show all posts in our
			// Glossary sorted alphabetically
			if (is_category('organisten')) 
			{
				$args = array( 'posts_per_page' => -1, 'category_name' => 'organisten', 'orderby'=> 'title', 'order' => 'ASC' );
				$glossaryposts = get_posts( $args ); 
				foreach( $glossaryposts as $post ) : setup_postdata($post);
					get_template_part( 'template-parts/content', 'category' );
				endforeach;
			}
			?>
		</div>
	<?php the_posts_navigation(); ?>

	</main><!-- #main -->
</div><!-- #primary -->

<?php
	get_sidebar();
	get_footer();
?>