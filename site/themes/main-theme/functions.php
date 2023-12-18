<?php 

add_action( 'wp_enqueue_scripts', 'main_theme_enqueue_styles' );
	      function main_theme_enqueue_styles() {
 		  wp_enqueue_style( 'main-theme',  get_stylesheet_directory_uri() .'/assets/style/css/main-theme.css' ); 
		   wp_enqueue_style('fontawesome',  get_stylesheet_directory_uri() .'/assets/style/font-awesome-4.7.0/css/font-awesome.min.css');
  
		} 

        function my_custom_scripts() {
            wp_enqueue_script( 'custom-js', 'https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js', array( 'jquery' ),'',true );
        }
        add_action( 'wp_enqueue_scripts', 'my_custom_scripts' );
// remove auther		
function disable_embeds_filter_oembed_responsedata( $data ) {
    unset($data['author_url']);
    unset($data['author_name']);
    return $data;
}
add_filter( 'oembed_response_data', 'disable_embeds_filter_oembed_responsedata' );


if (function_exists('acf_add_options_page')) {
	acf_add_options_page(array(
		'page_title'     => 'Options',
		'menu_title'    => 'Options',
		'menu_slug'     => 'theme-general-settings',
		'capability'    => 'edit_posts',
		'redirect'        => false,
	 
	));
}


  

// add new menu
register_nav_menus( array(
	'mobile_menu' => 'Menu Mobile',
) );


add_filter('acf/fields/flexible_content/layout_title/name=main_content', 'my_acf_fields_flexible_content_layout_title', 10, 4);
function my_acf_fields_flexible_content_layout_title( $title, $field, $layout, $i ) {
    $title = $layout["label"];
    if( $text = get_sub_field('section_title') ) {
        $title .= ' <b>(' . esc_html($text) . ')</b>';
    }else{
        if( $text = get_sub_field('title') ) {
            $title .= ' <b>(' . esc_html($text) . ')</b>';
        }
    }
    return $title; 
}


/*@ Change WordPress Admin Login Logo */
if ( !function_exists('tf_wp_admin_login_logo') ) :
 
    function tf_wp_admin_login_logo() { ?>
        <style type="text/css">
            body.login div#login h1 a {
                background-image: url('<?php echo get_stylesheet_directory_uri()."/assets/images/logo.png"; ?>');
     
            }
        </style>
    <?php }
 
    add_action( 'login_enqueue_scripts', 'tf_wp_admin_login_logo' );
 
endif;
 