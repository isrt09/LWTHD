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
                       <?php the_content(); ?>
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