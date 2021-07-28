<!DOCTYPE html>
<html lang="pl">

<head>
    <?= $scripts->analytics ?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta property="og:url" content="<?= base_url() ?>">
    <meta property="og:type" content="website">
    <meta property="og:title" content="<?= $meta_title ?>">
    <meta property="og:description" content="<?= strip_tags($seo_description) ?>">
    <meta property="og:image" content="<?= base_url('uploads/' . $seo_image) ?>">
    <title>
        <?= $meta_title . ' - ' . $settings->meta_title ?>
    </title>
    <meta name="description" content="<?= strip_tags($seo_description) ?>">
    <link href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" rel="preload" as="style"
        onload="this.onload=null;this.rel='stylesheet'" async>
    <link type="text/css" href="//fonts.googleapis.com/css?family=Montserrat:400,400i,500,700" rel="preload" as="style"
        onload="this.onload=null;this.rel='stylesheet'" async>
    <link href="<?= assets() ?>css/bootstrap.min.css" rel="stylesheet" rel="preload" as="style"
        onload="this.onload=null;this.rel='stylesheet'" async>
    <link href="<?= assets() ?>css/mdb.min.css" rel="stylesheet" rel="preload" as="style"
        onload="this.onload=null;this.rel='stylesheet'" async>
    <link href="<?= assets() ?>css/blocks/style.css" rel="stylesheet" rel="preload" as="style"
        onload="this.onload=null;this.rel='stylesheet'" async>
    <link href="<?= assets() ?>css/lightbox.css" rel="stylesheet" rel="preload" as="style"
        onload="this.onload=null;this.rel='stylesheet'" async>

    <link href="<?= assets() ?>css/lc_lightbox.css" rel="preload" as="style"
        onload="this.onload=null;this.rel='stylesheet'" async />
    <link href="<?= assets() ?>skins/minimal.css" rel="preload" as="style"
        onload="this.onload=null;this.rel='stylesheet'" async />

    <link type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.1.0/cookieconsent.min.css"
        rel="preload" as="style" onload="this.onload=null;this.rel='stylesheet'" async />
    <script src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.1.0/cookieconsent.min.js"></script>
    <style type="text/css">
    .no-webp {
        display: none;
    }

    <?=$scripts->css ?>
    </style>
</head>