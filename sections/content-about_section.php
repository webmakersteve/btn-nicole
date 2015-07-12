<div class="container">
	<section class="site-section" id="about">
		<h2 class="text-center"><?php the_sub_field('about_title'); ?></h2>
		<h3 class="text-center"><?php the_sub_field('about_subtitle'); ?></h3>

		<div class="row">
			<div class="col-md-6">
				<figure class="thumbnail pull-left">
					<?php $img = get_sub_field('about_image'); $url = $img['url']; ?>
					<img src="<?php echo $url; ?>" />
				</figure>
				<?php the_sub_field('about_content'); ?>
			</div>
			<div class="col-md-6">
				<div class="row">
					<div class="col-md-6">
						<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script><div style="overflow:hidden;height:250px;width:250px;" class="im-the-map"><div id="gmap_canvas" style="height:250px;width:250px;"></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style><a class="google-map-code" href="http://wptiger.com" id="get-map-data">wptiger.com</a></div><script type="text/javascript"> function init_map(){var myOptions = {zoom:15,center:new google.maps.LatLng(41.162954,-73.84129200000001),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById("gmap_canvas"), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(41.162954, -73.84129200000001)});infowindow = new google.maps.InfoWindow({content:"<b>Back to Nature Petcare</b><br/>10 Osage Dr.<br/>10562 Ossining" });google.maps.event.addListener(marker, "click", function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);
						</script>
					</div>
					<div class="col-md-6">
						<?php the_sub_field('location'); ?>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>