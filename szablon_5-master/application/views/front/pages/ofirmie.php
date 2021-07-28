<section class="padding_section">
    <div class="container">
    <div class="row">
      <div class="col-12 col-lg-8">
        <h3 class="mb-4 section_title"><?php echo $why_us_main->title; ?></h3>
        <div class="separate_line-left"></div>
        <div class="row">
          <?php $i=0; foreach ($why_us as $row):?>
          <?php if($row->id > 1): ?>
          <div class="col-md-12">
              <div class="d-flex p-3 bg_flex mt-3">
                <div class="icon_flex">
                <picture>
                  <source srcset="<?= base_url().'uploads/'.$row->photo ?>.webp" type="image/webp"  class="service_icon">
                  <source srcset="<?= base_url().'uploads/'.$row->photo ?>" type="image/jpeg"  class="service_icon"> 
                  <img src="<?= base_url().'uploads/'.$row->photo ?>" alt="<?= $row->alt ?>"  class="service_icon">
                </picture>
                </div>
                <div class="title_flex">
                  <h5 class="mb-3 section_small_title"><?php echo $row->title; ?></h5>
                  <div class="font-small"><?php echo $row->description; ?></div>
                </div>
              </div>
          </div>
          <?php endif; ?> 
          <?php $i++; endforeach; ?> 
        </div>  
      </div>
      <div class="col-lg-4 col-12">
        <div class="bg-picture" style="background-image: url('<?php echo base_url(); ?>uploads/<?php echo $why_us_main->photo; ?>')"></div>
          <!-- <img src="<?php echo base_url(); ?>uploads/<?php echo $why_us_main->photo; ?>" alt="<?php echo $why_us_main->alt; ?>" class="img-fluid"> -->
      </div>
    </div>
  </div>
</section>

<section class="muted_section padding_section_alt">
  <div class="bg_photo_section d-none d-lg-flex" style="background-image: url('<?php echo base_url(); ?>uploads/<?php echo $about_main->photo; ?>');"></div>
    <div class="container ">
    <div class="row">
      <div class="col-lg-6 offset-lg-6">
        <h3 class="mb-4 section_title"><?php echo $about_main->title; ?></h3>
        <div class="separate_line-left"></div>
        <div class="font-small"><?php echo $about_main->description; ?></div>
        <div class="row">
              <?php $i=0; foreach ($about as $row):?>
              <?php if($row->id > 2): ?>
              <div class="col-md-6">
              <div class="d-flex p-3 bg_flex mt-3">
                <div class="icon_flex">
                <picture>
                  <source srcset="<?= base_url().'uploads/'.$row->photo ?>.webp" type="image/webp">
                  <source srcset="<?= base_url().'uploads/'.$row->photo ?>" type="image/jpeg"> 
                  <img src="<?= base_url().'uploads/'.$row->photo ?>" alt="<?= $row->alt ?>" height="30px"  class="service_icon">
                </picture>
                </div>
                <div class="title_flex">
                  <a href="">
                  <h5 class="mb-3 section_small_title text-uppercase"><?php echo $row->title; ?></h5>
                  </a>
                  <div class="font-small"><?php echo $row->description; ?></div>
                </div>
              </div> 
              </div>
              <?php endif; ?> 
              <?php $i++; endforeach; ?> 
        </div>
      </div>
    </div>
  </div>
</section>

<section class="muted_section padding_section">
  <h3 class="text-center section_title"><?php echo $team_header->title; ?></h3>
  <div class="separate_line"></div>

  <div class="container">
    <div class="row" id="gallery">
    <?php $i=0; foreach ($team as $row):?>
      <?php if($row->id > 1): ?>
      <div class="col-lg-4 col-md-6 mb-5 all 1">
        <div class="photo_project all 1" alt="<?php echo $row->alt; ?>" style="background-image: url('<?php echo base_url(); ?>uploads/<?php echo $row->photo; ?>')">
          <div class="mask_photo mask_social">
            <a class="team_social_link" href="<?php echo $row->facebook; ?>"><i class="fab fa-facebook-f"></i></a>
            <a class="team_social_link px-3" href="<?php echo $row->twitter; ?>"><i class="fab fa-twitter"></i></a>
            <a class="team_social_link pr-3" href="<?php echo $row->instagram; ?>"><i class="fab fa-instagram"></i></a>
            <a class="team_social_link" href="<?php echo $row->youtube; ?>"><i class="fab fa-youtube"></i></a>
          </div>
        </div>
        <p class="our_team_name"><?php echo $row->name; ?></p>
        <p class="our_team_position"><i><?php echo $row->position; ?></i></p>
      </div>
    <?php endif; ?> 
      <?php $i++; endforeach; ?> 

    </div>
  </div>
</section>