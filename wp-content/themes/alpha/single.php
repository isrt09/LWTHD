<?php get_header(); ?>
<body <?php body_class();?>>
<?php get_template_part('hero'); ?>
<div class="posts">
    <?php 
        while(have_posts()){
            the_post(); ?>
        <div class="post" <?php post_class(); ?>>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="post-title  text-center"><?php the_title(); ?></h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-10 offset-md-1 text-center">
                        <p><strong><?php the_author() ?></strong><br/>
                            <?php echo get_the_date('M d, Y'); ?>, <?php the_time('g:i A'); ?>                            
                        </p>                        
                    </div>
                    <div class="col-md-10 offset-md-1 text-justify">
                       <p><?php the_post_thumbnail('large',['class'=>'img-fluid']);?></p>
                       <?php the_content();?>
                       <?php  next_post_link();
                    previous_post_link(); ?>
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
<?php get_footer(); ?>