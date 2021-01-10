<?php 
function launcher_setup_theme(){
	load_theme_textdomain("launcher");
	add_theme_support('title-tag');
	add_theme_support('post-thumbnails');
}
add_action("after_setup_theme","launcher_setup_theme"); 

function launcher_assets(){
	wp_enqueue_style("animate-css",  get_theme_file_uri("/assets/css/animate.css"));	
	wp_enqueue_style("iconmoon-css", get_theme_file_uri("/assets/css/icomoon.css"));	
	wp_enqueue_style("bootstrap-css",get_theme_file_uri("/assets/css/bootstrap.css"));	
	wp_enqueue_style("style-css",    get_theme_file_uri("/assets/css/style.css"));	
	wp_enqueue_style("launcher",     get_stylesheet_uri(),null,'0.0.1');

	wp_enqueue_script("jquery-easing",	 get_theme_file_uri("assets/js/jquery.easing.1.3.js"),['jquery'],null,true);
	wp_enqueue_script("bootstrap",		 get_theme_file_uri("assets/js/bootstrap.min.js"),['jquery'],null,true);
	wp_enqueue_script("jquery-waypoints",get_theme_file_uri("assets/js/jquery.waypoints.min.js"),['jquery'],null,true);
	wp_enqueue_script("simplyCountdown", get_theme_file_uri("assets/js/simplyCountdown.js"),['jquery'],null,true);
	wp_enqueue_script("main", 			 get_theme_file_uri("assets/js/main.js"),['jquery'],time(),true);

	$launcherYear  = get_post_meta(get_the_ID(),"year",true);
	$launcherMonth = get_post_meta(get_the_ID(),"month",true);
	$launcherDay   = get_post_meta(get_the_ID(),"day",true);

	wp_localize_script("main","dataJSON",[
		"year"  => $launcherYear,
		"month" => $launcherMonth,
		"day"   => $launcherDay,
	]);
}
add_action("wp_enqueue_scripts","launcher_assets");

function launcher_sidebar(){
	register_sidebar([
		'name'  		=> __("Footer Left Sidebar","launcher"),
		'description'   => __("This Left Sidebar Description","launcher"),
		'id'			=> "footer-left-sidebar",
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => "</<section>",
		'before_title'  => '<h2 class="widget-title>',
		'after_title'   => '</h2>'
	]);
	register_sidebar([
		'name'  		=> __("Footer Right Sidebar","launcher"),
		'description'   => __("This Right Sidebar Description","launcher"),
		'id'			=> "footer-right-sidebar",
		'before_widget' => '<section id="%1$s" class="widget %2$s text-right">',
		'after_widget'  => "</<section>",
		'before_title'  => '<h2 class="widget-title>',
		'after_title'   => '</h2>'
	]);
}
add_action("widgets_init","launcher_sidebar");

function launcher_background(){
	if(is_page()){
		$thumbail_url = get_the_post_thumbnail_url(null,"large");
	?>
		<style>
			.home-side{
				background-image: url(<?php echo $thumbail_url;?>);
			}
		</style>
	<?php }
}
add_action("wp_head","launcher_background");