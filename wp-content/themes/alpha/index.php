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
                <h1 class="align-self-center display-1 text-center heading"><a href="<?php home_url('/'); ?>"><?php bloginfo('title'); ?></a></h1>
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
                        <h2 class="post-title"><?php the_title(); ?></h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <p>
                            <strong><?php the_author() ?></strong><br/>
                            <?php the_time('M d, Y'); ?>
                        </p>
                        <?php echo get_the_tag_list("<ul class=\"list-unstyled\"><li>","</li><li>","</li></ul>"); ?>
                    </div>
                    <div class="col-md-8">
                        <p><?php the_post_thumbnail('large',['class'=>'img-fluid']);?></p>
                        <p><?php the_content(); ?></p>                                       
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