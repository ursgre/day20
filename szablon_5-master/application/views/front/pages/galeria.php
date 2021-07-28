<section class="padding_section">
  <h3 class="text-center section_title"><?php echo $gallery_header->title; ?></h3>
  <div class="separate_line"></div>
</div>
<!-- Grid row -->
  <div class="container">
    <div class="row" id="gallery">
      <?php $i=0; foreach ($gallery as $row):?>
      <div class="col-lg-4 col-md-6 mb-5 all 1">
        <div class="photo_project" title="<?php echo $row->alt; ?>" style="background-image: url('<?php echo base_url(); ?>uploads/<?php echo $row->photo; ?>')">
        <a href="<?php echo base_url(); ?>uploads/<?php echo $row->photo; ?>" class="mask_photo mask_project" data-lightbox="gallery_lb"><i class="fas fa-search"></i></a>
        </div>
      </div>
      <?php $i++; endforeach; ?>
    </div>
  </div>
</section>