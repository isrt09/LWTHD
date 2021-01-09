<?php 

if(site_url() == 'http://localhost/LWTHD'){
	define("VERSION",time());
}else{
	define("VERSION",wp_get_theme()->get("VERSION"));
}
function alpha_bootstrap(){
	load_theme_textdomain('alpha');
	add_theme_support('post-thumbnails');
	add_theme_support('title-tag');
	register_nav_menu('topmenu',__("Top Menu","alpha"));
	register_nav_menu('footermenu',__("Footer Menu","alpha"));
}

add_action('after_setup_theme','alpha_bootstrap');

function alpha_assets(){
	wp_enqueue_style('alpha',get_stylesheet_uri(),null,VERSION);
	wp_enqueue_style("bootstrap",'//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css');
	wp_enqueue_style("featherlight-css",'//cdn.jsdelivr.net/npm/featherlight@1.7.14/release/featherlight.min.css');
	wp_enqueue_script('featherlight-js','//cdn.jsdelivr.net/npm/featherlight@1.7.14/release/featherlight.min.js',['jquery'],VERSION,true);
	wp_enqueue_script('main-js',get_template_directory_uri()."/assets/js/main.js",null,VERSION,true);
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

function about_page_inline_style(){
	if(is_page()){
		 $alpha_feature_image = get_the_post_thumbnail_url(null,"page");
	}
?>
<style>
	/*
		here our style code for inline section		
	*/
	.page-header{
		background-image: url(<?php echo $alpha_feature_image?>);
	}
</style>
<?php }
add_action('wp_head','about_page_inline_style',100);






