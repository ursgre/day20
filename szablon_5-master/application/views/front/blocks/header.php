<header>
  <nav id="navbar" class="navbar navbar-expand-lg px-0 py-4 bg-white">
    <a class="navbar-brand pl-5" href="<?php echo base_url(); ?>">
      <img src="<?php echo base_url(); ?>uploads/<?php echo $settings->logo; ?>" alt="" class="img-fluid">
    </a>
    <button class="navbar-toggler pr-5" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <i class="fas fa-bars"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mx-auto">
        <?php foreach($subpages as $page): ?>
        <li class="nav-item">
          <a class="nav-link waves-effect waves-light px-3 <?php if ($this->uri->segment(1) == $page->page) { echo 'menu_active'; } ?>" href="<?php echo base_url(). $page->page; ?>"><?= $page->title ?> <span class="sr-only">(current)</span></a>
        </li>
        <?php endforeach; ?>
      </ul>
    </div>
  </nav>
</header>
<section class="buttons_mobile d-lg-none">
  <div class="row">
    <div class=" col-6 phone_mobile">
      <a href="<?= $contact->phone1 ?>">
        <i class="fas fa-phone"></i>
      </a>
    </div>
    <div class="col-6 email_mobile">
      <a href="<?= $contact->email1 ?>">
        <i class="fas fa-envelope"></i>
      </a>
    </div>
  </div>
</section>
<?php if($this->uri->segment(1) == ''): ?>
<section class="slider">
  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <?php $i=0; foreach ($slider as $row):?>
      <div class="carousel-item <?php if($i == 0) {echo 'active';} ?>">
        <div class="slider_image" title="<?php echo $row->alt; ?>" style="background-image: url('<?php echo base_url(); ?>uploads/<?php echo $row->photo; ?>.webp');">
          <h1 class="slider_title mb-3 wow fadeInUp"><?php echo $row->title; ?></h1>
          <h3 class="slider_subtitle mb-3 wow fadeInUp" data-wow-delay=".7s"><?php echo $row->subtitle; ?></h3>
          <a href="<?php echo base_url().$row->button_link; ?>" class="btn button_slider btn-primary wow fadeInUp"  data-wow-delay="1s"><?php echo $row->button_title; ?></a>
        </div>
      </div>
      <?php $i++; endforeach; ?>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
      <i class="fas fa-chevron-left" aria-hidden="true"></i>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
      <i class="fas fa-chevron-right" aria-hidden="true"></i>
    </a>
  </div>
</section>
<?php else: ?>
<section class="slider">
  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <div class="slider_image slider_image-subpage" style="background-image: url('<?php echo base_url(); ?>uploads/<?php echo $subpage->photo; ?>.webp');">
          <h1 class="slider_title mb-3 wow fadeInUp"><?php echo $subpage->title; ?></h1>
        </div>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>
</header>