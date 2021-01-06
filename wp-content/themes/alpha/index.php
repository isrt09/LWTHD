<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php bloginfo('title'); ?></title>     
    <?php wp_head(); ?>
</head>
<body <?php body_class();?>>
<div class="header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="tagline"><?php bloginfo('description'); ?></h3>
                <h1 class="align-self-center display-1 text-center heading"><a href="<?php echo home_url('/'); ?>"><?php bloginfo('title'); ?></a></h1>
            </div>
        </div>
    </div>
</div>
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
                        <p><?php the_post_thumbnail('large',['class'=>'img-fluid']);?></p>                       
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
<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                &copy; LWHH - All Rights Reserved
            </div>
        </div>
    </div>
</div>
<?php wp_footer(); ?>
</body>
</html>