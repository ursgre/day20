<div class="container mt-4 mb-3">
  <div class="row">
    <div class="col-md-12 d-inline">
      <h4 class="text-uppercase"><a href="<?= base_url() ?>" class="first-color home-text font-weight-normal">HOME</a> > <span class="font-weight-bold first-color"><?= $current_page->title; ?></span></h4>
    </div>
  </div>
</div>
<div class="container">
  <!--Section: Main info-->
  <section class="mt-5 mb-5">
    <?php if($this->session->flashdata('success')):?>
    <div class="col-md-12 mb-5">
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong><?= $this->session->flashdata('success') ?></strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
      </div>
    </div>
    <?php endif; ?>
    <?php if($this->session->flashdata('error')):?>
    <div class="col-md-12 mb-5">
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong><?= $this->session->flashdata('error') ?></strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
      </div>
    </div>
    <?php endif; ?>
    <div class="col-md-12">
      <form class="border border-light p-md-5 p-2" action="<?= base_url(); ?>mailer/send" method="POST" id="contact-form">
        <p class="h4 mb-4 text-center"><span class="font-weight-bold first-color"><?= $naglowki[0]->title ?></span></p>
        <input required type="text" id="defaultContactFormName" class="form-control mb-4 my-form-inputs" placeholder="<?= $kontakt[0]->title; ?>" name="name">
        <input required type="email" id="defaultContactFormEmail" class="form-control mb-4 my-form-inputs" placeholder="<?= $kontakt[1]->title; ?>" name="email">
        
        <input required type="subject" id="defaultContactFormSubject" class="form-control mb-4 my-form-inputs" placeholder="<?= $kontakt[2]->title; ?>" name="subject">
        <textarea required class="form-control rounded-0 my-form-inputs" id="exampleFormControlTextarea2" rows="3" placeholder="<?= $kontakt[3]->title; ?>" name="message"></textarea>
        <input type="checkbox" class="form-check-input" name="rodo1" id="rodo1">
        <label class="form-check-label mt-2" for="rodo1">
          <small><?= $settings->rodo ?></small>
        </label>
        <input type="checkbox" class="form-check-input" name="rodo2" id="rodo2">
        <label class="form-check-label mt-2" for="rodo2">
          <small><?= $settings->rodo_tel ?></small>
        </label>
        <button class="contact_btn btn_blog w-100 mt-2" type="submit">Wyślij</button>
      </form>
    </div>
  </section>
  <!--Section: Main info-->
</div>
<section class="map px-0 text-center">
  <h2 class="header__title mb-5"><?= $naglowki[1]->title ?></h2>
  <div class="container-fluid px-0 wow fadeIn data-delay-2s">
    <iframe src="<?= $contact->map ?>" width="100%" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>
  </div>
  <div class="container mt-5 mb-5">
    <div class="row text-center contact_text">
      <div class="col-md-4">
        <a href="https://www.google.com/maps/place/<?= $contact->address ?>,+<?= $contact->zip_code ?>+<?= $contact->city; ?>" class="btn-floating unique-color-dark">
          <i class="fas fa-map-marked-alt"></i>
        </a>
        <a class="text-black" href="https://www.google.com/maps/place/<?= $contact->address ?>,+<?= $contact->zip_code ?>+<?= $contact->city; ?>">
          <p><?= $contact->zip_code; ?> <?= $contact->city; ?></p>
          <p class="mb-md-0"><?= $contact->address; ?></p>
        </a>
      </div>
      <div class="col-md-4">
        <?php if($contact->phone1): ?>
        <?php $phone = $contact->phone1; ?>
        <?php endif; ?>
        <?php if($contact->phone2): ?>
        <?php $phone = $contact->phone2;  ?>
        <?php endif; ?>
        <a href="tel:<?= $phone ?>" class="btn-floating unique-color-dark">
          <i class="fas fa-mobile"></i>
        </a>
        <a class="text-black" href="tel:<?= $phone ?>">
          <p><?= $contact->phone1; ?></p>
        </a>
        <p class="mb-md-0 "><?= $contact->hours; ?></p>
      </div>
      <div class="col-md-4">
        <?php if($contact->email1): ?>
        <?php $mail = $contact->email1; ?>
        <?php endif; ?>
        <?php if($contact->email2): ?>
        <?php $mail = $contact->email2;  ?>
        <?php endif; ?>
        <a href="mailto: <?= $mail ?>" class="btn-floating unique-color-dark">
          <i class="fas fa-envelope-open"></i>
        </a>
        <?php if($contact->email1): ?>
        <a class="text-black" href="mailto: <?= $mail ?>">
          <p><?= $contact->email1; ?></p>
        </a>
        <?php endif; ?>
        <?php if($contact->email2): ?>
        <a class="text-black" href="mailto: <?= $mail ?>">
          <p><?= $contact->email2; ?></p>
        </a>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>