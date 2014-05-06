<?php
	get_header();
    add_post_type_support( 'page', 'excerpt' );
?>

<?php
if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div id="content_pages">
	<?php the_content();?>
	
</div>
<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>
<?php
	get_footer();
?>