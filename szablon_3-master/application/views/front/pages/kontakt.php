<section class="map slider">
  <iframe
  src="<?php echo $contact->map; ?>"
  width="100%" height="650" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
</section>
<section class="container second_section px-3 px-md-0">
  <div class="row">
    <div class="col-lg-4 col-md-6 text-center text-md-left mb-3 mb-md-0">
      <h1 class="mb-5">Dane kontaktowe</h1>
      <p class="font-regular text-muted">
        Adres: <a class="special_href" target="_blank" href="https://www.google.com/maps/place/<?= $contact->address ?>,+<?= $contact->zip_code ?>+<?= $contact->city; ?>/"><?php echo $contact->address; ?>,<br><?php echo $contact->city; ?> <?php echo $contact->zip_code; ?></a>
      </p>
      <p class="font-regular text-muted mt-4">
        Telefony:
        <a href="tel:<?php echo $contact->phone1; ?>" class="special_href"><?php echo $contact->phone1; ?></a>
        <?php if($contact->phone2 != ''): ?> ;
        <a href="tel:<?php echo $contact->phone2; ?>" class="special_href"><?php echo $contact->phone2; ?></a>
        <?php endif; ?>
      </p>
      <p class="font-regular text-muted mt-4">
        E-maile:
        <a href="mailto:<?php echo $contact->email1; ?>" class="special_href"><?php echo $contact->email1; ?></a>
        <?php if($contact->email2 != ''): ?> ;
        <a href="mailto:<?php echo $contact->email2; ?>" class="special_href"><?php echo $contact->email2; ?></a>
        <?php endif; ?>
      </p>
      <p class="font-regular text-muted mt-4">
        <?php if($settings->fb_link != ''): ?>
        <a href="<?php echo $settings->fb_link; ?>" class="special_href"><i class="fab fa-facebook-f"></i></a>
        <?php endif; ?>
        <?php if($settings->tw_link != ''): ?>
        <a href="<?php echo $settings->tw_link; ?>" class="special_href px-3"><i class="fab fa-twitter"></i></a>
        <?php endif; ?>
        <?php if($settings->inst_link != ''): ?>
        <a href="<?php echo $settings->inst_link; ?>" class="special_href pr-3"><i class="fab fa-instagram"></i></a>
        <?php endif; ?>
        <?php if($settings->yt_link != ''): ?>
        <a href="<?php echo $settings->yt_link; ?>" class="special_href"><i class="fab fa-youtube"></i></a>
        <?php endif; ?>
      </p>
    </div>
    <div class="col-lg-8 col-md-6 text-center text-md-left mb-3 mb-md-0">
      <h1 class="mb-4">Skontaktuj się</h1>
      <form id="contact-form" class="text-center" style="color: #757575;" action="<?php echo base_url(); ?>mailer/send" method="post">
        <label class="sr-only" for="yourName">Imię i nazwisko</label>
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <div class="input-group-text text-muted"><i class="fas fa-user"></i></div>
          </div>
          <input required type="text" class="form-control py-0" id="yourName" name="name" placeholder="Imię i nazwisko">
        </div>
        <label class="sr-only" for="yourEmail">Adres E-mail</label>
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <div class="input-group-text text-muted"><i class="fas fa-envelope"></i></div>
          </div>
          <input required type="email" class="form-control py-0" id="yourEmail" name="email" placeholder="Adres E-mail">
        </div>
        <label class="sr-only" for="yourPhone">Telefon</label>
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <div class="input-group-text text-muted"><i class="fas fa-phone"></i></div>
          </div>
          <input required type="tel" class="form-control py-0" id="yourPhone" name="phone" placeholder="Telefon">
        </div>
        <label class="sr-only" for="yourSubject">Temat</label>
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <div class="input-group-text text-muted"><i class="fas fa-pencil-alt"></i></div>
          </div>
          <input required type="tel" class="form-control py-0" id="yourSubject" name="subject" placeholder="Temat">
        </div>
        <label class="sr-only" for="yourMessage">Wiadomość</label>
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <div class="input-group-message text-muted"><i class="fas fa-signature"></i></div>
          </div>
          <textarea id="yourMessage" class="form-control py-0" style="padding-top: .375rem !important;" name="message" placeholder="Wiadomość"></textarea>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="form-check">
              <input type="checkbox" class="form-check-input" id="rodo1" name="rodo1" value="1">
              <label class="form-check-label" for="rodo1"><small>„Wyrażam zgodę na przetwarzanie przez danych osobowych podanych w formularzu. Podanie danych jest dobrowolne. Administratorem podanych przez Pana/ Panią danych osobowych jest <?php echo $contact->company; ?> z siedzibą w ul. <?php echo $contact->address; ?>, <?php echo $contact->city; ?>, <?php echo $contact->zip_code; ?>. Pana/Pani dane będą przetwarzane w celach związanych z udzieleniem odpowiedzi, przedstawieniem oferty usług <?php echo $contact->company; ?> oraz świadczeniem usług przez administratora danych. Przysługuje Panu/Pani prawo dostępu do treści swoich danych oraz ich poprawiania.”</small></label>
            </div>
            <div class="form-check">
              <input type="checkbox" class="form-check-input" id="rodo2" name="rodo2" value="1">
              <label class="form-check-label" for="rodo2"><small>„Wyrażam zgodę na otrzymywanie informacji handlowych od <?php echo $contact->company; ?> dotyczących jej oferty w szczególności poprzez połączenia telefoniczne lub sms z wykorzystaniem numeru telefonu podanego w formularzu, a także zgodę na przetwarzanie moich danych osobowych w tym celu przez <?php echo $contact->company; ?> oraz w celach promocji, reklamy i badania rynku.”</small></label>
            </div>
          </div>
        </div>
        <div class="text-left mt-5">
          <button type="submit" class="btn btn-primary">Wyślij</button>
        </div>
      </form>
    </div>
  </div>
</section>