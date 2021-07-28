<div class="container">

    <p class="my-5 top_margin">

    <h2 class="h1-responsive font-weight-bold text-center my-5"><?= $single->title ?></h2>

    <div class="row">

        <div class="col-md-6 mb-4">

        <picture>
          <source srcset="<?= base_url().'uploads/'.$single->photo ?>.webp" type="image/webp"  class="img-fluid z-depth-1-half" style="min-height: 300px;">
          <source srcset="<?= base_url().'uploads/'.$single->photo ?>" type="image/jpeg"  class="img-fluid z-depth-1-half" style="min-height: 300px;"> 
          <img src="<?= base_url().'uploads/'.$single->photo ?>" alt="<?= $single->alt ?>"  class="img-fluid z-depth-1-half" style="min-height: 300px;">
        </picture>

        </div>

        <div class="col-md-6 mb-4">

          <p><?= $single->short_description ?></p>

        </div>

    </div>

    <div class="row">
        <?php foreach ($gallery as $photo):?>
              <div class="col-lg-4 col-md-6 mb-0 mt-5">
      
                <a class="elem" href="<?= images().$photo->photo ?>">
                    <div class="view overlay rounded z-depth-2 mb-4 gallery-box" style="background-image: url(<?= images().$photo->photo ?>); ">
                    </div>
                </a>
          
              </div>
          <?php endforeach; ?>
    </div>

        <div class="col-md-12 mb-4 mt-5 mb-5">

            <p><?= $single->description ?></p>

        </div>

      </div>

  
    </section>

  </div>