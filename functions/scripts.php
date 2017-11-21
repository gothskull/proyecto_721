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
            wp_enqueue_script( 'all_js', get_template_directory_uri().'/js/all.min.js', ['jquery'], '1.0', true );
            // wp_enqueue_style( 'custom_css', get_template_directory_uri().'/css/custom.css');
           
            // FONTAWESOME
            wp_enqueue_style( 'fontawesome_css', get_template_directory_uri().'/css/font-awesome.min.css');
            // BOOTSTRAP
            wp_enqueue_script( 'popper_js','https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js', [], '', true );
            wp_enqueue_script( 'bootstrap_js', get_template_directory_uri().'/js/bootstrap.min.js', [], '4.0.0', true );
            wp_enqueue_style( 'bootstrap_css', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css');
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

            // STYLE
            wp_enqueue_style('pizzeria_css',get_stylesheet_uri());
        }
    }
    add_action('wp_enqueue_scripts','pizza_new_add_scripts');