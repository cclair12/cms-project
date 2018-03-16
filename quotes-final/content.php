<?php
/**
 * The default template for displaying content.
 */
?>
	<section id="category">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<h3 class="os-animation" data-os-animation="zoomIn" data-os-animation-delay="0.3s">
                    <?php the_title(); ?></h3>
                    <?php the_post_thumbnail(); ?>
					<span class="line os-animation" data-os-animation="rollIn" data-os-animation-delay="0.4s"></span>
                  <p>
                     <?php the_content(); ?>
                  </p>
				</div>
			</div>
    </section>
