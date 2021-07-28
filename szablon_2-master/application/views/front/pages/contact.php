<section class="my-5 top_margin">
  <div class="container">
    <h2 class="font-weight-bold text-center header__text"><?= $current_page->subtitle ?></h2>
    <div class="text-center w-responsive mx-auto pb-5"><?= $current_page->description ?></div>
    <div class="row">
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
      <div class="col-lg-5 mb-lg-0 mb-4">
        <div class="card">
          <div class="card-body">
            <div class="form-header unique-color-dark">
              <h3 class="mt-2"><i class="fas fa-envelope"></i> Skontaktuj się z nami:</h3>
            </div>
            <form action="<?= base_url(); ?>mailer/send" method="POST" id="contact-form">
              <div class="md-form">
                <i class="fas fa-user prefix grey-text"></i>
                <input type="text" id="form-name" class="form-control" name="name">
                <label for="form-name">Imię</label>
              </div>
              <div class="md-form">
                <i class="fas fa-envelope prefix grey-text"></i>
                <input type="text" id="form-email" class="form-control" id="email" name="email">
                <label for="form-email">Email</label>
              </div>
              <div class="md-form">
                <i class="fas fa-tag prefix grey-text"></i>
                <input type="text" id="form-Subject" class="form-control" name="subject">
                <label for="form-Subject">Temat</label>
              </div>
              <div class="md-form">
                <i class="fas fa-pencil-alt prefix grey-text"></i>
                <textarea id="form-text" class="form-control md-textarea" rows="3" name="message"></textarea>
                <label for="form-text">Wiadomość</label>
              </div>
              <div class="form-check mb-3">
                <input type="checkbox" class="form-check-input" name="rodo1" id="rodo1">
                <label class="form-check-label" for="rodo1">
                  <small><?= $settings->rodo ?></small>
                </label>
              </div>
              <div class="form-check mb-3">
                <input type="checkbox" class="form-check-input" name="rodo2" id="rodo2">
                <label class="form-check-label" for="rodo2">
                  <small><?= $settings->rodo_tel ?></small>
                </label>
              </div>
              <div class="text-center">
                <button class="btn unique-color-dark text-white">Wyślij</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="col-lg-7">
        <div id="map-container-section" class="z-depth-1-half map-container-section mb-4" style="height: 800px">
          <iframe src="<?= $contact->map ?>" frameborder="0"
          style="border:0" allowfullscreen></iframe>
        </div>
        <div class="row text-center">
          <div class="col-md-4">
            <a target="_blank" href="https://www.google.com/maps/place/<?= $contact->address ?>,+<?= $contact->zip_code ?>+<?= $contact->city; ?>/ " class="btn-floating unique-color-dark">
              <i class="fas fa-map-marker-alt"></i>
            </a>
            <a target="_blank" href="https://www.google.com/maps/place/<?= $contact->address ?>,+<?= $contact->zip_code ?>+<?= $contact->city; ?>/ " class="text-dark">
              <p><?= $contact->zip_code; ?> <?= $contact->city; ?></p>
              <p class="mb-md-0"><?= $contact->address; ?></p>
            </a>
          </div>
          <div class="col-md-4">
            <a href="tel: <?= $contact->phone1; ?>" class="btn-floating unique-color-dark">
              <i class="fas fa-phone"></i>
            </a>
            <a href="tel: <?= $contact->phone1; ?>" class="text-dark">
              <p><?= $contact->phone1; ?></p>
            </a>
            <p class="mb-md-0"><?= $contact->hours; ?></p>
          </div>
          <div class="col-md-4">
            <a href="mailto: <?= $contact->email1; ?>" class="btn-floating unique-color-dark">
              <i class="fas fa-envelope"></i>
            </a>
            <?php if($contact->email1): ?>
            <a class="text-dark" href="mailto: <?= $contact->email1; ?>">
              <p><?= $contact->email1; ?></p>
            </a>
            <?php endif; ?>
            <?php if($contact->email2): ?>
            <a class="text-dark" href="mailto: <?= $contact->email2; ?>">
              <p><?= $contact->email2; ?></p>
            </a>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>