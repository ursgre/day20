<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="description" content="<?php echo $settings->description; ?>">
  <meta name="keywords" content="<?php echo $settings->keywords; ?>">
  <meta name="author" content="Ad Awards - Karol Zygadło">
  <title><?php
    if($this->uri->segment(1) == '') echo 'Strona główna - ' . $settings->meta_title;
    else if($this->uri->segment(1) == 'wpis') echo $blog_entry->title . ' - ' . $settings->meta_title;
    else if($this->uri->segment(1) == 'uslugi') echo 'Usługi - ' . $settings->meta_title;
    else echo ucfirst(str_replace('_', ' ', $this->uri->segment(1))) . ' - ' . $settings->meta_title;
    

   ?></title>
  <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="preload" as="style" onload="this.onload=null;this.rel='stylesheet'" async> 
  <link rel="preload" as="style" onload="this.onload=null;this.rel='stylesheet'" async href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <link href="<?php echo base_url(); ?>assets/front/css/bootstrap.min.css" rel="preload" as="style" onload="this.onload=null;this.rel='stylesheet'" async>
  <link href="<?php echo base_url(); ?>assets/front/css/mdb.min.css" rel="preload" as="style" onload="this.onload=null;this.rel='stylesheet'" async>
  <link href="<?php echo base_url(); ?>assets/front/css/style.css" rel="preload" as="style" onload="this.onload=null;this.rel='stylesheet'" async>
  <link href="<?php echo base_url(); ?>assets/front/css/preloader.css" rel="preload" as="style" onload="this.onload=null;this.rel='stylesheet'" async>

  <link rel="preload" as="style" onload="this.onload=null;this.rel='stylesheet'" async href="<?php echo base_url(); ?>assets/front/dist/assets/owl.carousel.min.css">
  <link rel="preload" as="style" onload="this.onload=null;this.rel='stylesheet'" async href="<?php echo base_url(); ?>assets/front/dist/assets/owl.theme.default.min.css">

  <link href="<?php echo base_url(); ?>assets/front/dist/css/lightbox.css" rel="preload" as="style" onload="this.onload=null;this.rel='stylesheet'" async/>
  <link rel="preload" as="style" onload="this.onload=null;this.rel='stylesheet'" async href="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.1.0/cookieconsent.min.css" />
  <script src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.1.0/cookieconsent.min.js"></script>
</head>

<body>
<style>

a:hover, .menu_active, .main-colorText, .special_href, .red_text, .footer_href:hover, .icon_size, .mask_social:hover    {  
color: <?php echo $settings->first_color; ?> !important;
}
.bg-primary, .btn-primary, .separate_line, .separate_line-left, .phone_mobile, .secondary-color, .contact-section .contact, .red   {
    background-color: #E9534A !important;
}

.mask_project:hover {
  background-color: <?php echo $settings->first_color; ?> !important;
  opacity: 0.7;
}

.md-form input[type="date"]:focus:not([readonly]), .md-form input[type="datetime-local"]:focus:not([readonly]), .md-form input[type="email"]:focus:not([readonly]), .md-form input[type="number"]:focus:not([readonly]), .md-form input[type="password"]:focus:not([readonly]), .md-form input[type="search-md"]:focus:not([readonly]), .md-form input[type="search"]:focus:not([readonly]), .md-form input[type="tel"]:focus:not([readonly]), .md-form input[type="text"]:focus:not([readonly]), .md-form input[type="time"]:focus:not([readonly]), .md-form input[type="url"]:focus:not([readonly]), .md-form textarea.md-textarea:focus:not([readonly]) {
    box-shadow: 0 1px 0 0 <?php echo $settings->first_color; ?>;
    border-bottom: 1px solid<?php echo $settings->first_color; ?>;
}
.md-form input[type="date"]:focus:not([readonly]) + label, .md-form input[type="datetime-local"]:focus:not([readonly]) + label, .md-form input[type="email"]:focus:not([readonly]) + label, .md-form input[type="number"]:focus:not([readonly]) + label, .md-form input[type="password"]:focus:not([readonly]) + label, .md-form input[type="search-md"]:focus:not([readonly]) + label, .md-form input[type="search"]:focus:not([readonly]) + label, .md-form input[type="tel"]:focus:not([readonly]) + label, .md-form input[type="text"]:focus:not([readonly]) + label, .md-form input[type="time"]:focus:not([readonly]) + label, .md-form input[type="url"]:focus:not([readonly]) + label, .md-form textarea.md-textarea:focus:not([readonly]) + label, .modal-dialog.modal-notify.modal-primary .btn.btn-outline-primary .fab, .modal-dialog.modal-notify.modal-primary .btn.btn-outline-primary .far, .modal-dialog.modal-notify.modal-primary .btn.btn-outline-primary .fas {
    color: <?php echo $settings->first_color; ?>;
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