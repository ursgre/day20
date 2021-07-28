<section class="contact-section my-5">
  <div class="container">
  <!-- Form with header -->
  <div class="card">
    <!-- Grid row -->
    <div class="row">
      <!-- Grid column -->
      <div class="col-lg-8">
        <div class="card-body form">
          <!-- Header -->
          <h3 class="mt-4"><i class="fas fa-envelope pr-2"></i><?php echo $contact_header->title; ?>:</h3>
          <form id="contact-form" name="contact-form" action="<?php echo base_url(); ?>mailer/send" method="POST">
          <!-- Grid row -->
          <div class="row">
            <!-- Grid column -->
            <div class="col-md-6">
              <div class="md-form mb-0">
              <input type="text" id="name" name="name" class="form-control" required>
              <label for="name" class="">Imię i nazwisko</label>
              </div>
            </div>
            <!-- Grid column -->
            <!-- Grid column -->
            <div class="col-md-6">
              <div class="md-form mb-0">
              <input type="email" id="email" name="email" class="form-control" required>
              <label for="email" class="">Adres e-mail</label>
              </div>
            </div>
            <!-- Grid column -->
          </div>
          <!-- Grid row -->
          <!-- Grid row -->
          <div class="row">
            <!-- Grid column -->
            <div class="col-md-6">
              <div class="md-form mb-0">
              <input type="tel" id="phone" name="phone" class="form-control" required>
              <label for="phone" class="">Telefon</label>
              </div>
            </div>
            <!-- Grid column -->
            <!-- Grid column -->
            <div class="col-md-6">
              <div class="md-form mb-0">
              <input type="text" id="subject" name="subject" class="form-control" required>
              <label for="subject" class="">Temat</label>
              </div>
            </div>
            <!-- Grid column -->
          </div>
          <!-- Grid row -->
          <!-- Grid row -->
          <div class="row">
            <!-- Grid column -->
            <div class="col-md-12">
              <div class="md-form mb-0">
              <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea" required></textarea>
              <label for="message">Wiadomość</label>
              <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="rodo1" name="rodo1" value="1">
                            <label class="form-check-label" for="rodo1"><small>„Wyrażam zgodę na przetwarzanie przez danych osobowych podanych w formularzu. Podanie danych jest dobrowolne. Administratorem podanych przez Pana/ Panią danych osobowych jest <?php echo $contact->company; ?> z siedzibą w ul. <?php echo $contact->address; ?>, <?php echo $contact->city; ?>, <?php echo $contact->zip_code; ?>. Pana/Pani dane będą przetwarzane w celach związanych z udzieleniem odpowiedzi, przedstawieniem oferty usług <?php echo $contact->company; ?> oraz świadczeniem usług przez administratora danych. Przysługuje Panu/Pani prawo dostępu do treści swoich danych oraz ich poprawiania.”</small></label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="rodo2" name="rodo2" value="1">
                            <label class="form-check-label" for="rodo2"><small>„Wyrażam zgodę na otrzymywanie informacji handlowych od <?php echo $contact->company; ?> dotyczących jej oferty w szczególności poprzez połączenia telefoniczne lub sms z wykorzystaniem numeru telefonu podanego w formularzu, a także zgodę na przetwarzanie moich danych osobowych w tym celu przez <?php echo $contact->company; ?> oraz w celach promocji, reklamy i badania rynku.”</small></label>
                        </div>
                        <div class="text-center text-md-left mt-3">
                  <button type="submit" class="btn btn-primary">Wyślij</button>
                  </form>
                  <div class="status"></div>
              </div>
              </div>
            </div>
            <!-- Grid column -->
          </div>
          <!-- Grid row -->
        </div>
      </div>
      <!-- Grid column -->
      <!-- Grid column -->
      <div class="col-lg-4">
        <div class="card-body contact text-center h-100 white-text">
          <h3 class="my-4 pb-2">Dane kontaktowe</h3>
          <ul class="text-lg-left list-unstyled ml-4">
            <li>
              <p><i class="fas fa-map-marker-alt pr-2"></i><?php echo $contact->address; ?>, <?php echo $contact->city; ?>, <?php echo $contact->zip_code; ?></p>
            </li>
            <li>
              <p><a class="contact_link" href="tel:<?php echo $contact->phone1; ?>"><i class="fas fa-phone pr-2"></i><?php echo $contact->label1; ?> <?php echo $contact->phone1; ?></a></p>
            </li>
            <li>
              <p><a class="contact_link" href="mailto:<?php echo $contact->email1; ?>"><i class="fas fa-envelope pr-2"></i><?php echo $contact->email1; ?></a></p>
            </li>
          </ul>
          <hr class="hr-light my-4">
          <ul class="list-inline text-center list-unstyled">
            <li class="list-inline-item">
              <a class="p-2 fa-lg tw-ic" href="<?php echo $settings->fb_link; ?>">
                <i class="fab fa-facebook-f"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a class="p-2 fa-lg li-ic" href="<?php echo $settings->tw_link; ?>">
                <i class="fab fa-twitter"> </i>
              </a>
            </li>
            <li class="list-inline-item">
              <a class="p-2 fa-lg ins-ic" href="<?php echo $settings->inst_link; ?>">
                <i class="fab fa-instagram"> </i>
              </a>
            </li>
            <li class="list-inline-item">
              <a class="p-2 fa-lg ins-ic" href="<?php echo $settings->yt_link; ?>">
                <i class="fab fa-youtube"> </i>
              </a>
            </li>
          </ul>
        </div>
      </div>
      <!-- Grid column -->
    </div>
    <!-- Grid row -->
  </div>
  <!-- Form with header -->
  </div>
</section>
<!-- Section: Contact v.3 -->
