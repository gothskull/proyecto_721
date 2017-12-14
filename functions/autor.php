<?php 

function contador_comentarios_wpbody() { 
    $comentarios = wp_count_comments();
    return $comentarios;
} 
add_shortcode('numero_comentarios_wpbody','contador_comentarios_wpbody');