<section class="slider">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="slider_image slider_image-subpage" style="background-image: url('<?php echo base_url(); ?>uploads/<?php echo $galeria->photo; ?>');" alt="<?php echo $galeria->alt; ?>">
            <h1 class="slider_title mb-3 wow fadeInUp"><?php echo $galeria->title; ?></h1>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="container-fluid gallery_section">
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




  <section class="container-fluid paralaxy_section" style="background-image: url('<?php echo base_url(); ?>uploads/<?php echo $glowna_oferta->photo; ?>');" title="<?php echo $glowna_oferta->alt; ?>">
    <div class="container">
      <h1 class="mb-5"><?php echo $glowna_oferta->title; ?></h1>
      <p class="mb-5"><?php echo $glowna_oferta->description; ?></p>
      <?php if($glowna_oferta->link != '' && $glowna_oferta->link_text != ''): ?>
      <a href="<?php echo $glowna_oferta->link; ?>" class="btn btn-primary btn-lg"><?php echo $glowna_oferta->link_text; ?></a>
      <?php endif; ?>
    </div>
  </section>