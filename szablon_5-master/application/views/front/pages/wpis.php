<section class="mb-5 padding_section_blog">
  <div class="container">
  <!-- Grid row -->
  <div class="row">
    <!-- Grid column -->
    <div class="col-md-12">
      <!-- Card -->
      <div class="card card-cascade wider reverse">
        <!-- Card image -->
        <div class="view view-cascade overlay blog_header_photo" style="background-image: url('<?php echo base_url(); ?>uploads/<?php echo $blog_entry->photo; ?>');">
        </div>
        <!-- Card content -->
        <div class="card-body card-body-cascade text-center">
          <!-- Title -->
          <h2 class="font-weight-bold"><a><?php echo $blog_entry->title; ?></a></h2>
          <!-- Data -->
          <p>Written <a><strong><?php echo $blog_entry->author; ?></strong></a>, <?php echo $blog_entry->date; ?></p>
        </div>
        <!-- Card content -->
      </div>
      <!-- Card -->
      <!-- Excerpt -->
      <div class="mt-5">
        <p><?php echo $blog_entry->description; ?>
        </p>
      </div>
      <div class="container">
        <div class="row" id="gallery">
          <?php $i=0; foreach ($gallery as $row):?>
          <div class="col-lg-4 col-md-6 mb-5 all 1">
            <div class="photo_project all <?php echo $row->category; ?>" title="<?php echo $row->alt; ?>" style="background-image: url('<?php echo base_url(); ?>uploads/<?php echo $row->photo; ?>')">
            <a href="<?php echo base_url(); ?>uploads/<?php echo $row->photo; ?>" class="mask_photo mask_project" data-lightbox="gallery_lb"><i class="fas fa-search"></i></a>
            </div>
          </div>
          <?php $i++; endforeach; ?>
        </div>
      </div>
      <div class="mt-5">
        <p><?php echo $blog_entry->description2; ?>
        </p>
      </div>
    </div>
    <!-- Grid column -->
  </div>
  <!-- Grid row -->
  </div>
</section>
<!-- Section: Blog v.4 -->