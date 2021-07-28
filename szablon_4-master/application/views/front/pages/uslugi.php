<section class="slider">
  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <div class="slider_image slider_image-subpage" style="background-image: url('<?php echo base_url(); ?>uploads/<?php echo $uslugi->photo; ?>');" title="<?php echo $uslugi->alt; ?>">
          <h1 class="slider_title mb-3 wow slideInUp"><span><?php echo $uslugi->title; ?></span></h1>
          <?php if($uslugi->subtitle != ''): ?>
          <h3 class="slider_subtitle mb-3 wow slideInUp mx-auto" data-wow-delay=".7s"><?php echo $uslugi->subtitle; ?></h3>
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

<?php $i=0; foreach ($rows as $v): $i++; if($i%2!=0): ?>
<section class="muted_section padding_section">
  <div class="container">
    <div class="row">
      <div class="col-md-6 pr-md-5">
        <h3 class="mb-4"><a href="<?php echo create_link('uslugi_wpis', $v->title, $v->id); ?>"><?php echo $v->title; ?></a></h3>
        <div class="separate_line-left"></div>
        <a href="<?php echo create_link('uslugi_wpis', $v->title, $v->id); ?>" class="col-md-6 bg_photo_services d-block d-md-none no-webp" style="background-image: url('<?php echo base_url(); ?>uploads/<?php echo $v->photo; ?>');" alt="<?php echo $v->alt; ?>"></a>
        <p class="font-weight-bold"><?php echo $v->subtitle; ?></p>
        <div class="font-small"><?php echo $v->description; ?></div>
        <a href="<?php echo create_link('uslugi_wpis', $v->title, $v->id); ?>" class="btn button_slider btn-primary wow slideInUp">Czytaj więcej</a>
      </div>
      <a href="<?php echo create_link('uslugi_wpis', $v->title, $v->id); ?>" class="col-md-6 bg_photo_services d-none d-md-block" style="background-image: url('<?php echo base_url(); ?>uploads/<?php echo $v->photo; ?>');" alt="<?php echo $v->alt; ?>"></a>
    </div>
  </div>
</section>
<?php else: ?>
<section class="padding_section">
  <div class="container">
    <div class="row">
      <a href="<?php echo create_link('uslugi_wpis', $v->title, $v->id); ?>" class="col-md-6 bg_photo_services d-none d-md-block" style="background-image: url('<?php echo base_url(); ?>uploads/<?php echo $v->photo; ?>');" alt="<?php echo $v->alt; ?>"></a>
      <div class="col-md-6 pl-md-5">
        <h3 class="mb-4"><a href="<?php echo create_link('uslugi_wpis', $v->title, $v->id); ?>"><?php echo $v->title; ?></a></h3>
        <div class="separate_line-left"></div>
        <a href="<?php echo create_link('uslugi_wpis', $v->title, $v->id); ?>" class="col-md-6 bg_photo_services d-block d-md-none no-webp" style="background-image: url('<?php echo base_url(); ?>uploads/<?php echo $v->photo; ?>');" alt="<?php echo $v->alt; ?>"></a>
        <p class="font-weight-bold"><?php echo $v->subtitle; ?></p>
        <div class="font-small"><?php echo $v->description; ?></div>
        <a href="<?php echo create_link('uslugi_wpis', $v->title, $v->id); ?>" class="btn button_slider btn-primary wow slideInUp">Czytaj więcej</a>
      </div>
    </div>
  </div>
</section>
<?php endif; endforeach ?>


