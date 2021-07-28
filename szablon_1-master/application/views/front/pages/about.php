
  <div class="container mt-4 mb-3">
    <div class="row">
      <div class="col-md-12 d-inline">
        <h4 class="text-uppercase"><a href="<?= base_url() ?>" class="first-color home-text font-weight-normal">HOME</a> > <span class="font-weight-bold first-color"><?= $current_page->title; ?></span></h4>
      </div>
    </div>
  </div>
  <div class="container">

    <section class="my-5 top_margin">

      <div class="row">
        <div class="col-md-6 mt-md-0 mt-3 text-left p-0 about__bg">
          <picture>
            <source srcset="<?= base_url().'uploads/'.$about->photo ?>.webp" type="image/webp" class="img-fluid">
            <source srcset="<?= base_url().'uploads/'.$about->photo ?>" type="image/jpeg" class="img-fluid"> 
            <img src="<?= base_url().'uploads/'.$about->photo ?>" alt="<?= $about->alt ?>" class="img-fluid">
          </picture>
        </div>
        <div class="col-md-6 mt-md-0 mt-3 text-left d-flex align-items-center">
          <div>
            <h3 class="font-weight-bold"><?= $about->title; ?></h3>
            <?= $about->short_description; ?>
          </div>
        </div>
        <div class="col-md-12 mt-3 text-left about-text pl-0">
            <?= $about->description; ?>
        </div>

      </div>
  
    </section>

  </div>