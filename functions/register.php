<?php 
/*
 **************************************************************************
    REGISTRO MENUS
 **************************************************************************
 */
    if(!function_exists('registrar_menus'))
        {
        	function registrar_menus()
        	{
        		register_nav_menus( [
                    'top-menu'   => __('Menu Superior'),
        			'header-menu'   => __('Menu Principal'),
        		] );
        	}
        }
        add_action('init','registrar_menus');
/*
 **************************************************************************
    TAMAÑOS DE IMAGEN
 **************************************************************************
 */
    add_image_size( 'blog', 370, 260, true );
    add_image_size( 'single', 3970, 455, true );
    add_image_size( 'slider', 1900, 650, true );
    add_image_size( 'mini_single', 360, 250, true );
    add_image_size( 'home_post', 350, 150, true );
/*
 **************************************************************************
    SIDEBAR
 **************************************************************************
 */
    if(!function_exists('disca_add_sidebar'))
        {
            function disca_add_sidebar()
            {
                $args = [
                    'name'          => __( 'Sidbar principal', 'discapacdad' ),
                    'id'            => 'sidebar-principal',
                    'description'   => 'Barra lateral principal',
                    'class'         => '',
                    'before_widget' => '<li id="%1" class="widget %2">',
                    'after_widget'  => '</li>',
                    'before_title'  => '<h5 class="widgettitle">',
                    'after_title'   => '</h5>',
                ];
                
                register_sidebar( $args );
                
            }
        }
    add_action('widgets_init','disca_add_sidebar');