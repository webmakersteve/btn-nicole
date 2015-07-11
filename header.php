<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
  <head>
    <meta charset="utf-8">

    <!-- Always force latest IE rendering engine or request Chrome Frame -->
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width">

    <!-- Use title if it's in the page YAML frontmatter -->
    <title><?php wp_title(); ?></title>

	<?php wp_head(); ?>
  </head>

  <body class="index" data-spy="scroll" data-target="#main-nav">
    <nav class="navbar navbar-main navbar-fixed-top" role="navigation">
	<!-- Brand and toggle get grouped for better mobile display -->
	<div class="container">

		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<div class="navbar-brand">
				<img class="visible-xs" src="<?php echo get_stylesheet_directory_uri() ?>/images/logo.png" alt="Back to Nature" />
			</div>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse navbar-ex1-collapse" id="main-nav">
			<ul class="nav navbar-nav">
				<li class="active"><a href="#carousel-id">Home</a></li>
				<li><a href="#about">About</a></li>
				<li><a href="#services">Services</a></li>
				<li class="hidden-xs"><a class="brandd" href="#">
					<img src="<?php echo get_stylesheet_directory_uri() ?>/images/logo.png" alt="Back to Nature" width="150" style="width: 150px;"  />
				</a></li>
				<li><a href="#contact">Contact</a></li>
				<li><a href="#faqs">FAQs</a></li>
				<li><a href="#sites" class="heart">Sites We</a></li>
			</ul>
		</div><!-- /.navbar-collapse -->

	</div>
</nav>