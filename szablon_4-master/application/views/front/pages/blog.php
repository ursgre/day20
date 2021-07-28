<section class="slider">
  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <div class="slider_image slider_image-subpage" style="background-image: url('<?php echo base_url(); ?>uploads/<?php echo $blog->photo; ?>');" title="<?php echo $blog->alt; ?>">
          <h1 class="slider_title mb-3 wow slideInUp"><span><?php echo $blog->title; ?></span></h1>
          <?php if($blog->subtitle != ''): ?>
          <h3 class="slider_subtitle mb-3 wow slideInUp mx-auto" data-wow-delay=".7s"><?php echo $blog->subtitle; ?></h3>
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

<?php if(!empty($sekcja_5)): ?>
<section class="padding_section pb-0">
  <?php if($sekcja_5->title != ''): ?>
  <h3 class="text-center mb-4"><?php echo $sekcja_5->title; ?></h3>
  <?php endif; ?>
  <div class="separate_line"></div>
  <div class="container">
    <div class="row">
      <?php foreach ($rows as $v): ?>
      <div class="col-lg-4 col-md-6 mb-5 wow fadeIn" >
        <div class="photo_project" style="background-image: url('<?php echo base_url(); ?>uploads/<?php echo $v->photo; ?>')" alt="<?php echo $v->alt; ?>">
          <a href="<?php echo base_url(); ?>uploads/<?php echo $v->photo; ?>" class="mask_photo mask_project" data-lightbox="gallery_lb"><i class="fas fa-search"></i></a>
        </div>
        <div class="content_project">
          <a href="<?php echo create_link('wpis', $v->title, $v->id); ?>"><h5 class="mb-3"><?php echo $v->title; ?></h5></a>
          <p class="font-small mb-3 text-muted date_post">
            <span class="main-colorText"><?php echo date('d/m/Y', strtotime($v->created)); ?></span> by <?php echo $contact->company; ?>
          </p>
          <p class="font-small"><?php echo $v->subtitle; ?></p>
          <a href="<?php echo create_link('wpis', $v->title, $v->id); ?>" class="special_href font-small">Czytaj więcej</a>
        </div>
      </div>
      <?php endforeach ?>
    </div>
  </div>
<?php endif; ?>
