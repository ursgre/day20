<section class="my-5 top_margin">

    <div class="container">

        <h2 class="font-weight-bold text-center header__text"><?= $current_page->subtitle ?></h2>

	        <div class="row">
	        	<?php foreach ($gallery as $photo):?>
		            <div class="col-lg-4 col-md-6 mb-0 mt-5">
			            <a class="elem" href="<?= images().$photo->photo; ?>">
				            <div class="view overlay rounded z-depth-2 mb-4 gallery-box hover__photo wow fadeIn" style="background-image: url('<?= images().$photo->photo; ?>'); ">
				            </div>
			            </a>
		            </div>
	        	<?php endforeach; ?>
	        </div>

    </div>

</section>