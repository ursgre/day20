<section class="map slider">
  <iframe
  src="<?php echo $contact->map; ?>"
  width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
</section>
<section class="container padding_section px-3 px-md-0">
  <h3 class="h3-responsive font-weight-bold text-center my-4"><?php echo $kontakt->title; ?></h3>
  <p class="text-center w-responsive mx-auto mb-5"><?php echo $kontakt->subtitle; ?></p>
  <div class="row">
    <div class="col-md-9 mb-md-0 mb-5">
      <form id="contact-form" name="contact-form" action="<?php echo base_url(); ?>mailer/send" method="POST">
        <div class="row">
          <div class="col-md-12">
            <div class="md-form mb-0">
              <input type="text" id="name" name="name" class="form-control" required>
              <label for="name" class="">Imię i nazwisko</label>
            </div>
          </div>
          <div class="col-md-6">
            <div class="md-form mb-0">
              <input type="email" id="email" name="email" class="form-control" required>
              <label for="email" class="">Adres e-mail</label>
            </div>
          </div>
          <div class="col-md-6">
            <div class="md-form mb-0">
              <input type="tel" id="phone" name="phone" class="form-control" required>
              <label for="phone" class="">Numer telefonu</label>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="md-form mb-0">
              <input type="text" id="subject" name="subject" class="form-control" required>
              <label for="subject" class="">Temat</label>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="md-form">
              <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
              <label for="message">Treść wiadomości</label>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="form-check">
              <input type="checkbox" class="form-check-input" id="rodo1">
              <label class="form-check-label" for="rodo1"><small>„Wyrażam zgodę na przetwarzanie przez danych osobowych podanych w formularzu. Podanie danych jest dobrowolne. Administratorem podanych przez Pana/ Panią danych osobowych jest <?php echo $contact->company; ?> z siedzibą w ul. <?php echo $contact->address; ?>, <?php echo $contact->city; ?>, <?php echo $contact->zip_code; ?>. Pana/Pani dane będą przetwarzane w celach związanych z udzieleniem odpowiedzi, przedstawieniem oferty usług <?php echo $contact->company; ?> oraz świadczeniem usług przez administratora danych. Przysługuje Panu/Pani prawo dostępu do treści swoich danych oraz ich poprawiania.”</small></label>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="form-check">
              <input type="checkbox" class="form-check-input" id="rodo2"><label class="form-check-label" for="rodo2"><small>„Wyrażam zgodę na otrzymywanie informacji handlowych od <?php echo $contact->company; ?> dotyczących jej oferty w szczególności poprzez połączenia telefoniczne lub sms z wykorzystaniem numeru telefonu podanego w formularzu, a także zgodę na przetwarzanie moich danych osobowych w tym celu przez <?php echo $contact->company; ?> oraz w celach promocji, reklamy i badania rynku.”</small></label>
            </div>
          </div>
        </div>
        <div class="text-center text-md-left mt-3">
          <button class="btn btn-primary" type="submit">Wyślij</button>
        </div>
      </form>
      <div class="status"></div>
    </div>
    <div class="col-md-3 text-center">
      <ul class="list-unstyled mb-0">
        <li>
          <a target="_blank" href="https://www.google.com/maps/place/<?= $contact->address ?>,+<?= $contact->zip_code ?>+<?= $contact->city; ?>">
            <i class="fas fa-map-marker-alt fa-2x"></i>
            <p><?php echo $contact->address; ?>, <?php echo $contact->city; ?> <?php echo $contact->zip_code; ?></p></a>
          </li>
          <li>
            <a href="tel:<?= $contact->phone1; ?>">
              <i class="fas fa-phone mt-4 fa-2x"></i>
              <p><?php echo $contact->phone1; ?></p>
            </a>
          </li>
          <li>
            <a href="mailto:<?= $contact->email1; ?>">
              <i class="fas fa-envelope mt-4 fa-2x"></i>
              <p><?php echo $contact->email1; ?></p>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </section>