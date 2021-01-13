<div class="header">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center header-logo mt-3">
                <?php the_custom_logo(); ?>
            </div>
            <div class="col-md-12">
                <h3 class="tagline"><?php bloginfo('description'); ?></h3>
                <h1 class="align-self-center display-1 text-center heading"><a href="<?php echo home_url('/'); ?>"><?php bloginfo('title'); ?></a></h1>
            </div>            
            <div class="col-md-6 offset-md-3 mb-5">
            	<header class="main-header ">							
					<nav class="main-menu">
						<div class="menu">
							<ul>
								<?php wp_nav_menu([
									'theme_location' => 'topmenu'
								]); ?>
							</ul>
						</div>
					</nav>			
				</header>
            </div>            
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col md-12 text-center mb-3">
                <?php echo get_search_form(); ?>
            </div>                    
        </div>
        <div class="row">
            <div class="col md-12 text-center mb-5">
                <?php 
                    if(is_search()){?>
                        <h3><?php _e("What are you looking for : ","alpha") ?><?php echo get_search_query(); ?></h3>
                    <?php }
                 ?>
            </div> 
        </div>
    </div>
</div>