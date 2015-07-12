<div class="container">
	<section class="site-section" id="faqs">
		<h2 class="text-center"><?php the_sub_field('faq_title'); ?></h2>
		<h3 class="text-center"><?php the_sub_field('faq_subtitle'); ?></h3>
		<div class="row">
  <div class="col-md-10 col-md-offset-1">
    <?php if (have_rows('faq_faqs')) : ?>
    <div class="panel-group" id="faq-accordion" role="tablist" aria-multiselectable="true">
      <?php $faq = 0; ?>
      <?php while ( have_rows('faq_faqs') ) : the_row(); $faq++; ?>

      <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="heading-<?php echo $faq; ?>">
          <h4 class="panel-title">
            <a role="button" data-toggle="collapse" data-parent="#faq-accordion" href="#faq-<?php echo $faq; ?>">
              Q: <?php the_sub_field('faqs_faq_question'); ?>
            </a>
          </h4>
        </div>
        <div id="faq-<?php echo $faq; ?>" class="panel-collapse collapse <?php if ($faq == 1) echo 'in'; ?>" role="tabpanel">
          <div class="panel-body">
            <?php the_sub_field('faqs_faq_answer'); ?>
          </div>
        </div>
      </div>

      <?php endwhile; ?>
      
    </div> <!-- /.panel-group -->
  <?php endif; ?>

  </div>

</div>
	</section>
</div>