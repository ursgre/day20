<section class="my-5 top_margin">

        <div class="container">
            <div class="row">
              <div class="col-md-8">
                <div class="article-header">
                <picture>
                  <source srcset="<?= base_url().'uploads/'.$single->photo ?>.webp" type="image/webp"  class="img-fluid mb-2" style="min-height: 300px;">
                  <source srcset="<?= base_url().'uploads/'.$single->photo ?>" type="image/jpeg"  class="img-fluid mb-2" style="min-height: 300px;"> 
                  <img src="<?= base_url().'uploads/'.$single->photo ?>" alt="<?= $single->alt ?>"  class="img-fluid mb-2" style="min-height: 300px;">
                </picture>
                  <h3 class="article-title text-uppercase font-weight-bold"><?= $single->title ?></h3>
                </div>
                <div class="article-content">
                  <p>
                    <h5><?= $single->subtitle ?></h5>
                  </p>
                  <p><?= $single->description ?></p>
                </div>
                <br><br><br>
              </div>
              <div class="col-md-4 mt-3 mt-md-0">
                <ul class="list-group unique-color-dark">
                  <li class="list-group-item active BgcolorTemplate2 colorTemplate2Border">POLECANE WPISY</li>
                <?php foreach ($blog as $key):?>
                	<li class="list-group-item">
						<a href="<?= base_url(); ?>wpis/<?= $key->id.'/'.slug($key->title); ?>" class="colorTemplate2">
	                  		<?= $key->title ?>
	                  	</a>
	                </li>
              	<?php endforeach; ?>
                </ul>
              </div>
            </div>
          </div>
          <div class="container">
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
        </div>
  
    </section>