<div class="container">
	<section class="my-5 top_margin">
		<h2 class="font-weight-bold text-center header__text"><?= $current_page->subtitle ?></h2>
		<div class="text-center w-responsive mx-auto mb-5"><?= $current_page->description ?></div>
		<div class="row">
			<?php foreach ($offer as $key): ?>
				<div class="col-lg-6 col-md-12 mb-lg-4 mb-4"  onclick="window.location.href='<?= base_url().'oferta-szczegoly/'.$key->id.'/'.slug($key->title); ?>'">
					<div style="cursor: pointer;" class="card collection-card z-depth-1-half">
						<div class="view zoom offer-box webp" style="background-image: url(<?= images().$key->photo; ?>.webp);">
							<div class="stripe dark">
								<a href="<?= base_url().'oferta-szczegoly/'.$key->id.'/'.slug($key->title); ?>">
									<p><?= $key->title; ?>
										<i class="fas fa-angle-right"></i>
									</p>
								</a>
							</div>
						</div>
						<div class="view zoom offer-box no-webp" style="background-image: url(<?= images().$key->photo; ?>);">
							<div class="stripe dark">
								<a href="<?= base_url().'oferta-szczegoly/'.$key->id.'/'.slug($key->title); ?>">
									<p><?= $key->title; ?>
										<i class="fas fa-angle-right"></i>
									</p>
								</a>
							</div>
						</div>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
		
	</section>
</div>