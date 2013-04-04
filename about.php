<?php
/*
Template Name: About
*/

$email = get_post_meta($post->ID, 'email');	// returns a list

?>
<!doctype html>
<html>
<head>
<title>About</title>
<link rel="stylesheet" href="<?php echo get_stylesheet_uri() ?>">
</head>
<body>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<h1><?php the_title() ?></h1>
<p><?php the_content() ?></p>
<div class="content">
<?php //print_r($email) ?>
<?php echo $email[0] ?>

</div>

<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>

</body>
</html>