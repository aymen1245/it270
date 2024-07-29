<?php

function my_excerpt_length() {
    return 45;
}

add_theme_support('post-thumbnails');

add_filter ('excerpt','my_excerpt_length');

set_post_thumbnail_size(200);
add_theme_support('post-thumbnails');


// Register our navigation

register_nav_menus(array(
'primary' => 'Primary Menu',
'footer' => 'Footer Menu',
'tours' => 'Tours Menu',
'hotel' => 'Hotel Menu'

));

 
// enqueuing my scripts
function my_theme_scripts() {
    wp_enqueue_script( 'astuteo', get_template_directory_uri() . '/js/astuteo.js', '1.0.0', false );
    }
    add_action( 'wp_enqueue_scripts', 'my_theme_scripts' );


    // We are registering widgets!!! //
    
    function init_widgets() {
        register_sidebar(array(
        'name' => 'Sidebar Blog',
        'id' => 'sidebar-blog',
        'before_widget' => '<div class="inner-widget">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
        ));


     register_sidebar(array(
            'name' => 'Sidebar About',
            'id' => 'sidebar-about',
            'before_widget' => '<div class="inner-widget">',
            'after_widget' => '</div>',
            'before_title' => '<h3>',
            'after_title' => '</h3>'
            ));

            
     register_sidebar(array(
                'name' => 'Sidebar Tours',
                'id' => 'sidebar-tours',
                'before_widget' => '<div class="inner-tours">',
                'after_widget' => '</div>',
                'before_title' => '<h3>',
                'after_title' => '</h3>'
                ));

          
    register_sidebar(array(
                    'name' => 'Sidebar Tours Specials',
                    'id' => 'sidebar-tours-specials',
                    'before_widget' => '<div class="inner-specials">',
                    'after_widget' => '</div>',
                    'before_title' => '<h3>',
                    'after_title' => '</h3>'
                    ));
    


            
     register_sidebar(array(
            'name' => 'Sidebar Footer',
            'id' => 'sidebar-footer',
            'before_widget' => '<div class="row">',
            'after_widget' => '</div>',
            'before_title' => '<h3>',
            'after_title' => '</h3>'
            ));
                
    register_sidebar(array(
                'name' => 'Sidebar Contact',
                'id' => 'sidebar-contact',
                'before_widget' => '<div class="inner-widget">',
                'after_widget' => '</div>',
                'before_title' => '<h3>',
                'after_title' => '</h3>'
                ));

     register_sidebar(array(
                    'name' => 'Sidebar Buy',
                    'id' => 'sidebar-buy',
                    'before_widget' => '<div class="inner-buy">',
                    'after_widget' => '</div>',
                    'before_title' => '<h2>',
                    'after_title' => '</h2>'
                    ));


        } // end function init widgets
        // add action AFTER the function
        add_action('widgets_init', 'init_widgets');
    
    
    //  Functions to display a list of all the shortcodes
       function diwp_get_list_of_shortcodes(){
 
    // Get the array of all the shortcodes
    global $shortcode_tags;
     
    $shortcodes = $shortcode_tags;
     
    // sort the shortcodes with alphabetical order
    ksort($shortcodes);
     
    $shortcode_output = "<ul>";
     
    foreach ($shortcodes as $shortcode => $value) {
        $shortcode_output = $shortcode_output.'<li>['.$shortcode.']</li>';
    }
     
    $shortcode_output = $shortcode_output. "</ul>";
     
    return $shortcode_output;
 
}
add_shortcode('get-shortcode-list', 
'diwp_get_list_of_shortcodes');

function covid_disclaimer() {
    return '<p><small>Before you purchase your tickets, pleasecheck with
    everyone that you can think of to make sure that you are good to go (Covid-free),
    because these tickets are not refundable
    </small></p>';

}

add_shortcode('disclaimer','covid_disclaimer');

function specials() {
// add a switch
// if today is Sunday, show me Sunday's specials
if(isset($_Get['today'])) {
    $today = $_GET['today'];
} else{
$today = date('l');
}

switch($today) {
    case 'Sunday' :
    $content = 'Today\'s special takes us to the ! Let\'s add some information
    about the wonderful Glaciers. To learn more about our ### specials, click
    <a href="">here!</a>
    ';

    
     case 'Monday' :
     $content = 'Today\'s special takes us to the ! Let\'s add some information
     about the wonderful Glaciers. To learn more about our ### specials, click
     <a href="">here!</a>
     ';

        
     case 'Tuesday' :
     $content = 'Today\'s special takes us to the ! Let\'s add some information
     about the wonderful Glaciers. To learn more about our ### specials, click
     <a href="">here!</a>
     ';


     case 'Wednesday' :
     $content = 'Today\'s special takes us to the ! Let\'s add some information
     about the wonderful Glaciers. To learn more about our ### specials, click
     <a href="">here!</a>
     ';
     
     case 'Thursday' :
     $content = 'Today\'s special takes us to the ! Let\'s add some information
     about the wonderful Glaciers. To learn more about our ### specials, click
     <a href="">here!</a>
     ';
     
     
     case 'Friday' :
     $content = 'Today\'s special takes us to the ! Let\'s add some information
     about the wonderful Glaciers. To learn more about our ### specials, click
     <a href="">here!</a>
    ';
     
    case 'Saturday' :
    $content = 'Today\'s special takes us to the ! Let\'s add some information
    about the wonderful Glaciers. To learn more about our ### specials, click
    <a href="">here!</a>
    ';
} // closing switch

return $content;

} //closing the function

add_shortcode('today_specials', 'specials');

function today_date() {
    return date('l\, F jS Y');
}

add_shortcode('current_date', 'today_date');

add_filter( 'widget_text', 'do_shortcode');


function add_slug_body_class( $classes ) {
    global $post;
    if ( isset( $post ) ) {
    $classes[] = $post->post_name;
    }
    return $classes;
    }
    add_filter( 'body_class', 'add_slug_body_class' );





