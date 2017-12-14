<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package discapacidad
 */

if ( ! is_active_sidebar( 'sidebar-principal' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area">
	<?php dynamic_sidebar( 'sidebar-principal' ); ?>
</aside><!-- #secondary -->

