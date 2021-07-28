<section class="slider">
  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <div class="slider_image slider_image-subpage" style="background-image: url('<?php echo base_url(); ?>uploads/<?php echo $ofirmie->photo; ?>');" title="<?php echo $ofirmie->alt; ?>">
          <h1 class="slider_title mb-3 wow slideInUp"><span><?php echo $ofirmie->title; ?></span></h1>
          <?php if($ofirmie->subtitle != ''): ?>
          <h3 class="slider_subtitle mb-3 wow slideInUp mx-auto" data-wow-delay=".7s"><?php echo $ofirmie->subtitle; ?></h3>
          <?php endif; ?>
          <div class="separate_line mb-0"></div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php foreach ($pasek as $v): ?>
<section class="bar_underSlider" style="background-image: url('<?php echo base_url(); ?>uploads/<?php echo $v->photo; ?>');" alt="<?php echo $v->alt; ?>">
  <div class="mask_photo hideMask"></div>
  <div class="row align-items-center">
    <div class="col-md-8 text-md-left onMask"><?php echo $v->title; ?></div>
    <?php if($v->link != '' && $v->link_text != ''): ?>
    <div class="col-md-4 text-md-right onMask text-center wow fadeInLeft">
      <a href="<?php echo $v->link; ?>" class="btn btn-secondary"><?php echo $v->link_text; ?></a>
    </div>
    <?php endif; ?>
  </div>
</section>
<?php endforeach ?>
<?php if(!empty($ekipa)): ?>
<section class="padding_section_alt">
  <h3 class="text-center mb-4"><?= $naglowek->title; ?></h3>
  <div class="separate_line"></div>
  <div class="container">
    <div class="row">
      <?php foreach ($ekipa as $v): ?>
      <div class="col-lg-4 col-md-6 mb-5 wow fadeIn" >
        <div class="photo_project webp" style="background-image: url('<?php echo base_url(); ?>uploads/<?php echo $v->photo; ?>.webp')" title="<?php echo $v->alt; ?>"></div>
        <div class="photo_project no-webp" style="background-image: url('<?php echo base_url(); ?>uploads/<?php echo $v->photo; ?>')" title="<?php echo $v->alt; ?>"></div>
        <div class="content_project">
          <h5 class="mb-3"><?php echo $v->title; ?></h5>
          <p class="main-colorText font-italic"><?php echo $v->subtitle; ?></p>
          <p class="font-small"><?php echo $v->description; ?></p>
        </div>
      </div>
      <?php endforeach ?>
    </div>
  </div>
</section>
<?php endif; ?>
<?php $i=0; foreach (array_reverse($sekcja_1) as $v): $i++; if($i%2!=0):?>
<section class="muted_section padding_section_alt">
  <div class="bg_photo_section d-none d-lg-flex" style="background-image: url('<?php echo base_url(); ?>uploads/<?php echo $v->photo; ?>');" alt="<?php echo $v->alt; ?>"></div>
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <h3 class="mb-4"><?php echo $v->title; ?></h3>
        <div class="separate_line-left"></div>
        <p class="font-small"><?php echo $v->description; ?></p>
      </div>
    </div>
  </div>
</section>
<?php else: ?>
<section class="padding_section_alt">
  <div class="bg_photo_section bg_photo_section-alt d-none d-lg-flex" style="background-image: url('<?php echo base_url(); ?>uploads/<?php echo $v->photo; ?>');" alt="<?php echo $v->alt; ?>"></div>
  <div class="container">
    <div class="row">
      <div class="col-lg-6 offset-lg-6">
        <h3 class="mb-4"><?php echo $v->title; ?></h3>
        <div class="separate_line-left"></div>
        <p class="font-small"><?php echo $v->description; ?></p>
      </div>
    </div>
  </div>
</section>
<?php endif; endforeach; ?>

<?php if(!empty($sekcja_4)): ?>
<section id="counter_start" class="padding_section bg-primary">
  <?php if($sekcja_4->title != ''): ?>
  <h3 class="text-center mb-5 text-white"><?php echo $sekcja_4->title; ?></h3>
  <?php endif; ?>
  <div class="container">
    <div class="row align-items-center">
      <?php foreach ($sekcja_2 as $v): ?>
      <div class="col-lg-3 col-md-6 text-center text-white align-self-center mb-5 mb-lg-0 wow fadeIn">
        <picture>
          <source srcset="<?= base_url().'uploads/'.$v->photo ?>.webp" type="image/webp"  class="counter_icon img-fluid" width="64">
          <source srcset="<?= base_url().'uploads/'.$v->photo ?>" type="image/jpeg"  class="counter_icon img-fluid" width="64"> 
          <img src="<?= base_url().'uploads/'.$v->photo ?>" alt="<?= $v->alt ?>"  class="counter_icon img-fluid" width="64">
        </picture>
        <h1 class="counter_number timer count-number" data-to="<?php echo $v->number; ?>" data-speed="1500"></h1>
        <p class="mb-0"><?php echo $v->title; ?></p>
      </div>
      <?php endforeach ?>
    </div>
  </div>
</section>
<?php endif; ?>

<?php if(!empty($sekcja_5)): ?>
<section class="padding_section">
  <?php if($sekcja_5->title != ''): ?>
  <h3 class="text-center mb-4"><?php echo $sekcja_5->title; ?></h3>
  <?php endif; ?>
  <div class="separate_line"></div>
  <div class="container">
    <div class="owl-carousel">
      <?php foreach ($blogs as $v): ?>
      <div class="px-md-3">
        <div class="photo_recent" style="background-image: url('<?php echo base_url(); ?>uploads/<?php echo $v->photo; ?>')" alt="<?php echo $v->alt; ?>"></div>
        <div class="content_recent">
          <a href="<?php echo create_link('wpis', $v->title, $v->id); ?>"><h5 class="mb-3"><?php echo $v->title; ?></h5></a>
          <a href="<?php echo create_link('wpis', $v->title, $v->id); ?>">
            <p class="font-small mb-3 text-muted date_post">
              <span class="main-colorText"><?php echo date('d/m/Y', strtotime($v->created)); ?></span> by <?php echo $contact->company; ?>
            </p>
          </a>
          <p class="font-small text-muted"><?php echo $v->subtitle; ?></p>
        </div>
      </div>
      <?php endforeach ?>
    </div>
  </div>
</section>
<?php endif; ?>