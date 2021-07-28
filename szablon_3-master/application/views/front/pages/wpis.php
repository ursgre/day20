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
      <p class="text-muted font-regular">
        <span class="first_letter"><?php echo substr($value->short_desc, 0, 1); ?></span>
        <?php echo ltrim($value->short_desc, substr($value->short_desc, 0, 1));  ?>
      </p>
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

  <section class="container blog_section py-0">
    <hr>
    <div class="next_blog">
      <?php if(!empty($prev)): ?>
      <a href="<?php echo create_link('wpis', $prev->title, $prev->id); ?>" class=""><i class="fas fa-angle-double-left"></i> <?php echo $prev->title; ?></a>
      <?php endif; ?>
      <?php if(!empty($next)): ?>
      <a href="<?php echo create_link('wpis', $next->title, $next->id); ?>" class="float-right"><?php echo $next->title; ?> <i class="fas fa-angle-double-right"></i></a>
      <?php endif; ?>
    </div>
    <hr>
  </section>
  
  <section class="container blog_section">
    <h3 class="mb-4 text-left">Polecane posty</h3>
    <div class="row">
      <?php $i=0; foreach ($rows as $v): $delay = 0.3 * $i;?>
      <div class="col-md-6 wow fadeIn mb-5" data-wow-delay="<?php echo $delay; ?>s">
        <a href="<?php echo create_link('wpis', $v->title, $v->id); ?>"><img src="<?php echo base_url(); ?>uploads/<?php echo $v->photo; ?>" alt="<?php echo $v->alt; ?>" class="img-fluid mb-3"></a>
        <h3><?php echo $v->title; ?></h3>
        <p class="text-muted "><small><span class="active"><?php echo date('d/m/Y', strtotime($v->created)); ?></span>, by <?php echo $contact->company; ?></small></p>
        <a href="<?php echo create_link('wpis', $v->title, $v->id); ?>">Czytaj więcej <i class="fas fa-angle-double-right"></i></a>
      </div>
      <?php $i++; endforeach ?>
    </div>
  </section>