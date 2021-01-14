<?php 
/*
Template Name: Custom Query
*/
 ?>
<?php get_header(); ?>
<body <?php body_class();?>>
<?php get_template_part('template-parts/common/hero'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="posts">                
                <?php 
                    if(have_posts()){
                        $query = get_posts(array(
                            'post__in'=> array(4,6,8),
                            'orderby' => 'post__in'                            
                        ));
                        foreach($query as $post){
                            setup_postdata($post); ?>
                        <h2><a href="<?php the_permalink(); ?>"><?php echo the_title(); ?></a></h2>
                    <?php   }
                            wp_reset_postdata();
                    }
                 ?>      
            </div>      
        </div>
        <div class="col-md-4">
            <?php 
                if(is_active_sidebar('sidebar-1')){
                    dynamic_sidebar('sidebar-1');
                }
             ?>
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <!-- code here -->
            <?php endwhile; else : ?>
                <!-- code here -->
            <?php endif; ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>