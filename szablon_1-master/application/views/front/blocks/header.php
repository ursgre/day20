<body>
<style type="text/css">
  .card-body:hover, .card-body:hover .card-title, .card-body:hover .card-text, .card-body:hover .btn-offer, .header__title, .main-header__nav-link{
  color: <?php echo $settings->first_color; ?>!important;
}

.card-body:hover .hr-light{
  border-color: <?php echo $settings->first_color; ?>!important;
}
.custom-control-input:checked~.custom-control-label::before, .contact_btn {
    border-color: <?php echo $settings->first_color; ?>!important;
    background-color:<?php echo $settings->first_color; ?>!important;
}
.my-form-inputs:focus, .main-header__btn{
    color:  <?php echo $settings->first_color; ?>;
    border-color:  <?php echo $settings->first_color; ?>;
}
.mobile-header__btn{
  color: white;
  background-color: <?php echo $settings->first_color ?>;
  border-color: <?php echo $settings->first_color ?>;
}
.main-header__btn:hover{
  border-color:  <?php echo $settings->second_color; ?>!important;
  background-color: <?php echo $settings->second_color; ?>!important;
}
.section_btn {
    color: <?php echo $settings->first_color; ?>;
    border: 2px solid <?php echo $settings->first_color; ?>;
}
.contact_btn:hover {
  background: <?php echo $settings->first_color; ?>!important;
  border: 2px solid <?php echo $settings->first_color; ?>!important;
}
.section_btn:hover{
  border-color:  <?php echo $settings->second_color; ?>!important;
  background-color: <?php echo $settings->second_color; ?>!important;
}
.default-section__cell:hover .default-section__desc-box, .main-header .carousel-item, .main-header__background, .main-header__background::before,   .main-header .carousel-control-prev, .main-header .carousel-control-next, .social__bar, .social__mini, .unique-color-dark, .elegant-color {
    background-color: <?php echo $settings->first_color; ?>!important;
}
.carousel-control-next:hover{
  background-color: <?php echo $settings->second_color; ?>!important;
}
.carousel-control-prev:hover{
  background-color: <?php echo $settings->second_color; ?>!important;
}
.contact_title {
  text-shadow: 2px 2px <?php echo $settings->first_color; ?>!important;

}
.sr-only:hover{
  color: <?= $settings->first_color; ?>;
}
.first-color{
  color: <?= $settings->first_color; ?>!important;
}

.first-bgc{
  background-color: <?= $settings->first_color; ?>!important;
}
.second-color{
  color: <?= $settings->second_color; ?>!important;
}
.second-bgc{
  background-color: <?= $settings->second_color; ?>!important;
}
/*.main-footer__link:hover {
  color: <?= $settings->first_color ?>; 
}*/
.main-footer__link:hover{
  color: white;
}
.main-header__nav-link:hover{
  color: <?= $settings->second_color ?>!important;
}
.form-check-input[type=checkbox]:checked+label:before{
   border-right: 2px solid <?= $settings->first_color; ?>!important;
  border-bottom: 2px solid <?= $settings->first_color; ?>!important;
}
.rodo:hover{
 color: <?= $settings->first_color ?>;
}
.sign:hover{
  color: <?= $settings->second_color ?>;
}
.card-body:hover{
  background-color: <?= $settings->second_color; ?>!important;
  color: <?= $settings->first_color ?>;
}
.home-text:hover{
  color: <?= $settings->second_color ?>;
}
.a-card-body:hover{
  color: <?= $settings->first_color ?>;
  text-decoration: none;
}
.a-card-body{
  color: white;
}

</style>
  <header class="main-header">
    <nav class="main-header__navbar navbar navbar-expand-lg navbar-light fixed-top" id="navbar">
      <div class="main-header__container container">
        <a class="navbar-brand" href="<?= base_url(); ?>">
          <img class="main-header__logo" src="<?= images().$settings->logo; ?>" alt="logo ad awards">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav d-flex align-items-center">
            <?php foreach ($subpages as $key): $current = $key->page;?>
            <li class="main-header__nav-item nav-item">
              <a class="main-header__nav-link <?= ($this->uri->segment(1) == $current ? 'first-color' : ' '); ?> nav-link"
                href="<?= base_url(); ?><?= $key->page; ?>"><?= $key->title; ?></a>
            </li>
            <?php endforeach; ?>
            <!-- <li class="nav-link">
              <form  id="form_lang" action="<?= base_url() ?>panel/settings/set_lang" method="post">
                <select id="lang_select" name="lang" class="browser-default custom-select select-picker" >
                  <?php foreach($jezyki as $jezyk): ?>
                  <option <?php if($jezyk->prefix == $this->session->userdata('lang')) echo 'selected'; ?> value="<?= $jezyk->prefix ?>"><?= strtoupper($jezyk->prefix); ?></option>
                <?php endforeach; ?>
                </select>
                <input type="hidden" name="redirect" id="redirect_input">
              </form>
            </li> -->
          </ul>

        </div>
      </div>
    </nav>
    <?php if($this->uri->segment(1) == ''): ?>
      <div class="main-header__carousel carousel-other">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">

          <?php $i=0; foreach ($slider as $key):?>
            <div class="carousel-item <?= ($i == 0 ? 'active' : '') ?> ">
              <div class="main-header__carousel-container container">
                <div class="main-header__background">
                  <div class="main-header__title-box">
                    <h2 class="main-header__title animated bounceInDown first-color"><?= $key->title ?><br><small><?= $key->subtitle ?></small></h2>

                    <div class="main-header__separator"></div>

                    <p class="main-header__text">

                    </p>
                    <?php if($key->link): ?>
                    <a href="<?= $key->link ?>" class="main-header__btn"><?= $key->button ?></a>
                    <?php endif; ?>
                  </div>
                </div>
              </div>
              <div class="main-header__carousel-img" style="background-image: url('<?= images().$key->photo ?>.webp');"></div>

            </div>
          <?php $i++; endforeach; ?>
          </div>
          <div class="main-header__control-container container">
            <div class="main-header__control-box">
              <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">

                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">

                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>
        </div>
          

      </div>

<!--Carousel Wrapper-->
<div id="carousel-example-2z" class="carousel slide carousel-fade carousel-mobile" data-ride="carousel">
  <!--Indicators-->
  <ol class="carousel-indicators mobile-baner-indicators">
    <?php $i=0; foreach($slider as $key): ?>
    <li data-target="#carousel-example-2z" data-slide-to="<?= $i ?>" class="<?php if($i == 0) echo 'active'; ?>"></li>
    <?php $i++; endforeach; ?>
  </ol>
  <!--/.Indicators-->
  <!--Slides-->
  <div class="carousel-inner" role="listbox">
    <!--First slide-->
    <?php $i=0; foreach($slider as $key): ?>
    <div class="carousel-item <?php if($i == 0){ echo 'active'; }?>">
      <div class="main-header__carousel-img-mobile d-flex justify-content-center align-items-center" style="background-image: url('<?= images().$key->photo ?>.webp');">
        <div class="mobile-banner">
          <h2 class="main-header__title animated bounceInDown first-color mobile-banner-title"><?= $key->title ?><br><small><?= $key->subtitle ?></small></h2>
          <?php if($key->link): ?>
            <div class="d-flex justify-content-center">
              <a href="<?= $key->link ?>" class="mobile-header__btn mobile-header-button"><?= $key->button ?></a>
            </div>
          <?php endif; ?>
        </div>
      </div>
    </div>
  <?php $i++; endforeach; ?>
    
  </div>
  <!--/.Slides-->
  <!--Controls-->
  <div class="social__bar social__mini carousel-mobile">
            <div class="social__box d-flex">
              <?php if($settings->fb_link): ?>
                <a href="<?= $settings->fb_link ?>">
                  <div class="social__circle animated bounceInRight mr-4">
                    <i class="fab fa-facebook-f social__icon"></i>
                  </div>
                </a>
              <?php endif; if($settings->inst_link): ?>
              <a href="<?= $settings->inst_link ?>">
                <div class="social__circle animated bounceInRight mr-4">
                  <i class="fab fa-instagram social__icon"></i>
                </div>
              </a>
              <?php endif; if($settings->yt_link): ?>
              <a href="<?= $settings->yt_link ?>">
                <div class="social__circle animated bounceInRight mr-4">
                  <i class="fab fa-youtube social__icon"></i>
                </div>
              </a>
              <?php endif; if($settings->tw_link): ?>
              <a href="<?= $settings->tw_link ?>">
                <div class="social__circle animated bounceInDown">
                  <i class="fab fa-twitter social__icon"></i>
                </div>
              </a>
            <?php endif; ?>
            </div>
          </div>
  <!--/.Controls-->
</div>
<!--/.Carousel Wrapper-->

    <?php endif; ?>
  </header>
<main>