<?php
/**
 * The template part for displaying single posts
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php twentysixteen_post_thumbnail(); ?>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->
	<div class="meta">
		<h3 class="author">by <?php the_author(); ?></h3>
		<span class="date"><?php the_date(d-m-y); ?> in</span> <span class="category"><?php the_category(); ?></span>
	</div>
	<?php twentysixteen_excerpt(); ?>


	<div class="entry-content">
		<?php
			the_content();

			wp_link_pages( array(
				'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentysixteen' ) . '</span>',
				'after'       => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>',
				'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'twentysixteen' ) . ' </span>%',
				'separator'   => '<span class="screen-reader-text">, </span>',
			) );

			if ( '' !== get_the_author_meta( 'description' ) ) {
				get_template_part( 'template-parts/biography' );
			}
		?>
	</div><!-- .entry-content -->
	<footer class="meta">
		<p class="footer-meta">Published <?php the_time('jS F Y') ?> and categorised in <?php the_category(', ') ?></h2>
		<h2 class="footer-title">Share &amp; inspire others</h2>
		<div class="footer-share"><?php echo do_shortcode("[shareaholic app='share_buttons' id='25641310']"); ?></div>
		<h2 class="footer-title">You may also like to read</h2>
		<div class="footer-recommend"><?php echo do_shortcode("[shareaholic app='recommendations' id='25641318']"); ?></div>
	</footer>
</article><!-- #post-## -->
