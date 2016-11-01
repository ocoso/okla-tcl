<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<?php if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
			<?php endif; ?>

			<?php if ( is_front_page() && is_home() ) : ?>
				<?php query_posts('posts_per_page=3'); ?>
				<div class="entry-content features-wrapper">
					<?php while (have_posts()) : the_post(); ?>
						<feature>
							<div class="feature-image">
								<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('featured'); ?></a>
							</div>
							<div class="feature-content">
								<h2 class="title"><a href="<?php the_permalink(); ?>"><?php the_title();/*3*/ ?></a></h2>
								<span class="excerpt"><?php the_excerpt(10); ?></span>
								<span class="category"><?php the_category(); ?></span>
							</div>
						</feature>
 					<?php endwhile; ?> <?php wp_reset_query(); /*4*/ ?>
				</div>
				<?php query_posts('posts_per_page=3&offset=3'); ?>
				<div class="entry-content features-wrapper">
					<?php while (have_posts()) : the_post(); ?>
						<div class="feature-alm">
							<div class="feature-image">
								<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('featured'); ?></a>
							</div>
							<div class="feature-content">
								<h2 class="title"><a href="<?php the_permalink(); ?>"><?php the_title();/*3*/ ?></a></h2>
								<span class="excerpt"><?php the_excerpt(10); ?></span>
								<span class="category"><?php the_category(); ?></span>
							</div>
						</div>
 					<?php endwhile; ?> <?php wp_reset_query(); /*4*/ ?>
				</div>
			<?php endif; ?>

			<?php
			// Start the loop.
			while ( ! is_front_page() && have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_format() );

			// End the loop.
			endwhile;

			// Previous/next page navigation.
			the_posts_pagination( array(
				'prev_text'          => __( 'Previous page', 'twentysixteen' ),
				'next_text'          => __( 'Next page', 'twentysixteen' ),
				'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentysixteen' ) . ' </span>',
			) );

		// If no content, include the "No posts found" template.
		else :
			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

		<div class="entry-content features-wrapper">
			<?php echo do_shortcode('[ajax_load_more post_type="post" offset="6" posts_per_page="3" pause="true" scroll="true" transition="fade" transition_container="true" button_label="Load More"]') ?>
		</div>
		</main><!-- .site-main -->

	</div><!-- .content-area -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
