<?php 
function alpha_bootstrap(){
	load_theme_textdomain('alpha');
	add_theme_support('post-thumbnails');
	add_theme_support('title-tag');
	register_nav_menu('topmenu',__("Top Menu","alpha"));
	register_nav_menu('footermenu',__("Footer Menu","alpha"));
}

add_action('after_setup_theme','alpha_bootstrap');

function alpha_assets(){
	wp_enqueue_style('alpha',get_stylesheet_uri());
	wp_enqueue_style("bootstrap",'//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css');
	wp_enqueue_style("featherlight-css",'//cdn.jsdelivr.net/npm/featherlight@1.7.14/release/featherlight.min.css');
	wp_enqueue_script('featherlight-js','//cdn.jsdelivr.net/npm/featherlight@1.7.14/release/featherlight.min.js',['jquery'],"1.0.1",true);
}
add_action('wp_enqueue_scripts','alpha_assets');

function alpha_sidebar(){
	register_sidebar([
		'name' 			=> __('Single Post Sidebar','alpha'),
		'id'   			=> 'sidebar-1',
		'description'   => __('Right Sidebar','alpha'),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  =>'</section>',
		'before_title'  => '<h2 class="widget-title>',
		'after_title'   => '</h2>'
	]);

	register_sidebar([
		'name' 			=> __('Footer Left Sidebar','alpha'),
		'id'   			=> 'sidebar-2',
		'description'   => __('Footer Left Sidebar','alpha'),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  =>'</section>',
		'before_title'  => '',
		'after_title'   => ''
	]);
	register_sidebar([
		'name' 			=> __('Footer Right Sidebar','alpha'),
		'id'   			=> 'sidebar-3',
		'description'   => __('Footer Right Sidebar','alpha'),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  =>'</section>',
		'before_title'  => '',
		'after_title'   => ''
	]);
}


add_action('widgets_init','alpha_sidebar');






