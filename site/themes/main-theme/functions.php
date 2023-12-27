<?php

add_action('wp_enqueue_scripts', 'main_theme_enqueue_styles');
function main_theme_enqueue_styles()
{
    wp_enqueue_style('main-theme', get_stylesheet_directory_uri() . '/assets/style/css/main-theme.css');
    wp_enqueue_style('fontawesome', get_stylesheet_directory_uri() . '/assets/style/font-awesome-4.7.0/css/font-awesome.min.css');

    wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css');
    wp_enqueue_style('fonts', 'https://fonts.googleapis.com/css?family=Inter+Tight:400,700&amp;display=swap');
    wp_enqueue_style('swiper-icons', get_stylesheet_directory_uri() . '/assets/css/swiper-icons.css');
    wp_enqueue_style('main', get_stylesheet_directory_uri() . '/assets/css/main.css');
    wp_enqueue_style('owl-carousel-min', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css');
    wp_enqueue_style('owl-theme-default', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css');
    wp_enqueue_style('navbar-right-links-icons', get_stylesheet_directory_uri() . '/assets/css/navbar-right-links-icons.css');
    wp_enqueue_style('simple-slider-swiper-bundle-min-css', get_stylesheet_directory_uri() . '/assets/css/simple-slider-swiper-bundle.min.css');
    wp_enqueue_style('simple-slider-css', get_stylesheet_directory_uri() . '/assets/css/simple-slider.css');
}

function my_custom_scripts()
{
    wp_enqueue_script('custom-js', 'https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js', array('jquery'), '', true);

    wp_enqueue_script('bootstrap-bundle', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js', array('jquery'), '', true);
    wp_enqueue_script('filter-accordion', get_stylesheet_directory_uri() . '/assets/js/filter-accordion.js', array('jquery'), '', true);
    wp_enqueue_script('footer-menu', get_stylesheet_directory_uri() . '/assets/js/footer-menu.js', array('jquery'), '', true);
    wp_enqueue_script('header-menu', get_stylesheet_directory_uri() . '/assets/js/header-menu.js', array('jquery'), '', true);
    wp_enqueue_script('hero-slider', get_stylesheet_directory_uri() . '/assets/js/hero-slider.js', array('jquery'), '', true);
    wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js', array('jquery'), '', true);
    wp_enqueue_script('owl-carousel', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js', array('jquery'), '', true);
    wp_enqueue_script('simple-slider-swiper-bundle-min-js', get_stylesheet_directory_uri() . '/assets/js/simple-slider-swiper-bundle.min.js', array('jquery'), '', true);
    wp_enqueue_script('simple-slider-js', get_stylesheet_directory_uri() . '/assets/js/simple-slider.js', array('jquery'), '', true);
    wp_enqueue_script('slider-section-carousel', get_stylesheet_directory_uri() . '/assets/js/slider-section-carousel.js', array('jquery'), '', true);
}
add_action('wp_enqueue_scripts', 'my_custom_scripts');
// remove auther		
function disable_embeds_filter_oembed_responsedata($data)
{
    unset($data['author_url']);
    unset($data['author_name']);
    return $data;
}
add_filter('oembed_response_data', 'disable_embeds_filter_oembed_responsedata');


if (function_exists('acf_add_options_page')) {
    acf_add_options_page(array(
        'page_title' => 'Options',
        'menu_title' => 'Options',
        'menu_slug' => 'theme-general-settings',
        'capability' => 'edit_posts',
        'redirect' => false,

    ));
}




// add new menu
register_nav_menus(array(
    'mobile_menu' => 'Menu Mobile',
));


add_filter('acf/fields/flexible_content/layout_title/name=main_content', 'my_acf_fields_flexible_content_layout_title', 10, 4);
function my_acf_fields_flexible_content_layout_title($title, $field, $layout, $i)
{
    $title = $layout["label"];
    if ($text = get_sub_field('section_title')) {
        $title .= ' <b>(' . esc_html($text) . ')</b>';
    } else {
        if ($text = get_sub_field('title')) {
            $title .= ' <b>(' . esc_html($text) . ')</b>';
        }
    }
    return $title;
}


/*@ Change WordPress Admin Login Logo */
if (!function_exists('tf_wp_admin_login_logo')):

    function tf_wp_admin_login_logo()
    { ?>
        <style type="text/css">
            body.login div#login h1 a {
                background-image: url('<?php echo get_stylesheet_directory_uri() . "/assets/images/logo.png"; ?>');

            }
        </style>
    <?php }

    add_action('login_enqueue_scripts', 'tf_wp_admin_login_logo');

endif;
