<?php 



if ( ! function_exists( 'myfirsttheme_setup' ) ) :

/**

* Sets up theme defaults and registers support for various WordPress features

*

*  It is important to set up these functions before the init hook so that none of these

*  features are lost.

*

*  @since MyFirstTheme 1.0

*/

function sente_setup() {

    add_theme_support( 'automatic-feed-links' );

    

    register_nav_menus( array(

    'primary'   => __( 'Primary Menu', 'sente' ),

    'secondary' => __( 'Secondary Menu', 'sente' )

) );

    

    add_theme_support( 'post-thumbnails' );

set_post_thumbnail_size( 200, 200);



add_theme_support( 'custom-background' );



$defaults = array(

	

    'width'                  => 1000,

	'height'                 => 250,

//    'flex-width'             => true,

//    'flex-height'            => true,

    'uploads'                => true,

    'admin-head-callback'    => 'adminhead_cb',

    'admin-preview-callback'    => 'adminpreview_cb',

    'video'                  => false,

);

add_theme_support( 'custom-header', $defaults );

    



    

add_theme_support( 'custom-logo', array(

    'height'      => 100,

    'width'       => 100 )

);



add_filter( 'get_custom_logo', 'change_logo_class' );





function change_logo_class( $html ) {



    $html = str_replace( 'custom-logo', 'logo', $html );



    return $html;

}

    



add_theme_support( 'title-tag' );

add_theme_support( 'post-formats',  array ( 'aside', 'gallery', 'quote', 'image', 'video' ) );



register_sidebar( array(

        'name'          => __( 'Home First Feature', 'sente' ),

        'id'            => 'sidebar-1',

        'description'   => __('The first feature area of the home page.', 'sente'),

        'before_widget' => '<div id="%1$s" class="widget %2$s feature1">',

        'after_widget'  => '</div>',

        'before_title'  => '<h2 class="feature-title">',

        'after_title'   => '</h2>',

) );  

    register_sidebar( array(

        'name'          => __( 'Home Second Feature', 'sente' ),

        'id'            => 'sidebar-2',

        'description'   => __('The second feature area of the home page.', 'sente'),

        'before_widget' => '<div id="%1$s" class="widget %2$s feature2">',

        'after_widget'  => '</div>',

        'before_title'  => '<h2 class="feature-title">',

        'after_title'   => '</h2>',

) );  

    register_sidebar( array(

        'name'          => __( 'Home Third Feature', 'sente' ),

        'id'            => 'sidebar-3',

        'description'   => __('The third feature area of the home page.', 'sente'),

        'before_widget' => '<div id="%1$s" class="widget %2$s feature3">',

        'after_widget'  => '</div>',

        'before_title'  => '<h2 class="feature-title">',

        'after_title'   => '</h2>',

) );  

      register_sidebar( array(

        'name'          => __( 'Right Sidebar', 'sente' ),

        'id'            => 'sidebar-4',   

          'description'   => __('The sidebar to the right of the page or post.', 'sente'),

        'before_widget' => '<div id="%1$s" class="widget %2$s right-sidebar">',

        'after_widget'  => '</div>',

        'before_title'  => '<h3>',

        'after_title'   => '</h3>',

        

) );  

    

  

     register_sidebar( array(

        'name'          => __( 'Top Right Sidebar', 'sente' ),

        'id'            => 'sidebar-5',   

        'description'   => __('The sidebar at the top right of the head section', 'sente'),

        'before_widget' => '<div id="%1$s" class="widget %2$s top-right-sidebar">',

        'after_widget'  => '</div>',

        'before_title'  => '<h3 class="search-title>',

        'after_title'   => '</h3>',

        

) );  
register_sidebar( array(

        'name'          => __( 'Beneath Main Nav', 'sente' ),

        'id'            => 'sidebar-6',   

        'description'   => __('The sidebar beneath the main navigation on mobile only', 'sente'),

        'before_widget' => '<div id="%1$s" class="widget %2$s beneath-main-nav-sidebar">',

        'after_widget'  => '</div>',

        'before_title'  => '<h3>',

        'after_title'   => '</h3>',

        

) );  
     
register_sidebar( array(

    'name'          => __( 'Beneath Home Banner', 'sente' ),

    'id'            => 'sidebar-7',   

    'description'   => __('The sidebar beneath the home banner image', 'sente'),

    'before_widget' => '<div id="%1$s" class="widget %2$s beneath-home-banner-sidebar">',

    'after_widget'  => '</div>',

    'before_title'  => '',

    'after_title'   => '',

    

) );  

};



 endif;

add_action( 'after_setup_theme', 'sente_setup' );





function my_theme_scripts(){

wp_enqueue_style( 'style', get_theme_file_uri() . '/style.css' );

// wp_enqueue_style( 'style-layout', get_theme_file_uri(). '/style-layout.css' );

wp_enqueue_style( 'besogo', get_theme_file_uri() . '/css/besogo.css' );

wp_enqueue_style( 'board-wood', get_theme_file_uri() . '/css/board-wood.css' );

    

wp_enqueue_script( 'functions', get_theme_file_uri() . '/js/functions.js', array(), '1.1', true );

wp_enqueue_script( 'besogo-all-min', get_theme_file_uri() . '/js/besogo-all-min.js', array(), '1.1', true );

};



add_action( 'wp_enqueue_scripts', 'my_theme_scripts' );







/**

 * Filter the "read more" excerpt string link to the post.

 *

 * @param string $more "Read more" excerpt string.

 * @return string (Maybe) modified "read more" excerpt string.

 */

//function wpdocs_excerpt_more( $more ) {

//    if ( ! is_single() ) {

//        $more = sprintf( '<a class="read-more" href="%1$s">%2$s</a>',

//            get_permalink( get_the_ID() ),

//            __( 'Read More', 'textdomain' )

//        );

//    }

// 

//    return $more;

//}

//add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );





/*

Change the comment form field values

*/

function comment_form_text ($fields) {

    $fields['label_submit'] = 'Post Comment';

    $fields['title_reply'] = 'Leave a comment';

    

    return $fields;

    

}



//add_filter('comment_form_defaults', 'comment_form_text');

//

///*

//Change the comment form fields to remove the url

//*/

//

//function comment_form_fields ($fields) {

//    $fields['url'] = '';

//    

//    

//    return $fields;

//}

//

//add_filter('comment_form_default_fields', 'comment_form_fields');





//allow html in excerpts



function new_wp_trim_excerpt($text) {

    $raw_excerpt = $text;

    if ( '' == $text ) {

        $text = get_the_content('');



        $text = strip_shortcodes( $text );



        $text = apply_filters('the_content', $text);

        $text = str_replace(']]>', ']]>', $text);



        $text = strip_tags($text, '<table><tbody><tr><th><td><blockquote><q> 

    <cite><a><strong><em><br><ol><ul><li>');  

        

        $excerpt_length = apply_filters('excerpt_length', 55);

        

        $excerpt_more = apply_filters('excerpt_more', '');

        

        $words = preg_split('/[\n|\r|\t|\s]/', $text, $excerpt_length 

    + 1, PREG_SPLIT_NO_EMPTY|PREG_SPLIT_DELIM_CAPTURE );

        if ( count($words) > $excerpt_length ) {

            array_pop($words);

            $text = implode(' ', $words);

            $text = force_balance_tags( $text );

            $text = $text . $excerpt_more;

        } else {

            $text = implode(' ', $words);

        }

    }

    

    return apply_filters('new_wp_trim_excerpt', $text, $raw_excerpt);



}

remove_filter('get_the_excerpt', 'wp_trim_excerpt');

add_filter('get_the_excerpt', 'new_wp_trim_excerpt');



if ( ! function_exists( 'custom_add_excerpts_get_more_link' ) ) {



function custom_add_excerpts_get_more_link( $post_excerpt ) {

    if ( ! is_admin() ) {

        $dots = '...';

        $post_excerpt = $post_excerpt . $dots . '<p><a class="btn btn-secondary" href="' . esc_url( get_permalink( get_the_ID() ) ) . '">Read More</a></p>';

    }

    return $post_excerpt;

}

}

add_filter( 'excerpt_more', 'custom_add_excerpts_get_more_link' );







?>