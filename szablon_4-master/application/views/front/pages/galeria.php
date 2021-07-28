<section class="slider">
  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <div class="slider_image slider_image-subpage" style="background-image: url('<?php echo base_url(); ?>uploads/<?php echo $galeria->photo; ?>');" title="<?php echo $galeria->alt; ?>">
          <h1 class="slider_title mb-3 wow slideInUp"><span><?php echo $galeria->title; ?></span></h1>
          <?php if($galeria->subtitle != ''): ?>
          <h3 class="slider_subtitle mb-3 wow slideInUp mx-auto" data-wow-delay=".7s"><?php echo $galeria->subtitle; ?></h3>
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

<?php if(!empty($sekcja_3)): ?>
<section class="padding_section">
  <?php if($sekcja_3->title != ''): ?>
  <h3 class="text-center mb-4"><?php echo $sekcja_3->title; ?></h3>
  <?php endif; ?>
  <div class="separate_line"></div>
  <div class="container">
    <div class="row">
      <?php foreach ($rows as $v): ?>
      <a id="<?php echo slug($v->title.$v->id); ?>"></a>
      <div class="col-lg-4 col-md-6 mb-5 wow fadeIn" >
        <div class="photo_project" style="background-image: url('<?php echo base_url(); ?>uploads/<?php echo $v->photo; ?>')" alt="<?php echo $v->alt; ?>">
          <a href="<?php echo base_url(); ?>uploads/<?php echo $v->photo; ?>" class="mask_photo mask_project" data-lightbox="gallery_lb<?php echo $v->id;?>"><i class="fas fa-search"></i></a>
          <?php $photos = $this->back_m->get_images('gallery', 'galeria', $v->id); 
          foreach ($photos as $value) {
            echo '<a href="'.base_url().'uploads/'. $value->photo .'" data-lightbox="gallery_lb'.$v->id.'"></a>';
          }?>
        </div>
        <div class="content_project">
          <h5 class="mb-3"><?php echo $v->title; ?></h5>
          <p class="font-small"><?php echo $v->subtitle; ?></p>
        </div>
      </div>
      <?php endforeach ?>
    </div>
  </div>
</section>
<?php endif; ?>

<?php if(!empty($sekcja_4)): ?>
<section id="counter_start" class="padding_section bg-primary">
  <?php if($sekcja_4->title != ''): ?>
  <h3 class="text-center mb-5 text-white"><?php echo $sekcja_4->title; ?></h3>
  <?php endif; ?>
  <div class="container">
    <div class="row align-items-center">
      <?php foreach ($sekcja_licznik as $v): ?>
      <div class="col-lg-3 col-md-6 text-center text-white align-self-center mb-5 mb-lg-0 wow fadeIn">
        <picture>
          <source srcset="<?= base_url().'uploads/'.$v->photo ?>.webp" type="image/webp" class="counter_icon img-fluid" width="64">
          <source srcset="<?= base_url().'uploads/'.$v->photo ?>" type="image/jpeg" class="counter_icon img-fluid" width="64"> 
          <img src="<?= base_url().'uploads/'.$v->photo ?>" alt="<?= $v->alt ?>" class="counter_icon img-fluid" width="64">
        </picture>
        <h1 class="counter_number timer count-number" data-to="<?php echo $v->number; ?>" data-speed="1500"></h1>
        <p class="mb-0"><?php echo $v->title; ?></p>
      </div>
      <?php endforeach ?>
    </div>
  </div>
</section>
<?php endif; ?>