<!doctype html>
<html>
<head>
<title><?php bloginfo('name'); ?></title>
<link rel="stylesheet" href="<?php echo get_stylesheet_uri() ?>">
</head>
<body>

<div id="container">

<div id="header">
<h1 id="site_title"><?php bloginfo('name') ?></h1>
<h3 id="site_tagline"><?php bloginfo('description') ?></h3>
<div id="clear"></div>
</div>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div id="post-header">
<h3><?php echo the_title() ?></h3>
<?php if(in_category('Assignments')) { ?>
	<div class='post-mood'><?php the_meta(); ?></div> 
<?php } ?>

</div>

<div id="clear"></div>

<div class="post">
<div class="post-content">
<?php
echo the_content();
?>
</div>
<?php if(in_category('Personal')) { ?>
	<div class='post-me'><?php the_meta(); ?></div>
<?php } ?>


<div class="post-cat_name">
<?php
echo the_category();
?>



</div>


</div>

<?php if(in_category('Personal')) 
	echo "<hr />";
?>


<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>

</div>

</body>
</html>