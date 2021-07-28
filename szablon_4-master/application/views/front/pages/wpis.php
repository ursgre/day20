<section class="padding_section">
  <div class="container">
    <div class="row">
      <div class="col-md-10">
        <h3 class="mb-3"><?php echo $value->title; ?></h3>
        <h5 class="mb-4"><?php echo $value->subtitle; ?></h5>
        <div><?php echo $value->short_desc; ?></div>
        <div class="text-center my-4">
          <img src="<?php echo base_url(); ?>uploads/<?php echo $value->photo; ?>" class="img-fluid" alt="<?php echo $value->alt; ?>">
        </div>
        <div id="content">
          <?php echo $value->description; ?>
        </div>

        <?php if(!empty($gallery)): ?>
        <div class="row">
          <?php foreach ($gallery as $v): ?>
          <div class="col-md-6 mb-5 wow fadeIn" >
            <div class="photo_project" style="background-image: url('<?php echo base_url(); ?>uploads/<?php echo $v->photo; ?>')" alt="<?php echo $v->alt; ?>">
              <a href="<?php echo base_url(); ?>uploads/<?php echo $v->photo; ?>" class="mask_photo mask_project" data-lightbox="gallery_lb"><i class="fas fa-search"></i></a>
            </div>
          </div>
          <?php endforeach ?>
        </div>
        <?php endif; ?>

        <div id="content2">
          <?php echo $value->description2; ?>
        </div>
      </div>
    </div>
  </div>
</section>

<?php if(!empty($sekcja_5)): ?>
<section class="padding_section">
  <?php if($sekcja_5->title != ''): ?>
  <h3 class="text-center mb-4"><?php echo $sekcja_5->title; ?></h3>
  <?php endif; ?>
  <div class="separate_line"></div>
  <div class="container">
    <div class="owl-carousel">
      <?php foreach ($rows as $v): ?>
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