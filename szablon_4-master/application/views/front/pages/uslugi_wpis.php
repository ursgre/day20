<section class="slider">
  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <div class="slider_image slider_image-subpage" style="background-image: url('<?php echo base_url(); ?>uploads/<?php echo $value->photo_2; ?>');" alt="<?php echo $value->alt_2; ?>">
          <h1 class="slider_title mb-3 wow slideInUp"><span><?php echo $value->title; ?></span></h1>
          <div class="separate_line mb-0"></div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="padding_section">
  <div class="container">
    <div class="row">
      <div class="col-md-6 pr-5">
        <h3 class="mb-4"><?php echo $value->title; ?></h3>
        <div class="separate_line-left"></div>
        <p class="font-weight-bold"><?php echo $value->subtitle; ?></p>
        <div class="font-small"><?php echo $value->description; ?></div>
      </div>
      <div class="col-md-6 bg_photo_services" style="background-image: url('<?php echo base_url(); ?>uploads/<?php echo $value->photo; ?>');" alt="<?php echo $value->photo_2; ?>"></div>
    </div>
  </div>
</section>

<section class="padding_section muted_section">
  <div class="container">
    <div class="content">
      <?php echo $value->description2; ?>
    </div>
  </div>
</section>

<section class="padding_section bg-primary">
  <div class="container padding_services">
    <div class="row align-items-center text-center">
    	<h3 class="text-white mb-4">Jeżeli jesteś zainteresowany tą ofertą, skontaktuj się z nami wysyłając do nas bezpośrednio formularz kontaktowy z tej oferty!</h3>
    	<button type="button" class="btn btn-secondary mx-auto mt-4" data-toggle="modal" data-target="#contact_modal">
		  Formularz kontaktowy
		</button>
    </div>
  </div>
</section>

<!-- Modal -->
<div class="modal fade" id="contact_modal" tabindex="-1" role="dialog" aria-labelledby="contactModal"
  aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <form method="" post="" class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Formularz kontaktowy</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <form name="contact-form" action="<?php echo base_url(); ?>mailer/send" method="POST">
            <div class="row">
                <div class="col-md-12">
                    <div class="md-form mb-0">
                        <input type="text" id="name" name="name" class="form-control" required>
                        <label for="name" class="">Twoje imię i nazwisko</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="md-form mb-0">
                        <input type="email" id="email" name="email" class="form-control" required>
                        <label for="email" class="">Twój adres e-mail</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="md-form mb-0">
                        <input type="tel" id="phone" name="phone" class="form-control" required>
                        <label for="phone" class="">Twój numer telefonu</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="md-form mb-0">
                        <input type="text" id="subject" name="subject" class="form-control" value="<?php echo $value->title; ?>" readonly required>
                        <label for="subject" class="">Temat</label>
                    </div>
                </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="md-form">
                    <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                    <label for="message">Twoja wiadomość (opcjonalnie)</label>
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
                    <input type="checkbox" class="form-check-input" id="rodo2">
                    <label class="form-check-label" for="rodo2"><small>„Wyrażam zgodę na otrzymywanie informacji handlowych od <?php echo $contact->company; ?> dotyczących jej oferty w szczególności poprzez połączenia telefoniczne lub sms z wykorzystaniem numeru telefonu podanego w formularzu, a także zgodę na przetwarzanie moich danych osobowych w tym celu przez <?php echo $contact->company; ?> oraz w celach promocji, reklamy i badania rynku.”</small></label>
                </div>
              </div>
            </div>
            <div class="mt-3">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Zamknij</button>
              <button type="submit" class="btn btn-primary">Wyślij</button>
            </div>
          </form>
      </div>
    </form>
  </div>
</div>