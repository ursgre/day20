<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>
    <?php if($this->uri->segment(1) != '' && !isset($value->title)){echo ucfirst($this->uri->segment(1)) . ' - ';}
          elseif($this->uri->segment(1) != '' && isset($value->title)) {echo $value->title . ' - ';} ?>
    <?php echo $settings->meta_title; ?>
  </title>
  <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="preload" as="style" onload="this.onload=null;this.rel='stylesheet'" async>
  <link href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" rel="preload" as="style" onload="this.onload=null;this.rel='stylesheet'" async>
  <link href="<?php echo base_url(); ?>assets/front/css/bootstrap.min.css" rel="preload" as="style" onload="this.onload=null;this.rel='stylesheet'" async>
  <link href="<?php echo base_url(); ?>assets/front/css/mdb.min.css" rel="preload" as="style" onload="this.onload=null;this.rel='stylesheet'" async>
  <link href="<?php echo base_url(); ?>assets/front/css/style.css" rel="preload" as="style" onload="this.onload=null;this.rel='stylesheet'" async>
  <link href="<?php echo base_url(); ?>assets/front/css/preloader.css" rel="preload" as="style" onload="this.onload=null;this.rel='stylesheet'" async>

  <link href="<?php echo base_url(); ?>assets/front/dist/assets/owl.carousel.min.css" rel="preload" as="style" onload="this.onload=null;this.rel='stylesheet'" async>
  <link href="<?php echo base_url(); ?>assets/front/dist/assets/owl.theme.default.min.css" rel="preload" as="style" onload="this.onload=null;this.rel='stylesheet'" async>

  <link href="<?php echo base_url(); ?>assets/front/dist/css/lightbox.css" rel="preload" as="style" onload="this.onload=null;this.rel='stylesheet'" async/>
  <link href="<?php echo base_url(); ?>uploads/<?php echo $settings->logo; ?>" rel="preload" as="style" onload="this.onload=null;this.rel='stylesheet'" async />
  <meta name="description" content="<?php echo $settings->description ?>">
  <meta name="keywords" content="<?php echo $settings->meta_title ?>,<?php echo $settings->description ?>">
  <meta name="author" content="Dawid P????ciennik AD Awards">
  <link href="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.1.0/cookieconsent.min.css" rel="preload" as="style" onload="this.onload=null;this.rel='stylesheet'" async />
  <script src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.1.0/cookieconsent.min.js" async></script>
</head>

<body>

<style type="text/css">
    .no-webp{
      display: none;
    }
a:hover, .active, .main-colorText, .special_href, .navbar-mini .fas, .icon, .footer_href {
    color: <?php echo $settings->first_color; ?> !important;
}  
.icon_size {
  color: <?php echo $settings->first_color; ?>;
}
.bg-primary, .btn-primary, .separate_line, .separate_line-left, .bg_flex:hover, .md-progress .progress-bar, .email_mobile, .cube1, .cube2 {
    background-color: <?php echo $settings->first_color; ?> !important;
}
.md-form input[type="date"]:focus:not([readonly]), .md-form input[type="datetime-local"]:focus:not([readonly]), .md-form input[type="email"]:focus:not([readonly]), .md-form input[type="number"]:focus:not([readonly]), .md-form input[type="password"]:focus:not([readonly]), .md-form input[type="search-md"]:focus:not([readonly]), .md-form input[type="search"]:focus:not([readonly]), .md-form input[type="tel"]:focus:not([readonly]), .md-form input[type="text"]:focus:not([readonly]), .md-form input[type="time"]:focus:not([readonly]), .md-form input[type="url"]:focus:not([readonly]), .md-form textarea.md-textarea:focus:not([readonly]) {
    box-shadow: 0 1px 0 0 <?php echo $settings->first_color; ?>;
    border-bottom: 1px solid <?php echo $settings->first_color; ?>;
}
.md-form input[type="date"]:focus:not([readonly]) + label, .md-form input[type="datetime-local"]:focus:not([readonly]) + label, .md-form input[type="email"]:focus:not([readonly]) + label, .md-form input[type="number"]:focus:not([readonly]) + label, .md-form input[type="password"]:focus:not([readonly]) + label, .md-form input[type="search-md"]:focus:not([readonly]) + label, .md-form input[type="search"]:focus:not([readonly]) + label, .md-form input[type="tel"]:focus:not([readonly]) + label, .md-form input[type="text"]:focus:not([readonly]) + label, .md-form input[type="time"]:focus:not([readonly]) + label, .md-form input[type="url"]:focus:not([readonly]) + label, .md-form textarea.md-textarea:focus:not([readonly]) + label, .modal-dialog.modal-notify.modal-primary .btn.btn-outline-primary .fab, .modal-dialog.modal-notify.modal-primary .btn.btn-outline-primary .far, .modal-dialog.modal-notify.modal-primary .btn.btn-outline-primary .fas {
    color: <?php echo $settings->first_color; ?>;
}
.form-check-input[type="checkbox"]:checked + label::before, label.btn input[type="checkbox"]:checked + label::before {
    border-right: 2px solid <?php echo $settings->first_color; ?>;
    border-bottom: 2px solid <?php echo $settings->first_color; ?>;
}

</style>


<?php if($this->session->flashdata('flashdata')) {
  echo '<div class="info">'.$this->session->flashdata('flashdata').'</div>';
} ?>

<div id="preloader">
  <div class="spinner">
    <div class="cube1"></div>
    <div class="cube2"></div>
  </div>
</div>