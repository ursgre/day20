 <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>
    <?php if($this->uri->segment(1) == '')echo 'Strona główna - '.$settings->meta_title;
          elseif($this->uri->segment(1) == 'uslugi') echo "Usługi - ".$settings->meta_title;
          elseif($this->uri->segment(1) == 'ofirmie') echo 'O firmie - '.$settings->meta_title;
          elseif($this->uri->segment(1) == 'wpis') echo $value->title . ' - ' . $settings->meta_title;
          elseif($this->uri->segment(1) != '') echo ucfirst($this->uri->segment(1)).' - '.$settings->meta_title;
          else echo $value->title . ' - '.$settings->meta_title; ?>
  </title>
  <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="preload" as="style" onload="this.onload=null;this.rel='stylesheet'" async> 
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" rel="preload" as="style" onload="this.onload=null;this.rel='stylesheet'" async>
  <link href="<?php echo base_url(); ?>assets/front/css/bootstrap.min.css" rel="preload" as="style" onload="this.onload=null;this.rel='stylesheet'" async>
  <link href="<?php echo base_url(); ?>assets/front/css/mdb.min.css" rel="preload" as="style" onload="this.onload=null;this.rel='stylesheet'" async>
  <link href="<?php echo base_url(); ?>assets/front/css/style.css" rel="preload" as="style" onload="this.onload=null;this.rel='stylesheet'" async>
  <link href="<?php echo base_url(); ?>assets/front/css/preloader.css" rel="preload" as="style" onload="this.onload=null;this.rel='stylesheet'" async>
  <link href="<?php echo base_url(); ?>assets/front/dist/css/lightbox.css" rel="preload" as="style" onload="this.onload=null;this.rel='stylesheet'" async/>
  <link rel="shortcut icon" type="image/png" href="<?php echo base_url(); ?>uploads/<?php echo $settings->logo; ?>" async/>
  <meta name="description" content="<?= $seo_description ?>">
  <meta name="keywords" content="<?php echo $settings->meta_title ?>,<?php echo $settings->description ?>">
  <meta name="author" content="Dawid Płóciennik AD Awards">
  <link rel="preload" as="style" onload="this.onload=null;this.rel='stylesheet'" async href="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.1.0/cookieconsent.min.css"/>
  <script src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.1.0/cookieconsent.min.js" rel="preload" as="style" onload="this.onload=null;this.rel='stylesheet'" async></script>
</head>

<body>

<style type="text/css">
  
.no-webp{
  display: none;
}
a:hover, .active,.carousel-control-next:hover, .carousel-control-prev:hover, .carousel-control-next:focus, .carousel-control-prev:focus, .icon, .special_href, footer a, .special_href:hover {
  color: <?php echo $settings->first_color; ?> !important;
}
.btn-template:hover, .carousel-indicators li, .first_letter, .email_mobile, footer hr, .sk-folding-cube .sk-cube:before {
  background-color: <?php echo $settings->first_color; ?> !important;
}
.form-check-input[type="checkbox"]:checked + label::before, label.btn input[type="checkbox"]:checked + label::before {
    border-right: 2px solid <?php echo $settings->first_color; ?> !important;
    border-bottom: 2px solid <?php echo $settings->first_color; ?> !important;
}
.btn-primary, .btn-secondary:hover {
    background-color: <?php echo $settings->first_color; ?> !important;
    border-color: <?php echo $settings->first_color; ?> !important;
}
.gallery_icon {
  color: #fff !important;
}
.gallery_mask:hover  {
  background-color: <?php echo $settings->first_color; ?> !important;
  opacity: 0.5;
}
.btn-template:hover {
  color: #fff !important;
}
</style>


<?php if($this->session->flashdata('flashdata')) {
  echo '<div class="info">'.$this->session->flashdata('flashdata').'</div>';
} ?>
<div id="preloader">
  <div class="sk-folding-cube">
    <div class="sk-cube1 sk-cube"></div>
    <div class="sk-cube2 sk-cube"></div>
    <div class="sk-cube4 sk-cube"></div>
    <div class="sk-cube3 sk-cube"></div>
  </div>
</div> 