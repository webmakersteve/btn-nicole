<?php if (!have_rows('slider_images')) return; ?>
<section id="carousel-id-wrapper" style="padding: 0;">
	<div id="carousel-id" class="carousel slide" data-ride="carousel">
	    <div class="carousel-inner">
	    	<?php $slide = 0; ?>
	    	<?php while (have_rows('slider_images')): the_row(); $slide++; $img = get_sub_field('slider_image');  ?>

	        <div class="item <?php if ($slide == 1) echo 'active'; ?>">
				<div class="carousel-image" style="background-image: url('<?php echo $img['url'] ?>')"></div>
	        </div>

		    <?php endwhile; ?>
	    </div>
	    <div class="container">
	    	<a class="right carousel-control" href="#carousel-id" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
		    <div class="carousel-caption">
		    	<div class="box">
			        <h1><?php echo bloginfo('name'); ?></h1>
			        <p class="tagline"><?php echo bloginfo('description'); ?></p>
		        </div>
		    </div>
		    <a class="left carousel-control" href="#carousel-id" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
		</div>
	</div>
</section>