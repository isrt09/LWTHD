<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php bloginfo('title'); ?></title>
</head>
<body>
	<?php 
		if(have_posts()):
			while(have_posts()):the_post(); ?>
			<h1><?php the_title(); ?></h1>
		<?php endwhile; else :
			echo "Not Found!";
		endif;
	?>	
</body>
</html>