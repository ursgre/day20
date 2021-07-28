<section class="slider">
  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <?php $i=0; foreach ($baner as $v): $i++; ?>
      <div class="carousel-item <?php if($i==1){echo 'active';} ?>">
        <div class="slider_image" style="background-image: url('<?php echo base_url(); ?>uploads/<?php echo $v->photo; ?>.webp');" title="<?php echo $v->alt; ?>">
          <h1 class="slider_title mb-3 wow slideInUp"><span><?php echo $v->title; ?></span></h1>
          <h3 class="slider_subtitle mb-3 wow slideInUp mx-auto" data-wow-delay=".7s"><?php echo $v->subtitle; ?></h3>
          <?php if($v->link != '' && $v->link_text != ''): ?>
          <a href="<?php echo $v->link; ?>" class="btn button_slider btn-primary wow slideInUp"  data-wow-delay="1s"><?php echo $v->link_text; ?></a>
          <?php endif; ?>
        </div>
      </div>
      <?php endforeach ?>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
      <i class="fas fa-chevron-left" aria-hidden="true"></i>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
      <i class="fas fa-chevron-right" aria-hidden="true"></i>
    </a>
  </div>
</section>

<?php foreach ($pasek as $v): ?>
<section class="bar_underSlider" style="background-image: url('<?php echo base_url(); ?>uploads/<?php echo $v->photo; ?>.webp');" alt="<?php echo $v->alt; ?>">
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

<?php if(!empty($sekcja_1)): ?>
<section class="icon_section padding_section">
  <?php if($sekcja_1->title != ''): ?>
  <h3 class="text-center mb-4"><?= $sekcja_1->title; ?></h3>
  <?php endif; ?>
  <div class="separate_line"></div>
  <div class="container">
    <div class="row">
      <?php $i=0; foreach ($sekcja_uslugi as $v):
      if($i == 3) {$i=0;}
      $delay = 0.3 * $i; ?>
      <div class="col-md-4">
        <a href="<?php echo create_link('uslugi_wpis', $v->title, $v->id); ?>" class="wow fadeInLeft"  data-wow-delay="<?php echo $delay; ?>s">
          <div class="d-flex p-3 bg_flex">
            <div class="icon_flex">
              <i class="icon_size <?php echo $v->icon; ?>"></i>
            </div>
            <div class="title_flex">
              <h5 class="mb-3"><?php echo $v->title; ?></h5>
              <p class="font-small"><?php echo $v->subtitle; ?></p>
            </div>
          </div>
        </a>
      </div>
      <?php $i++; endforeach ?>
    </div>
  </div>
</section>
<?php endif; ?>

<?php if(!empty($sekcja_2) && !empty($special)): ?>
<section class="muted_section padding_section_alt">
  <div class="bg_photo_section d-none d-lg-flex" style="background-image: url('<?php echo base_url(); ?>uploads/<?php echo $special->photo; ?>.webp');" title="<?php echo $special->alt; ?>"></div>
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <?php if($sekcja_2->title != ''): ?>
        <h3 class="mb-4"><?php echo $sekcja_2->title; ?></h3>
        <?php endif; ?>
        <div class="separate_line-left"></div>
        <div class="font-small"><?php echo $special->description; ?></div>
        <div class="row">
          <div class="col-md-6">
            <a href="<?php echo create_link('uslugi_wpis', $this->back_m->get_one('uslugi', $special->usluga_1)->title, $this->back_m->get_one('uslugi', $special->usluga_1)->id); ?>" class="wow fadeInLeft">
              <div class="d-flex p-3 bg_flex">
                <div class="icon_flex">
                  <i class="icon_size <?php echo $this->back_m->get_one('uslugi', $special->usluga_1)->icon; ?>"></i>
                </div>
                <div class="title_flex">
                  <h5 class="mb-3"><?php echo $this->back_m->get_one('uslugi', $special->usluga_1)->title; ?></h5>
                  <div class="font-small"><?php echo $this->back_m->get_one('uslugi', $special->usluga_1)->subtitle; ?></div>
                </div>
              </div>
            </a>
          </div>  
          <div class="col-md-6">
            <a href="<?php echo create_link('uslugi_wpis', $this->back_m->get_one('uslugi', $special->usluga_2)->title, $this->back_m->get_one('uslugi', $special->usluga_2)->id); ?>" class="wow fadeInLeft" data-wow-delay=".3s">
              <div class="d-flex p-3 bg_flex">
                <div class="icon_flex">
                  <i class="icon_size <?php echo $this->back_m->get_one('uslugi', $special->usluga_2)->icon; ?>"></i>
                </div>
                <div class="title_flex">
                  <h5 class="mb-3"><?php echo $this->back_m->get_one('uslugi', $special->usluga_2)->title; ?></h5>
                  <div class="font-small"><?php echo $this->back_m->get_one('uslugi', $special->usluga_2)->subtitle; ?></div>
                </div>
              </div>
            </a>
          </div>  
        </div>
        <div class="progres_bar">
          <div class="row my-3">
            <div class="col-6 font-small"><?php echo $special->opis1; ?></div>
            <div class="col-6 font-small text-right"><?php echo $special->procent1; ?>%</div>
          </div>
          <div class="progress md-progress">
            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: <?php echo $special->procent1; ?>%" aria-valuenow="<?php echo $special->procent1; ?>" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div>
        <div class="progres_bar">
          <div class="row my-3">
            <div class="col-6 font-small"><?php echo $special->opis2; ?></div>
            <div class="col-6 font-small text-right"><?php echo $special->procent2; ?>%</div>
          </div>
          <div class="progress md-progress">
            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: <?php echo $special->procent2; ?>%" aria-valuenow="<?php echo $special->procent2; ?>" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div>
        <div class="progres_bar">
          <div class="row my-3">
            <div class="col-6 font-small"><?php echo $special->opis3; ?></div>
            <div class="col-6 font-small text-right"><?php echo $special->procent3; ?>%</div>
          </div>
          <div class="progress md-progress">
            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: <?php echo $special->procent3; ?>%" aria-valuenow="<?php echo $special->procent3; ?>" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>

<?php if(!empty($sekcja_3)): ?>
<section class="padding_section">
  <?php if($sekcja_3->title != ''): ?>
  <h3 class="text-center mb-4"><?php echo $sekcja_3->title; ?></h3>
  <?php endif; ?>
  <div class="separate_line"></div>
  <div class="container">
    <div class="row">
      <?php foreach ($galeria_project as $v): ?>
      <div class="col-lg-4 col-md-6 mb-5 wow fadeIn" >
        <div class="photo_project" style="background-image: url('<?php echo base_url(); ?>uploads/<?php echo $v->photo; ?>.webp')" alt="<?php echo $v->alt; ?>">
          <a href="<?php echo base_url(); ?>uploads/<?php echo $v->photo; ?>" class="mask_photo mask_project" data-lightbox="gallery_lb"><i class="fas fa-search"></i></a>
        </div>
        <div class="content_project">
          <a href="<?php echo base_url(); ?>galeria"><h5 class="mb-3"><?php echo $v->title; ?></h5></a>
          <p class="font-small"><?php echo $v->subtitle ?></p>
          <a href="<?php echo base_url(); ?>galeria" class="special_href font-small">Zobacz projekt</a>
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
        <div class="photo_recent" style="background-image: url('<?php echo base_url(); ?>uploads/<?php echo $v->photo; ?>.webp')" alt="<?php echo $v->alt; ?>"></div>
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