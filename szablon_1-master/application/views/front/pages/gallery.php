	<div class="container mt-4 mb-3">
		<div class="row">
			<div class="col-md-12 d-inline">
				<h4 class="text-uppercase"><a href="<?= base_url() ?>" class="first-color home-text font-weight-normal">HOME</a> > 
					<span class="font-weight-bold first-color"><?= $current_page->title; ?></span></h4>
			</div>
		</div>
	</div>
	<div class="container">
      <!--Section: Main info-->
      <section class="mt-5 mb-5">
      	<div class="col-md-12">
	       	<div class="gallery_box">
				<?php foreach ($gallery as $photo):?>
					<a href="<?= images().$photo->photo; ?>" data-lightbox="image-1">
					    <img class="item wow fadeIn" src="<?= images().$photo->photo; ?>" alt="<?= $photo->alt; ?>">
					</a>
				<?php endforeach; ?>
			</div>
	    </div>
      </section>
      <!--Section: Main info-->
  	</div>