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
        			'header-menu'   => __('Menu Principal'),
        		] );
        	}
        }
        add_action('init','registrar_menus');