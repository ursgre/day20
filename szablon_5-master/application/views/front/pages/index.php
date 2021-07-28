<section class="icon_section padding_section">
  <h3 class="text-center mb-4 section_title"><?php echo $services_header->title; ?></h3>
  <div class="separate_line"></div>
  <div class="container">
    <div class="row">
    <?php $i=0; foreach ($offer as $row):?>
      <div class="col-md-4">
          <div class="d-flex p-3 bg_flex">
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
    <?php $i++; endforeach; ?> 
    </div>
  </div>
  </div>
</section>

<section class="muted_section padding_section_alt">
  <div class="bg_photo_section d-none d-lg-flex" style="background-image: url('<?php echo base_url(); ?>uploads/<?php echo $about_main->photo; ?>.webp');"></div>
    <div class="container ">
    <div class="row">
      <div class="col-lg-6 offset-lg-6">
        <h3 class="mb-4 section_title"><?php echo $about_header->title; ?></h3>
        <div class="separate_line-left"></div>
        <div class="font-small"><?php echo $about_main->description; ?></div>
        <div class="row">
              <?php $i=0; foreach ($about as $row):?>
              <?php if($row->id > 2): ?>
              <div class="col-md-6">
              <div class="d-flex p-3 bg_flex mt-3">
                <div class="icon_flex">
                <picture>
                  <source srcset="<?= base_url().'uploads/'.$row->photo ?>.webp" type="image/webp"  class="service_icon">
                  <source srcset="<?= base_url().'uploads/'.$row->photo ?>" type="image/jpeg"  class="service_icon"> 
                  <img src="<?= base_url().'uploads/'.$row->photo ?>" alt="<?= $row->alt ?>"  class="service_icon">
                </picture>
                </div>
                <div class="title_flex">
                  <h5 class="mb-3 section_small_title text-uppercase"><?php echo $row->title; ?></h5>
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

<section class="padding_section">
    <div class="container">
    <div class="row">
      <div class="col-lg-8">
        <h3 class="mb-4 section_title"><?php echo $why_us_header->title; ?></h3>
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
      <div class="col-lg-4 why_us_background_img" style="background-image: url('<?php echo base_url(); ?>uploads/<?php echo $why_us_main->photo; ?>');">
      </div>
    </div>
  </div>
</section>

<section class="padding_section">
  <h3 class="text-center section_title"><?php echo $gallery_header->title; ?></h3>
  <div class="separate_line"></div>
</div>
<!-- Grid row -->

  <div class="container">
    <div class="row" id="gallery">
      <?php $i=0; foreach ($gallery as $row):?>

      <div class="col-lg-4 col-md-6 mb-5 all 1">
        <div class="photo_project all <?php echo $row->category; ?>" title="<?php echo $row->alt; ?>" style="background-image: url('<?php echo base_url(); ?>uploads/<?php echo $row->photo; ?>.webp')">
        <a href="<?php echo base_url(); ?>uploads/<?php echo $row->photo; ?>" class="mask_photo mask_project" data-lightbox="gallery_lb"><i class="fas fa-search"></i></a>
        </div>
      </div>

      <?php $i++; endforeach; ?>
     
    </div>
  </div>
</section>

<section id="counter_start" class="padding_section parallax_effect view">
      <div class="mask flex-center rgba-black-strong">
    </div>
  <div class="container">
    <div class="row d-flex justify-content-center">
    <?php $i=0; foreach ($stats as $row):?>
      <div class="col-lg-3 col-md-6 text-center text-white align-self-center mb-5 mb-lg-0">
            <picture>
              <source srcset="<?= base_url().'uploads/'.$row->photo ?>.webp" type="image/webp"  class="counter_icon" width="64">
              <source srcset="<?= base_url().'uploads/'.$row->photo ?>" type="image/jpeg"  class="counter_icon" width="64"> 
              <img src="<?= base_url().'uploads/'.$row->photo ?>" alt="<?= $row->alt ?>"  class="counter_icon" width="64">
            </picture>
        <h1 class="red_text"><span class="counter_number timer count-number red_text" data-to="<?php echo $row->number; ?>" data-speed="1500"></span><?php echo $row->special_sign; ?></h1>
        <p class="mb-0"><?php echo $row->title; ?></p>
      </div>
    <?php $i++; endforeach; ?>
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
        <div class="photo_project all 1" alt="<?php echo $row->alt; ?>" style="background-image: url('<?php echo base_url(); ?>uploads/<?php echo $row->photo; ?>.webp')">
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

<section class="padding_section parallax_reviews view">
  <h3 class="text-center mb-4 section_title_alt"><?php echo $opinion_header->title; ?></h3>
  <div class="separate_line"></div>
  <div class="container">

<div id="carousel-with-lb" class="carousel slide carousel-multi-item" data-ride="carousel">

  <ol class="carousel-indicators">
    <?php $i=0; foreach ($opinion as $row):?>
    <?php if($row->id > 1): ?>
    <li data-target="#carousel-with-lb" data-slide-to="<?php echo $i; ?>" class="<?php if($i == 0) {echo'active';} ?> secondary-color"></li>
    <?php endif;?>
    <?php $i++; endforeach; ?>
  </ol>

  <div class="carousel-inner" role="listbox">
    <?php $i=0; foreach ($opinion as $row):?>
    <?php if($row->id > 1): ?> 
    <div class="carousel-item <?php if($i == 0) {echo'active';} ?>">

      <div class="row d-flex justify-content-center">
        <picture>
          <source srcset="<?= base_url().'uploads/'.$row->photo ?>.webp" type="image/webp"  class="img-fluid customer_img">
          <source srcset="<?= base_url().'uploads/'.$row->photo ?>" type="image/jpeg"  class="img-fluid customer_img"> 
          <img src="<?= base_url().'uploads/'.$row->photo ?>" alt="<?= $row->alt ?>"  class="img-fluid customer_img">
        </picture>
        <div class="opinion_text mt-3 px-5"><i>
        <?php echo $row->description; ?></i></div>
        <p class="opinion_text mt-3"><?php echo $row->title; ?></p>

      </div>

    </div>
    <?php endif;?>
    <?php $i++; endforeach; ?>
  </div>

</div>

</div>
</section>

<section class="padding_section">
  <h3 class="text-center mb-4 section_title"><?php echo $blog_header->title; ?></h3>
  <div class="separate_line"></div>
  <div class="container">
    <div class="row">
    <?php $i=0; foreach ($blog as $row):?>
    <?php if($row->id < 4): ?>
      <div class="col-md-4">
      <a href="<?php echo base_url(); ?>wpis/<?php echo $row->id; ?>"><div class="photo_recent" style="background-image: url('<?php echo base_url(); ?>uploads/<?php echo $row->photo; ?>.webp')"></div></a>
        <div class="content_recent">
          <a href="<?php echo base_url(); ?>wpis/<?php echo $row->id; ?>"><h5 class="mb-3"><?php echo $row->title; ?></h5></a>
          <a href="<?php echo base_url(); ?>wpis/<?php echo $row->id; ?>">
            <p class="font-small mb-3 text-muted date_post">
              <span class="main-colorText"><?php echo $row->date; ?></span> <?php echo $row->author; ?>
            </p>
          </a>
          <div class="font-small"><?php echo substr("$row->description", 0, 100); ?>...</div>
        </div>
      </div>
      <?php endif;?>
      <?php $i++; endforeach; ?>
    </div>
  </div>
</section>