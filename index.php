<?php get_header(); ?>
    <div id="carousel-id" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="item active">
			<div class="carousel-image" style="background-image: url('<?php echo get_stylesheet_directory_uri() ?>/images/sliders/slide-1.png')"></div>
        </div>
        <div class="item">
			<div class="carousel-image" style="background-image: url('<?php echo get_stylesheet_directory_uri() ?>/images/sliders/slide-1.png')"></div>
        </div>
        <div class="item">
			<div class="carousel-image" style="background-image: url('<?php echo get_stylesheet_directory_uri() ?>/images/sliders/slide-1.png')"></div>
        </div>
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

<div class="container" id="about">
	<section class="site-section">
		<h2 class="text-center">About Us</h2>
		<h3 class="text-center">Dog & Pet: walking, hiking, house & pet sitting, basic training, health/fitness</h3>

		<div class="row">
			<div class="col-md-6">
				<figure class="thumbnail pull-left">
					<img src="<?php echo get_stylesheet_directory_uri() ?>/images/nicole.png" />
				</figure>
				<h4>My Name is Nicole Refino</h4>
				<p>and I am the President of BTNPets.</p>
				<p>This site will make you aware of thegreat things we do at BTNpets (Backto Nature Pet Care).</p>
				<p>Our company helps your dog get backto nature.  This is a healthy place for adog to be.This means grooming, running/hiking,basic training, health/fitness.</p>
				<p>This means grooming, running/hiking, basic training, health/fitness.</p>
			</div>
			<div class="col-md-6">
				<div class="row">
					<div class="col-md-6">
						<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script><div style="overflow:hidden;height:250px;width:250px;" class="im-the-map"><div id="gmap_canvas" style="height:250px;width:250px;"></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style><a class="google-map-code" href="http://wptiger.com" id="get-map-data">wptiger.com</a></div><script type="text/javascript"> function init_map(){var myOptions = {zoom:15,center:new google.maps.LatLng(41.162954,-73.84129200000001),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById("gmap_canvas"), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(41.162954, -73.84129200000001)});infowindow = new google.maps.InfoWindow({content:"<b>Back to Nature Petcare</b><br/>10 Osage Dr.<br/>10562 Ossining" });google.maps.event.addListener(marker, "click", function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
					</div>
					<div class="col-md-6">
						<h4>We are Located</h4>
						<p>10 Osage Dr. East<br>
						Ossining, NY 10562</p>
						<p>e: btnpetcare@gmail.com<br>
						p: 917.968.2633</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="site-section" id="services">
		<h2 class="text-center">Services</h2>
		<h3 class="text-center">Let us take care of your pets just like you would &elipsis; WITH LOVE</h3>

		<div class="row">
			<div class="col-md-6">
				<figure class="thumbnail pull-left">
					<img src="<?php echo get_stylesheet_directory_uri() ?>/images/neighborhood-walks.png" />
				</figure>
				<h4>NEIGHBORHOOD WALKS</h4>
				<p>Gone for most of the day? No one home to let the dog out, or go for a stroll so  your pup can feel the wind in his or her  fur? Well, you have come to the right  place! Neighborhood walks are leashed  walks within walking distance from your  home, lasting from 15 to 20minutes. This  option is perfect for pups that just need a  breather mid day, mid morning, or a  couple of hours before you get home from  work! And a little lovin' is always included,  gratis! (Because we love what we do!).</p>
			</div>
			<div class="col-md-6">
				<figure class="thumbnail pull-left">
					<img src="<?php echo get_stylesheet_directory_uri() ?>/images/house-dogsitting.png" />
				</figure>
				<h4>HOUSE AND DOG SITTING</h4>
				<p>If you travel, EVER, this is a great option for  you! And is preferred by most clients (both  two-legged and four-legged). Who doesn't  appreciate going away knowing their pup  and home and just where you left them,  safe and sound?! We not only provide care for  your dog including a sleepover and three neighborhood walks (booked per twenty-four  hour periods), but also mail retrieval, and  feeding of other pets in your home.  .</p>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<figure class="thumbnail pull-left">
					<img src="<?php echo get_stylesheet_directory_uri() ?>/images/basic-training.png" />
				</figure>
				<h4>My BASIC TRAINING</h4>
				<p>Starting with the basics is a GREAT START!  Even before you bring your pup home, there  are things you should know! We can help,  and guide through developing a strong  relationship with your pup and solidifying  the foundations of a healthy furry family!</p>
			</div>
			<div class="col-md-6">
				<figure class="thumbnail pull-left">
					<img src="<?php echo get_stylesheet_directory_uri() ?>/images/with-ball.png" />
				</figure>
				<h4>RUNNING/HIKING</h4>
				<p>Have an active dog that just can't get enough  of the outdoors? Do they let you know as soon  as you get home and "attempt" to relax? Or  maybe you just know what it means to be a dog... (in the best way possible, obviously) What we  mean is, you know Nature is a dogs best ally,  mud is a dogs best accessory, and there can  never be too many playdates at the park! Hikes  are, by far, our best option to get your pup back  to nature! Hikes are anywhere from 40 minutes to an hour and fifteen minutes of off leash play  time with the Back to Nature Pack! (pick up and  drop off is included!) And a little lovin' is always  included, gratis! (Because we love what we do!)</p>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<figure class="thumbnail pull-left">
					<img src="<?php echo get_stylesheet_directory_uri() ?>/images/health-diet.png" />
				</figure>
				<h4>HEALTH/FITNESS & DIET</h4>
				<p>Although we do not currently offer a service for consultation on these things, it is at the top of  our list! Making sure your dog gets exercise and a little fresh air is only part of the story! There  are so many other ways to get Back to Nature. A healthy diet, and a healthy body are also very  important! We are looking into incorporating more diet and health related tools and consultation  into our available Services. We appreciate what our clients have to say, so you if you have any  suggestions or requests we welcome you to send them in on our Contact page! (We are always  looking to improve, and we always find our four-legged families always know best!)</p>
			</div>

		</div>

	</section>
	<section class="site-section" id="contact">
		<h2 class="text-center">Contact Us</h2>
		<div class="row">
			<div class="col-md-4">
				<h4>Owner: Nicole Refino</h4>
				<p>Phone: 917.968.2633<br>
				10 Osage Dr. East<br>
				Ossining, NY 10562</p>
				<p>btpetcare (at) gmail.com</p>
			</div>

			<div class="col-md-7">
				<h4 style="margin-bottom: 20px;">Feel Free to use this Form to Contact Us Directly:</h4>

				<form class="form-horizontal">

					<div class="form-group">
						<label for="inputEmail3" class="sr-only control-label">Name</label>
						<div class="col-sm-8">
							<input type="text" class="form-control" id="NameInput" placeholder="NAME">
						</div>
					</div>

					<div class="form-group">
						<label for="inputEmail3" class="sr-only control-label">Email</label>
						<div class="col-sm-8">
							<input type="email" class="form-control" id="EmailInput" placeholder="EMAIL">
						</div>
					</div>

					<div class="form-group">
						<label for="inputEmail3" class="sr-only control-label">Address</label>
						<div class="col-sm-8">
							<input type="text" class="form-control" id="AddressInput" placeholder="ADDRESS">
						</div>
					</div>

					<div class="form-group">
						<label for="inputEmail3" class="sr-only control-label">Subject</label>
						<div class="col-sm-8">
							<input type="text" class="form-control" id="SubjectInput" placeholder="SUBJECT">
						</div>
					</div>

					<div class="form-group">
						<label for="inputEmail3" class="sr-only control-label">Message</label>
						<div class="col-sm-12">
							<textarea rows="8" class="form-control" id="inputEmail3" placeholder="MESSAGE"></textarea>
						</div>
					</div>

					<div class="form-group">
						<div class="col-sm-10">
							<button type="submit" class="btn btn-default btn-standard">Sign in</button>
						</div>
					</div>
				</form>

			</div>
		</div>
	</section>
	<section class="site-section" id="faqs">
		<h2 class="text-center">FAQs</h2>
		<h3 class="text-center">Dog & Pet: walking, hiking, house & pet sitting, basic training, health/fitness</h3>
		<div class="row">
  <div class="col-md-10 col-md-offset-1">

    <div class="panel-group" id="faq-accordion" role="tablist" aria-multiselectable="true">
      <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="heading-0">
          <h4 class="panel-title">
            <a role="button" data-toggle="collapse" data-parent="#faq-accordion" href="#faq-0">
              Q:  HOW DO I KNOW WHICH OPTION IS RIGHT FOR ME?
            </a>
          </h4>
        </div>
        <div id="faq-0" class="panel-collapse collapse in" role="tabpanel">
          <div class="panel-body">
            A: If you are not sure which option will best fit you and your pups lifestyle, just ask! We are on top of things! Which means we usually respond within twenty-four hours or less. You can contact us through email or by phone via our Contact page.
          </div>
        </div>
      </div>
      <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="heading-1">
          <h4 class="panel-title">
            <a role="button" data-toggle="collapse" data-parent="#faq-accordion" href="#faq-1">
              Q:  What if I want my dog to go on hikes, but he/she is not trained to be off leash? 
            </a>
          </h4>
        </div>
        <div id="faq-1" class="panel-collapse collapse " role="tabpanel">
          <div class="panel-body">
            A: If you are not sure which option will best fit you and your pups lifestyle, just ask! We are on top of things! Which means we usually respond within twenty-four hours or less. You can contact us through email or by phone via our Contact page.
          </div>
        </div>
      </div>
      <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="heading-2">
          <h4 class="panel-title">
            <a role="button" data-toggle="collapse" data-parent="#faq-accordion" href="#faq-2">
              Q:  How many dogs are on each hike? What is the dog – walker ratio?
            </a>
          </h4>
        </div>
        <div id="faq-2" class="panel-collapse collapse " role="tabpanel">
          <div class="panel-body">
            A: In each hike there are between 2 and four dogs. Our ratios are strictly, at most, 4 dogs – 1 human ratio! (this is the safest way to make sure everyone has fun)
          </div>
        </div>
      </div>
      <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="heading-3">
          <h4 class="panel-title">
            <a role="button" data-toggle="collapse" data-parent="#faq-accordion" href="#faq-3">
              Q:  How do I get started?
            </a>
          </h4>
        </div>
        <div id="faq-3" class="panel-collapse collapse " role="tabpanel">
          <div class="panel-body">
            A: Contact us! After we exchange basic information, we will set up a meet and greet at a time that is convenient for you. This way we can learn more about each other and select the best service for you and your pup.
          </div>
        </div>
      </div>
      <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="heading-4">
          <h4 class="panel-title">
            <a role="button" data-toggle="collapse" data-parent="#faq-accordion" href="#faq-4">
              Q:  What if I need you last-minute?
            </a>
          </h4>
        </div>
        <div id="faq-4" class="panel-collapse collapse " role="tabpanel">
          <div class="panel-body">
            A: Last minute requests are for current clients only (through phone call or txt message). Because of safety reasons, we will only walk a dog who has been evaluated and has gone through all of the Back to Nature paperwork. Think you’ll need us soon? Get started today by accessing our Contact page. 
          </div>
        </div>
      </div>
      <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="heading-5">
          <h4 class="panel-title">
            <a role="button" data-toggle="collapse" data-parent="#faq-accordion" href="#faq-5">
              Q:  Can I set up regular weekly walks or hikes?
            </a>
          </h4>
        </div>
        <div id="faq-5" class="panel-collapse collapse " role="tabpanel">
          <div class="panel-body">
            A: Yes! In fact, most of our clients find that this is the best route Back to Nature and to good health. You can schedule your dog to be with us anywhere from once a year (a birthday present maybe?), once a month, once a week, or even five days a week. It is all dependent upon your needs!
          </div>
        </div>
      </div>
      <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="heading-6">
          <h4 class="panel-title">
            <a role="button" data-toggle="collapse" data-parent="#faq-accordion" href="#faq-6">
              Q:  Do you walk on the weekends?
            </a>
          </h4>
        </div>
        <div id="faq-6" class="panel-collapse collapse " role="tabpanel">
          <div class="panel-body">
            A: While we are not scheduled to walk every weekend, we can plan ahead if you need your dog walked on a specific weekend. We can also refer you to a trusted colleague, should you decide you need regular weekend walks.
          </div>
        </div>
      </div>
      <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="heading-7">
          <h4 class="panel-title">
            <a role="button" data-toggle="collapse" data-parent="#faq-accordion" href="#faq-7">
              Q:  What if the weather is bad? Can you still come walk my dog?
            </a>
          </h4>
        </div>
        <div id="faq-7" class="panel-collapse collapse " role="tabpanel">
          <div class="panel-body">
            A: Back to Nature cares about the safety of both your pet and our walkers. We often hike in the rain, snow, sleet, and wind. However, if the weather is in any way dangerous, we ask that you have a backup plan if we cannot make it to your home. (Clients in the past have kept a neighbor on file who might be able to walk to their home if we cannot get there safely).
          </div>
        </div>
      </div>
      <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="heading-8">
          <h4 class="panel-title">
            <a role="button" data-toggle="collapse" data-parent="#faq-accordion" href="#faq-8">
              Q:  Do I pay for a meet and greet? What are your rates?
            </a>
          </h4>
        </div>
        <div id="faq-8" class="panel-collapse collapse " role="tabpanel">
          <div class="panel-body">
            A: Meet and greets are free! This is an opportunity for us to get to know you and for you to get to know us. We would never charge you for inquiring about whether we are the right fit for you. Rates vary depending on the service you choose, as well as other factors such as distance and difficulty. If you have any specific questions about your pup, you can ask through our Contact page.
          </div>
        </div>
      </div>
      <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="heading-9">
          <h4 class="panel-title">
            <a role="button" data-toggle="collapse" data-parent="#faq-accordion" href="#faq-9">
              Q:  Are there any other services you offer?
            </a>
          </h4>
        </div>
        <div id="faq-9" class="panel-collapse collapse " role="tabpanel">
          <div class="panel-body">
            A: We offer a number of services, all listed on our Services page. If there is something else you require, like delivering medication or playing with your cat while you are we away, you are in luck! We offer what we call specified services to individual clients because we realize everyones needs are different! (Just inquire via our Contact page!).
          </div>
        </div>
      </div>
    </div>

  </div>

</div>
	</section>
	<section class="site-section featured-sites" id="sites">
		<h2 class="text-center">SITES WE LOVE</h2>
		<h3 class="text-center">Here are a few sites that we love!</h3>
		<div class="row"><div class="col-md-10 col-md-offset-1">
			<div class="row">
				<div class="col-md-3 col-xs-6 footer-site">
					<figure class="figure">
						<img class="img-responsive" src="<?php echo get_stylesheet_directory_uri() ?>/images/holistic-food.png" />
						<figcaption>
							HOLISTIC & NATURAL DOG DIETS, VACCINES, & REMEDIES FOR FLEAS
						</figcaption>
					</figure>
				</div>
				<div class="col-md-3 col-xs-6 footer-site">
					<figure class="figure">
						<img class="img-responsive" src="<?php echo get_stylesheet_directory_uri() ?>/images/adoption.png" />
						<figcaption>
							SAVE A LIFE & ADOPT A HOMELESS PET  TODAY!
						</figcaption>
					</figure>
				</div>
				<div class="col-md-3 col-xs-6 footer-site">
					<figure class="figure">
						<img class="img-responsive" src="<?php echo get_stylesheet_directory_uri() ?>/images/westchester-parks.png" />
						<figcaption>
							WESTCHESTER HAS OVER 50 PARKS & REC AREAS TO EXPLORE. CHECK THEM OUT!
						</figcaption>
					</figure>
				</div>
				<div class="col-md-3 col-xs-6 footer-site">
					<figure class="figure">
						<img class="img-responsive" src="<?php echo get_stylesheet_directory_uri() ?>/images/cesar.png" />
						<figcaption>
							DOG APPROVED PEOPLE FOOD . . .& OTHER TIPS FROM CESAR MILLAN
						</figcaption>
					</figure>
				</div>
			</div>
		</div></div>
	</section>
<?php get_footer(); ?>