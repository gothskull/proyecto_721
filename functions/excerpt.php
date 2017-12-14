<?php 
	function get_excerpt(){
		$excerpt = get_the_content();
		$excerpt = preg_replace(" ([.*?])",'',$excerpt);
		$excerpt = strip_shortcodes($excerpt);
		$excerpt = strip_tags($excerpt);
		$excerpt = substr($excerpt, 0, 445);
		$excerpt = substr($excerpt, 0, strripos($excerpt, " "));
		$excerpt = trim(preg_replace( '/s+/', ' ', $excerpt));
		// $excerpt = $excerpt.'... <a href="'.$permalink.'">more</a>';
	return $excerpt;
}
	function get_excerpt_home(){
		$excerpt = get_the_content();
		$excerpt = preg_replace(" ([.*?])",'',$excerpt);
		$excerpt = strip_shortcodes($excerpt);
		$excerpt = strip_tags($excerpt);
		$excerpt = substr($excerpt, 0, 138);
		$excerpt = substr($excerpt, 0, strripos($excerpt, " "));
		$excerpt = trim(preg_replace( '/s+/', ' ', $excerpt));
		// $excerpt = $excerpt.'... <a href="'.$permalink.'">more</a>';
	return $excerpt;
}