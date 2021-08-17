<?php 

//-----------------------------------------------------
// Añadimos los estilos
//-----------------------------------------------------
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
 
 
//Aquí pondrás todo el código que necesites para tu página
