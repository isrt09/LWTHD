<?php 
/*
Template Name: About Page Template
*/
get_header(); ?>

<body <?php body_class();?>>
<?php get_template_part('/template-parts/about-page/hero-page'); ?>
    <div class="posts">
        <?php 
            while(have_posts()){  the_post(); ?>            
            <div class="post" <?php post_class(); ?>>
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 offset-md-1 text-center">
                            <h2 class="post-title"><?php the_title(); ?></h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-10 offset-md-1 text-center">
                            <p><strong><?php the_author() ?></strong><br/>
                                <?php echo get_the_date('M d, Y'); ?>, <?php the_time('g:i A'); ?>  
                            </p>                        
                        </div>
                        <div class="col-md-10 offset-md-1 text-justify">
                           <?php 
                                if(has_post_thumbnail()){
                                    $thumbnail_url = get_the_post_thumbnail_url(null,'large');
                                    echo '<a href="'.$thumbnail_url.'" data-featherlight="image">';
                                    the_post_thumbnail('large',['class'=>'img-fluid']);
                                    echo "</a>";
                                    the_content();                                            
                                }
                            ?>                                                                     
                        </div>                                                                    
                    </div>                
                </div>          
            </div>      
        <?php }
        ?>       
    </div>             
<?php get_footer(); ?>