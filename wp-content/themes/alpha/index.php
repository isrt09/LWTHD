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
                        <h2 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <p>
                            <strong><?php the_author() ?></strong><br/>
                            <?php echo get_the_date('M d, Y'); ?>, <?php the_time('g:i A'); ?>
                        </p>
                        <?php echo get_the_tag_list("<ul class=\"list-unstyled\"><li>","</li><li>","</li></ul>"); ?>
                    </div>
                    <div class="col-md-8  text-justify">
                        <p><?php 
                            $thumbnail_url = get_the_post_thumbnail_url(null,'large');
                            echo '<a href="'.$thumbnail_url.'" data-featherlight="image">';
                            the_post_thumbnail('large',['class'=>'img-fluid']);
                            echo "</a>";?>                            
                        </p> 
                       <?php                                
                            if(is_single()): the_content();
                                else : the_excerpt();
                            endif;                           
                        ?>                                                          
                    </div>
                </div>
            </div>          
        </div>      
    <?php }
    ?>       
</div>
<div class="container">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-8">
            <h2>Pagination should be fixing soon....</h2>
            <?php the_posts_pagination(['']); ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>