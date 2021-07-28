<footer class="page-footer font-small bg-muted text-dark">
  <div class="container text-center text-md-left pt-5">
    <div class="row mt-3">
      <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
        <a href="<?= base_url() ?>">
          <h6 class="text-uppercase font-weight-bold text-dark"><?php echo $contact->company; ?></h6>
        </a>
        <hr class="accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p><?php echo $settings->description; ?></p>
      </div>
      <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
        <a href="<?= base_url() ?>uslugi">
          <h6 class="text-uppercase font-weight-bold text-dark">Usługi</h6>
        </a>
        <hr class="accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <?php $i = 0;
        foreach (array_reverse($uslugi_active) as $v) : $i++;
          if ($i == 5) {
            break;
          } ?>
          <p>
            <a href="<?php echo base_url() . 'usluga/' . slug($v->title) . '/' . $v->id ?>"><?php echo $v->title; ?></a>
          </p>
        <?php endforeach ?>
      </div>
      <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
        <a href="<?= base_url() ?>blog">
          <h6 class="text-uppercase font-weight-bold text-dark">Blog</h6>
        </a>
        <hr class="accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <?php $i = 0;
        foreach (array_reverse($blog_footer) as $v) : $i++;
          if ($i == 5) {
            break;
          } ?>
          <p>
            <a href="<?php echo create_link('wpis', $v->title, $v->id); ?>"><?php echo $v->title; ?></a>
          </p>
        <?php endforeach ?>
      </div>
      <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
        <a href="<?= base_url() ?>kontakt">
          <h6 class="text-uppercase font-weight-bold text-dark">Kontakt</h6>
        </a>
        <hr class="accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>
          <i class="fas fa-home mr-3"></i><a href="https://www.google.com/maps/place/<?= $contact->address ?>,+<?= $contact->zip_code ?>+<?= $contact->city; ?>/"><?php echo $contact->address; ?>, <?php echo $contact->city; ?> <?php echo $contact->zip_code; ?></a></p>
        <p><i class="fas fa-envelope mr-3"></i><a href="mailto:<?php echo $contact->email1; ?>" class="special_href">
            <?php echo $contact->email1; ?></a></p>

        <?php if ($contact->email2 != '') : ?>
          <p><i class="fas fa-envelope mr-3"></i><a href="mailto:<?php echo $contact->email2; ?>" class="special_href">
              <?php echo $contact->email2; ?></a></p>
        <?php endif; ?>
        <p><i class="fas fa-phone mr-3"></i><a href="tel:<?php echo $contact->phone1; ?>" class="special_href">
            <?php echo $contact->phone1; ?></a></p>
        <?php if ($contact->phone2 != '') : ?>
          <p> <i class="fas fa-phone mr-3"></i><a href="tel:<?php echo $contact->phone2; ?>" class="special_href">
              <?php echo $contact->phone2; ?></a></p>
        <?php endif; ?>
      </div>
    </div>
  </div>
  <div class="footer-copyright text-left py-3 bg-white text-dark px-5">
    © <?= date('Y'); ?> Copyright:
    <a href="<?= base_url() ?>" class="text-dark"> <?= $contact->company ?></a> | <a href="<?php echo base_url(); ?>uploads/<?php echo $settings->privace; ?>"> Polityka prywatności</a>
    <span class="text-right float-right font-regular">
      <?php if ($settings->fb_link != '') : ?>
        <a href="<?php echo $settings->fb_link; ?>" class="special_href"><i class="fab fa-facebook-f"></i></a>
      <?php endif; ?>
      <?php if ($settings->tw_link != '') : ?>
        <a href="<?php echo $settings->tw_link; ?>" class="special_href px-3"><i class="fab fa-twitter"></i></a>
      <?php endif; ?>
      <?php if ($settings->inst_link != '') : ?>
        <a href="<?php echo $settings->inst_link; ?>" class="special_href pr-3"><i class="fab fa-instagram"></i></a>
      <?php endif; ?>
      <?php if ($settings->yt_link != '') : ?>
        <a href="<?php echo $settings->yt_link; ?>" class="special_href"><i class="fab fa-youtube"></i></a>
      <?php endif; ?>
    </span>
  </div>
</footer>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/front/js/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/front/js/popper.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/front/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/front/js/mdb.min.js"></script>
<!-- <script type="text/javascript" src="<?php echo base_url(); ?>assets/front/dist/owl.carousel.min.js"></script> -->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/front/js/initializator.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/front/js/script.js"></script>
<script src="<?php echo base_url(); ?>assets/front/lib/AlloyFinger/alloy_finger.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/front/dist/js/lightbox.js"></script>
<script type="text/javascript">
  function hasWebP() {
    var rv = $.Deferred(),
      img = new Image();
    img.onload = function() {
      rv.resolve();
    };
    img.onerror = function() {
      rv.reject();
    };
    img.src = "https://www.gstatic.com/webp/gallery/1.webp";
    return rv.promise();
  }
  hasWebP().then(function() {
    nowebp = document.getElementsByClassName('no-webp');
    for (i = 0; i < nowebp.length; i++) {
      nowebp[i].style.display = "none";
    }
    console.log("Hooray!!  WebP is enabled.  Things will be wonderful now.");
  }, function() {

    webp = document.getElementsByClassName('webp');
    for (i = 0; i < webp.length; i++) {
      webp[i].style.display = "none";
    }
    nowebp = document.getElementsByClassName('no-webp');
    for (i = 0; i < nowebp.length; i++) {
      nowebp[i].style.display = "block";
    }
    console.log("Note: your browser does not support the new Google WebP format. Please remain where you are while our support team locates you to begin the reeducation process.");
  });
</script>
<script>
  window.addEventListener("load", function() {
    window.cookieconsent.initialise({
      "palette": {
        "popup": {
          "background": "<?php echo $settings->first_color; ?>",
          "text": "#fff"
        },
        "button": {
          "background": "#000",
          "text": "#fff"
        }
      },
      "type": "opt-out",
      "content": {
        "message": "Nasza strona internetowa korzysta z plików cookie. Dzięki temu możemy zapewnić naszym użytkownikom satysfakcjonujące wrażenia z przeglądania naszej witryny i jej prawidłowe funkcjonowanie.",
        "dismiss": "Rozumiem",
        "deny": "",
        "allow": "Rozumiem",
        "link": "Czytaj więcej...",
        "href": "<?php echo base_url(); ?>uploads/<?php echo $settings->privace ?>"
      }
    })
  });
</script>
<?php if ($this->uri->segment(1) == 'kontakt') : ?>
  <script src="https://www.google.com/recaptcha/api.js?render=<?= $settings->captcha ?>" defer></script>
  <script defer>
    $('#contact-form').submit(function(event) {
      event.preventDefault();
      var email = $('#email').val();

      grecaptcha.execute('<?= $settings->captcha ?>', {
        action: 'mailer/send'
      }).then(function(token) {
        $('#contact-form').prepend('<input type="hidden" name="token" value="' + token + '">');
        $('#contact-form').prepend('<input type="hidden" name="secret_key" value="<?= $settings->captcha_secret ?>">');
        $('#contact-form').prepend('<input type="hidden" name="action" value="mailer/send">');
        $('#contact-form').unbind('submit').submit();
      });;
    });
  </script>
<?php endif; ?>
<script type="text/javascript">
  links = document.querySelectorAll("link");
  for (var i = links.length - 1; i >= 0; i--) {
    if (links[i].getAttribute('rel') == 'preload') {
      links[i].setAttribute("rel", "stylesheet");
    }
  }
</script>
</body>

</html>