	<div class="container mt-4 mb-3">
	    <div class="row">
	        <div class="col-md-12 d-inline">
	            <h4 class="text-uppercase"><a href="<?= base_url() ?>"
	                    class="first-color home-text font-weight-normal">HOME</a> > <span
	                    class="font-weight-bold first-color"><?= $current_page->title; ?></span></h4>
	        </div>
	    </div>
	</div>
	</div>
	<div class="container">

	    <!--Section: Main info-->
	    <section class="mt-5 wow fadeIn mb-5">
	        <div class="row">
	            <?php foreach ($offer as $key) : ?>
	            <div class="col-md-4 mb-3">
	                <!-- Card Dark -->
	                <div class="card">

	                    <!-- Card image -->
	                    <div class="view overlay">
	                        <picture>
	                            <source srcset="<?= base_url() . 'uploads/' . $key->photo ?>.webp" type="image/webp"
	                                class="card-img-top">
	                            <source srcset="<?= base_url() . 'uploads/' . $key->photo ?>" type="image/jpeg"
	                                class="card-img-top">
	                            <img src="<?= base_url() . 'uploads/' . $key->photo ?>" alt="<?= $key->alt ?>"
	                                class="card-img-top">
	                        </picture>
	                        <a href="<?= base_url() . 'oferta/' . $key->id . '/' . slug($key->title); ?>">
	                            <div class="mask rgba-white-slight"></div>
	                        </a>
	                    </div>
	                    <a class="a-card-body" href="<?= base_url() . 'oferta/' . $key->id . '/' . slug($key->title); ?>"
	                        style="text-decoration: none;">
	                        <!-- Card content -->
	                        <div class="card-body elegant-color white-text rounded-bottom">

	                            <!-- Title -->
	                            <h4 class="card-title"><?= $key->title; ?></h4>
	                            <hr class="hr-light">
	                            <!-- Text -->
	                            <div class="card-text white-text mb-4">
	                                <?= substr(strip_tags($key->short_description), 0, 100); ?>...</div>
	                            <!-- Link -->
	                            <a href="<?= base_url() . 'oferta/' . $key->id . '/' . slug($key->title); ?>"
	                                class="white-text btn-offer d-flex justify-content-end">
	                                <h5>Czytaj więcej <i class="fas fa-my-color fa-angle-double-right"></i></h5>
	                            </a>

	                        </div>
	                    </a>

	                </div>
	                <!-- Card Dark -->
	            </div>
	            <?php endforeach; ?>
	        </div>
	    </section>
	</div>