

<header>
  <nav id="navbar" class="navbar navbar-expand-lg fixed-top navbar-light light-color scrolling-navbar bg-white">
    <a class="navbar-brand" href="<?= base_url() ?>"><img src="<?php echo base_url(); ?>uploads/<?php echo $settings->logo ?>" alt="<?php echo $settings->meta_title; ?>" class="img-fluid" style="max-width: 173px"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse bg-white" id="navbarSupportedContent">
      <ul class="navbar-nav mx-auto">
        <li class="nav-item">
          <a class="nav-link <?php if($this->uri->segment(1) == ''){echo 'active';} ?>" href="<?php echo base_url(); ?>"><?php echo $home->title; ?></a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php if($this->uri->segment(1) == 'ofirmie'){echo 'active';} ?>" href="<?php echo base_url(); ?>ofirmie"><?php echo $ofirmie->title; ?></a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php if($this->uri->segment(1) == 'uslugi'){echo 'active';} ?>" href="<?php echo base_url(); ?>uslugi"><?php echo $uslugi->title; ?></a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php if($this->uri->segment(1) == 'blog'){echo 'active';} ?>" href="<?php echo base_url(); ?>blog"><?php echo $blog->title; ?></a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php if($this->uri->segment(1) == 'galeria'){echo 'active';} ?>" href="<?php echo base_url(); ?>galeria"><?php echo $galeria->title; ?></a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php if($this->uri->segment(1) == 'kontakt'){echo 'active';} ?>" href="<?php echo base_url(); ?>kontakt"><?php echo $kontakt->title; ?></a>
        </li>
      </ul>
        <?php if(!empty($przycisk) && $przycisk->link != '' && $przycisk->link_text != ''): ?>
        <div class="md-form my-0 button_mobile mr-lg-3">
          <a href="<?php echo $przycisk->link; ?>" class="btn-template text-uppercase"><?php echo $przycisk->link_text; ?></a>
        </div>
        <?php endif; ?>
    </div>
  </nav>
</header>

  <section class="buttons_mobile d-lg-none">
    <div class="row">
      <div class="col-6 phone_mobile">
        <a href="tel:<?php echo $contact->phone1; ?>"><i class="fas fa-phone"></i></a>
      </div>
      <div class="col-6 email_mobile">
        <a href="<?php echo $contact->email1; ?>" class="text-dark"><i class="fas fa-envelope"></i></a>
      </div>
    </div>
  </section>