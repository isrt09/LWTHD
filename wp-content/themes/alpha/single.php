<?php get_header(); ?>
<body <?php body_class();?>>
<?php get_template_part('template-parts/common/hero'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="posts">                
                <?php 
                    while(have_posts()){  the_post(); ?>            
                    <div class="post" <?php post_class(); ?>>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <h2 class="post-title"><?php the_title(); ?></h2>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-10">
                                    <!-- <p><strong><?php the_author() ?></strong><br/> -->
                                    <p><strong><?php the_author_posts_link(); ?></strong><br/>
                                        <?php echo get_the_date('M d, Y'); ?>, <?php the_time('g:i A'); ?>  
                                    </p>                        
                                </div>                                
                                <div class="col-md-10">
                                   <?php 
                                        if(has_post_thumbnail()){
                                            $thumbnail_url = get_the_post_thumbnail_url(null,'large');
                                            echo '<a href="'.$thumbnail_url.'" data-featherlight="image">';
                                            the_post_thumbnail('large',['class'=>'img-fluid']);
                                            echo "</a>";
                                            the_content();?>
                                            
                                            <?php 
                                            if(get_post_format() == 'gallery') :
                                            ?>
                                            <p><b>Camer Model : </b><?php echo esc_html(get_field('camera_model')); ?></p>
                                            <p><b>Location : </b><?php echo esc_html(get_field('location')); ?></p>
                                            <?php
                                            endif;
                                            ?>
                                       <?php }
                                    ?>                                                                     
                                </div>                                
                                <?php  if(comments_open()) :?>                                     
                                    <div class="col-md-10 offset-md-1">                       
                                       <?php comments_template(); ?>
                                    </div>
                                <?php endif; ?>                                      
                            </div>                
                        </div>          
                    </div>      
                <?php }
                ?>       
            </div>      
        </div>
        <div class="col-md-4">
            <?php 
                if(is_active_sidebar('sidebar-1')){
                    dynamic_sidebar('sidebar-1');
                }
             ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>