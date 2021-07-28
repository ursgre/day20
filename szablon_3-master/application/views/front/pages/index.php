  <section class="slider"> 
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <?php $i=0; foreach ($baner as $v): ?>
      <li data-target="#carouselExampleControls" data-slide-to="<?php echo $i; ?>" class="<?php if($i==0){echo 'active';} ?>"></li>
      <?php $i++; endforeach ?>
    </ol>
      <div class="carousel-inner">
        <?php $i=0; foreach ($baner as $v): $i++; ?>
        <div class="carousel-item <?php if($i == 1){echo 'active';} ?>">
            <div class="slider_image" style="background-image: url('<?php echo base_url(); ?>uploads/<?php echo $v->photo; ?>.webp');" title="<?php echo $v->alt; ?>">
              <h1 class="slider_title mb-3 wow fadeInUp" style="color: <?php echo $v->color; ?>"><?php echo $v->title;; ?></h1>
              <h3 class="slider_subtitle mb-3 wow fadeInUp" data-wow-delay=".7s" style="color: <?php echo $v->color; ?>"><?php echo $v->subtitle; ?></h3>
              <?php if($v->link != '' && $v->link_text): ?>
              <a href="<?php echo $v->link; ?>" class="btn button_slider btn-primary wow fadeInUp"  data-wow-delay="1s"><?php echo $v->link_text ?></a>
              <?php endif; ?>
            </div>
        </div>
        <?php endforeach ?>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <i class="fas fa-chevron-left" aria-hidden="true"></i>
      </a>
      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <i class="fas fa-chevron-right" aria-hidden="true"></i>
      </a>
    </div>
  </section>

  <?php if(!empty($pasek)): ?>
  <?php foreach ($pasek as $v): ?>
  <section class="about">
    <div class="text-center wow fadeInUp slow">
      <h1 class="mb-4"><?php echo $v->title; ?></h1>
      <p class="font-regular text-muted"><?php echo $v->description; ?></p>
    </div>
  </section>
  <?php endforeach ?>
  <?php endif; ?>

  <section class="container-fluid">
    <div class="row">
      <?php $i=0; foreach ($sekcja_2 as $v): $i++; if($i%2!=0): ?>
      <div class="col-12 bg-photo d-lg-none" style="background-image: url('<?php echo base_url(); ?>uploads/<?php echo $v->photo; ?>.webp');" title="<?php echo $v->alt; ?>"></div>
      <div class="col-lg-6 bg-muted first_section">
        <h1 class="mb-4 wow fadeInLeft"><?php echo $v->title; ?></h1>
          <div class="font-regular text-muted mb-0 wow fadeInLeft"><?php echo $v->description; ?></div>
      </div>
      <div class="col-lg-6 bg-photo d-none d-lg-block" style="background-image: url('<?php echo base_url(); ?>uploads/<?php echo $v->photo; ?>.webp');" title="<?php echo $v->alt; ?>"></div>

      <?php else: ?>

      <div class="col-lg-6 bg-photo d-none d-lg-block" style="background-image: url('<?php echo base_url(); ?>uploads/<?php echo $v->photo; ?>.webp');" title="<?php echo $v->alt; ?>"></div>
      <div class="col-12 bg-photo d-lg-none" style="background-image: url('<?php echo base_url(); ?>uploads/<?php echo $v->photo; ?>.webp');" title="<?php echo $v->alt; ?>"></div>
      <div class="col-lg-6 first_section">
        <h1 class="mb-4 wow fadeInRight"><?php echo $v->title; ?></h1>
          <div class="font-regular text-muted mb-0 wow fadeInRight"><?php echo $v->description; ?></div>
      </div>
      <?php endif; endforeach ?>
    </div>
  </section>

  <section class="container second_section wow fadeIn">
    <div class="row">
      <div class="col-md-6 mb-3 mb-md-0">
        <picture>
          <source srcset="<?php echo base_url(); ?>uploads/<?php echo $sekcja_1->photo; ?>.webp" type="image/webp"  class="img-fluid" style="min-height: 300px;">
          <source srcset="<?php echo base_url(); ?>uploads/<?php echo $sekcja_1->photo; ?>" type="image/jpeg"  class="img-fluid" style="min-height: 300px;"> 
          <img src="<?php echo base_url(); ?>uploads/<?php echo $sekcja_1->photo; ?>" alt="<?php echo $sekcja_1->alt; ?>"  class="img-fluid" style="min-height: 300px;">
        </picture>
      </div>
      <div class="col-md-6 second_section_text align-self-center">
        <h1 class="mb-4"><?php echo $sekcja_1->title; ?></h1>
        <div class="font-regular text-muted mb-0"><?php echo $sekcja_1->description; ?></div>
      </div>
    </div>
  </section>


  <section class="container-fluid">
    <div class="icon_section container">
      <div class="row">
        <?php $i=0; foreach ($ikony as $v):
        $delay = 0.5 * $i; ?>
        <div class="col-md-4 first_icon wow fadeInLeft mb-4" data-wow-delay="<?php echo $delay; ?>s">
          <h3 class="mb-3">
            <i class="icon <?php echo $v->icon; ?>"></i><?php echo $v->title; ?>
          </h3>
          <p class="text-muted icon_par"><?php echo $v->description ?></p>
        </div>
        <?php $i++; endforeach ?>
      </div>
    </div>
  </section>

  <section class="container-fluid gallery_section">
    <div class="row">
      <?php $i=0; $j=0;foreach (array_reverse($gallery) as $v): $j++;
      if($j==9){break;}
      if($i == 4){$i=0;}
      $delay = 0.3 * $i; ?>
      <div class="col-sm-6 col-md-4 col-lg-3 gallery wow fadeIn" data-wow-delay="<?php echo $delay; ?>s">
        <div class="gallery_photo" style="background-image: url('<?php echo base_url(); ?>uploads/<?php echo $v->photo; ?>.webp');" title="<?php echo $v->alt; ?>">
          <a href="<?php echo base_url(); ?>uploads/<?php echo $v->photo; ?>.webp" class="gallery_mask" onmouseover="showIcon(<?php echo $v->id; ?>, true)" onmouseout="showIcon(<?php echo $v->id; ?>, false)" data-lightbox="gallery_lb">
            <i id="gallery_icon<?php echo $v->id; ?>" class="gallery_icon fas fa-search"></i>
          </a>
        </div>
      </div>
      <?php $i++; endforeach; ?>
    </div>
  </section>

  <section class="container-fluid paralaxy_section" style="background-image: url('<?php echo base_url(); ?>uploads/<?php echo $glowna_oferta->photo; ?>.webp');" title="<?php echo $glowna_oferta->alt; ?>">
    <div class="container">
      <h1 class="mb-5"><?php echo $glowna_oferta->title; ?></h1>
      <p class="mb-5"><?php echo $glowna_oferta->description; ?></p>
      <?php if($glowna_oferta->link != '' && $glowna_oferta->link_text != ''): ?>
      <a href="<?php echo $glowna_oferta->link; ?>" class="btn btn-primary btn-lg"><?php echo $glowna_oferta->link_text; ?></a>
      <?php endif; ?>
    </div>
  </section>