<?php get_header(); ?>
<body <?php body_class();?>>
<?php get_template_part('template-parts/common/hero'); ?>
<div class="container">
	<div class="row">
		<div class="col-md-12 text-center  mt-5 mb-5">
			<h1><?php _e("Sorry!, You are looking for that is NOT FOUND!","alpha"); ?></h1>
		</div>
	</div>
</div>
<?php get_footer(); ?>