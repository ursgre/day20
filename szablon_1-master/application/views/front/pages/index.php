<main>

    <section class="about text-center mb-5 mt-5 pt-md-4 pt-1 pb-md-4 pb-1">
        <h2 class="header__title"><?= $atributes[0]->title ?></h2>
        <div class="container mt-5  wow fadeInUp">
            <p class="mb-5 text-center"><?= $atributes[0]->description ?></p><br>
            <?php if ($atributes[0]->link) : ?>
            <a href="<?= $atributes[0]->link ?>" class="section_btn">Czytaj więcej</a>
            <?php endif; ?>
        </div>

    </section>

    <section class="why_us pt-5">

        <div class="container-fluid">

            <div class="row">

                <div class="col-md-6 why_us_background"
                    style="background-image: url(<?= images() . $atributes[1]->photo ?>.webp)"></div>

                <div class="col-md-6 text-center d-flex align-items-center px-5">
                    <div class="wow fadeInUp mt-md-0 mt-4">
                        <h2 class="header__title mb-5"><?= $atributes[1]->title ?></h2>
                        <div class="row">
                            <div class="col-md-12">

                                <p class="mb-md-0 mb-4"><?= $atributes[1]->description ?>
                                </p>

                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section class="default-section">
        <div class="container">
            <center>
                <h2 class="header__title header-oferta mt-5"><?= $naglowki[2]->title; ?></h2>
            </center>
            <div class="row">
                <?php foreach ($offer as $key) : ?>
                <div class="default-section__col col-lg-4">
                    <a href="<?= base_url() ?>oferta/<?= $key->id; ?>/<?= slug($key->title); ?>"
                        class="default-section__cell offer-box lazy"
                        style="background-image: url(<?= images() . $key->photo ?>.webp)">
                        <div class="default-section__desc-box">
                            <h5 class="default-section__cell-title">
                                <?= $key->title ?>
                            </h5>
                            <span class="default-section__cell-desc">czytaj więcej
                                <i class="fas fa-arrow-right"></i>
                            </span>
                        </div>

                    </a>
                </div>
                <?php endforeach; ?>
            </div>
            <div class="text-center section_btn_mobile mb-5 mt-5 pb-3">
                <a href="<?= base_url() ?>oferta" class="section_btn mt-5">Zobacz więcej</a>
            </div>
        </div>
    </section>

    <section class=" pt-0">
        <div class="container-fluid px-0">


            <div class="contact_us text-center lazy"
                style="background-image: url('<?= images() . $parallax->photo;  ?>.webp');background-position: center!important;">
                <h2 class="contact_title mb-5 mt-5 text-white"><?= $parallax->title; ?></h2>
                <a href="<?= base_url() ?>kontakt" class="contact_btn mt-5">Napisz do nas</a>
            </div>

        </div>
    </section>