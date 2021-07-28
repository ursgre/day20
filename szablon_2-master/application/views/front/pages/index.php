    <div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">

      <ol class="carousel-indicators">
      	<?php $i=0; foreach ($slider as $key):?>
        	<li data-target="#carousel-example-1z" data-slide-to="<?= $i ?>" class="<?= ($i == 0 ? 'active' : '') ?>"></li>
    	<?php $i++; endforeach; ?>
      </ol>

      <div class="carousel-inner" role="listbox">

      	<?php $i=0; foreach ($slider as $key):?>
	        <div class="carousel-item <?= ($i == 0 ? 'active' : '') ?>">
	          <div class="view moving__photo" style="background-image: url('<?= images().'/'.$key->photo ?>.webp'); background-repeat: no-repeat; background-size: cover;">

	            <div class="mask rgba-black-light d-flex justify-content-center align-items-center">

	              <div class="text-center white-text mx-5 wow fadeIn text__box">

	                  <h1><?= $key->title ?></h1>
	                  <h4><?= $key->subtitle ?></h4>
	                <?php if($key->link): ?>
	                <a target="_blank" href="<?= $key->link ?>" class="btn btn-outline-white btn-lg mt-5 btn__slider__hover"><?=$key->button ?>
	                </a>
	            	<?php endif; ?>
	              </div>

	            </div>

	          </div>
	        </div>

    	<?php $i++; endforeach; ?>


      </div>

      <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>

    </div>

    <main>
      <div class="container">

        <section class="mt-5 wow fadeIn">


          <div class="row">

            <div class="col-md-6 mb-4 d-flex align-items-center">

			<picture>
              <source srcset="<?= images().$about->photo ?>.webp" type="image/webp"  class="img-fluid w-100">
              <source srcset="<?= images().$about->photo ?>" type="image/jpeg"  class="img-fluid w-100">
              <img data-src="<?= images().$about->photo ?>" alt=""  class="lazy img-fluid w-100">
            </picture>

            </div>

            <div class="col-md-6 mb-4 text-center d-flex align-items-center">
              <div>

                <h2 class="font-weight-bold my-2 text-center"><?= $about->title ?></h2>
                <p class="text-center"><?= $about->short_description ?>
                </p>

                <a target="_blank" href="<?= base_url() ?>ofirmie" class="btn button-dark btn-md my__btn__dark">Czytaj więcej <i class="fas fa-angle-right"></i></a>
              </div>

             

            </div>

          </div>

        </section>

        </div>

        <div class="container-fluid mt-5 px-0" style="overflow-x:hidden!important;overflow-y:hidden!important;">

          <section class="text-center my-5 px-4 background-section background-section__index moving__photo" style="background-image: url('<?= images().$parallax->photo;  ?>.webp');">

          	<h2 class="h1-responsive font-weight-bold my-5 white-text parralax__header"><?= $parallax->title; ?></h2>


          </section>

        </div>
        <div class="container">


          <section class="mt-5 wow fadeIn">

			<?php $i=0; foreach ($atributes as $key):?>
				<?php if($i%2 == 0): ?>
		            <div class="row">
		              <div class="col-md-6 mb-4">
		                <img src="<?= images().$key->photo ?>" class="img-fluid" alt="">
		              </div>
		              <div class="col-md-6 mb-4 text-center d-flex align-items-center">
		                <div>
		                  <h2 class="font-weight-bold my-2 text-center"><?= $key->title ?></h2>
		                  <p class="text-center"><?= $key->description ?></p>
		                  <?php if($key->link): ?>
		                  	<a target="_blank" href="<?= $key->link ?>" class="btn button-dark btn-md my__btn__dark">Czytaj więcej <i class="fas fa-angle-right"></i></a>
		                  <?php endif; ?>
		                </div>
		              </div>
	            	</div>
		        <?php endif; ?>

		        <?php if($i%2 == 1): ?>
		            <div class="row">
		              <div class="col-md-6 mb-4 text-center d-flex align-items-center">
		                <div>
		                  <h2 class="font-weight-bold my-2 text-center"><?= $key->title ?></h2>
		                  <p class="text-center"><?= $key->description ?></p>
		                  <?php if($key->link): ?>
		                  	<a target="_blank" href="<?= $key->link ?>" class="btn button-dark btn-md my__btn__dark">Czytaj więcej <i class="fas fa-angle-right"></i></a>
		                  <?php endif; ?>
		                </div>
		              </div>
		              <div class="col-md-6 mb-4">
		                <img src="<?= images().$key->photo ?>" class="img-fluid" alt="">
		              </div>
	            	</div>
		        <?php endif; ?>

	        <?php $i++;if($i == 4){break;} endforeach; ?>

          

          </section>

        </div>
	    <section class="text-center">   
	      <div class="container mt-5">
	        <div class="row">
	          <h2 class="font-weight-bold my-2 text-center m-auto"><?= $atributes[4]->title; ?></h2>
	        </div>


		  </div>
		  <picture>
              <source srcset="<?= images().$atributes[4]->photo ?>.webp" type="image/webp"  class="img-fluid m-auto" style="width: 50%;">
              <source srcset="<?= images().$atributes[4]->photo ?>" type="image/jpeg"  class="img-fluid m-auto" style="width: 50%;">
              <img data-src="<?= images().$atributes[4]->photo ?>" alt=""  class="img-fluid m-auto" style="width: 50%;">
            </picture>
	      <div class="container mb-5">
	        <div class="row">
	        	<?php if($atributes[4]->title): ?>
	          		<a target="_blank" href="<?= $atributes[4]->link; ?>" class="m-auto btn button-dark btn-md my__btn__dark">Czytaj więcej <i class="fas fa-angle-right"></i></a>
	          	<?php endif; ?>
	        </div>


	      </div>
	 

	    </section>