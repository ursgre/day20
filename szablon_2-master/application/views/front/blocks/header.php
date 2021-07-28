<body>
<style type="text/css">
  .button-dark {
    background-color: <?php echo $settings->first_color; ?> !important;
    border: 1px solid  <?php echo $settings->first_color; ?> !important;
  }
  .button-dark:hover, .colorTemplate2,  {
    color: <?php echo $settings->first_color; ?> !important;
  }
  .BgcolorTemplate2, .parralax__header {
    background-color: <?php echo $settings->first_color; ?> !important;
  }
  .colorTemplate2Border {
    border: 1px solid <?php echo $settings->first_color; ?> !important;
  }
  .list-group-item:hover{
    border: 1px solid <?php echo $settings->first_color; ?> !important;
    background-color: <?php echo $settings->first_color; ?> !important;
  }
  .list-group-item.active {
    background-color: <?php echo $settings->first_color; ?> !important;
    border-color: <?php echo $settings->first_color; ?> !important;
}
.btn__slider__hover:hover{
  background: white!important;
  border:2px solid white!important;
  color: <?php echo $settings->first_color; ?> !important;
}
.top-nav-collapse {
  background-color: <?php echo $settings->first_color; ?> !important; }

  .navbar {
    background-color: <?php echo $settings->first_color; ?> !important; } 

.page-footer {
  background-color: <?php echo $settings->first_color; ?> !important; }
  .button-dark:hover {
    background-color: #fff!important;
    color: <?php echo $settings->first_color; ?>;
    border-color: <?php echo $settings->first_color; ?>;
}
</style>
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar">
      <div class="container">

        <a class="navbar-brand" href="<?= base_url() ?>" target="_blank">
          <img src="<?= images().$settings->logo; ?>" alt="logo">
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">

          <ul class="navbar-nav mr-auto">
            <?php foreach ($subpages as $key): $current = $key->page;?>
              <li class="nav-item <?= ($this->uri->segment(1) == $current ? 'active' : ' '); ?>">
                <a class="nav-link" href="<?= base_url(); ?><?= $key->page; ?>"><?= $key->title; ?>
                <?= ($this->uri->segment(1) == $current ? '<span class="sr-only">(current)</span>' : ' '); ?>
                </a>
              </li>
            <?php endforeach; ?>
          </ul>

          <ul class="navbar-nav nav-flex-icons">
          	<?php if($settings->fb_link): ?>
            <li class="nav-item">
              <a href="<?= $settings->fb_link ?>" class="nav-link" target="_blank">
                <i class="fab fa-facebook-f"></i>
              </a>
            </li>
          	<?php endif; if($settings->tw_link): ?>
            <li class="nav-item">
              <a href="<?= $settings->tw_link ?>" class="nav-link" target="_blank">
                <i class="fab fa-twitter"></i>
              </a>
            </li>
          	<?php endif; if($settings->inst_link): ?>
            <li class="nav-item">
                <a href="<?= $settings->inst_link ?>" class="nav-link" target="_blank">
                  <i class="fab fa-instagram"></i>
                </a>
            </li>
            <?php endif; ?>

          </ul>

        </div>

      </div>
    </nav>