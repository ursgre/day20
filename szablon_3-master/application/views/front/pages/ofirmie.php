<section class="slider">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">

          <div class="slider_image slider_image-subpage" style="background-image: url('<?php echo base_url(); ?>uploads/<?php echo $ofirmie->photo; ?>');" alt="<?php echo $ofirmie->alt; ?>">
            <h1 class="slider_title mb-3 wow fadeInUp"><?php echo $ofirmie->title; ?></h1>
          </div>
        </div>
      </div>
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
    <div class="row">
      <?php $i=0; foreach ($sekcja_2 as $v): $i++; if($i%2!=0): ?>
      <div class="col-12 bg-photo d-lg-none" style="background-image: url('<?php echo base_url(); ?>uploads/<?php echo $v->photo; ?>');" title="<?php echo $v->alt; ?>"></div>
      <div class="col-lg-6 bg-muted first_section">
        <h1 class="mb-4 wow fadeInLeft"><?php echo $v->title; ?></h1>
          <div class="font-regular text-muted mb-0 wow fadeInLeft"><?php echo $v->description; ?></div>
      </div>
      <div class="col-lg-6 bg-photo d-none d-lg-block" style="background-image: url('<?php echo base_url(); ?>uploads/<?php echo $v->photo; ?>');" title="<?php echo $v->alt; ?>"></div>

      <?php else: ?>
      <div class="col-lg-6 bg-photo d-none d-lg-block" style="background-image: url('<?php echo base_url(); ?>uploads/<?php echo $v->photo; ?>');" title="<?php echo $v->alt; ?>"></div>
      <div class="col-12 bg-photo d-lg-none" style="background-image: url('<?php echo base_url(); ?>uploads/<?php echo $v->photo; ?>');" title="<?php echo $v->alt; ?>"></div>
      <div class="col-lg-6 first_section">
        <h1 class="mb-4 wow fadeInRight"><?php echo $v->title; ?></h1>
          <div class="font-regular text-muted mb-0 wow fadeInRight"><?php echo $v->description; ?></div>
      </div>
      <?php endif; endforeach ?>
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