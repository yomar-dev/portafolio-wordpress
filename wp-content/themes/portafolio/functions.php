<?php 

add_theme_support('post-thumbnails');

function registrar_menu(){
	register_nav_menu('top-menu', __('Menú Superior'));
}

add_action('init', 'registrar_menu');

?>