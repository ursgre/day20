<section class="slider">
  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <div class="slider_image slider_image-subpage" style="background-image: url('<?php echo base_url(); ?>uploads/<?php echo $uslugi->photo; ?>');" alt="<?php echo $uslugi->alt; ?>">
          <h1 class="slider_title mb-3 wow fadeInUp"><?php echo $uslugi->title; ?></h1>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="container second_section">
  <div class="row">
    <?php $i=0; foreach ($rows as $v):
    if($i==3){$i=0;}
    $delay = 0.3 * $i; ?>
    <div class="col-lg-4 col-md-6 blog wow fadeIn" data-wow-delay="<?php echo $delay; ?>s">
      <a href="<?= base_url(). 'usluga/'. slug($v->title). '/'. $v->id ?>">
        <picture>
          <source srcset="<?php echo base_url(); ?>uploads/<?php echo $v->photo; ?>.webp" type="image/webp"  class="img-fluid mb-3 w-100">
          <source srcset="<?php echo base_url(); ?>uploads/<?php echo $v->photo; ?>" type="image/jpeg"  class="img-fluid mb-3 w-100">
          <img src="<?php echo base_url(); ?>uploads/<?php echo $v->photo; ?>" alt="<?php echo $v->alt; ?>"  class="img-fluid mb-3 w-100">
        </picture>
        <h3><?php echo $v->title; ?></h3>
        <div class="text-muted font-regular mt-4"><?php echo $v->description2; ?></div>
      </a>
    </div>
    <?php $i++; endforeach ?>
  </div>
</section>