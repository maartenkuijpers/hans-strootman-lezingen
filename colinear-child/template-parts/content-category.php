<?php
/**
 * Template part for displaying single posts.
 *
 * @package Colinear
    <a href="<?php $data = get_post()->post_name; ?>">
    </a>
 */

$post_url = get_site_url() . '/' . $post->post_name . '/';
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <header class="entry-header">
            <a href="<?php echo $post_url; ?>">
            <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
            </a>
        </header><!-- .entry-header -->
	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before'      => '<div class="page-links"><span class="page-links-title">' . esc_html__( 'Pages:', 'colinear' ) . '</span>',
				'after'       => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>',
				'pagelink'    => '<span class="screen-reader-text">' . esc_html__( 'Page', 'colinear' ) . ' </span>%',
				'separator'   => '<span class="screen-reader-text">, </span>',
			) );
		?>
	</div><!-- .entry-content -->

</article><!-- #post-## -->
