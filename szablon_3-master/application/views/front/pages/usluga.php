<section class="slider">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="slider_image slider_image-subpage" style="background-image: url('<?php echo base_url(); ?>uploads/<?php echo $value->photo_2; ?>');" title="<?php echo $value->alt_2; ?>">
            <h1 class="slider_title mb-3 wow fadeInUp"><?php echo $value->title; ?></h1>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="container blog_section">
    <div>
      <div class="text-muted font-regular">
        <?php echo $value->description; ?>
      </div>
    </div>
    <div class="text-center my-5">
      <img src="<?php echo base_url(); ?>uploads/<?php echo $value->photo; ?>" alt="<?php echo $value->alt; ?>" class="img-fluid">
    </div>
    <div class="text-muted font-regular">
        <?php echo $value->description2; ?>
      </div>
  </section>

  <section class="container-fluid gallery_section pt-0">
    <div class="row">
      <?php $i=0; foreach ($gallery as $v): 
      if($i == 4){$i=0;}
      $delay = 0.3 * $i; ?>
      <div class="col-sm-6 col-md-4 col-lg-3 gallery wow fadeIn" data-wow-delay="<?php echo $delay; ?>s">
        
        <div class="gallery_photo" style="background-image: url('<?php echo base_url(); ?>uploads/<?php echo $v->photo; ?>');" title="<?php echo $v->alt; ?>">
          <a href="<?php echo base_url(); ?>uploads/<?php echo $v->photo; ?>" class="gallery_mask" onmouseover="showIcon(<?php echo $v->id; ?>, true)" onmouseout="showIcon(<?php echo $v->id; ?>, false)" data-lightbox="gallery_lb">
            <i id="gallery_icon<?php echo $v->id; ?>" class="gallery_icon fas fa-search"></i>
          </a>
        </div>
      </div>
      <?php $i++; endforeach; ?>
    </div>
  </section>

  