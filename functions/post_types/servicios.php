<?php 
 /*
 =========================================================================
             REGISTRAMOS EL POST TYPE
 =========================================================================
 */
 	if (!function_exists("tunjo_register_post_type")) 
 	{
 		global $typenow,$pagenow;
 		
 		
 		function tunjo_register_post_type()
 		{
 					$singular    = 'Servicio';
 					$plural      = $singular.'s';
               $custom_post = strtolower($singular);
               $text_domain = 'discapacidad';

 				$labels = array(

 					'name'                => __( $singular, $text_domain ),
 					'singular_name'       => __( $singular, $text_domain ),
 					'add_new'             => _x( 'Agregar Nuevo '. $singular , $text_domain ),
 					'add_new_item'        => __( 'Agregar Nuevo '. $singular, $text_domain ),
 					'edit_item'           => __( 'Editar '.$singular, $text_domain ),
 					'new_item'            => __( 'Nuevo '. $singular, $text_domain ),
 					'view_item'           => __( 'Ver '. $singular, $text_domain ),
 					'search_items'        => __( 'Buscar ' .$singular, $text_domain ),
 					'not_found'           => __( 'No se encontraron ' .$plural, $text_domain ),
 					'not_found_in_trash'  => __( 'No se encontraron ' .$plural.' en la papelera', $text_domain ),
 					'parent_item_colon'   => __( $singular. ' Padre:', $text_domain ),
 					'menu_name'           => __( $singular, $text_domain ),
 				);
 			
 				$args = array(
 					'labels'              => $labels,
 					'hierarchical'        => false,
 					'description'         => 'Usuarios proyecto 1113',
 					'taxonomies'          => array(),
 					'public'              => true,
 					'show_ui'             => true,
 					'show_in_menu'        => true,
 					'show_in_admin_bar'   => true,
 					'menu_position'       => null,
 					'menu_icon'           => 'dashicons-admin-network',
 					'show_in_nav_menus'   => true,
 					'publicly_queryable'  => true,
 					'exclude_from_search' => false,
 					'has_archive'         => true,
 					'query_var'           => true,
 					'can_export'          => true,
 					'rewrite'             => true,
 					'capability_type'     => 'page',
               'supports'            => ['title']
 				);
 			
 				register_post_type( $custom_post, $args );
 	
 		}
 	}
 	 add_action('init','tunjo_register_post_type' );
/*
**************************************************************************
   REGISTRAR TAXONOMIA BARRIO
**************************************************************************
*/
   if(! function_exists('add_taxonomia_encargado'))
   {
   
   	function add_taxonomia_encargado()
   	{
   		$singular    = 'Barrio';
   		$plural      = 'Barrios';
   		$post_type   = 'usuarios';
   		$minuscula   = strtolower($singular);
   		$text_domain = 'discapacidad';
   
   		$labels = [
   			'name'                       => _x( $singular, $text_domain ),
   			'singular_name'              => _x( $singular,  $text_domain ),
   			'menu_name'                  => __( $singular, $text_domain ),
   			'all_items'                  => __( 'Todos Items', $text_domain ),
   			'parent_item'                => __( $singular.' Padre', $text_domain ),
   			'parent_item_colon'          => __( $singular.' Padre:', $text_domain ),
   			'new_item_name'              => __( 'Nuevo '.$singular, $text_domain ),
   			'add_new_item'               => __( 'Agregar Nuevo '.$singular, $text_domain ),
   			'edit_item'                  => __( 'Editar ' .$singular, $text_domain ),
   			'update_item'                => __( 'Actualizar '.$singular, $text_domain ),
   			'view_item'                  => __( 'Ver '.$singular, $text_domain ),
   			'separate_items_with_commas' => __( 'Separar Elementos Con Comas', $text_domain ),
   			'add_or_remove_items'        => __( 'Agregar o remover '.$plural, $text_domain ),
   			'choose_from_most_used'      => __( 'Escoja entre los más usados', $text_domain ),
   			'popular_items'              => __( $plural.' más vistos', $text_domain ),
   			'search_items'               => __( 'Buscar '.$plural, $text_domain ),
   			'not_found'                  => __( 'No se encontraron '.$plural, $text_domain ),
   			'no_terms'                   => __( 'No hay '.$plural, $text_domain ),
   			'items_list'                 => __( 'Listado de '.$plural, $text_domain ),
   			'items_list_navigation'      => __( 'Items list navigation', $text_domain ),
   		];
   		$args = [
   			'labels'                     => $labels,
   			// 'rewrite'                    => ['slug'  => 'tipo-receta'],
   			'hierarchical'               => true,
   			'public'                     => true,
   			'show_ui'                    => true,
   			'query_var'                  => true,
   			'show_admin_column'          => true,
   			'show_in_nav_menus'          => true,
   			'show_tagcloud'              => true,
   		];
   		register_taxonomy( $minuscula, array( $post_type ), $args );
   		
   	}
   
   }
   add_action('init','add_taxonomia_encargado' );
/*
**************************************************************************
   REGISTRAR TAXONOMIA DISCAPACIDAD
**************************************************************************
*/
   if(! function_exists('add_taxonomia_estado'))
   {
   
   	function add_taxonomia_estado()
   	{
   		$singular    = 'Discapacidad';
   		$plural      = 'Discapacidades';
   		$post_type   = 'usuarios';
   		$minuscula   = strtolower($singular);
   		$text_domain = 'discapacidad';
   
   		$labels = [
   			'name'                       => _x( $singular, $text_domain ),
   			'singular_name'              => _x( $singular,  $text_domain ),
   			'menu_name'                  => __( $singular, $text_domain ),
   			'all_items'                  => __( 'Todos Items', $text_domain ),
   			'parent_item'                => __( $singular.' Padre', $text_domain ),
   			'parent_item_colon'          => __( $singular.' Padre:', $text_domain ),
   			'new_item_name'              => __( 'Nueva '.$singular, $text_domain ),
   			'add_new_item'               => __( 'Agregar Nueva '.$singular, $text_domain ),
   			'edit_item'                  => __( 'Editar ' .$singular, $text_domain ),
   			'update_item'                => __( 'Actualizar '.$singular, $text_domain ),
   			'view_item'                  => __( 'Ver '.$singular, $text_domain ),
   			'separate_items_with_commas' => __( 'Separar Elementos Con Comas', $text_domain ),
   			'add_or_remove_items'        => __( 'Agregar o remover '.$plural, $text_domain ),
   			'choose_from_most_used'      => __( 'Escoja entre los más usados', $text_domain ),
   			'popular_items'              => __( $plural.' más vistos', $text_domain ),
   			'search_items'               => __( 'Buscar '.$plural, $text_domain ),
   			'not_found'                  => __( 'No se encontraron '.$plural, $text_domain ),
   			'no_terms'                   => __( 'No hay '.$plural, $text_domain ),
   			'items_list'                 => __( 'Listado de '.$plural, $text_domain ),
   			'items_list_navigation'      => __( 'Items list navigation', $text_domain ),
   		];
   		$args = [
   			'labels'                     => $labels,
   			// 'rewrite'                    => ['slug'  => 'tipo-receta'],
   			'hierarchical'               => true,
   			'public'                     => true,
   			'show_ui'                    => true,
   			'query_var'                  => true,
   			'show_admin_column'          => true,
   			'show_in_nav_menus'          => true,
   			'show_tagcloud'              => true,
   		];
   		register_taxonomy( $minuscula, array( $post_type ), $args );
   		
   	}
   
   }
   add_action('init','add_taxonomia_estado' );



