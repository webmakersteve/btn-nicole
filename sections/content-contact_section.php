<div class="container">
	
	<section class="site-section" id="contact">
		<h2 class="text-center"><?php the_sub_field('contact_title'); ?></h2>
		<div class="row">
			<div class="col-md-4">
				<?php the_sub_field('contact_sidebar'); ?>
			</div>

			<div class="col-md-7">
				<h4 style="margin-bottom: 20px;"><?php the_sub_field('contact_form_title'); ?></h4>

				<form class="form-horizontal" action="#contact" method="POST">
					<?php if (btn_nicole_has_error()): ?>
					<div class="alert alert-success">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						<?php echo btn_nicole_get_error(); ?>
					</div>
					<?php endif; ?>

					<input type="hidden" name="FORM_ID" value="<?php echo base64_encode(get_sub_field('contact_form_title')); ?>">

					<input type="hidden" name="DO" value="CONTACT">
					<input type="hidden" name="RANDO_1234556" value="">

					<div class="form-group">
						<label for="NameInput" class="sr-only control-label">Name</label>
						<div class="col-sm-8">
							<input type="text" name="NAME" class="form-control" id="NameInput" placeholder="NAME">
						</div>
					</div>

					<div class="form-group">
						<label for="EmailInput" class="sr-only control-label">Email</label>
						<div class="col-sm-8">
							<input type="email" name="EMAIL" class="form-control" id="EmailInput" placeholder="EMAIL">
						</div>
					</div>

					<div class="form-group">
						<label for="AddressInput" class="sr-only control-label">Address</label>
						<div class="col-sm-8">
							<input type="text" name="ADDRESS" class="form-control" id="AddressInput" placeholder="ADDRESS">
						</div>
					</div>

					<div class="form-group">
						<label for="SubjectInput" class="sr-only control-label">Subject</label>
						<div class="col-sm-8">
							<input type="text" name="SUBJECT" class="form-control" id="SubjectInput" placeholder="SUBJECT">
						</div>
					</div>

					<div class="form-group">
						<label for="MessageInput" class="sr-only control-label">Message</label>
						<div class="col-sm-12">
							<textarea rows="8" name="MESSAGE" class="form-control" id="MessageInput" placeholder="MESSAGE"></textarea>
						</div>
					</div>

					<div class="form-group">
						<div class="col-sm-10">
							<button type="submit" class="btn btn-default btn-standard">Submit</button>
						</div>
					</div>
				</form>

			</div>
		</div>
	</section>
</div>