<?php get_header();

// check if the flexible content field has rows of data
if( have_rows('section') ):

     // loop through the rows of data
	$i = 1;
    while ( have_rows('section') ) : the_row(); ?>
	<div class="section-wrapper section-<?php echo $i++; ?> section-<?php echo get_row_layout(); ?>">
		<?php get_template_part('sections/content', get_row_layout()); ?>
    </div>
    <?php endwhile; 

else :

    // no layouts found

endif;

?>
	
<?php get_footer(); ?>