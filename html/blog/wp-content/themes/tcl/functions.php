<?php
/*
 * TCL functions and definitions
 *
 */

function my_theme_enqueue_styles() {

    $parent_style = 'parent-style'; // This is 'twentyfifteen-style' for the Twenty Fifteen theme.

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );

/* | 2. Featured Image Size
 * | Auto-crop the featured image for proper displaying on feature section
 */

add_theme_support( 'post-thumbnails' );
add_image_size( 'featured', 1200, 800, array('center','top') );


/* | 3. Excerpt
 * | Add more excerpt functionality
 */

function custom_excerpt_length( $length ) {
  return 10;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );


function et_excerpt_more($more) {
   global $post;
   return ' ... <a href="'. get_permalink($post->ID) . '" class="view-full-post-btn">Continue Reading</a>';
}
add_filter('excerpt_more', 'et_excerpt_more');

function my_gallery_default_type_set_link( $settings ) {
    $settings['galleryDefaults']['link'] = 'file';
    return $settings;
}
add_filter( 'media_view_settings', 'my_gallery_default_type_set_link');

?>
