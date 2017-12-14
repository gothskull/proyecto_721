<?php 
/*
 **************************************************************************
    OCULTAR BARRA ADMIN
 **************************************************************************
 */
    add_filter('show_admin_bar','__return_false');
/*
 **************************************************************************
    INCLUIMOS SCRIPTS
 **************************************************************************
 */
    if(!function_exists('pizza_new_add_scripts'))
    {
        function pizza_new_add_scripts()
        {
            wp_enqueue_style( 'discapacidad-style', get_stylesheet_uri() );

            wp_enqueue_script( 'discapacidad-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

            wp_enqueue_script( 'discapacidad-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

            if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
                wp_enqueue_script( 'comment-reply' );
            }
            
            wp_enqueue_script('jquery');
            
            // BOOTSTRAP
            wp_enqueue_script( 'popper_js', get_template_directory_uri().'/js/popper.min.js', [], '', true );
            wp_enqueue_script( 'bootstrap_js', get_template_directory_uri().'/js/bootstrap.min.js', [], '4.0.0', true );
            wp_enqueue_style( 'bootstrap_css', get_template_directory_uri().'/css/bootstrap.min.css');
           
            // FONTAWESOME
            wp_enqueue_style( 'fontawesome_css', get_template_directory_uri().'/css/font-awesome.min.css');
            // TEMPLATE
            wp_enqueue_style('slick_css',get_template_directory_uri().'/css/slick.min.css');
            wp_enqueue_style('circliful_css',get_template_directory_uri().'/css/jquery.circliful.css');
            wp_enqueue_style('lity_css',get_template_directory_uri().'/css/lity.min.css');

            wp_enqueue_script( 'slick_js', get_template_directory_uri().'/js/slick.min.js', [], '4.0.0', true );
            wp_enqueue_script( 'isotope_js', get_template_directory_uri().'/js/isotope.pkgd.js', [], '4.0.0', true );
            wp_enqueue_script( 'circliful_js', get_template_directory_uri().'/js/jquery.circliful.min.js', [], '4.0.0', true );
            wp_enqueue_script( 'downcount_js', get_template_directory_uri().'/js/jquery.downCount.js', [], '4.0.0', true );
            wp_enqueue_script( 'lity_js', get_template_directory_uri().'/js/lity.min.js', [], '4.0.0', true );
            wp_enqueue_script( 'jflickrfeed_js', get_template_directory_uri().'/js/jflickrfeed.min.js', [], '4.0.0', true );
            wp_enqueue_script( 'main_js', get_template_directory_uri().'/js/main.js', [], '4.0.0', true );
            // SELECT 2
            wp_enqueue_script( 'select2_js', get_template_directory_uri().'/js/select2.full.min.js', [], '4.0.6', true );
            wp_enqueue_script( 'select_esp_js', get_template_directory_uri().'/js/i18n/es.js', [], '4.0.0', true );
            wp_enqueue_style('select2_css',get_template_directory_uri().'/css/select2.min.css');
            // BXSLIDER
            wp_enqueue_script( 'bxslider_js', get_template_directory_uri().'/js/jquery.bxslider.min.js', [], '4.2.12', true );
            wp_enqueue_style('bxslider_css',get_template_directory_uri().'/css/jquery.bxslider.min.css');
            // STYLE
            wp_enqueue_script( 'custom_js', get_template_directory_uri().'/js/custom.js', ['jquery'], '1.0.0', true );
            wp_enqueue_style('discapacidad_css',get_stylesheet_uri());
           // wp_enqueue_script( 'all_js', get_template_directory_uri().'/js/final/all.min.js', ['jquery'], '1.0', true );
        }
    }
    add_action('wp_enqueue_scripts','pizza_new_add_scripts');