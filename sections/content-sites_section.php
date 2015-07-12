<div class="container">
	<section class="site-section featured-sites" id="sites">
		<h2 class="text-center"><?php the_sub_field('sites_title'); ?></h2>
		<h3 class="text-center"><?php the_sub_field('sites_subtitle'); ?></h3>

		<div class="row"><div class="col-md-10 col-md-offset-1">
			<?php if (have_rows('sites_sites')): ?>
			<div class="row">
				<?php while (have_rows('sites_sites')): the_row(); $img = get_sub_field('sites_site_image'); ?>
					<div class="col-md-3 col-xs-6 footer-site">
						<figure class="figure">
							<a href="<?php the_sub_field('sites_site_link'); ?>" target="_blank">
								<img class="img-responsive" src="<?php echo $img['url']; ?>" style="width: 100%;" />
								<figcaption>
									<?php the_sub_field('sites_site_title'); ?>
								</figcaption>
							</a>
						</figure>
					</div>
				<?php endwhile; ?>
			</div>
			<?php endif; ?>
		</div></div>
	</section>
</div>