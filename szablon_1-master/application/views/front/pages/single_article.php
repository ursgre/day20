  <div class="view jarallax carousel-other" style="height: 20vh;min-height: 300px!important;">
    <picture>
      <source srcset="<?= base_url().'uploads/'.$single->photo2 ?>.webp" type="image/webp" class="card-img-top">
      <source srcset="<?= base_url().'uploads/'.$single->photo2 ?>" type="image/jpeg" class="card-img-top"> 
      <img src="<?= base_url().'uploads/'.$single->photo2 ?>" alt="<?= $single->alt2 ?>" class="card-img-top">
    </picture>
      <div class="mask">
        <div class="container flex-center text-center">
          <div class="row mt-5">
            <div class="col-md-12 wow fadeIn mb-3">
              <h1 class="display-5 mb-2 text-baner wow fadeInDown font-weight-bold text-white" data-wow-delay="0.3s"><?= $single->title ?></h1>
            </div>
          </div>
        </div>
      </div>
  </div>
  <div class="banner-section-mobile" style="background-image: url('<?= base_url().'uploads/'.$single->photo2 ?>')">
    <div class="container flex-center text-center">
          <div class="row mt-5">
            <div class="col-md-12 wow fadeIn mb-3">
              <h2 class="display-5 mb-2 text-baner wow fadeInDown font-weight-bold text-white" data-wow-delay="0.3s"><?= $single->title ?></h2>
            </div>
          </div>
        </div>
  </div>
  <div class="container mt-4 mb-3">
    <div class="row">
      <div class="col-md-12 d-inline">
        <h4 class="text-uppercase"><a href="<?= base_url(). 'blog' ?>" class="first-color home-text font-weight-normal"> <<span class="font-weight-bold first-color">POWRÓT</span></a></h4>
      </div>
    </div>
  </div>
  <section class="text-center">
    <div class="container mt-5">
          <!--Grid row-->
          <div class="row mb-4 wow fadeIn">

              <!--Grid column-->
            <div class="col-lg-12 col-md-12 mb-4">
              <div class="text-left mt-2">
               <?= $single->description ?></div>
            </div>
            <div class="col-md-12">
              <div class="gallery_box">
                <?php foreach ($gallery as $photo):?>
                  <a href="<?= images().$photo->photo ?>" data-lightbox="image-1">
                    <picture>
                      <source srcset="<?= base_url().'uploads/'.$photo->photo ?>.webp" type="image/webp" class="img-fluid">
                      <source srcset="<?= base_url().'uploads/'.$photo->photo ?>" type="image/jpeg" class="img-fluid"> 
                      <img data-src="<?= images().$photo->photo ?>" class="p-1 lazy img-fluid" alt="<?= $photo->alt ?>">
                    </picture>
                  </a>
                <?php endforeach; ?>
              </div>
            </div>
            
            <!-- <div class="col-lg-12 col-md-12 mb-4 mt-4">
              <p class="text-left mt-2">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
              </p>

              <p class="text-left mt-2">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
              </p>
            </div> -->

          </div>
      </div>
    </section>
    <!--Section: Cards-->