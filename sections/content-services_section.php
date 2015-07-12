<div class="container">
	<section class="site-section" id="services">
		<h2 class="text-center"><?php the_sub_field('services_title'); ?></h2>
		<h3 class="text-center"><?php the_sub_field('services_subtitle'); ?></h3>
		
		<?php if (have_rows('service_services')): ?>

		<?php $service = 0; $row = 0; ?>
		<div class="row">
	    	<?php while ( have_rows('service_services') ) : the_row(); $service++; ?>
		    	<?php if ($row != 0 && $row%2 == 0) {

		    	}
		    	if (get_sub_field('service_fullsize') == true) {
		    		$row = $row + 2;
		    		$col = '12';
		    	} else {
		    		$row++;
		    		$col = '6';
		    	}

		    	$img = get_sub_field('service_image');
		    	?>

				<div class="col-md-<?php echo $col; ?>">
					<figure class="thumbnail pull-left">
						<img src="<?php echo $img['url']; ?>" />
					</figure>
					<h4><?php the_sub_field('service_title'); ?></h4>
					<p><?php the_sub_field('service_description'); ?></p>
				</div>

				<?php if ($row % 2 == 0) {
		    		echo '</div><div class="row">'; 
		    	}

			endwhile; ?>
		</div>

		<?php endif; ?>

	</section>
</div>