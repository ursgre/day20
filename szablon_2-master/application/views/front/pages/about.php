  <div class="container">

    <section class="my-5 top_margin">

      <div class="row">
            <div class="col-md-12">
              <h2 class="font-weight-bold text-center header__text"><?= $current_page->subtitle ?></h2>
            </div>

            <div class="col-md-6 mb-4">
            <picture>
              <source srcset="<?= base_url().'uploads/'.$about->photo ?>.webp" type="image/webp" class="card-img-top">
              <source srcset="<?= base_url().'uploads/'.$about->photo ?>" type="image/jpeg" class="card-img-top"> 
              <img src="<?= base_url().'uploads/'.$about->photo ?>" alt="<?= $about->alt ?>" class="card-img-top">
            </picture>
            </div>

            <div class="col-md-6 text-md-left text-center d-flex align-items-center">
              <div>

                <p class="text-md-left text-center"><?= $about->short_description; ?></p>

              </div>

             

            </div>

            <div class="col-md-12 mb-4 text-md-left text-center d-flex align-items-center">
              <div>

                <p class="text-md-left text-center mb-2"><?= $about->description; ?></p>

              </div>

             

            </div>

            <div class="col-md-6 mb-4 text-center d-flex align-items-center">

      		</div>
  
    </section>

  </div>