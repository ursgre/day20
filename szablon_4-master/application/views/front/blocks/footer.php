<footer class="footer padding_section">
  <div class="footer_map d-md-flex"><iframe src="<?php echo $contact->map; ?>" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen=""></iframe></div>
  <div class="container-fluid footer_padding">
    <div class="row">
      <div class="col-md-8">
        <div class="row">
          <div class="col-lg-4 col-md-12">
            <a href="<?php echo base_url(); ?>">
              <img src="<?php echo base_url(); ?>uploads/<?php echo $settings->logo; ?>" alt="<?php echo $settings->meta_title; ?>" class="img-fluid">
            </a>
            <p class="text-muted mt-3"><?php echo $settings->description; ?></p>
          </div>
          <div class="col-lg-4 col-sm-6 mt-4 mt-sm-0">
            <p class="text-white mb-3">OFERTA</p>
            <?php $i=0; foreach (array_reverse($uslugi_active) as $v): $i++; if($i > 5){break;}?>
            <a href="<?php echo create_link('uslugi_wpis', $v->title, $v->id); ?>" class="footer_href"><?php echo $v->title; ?></a><br>
          <?php endforeach ?>
        </div>
        <div class="col-lg-4 col-sm-6 mt-4 mt-sm-0">
          <p class="text-white mb-3">KONTAKT</p>
          <p class="text-muted">Adres: <a class="text-muted" target="_blank" href="https://www.google.com/maps/place/<?= $contact->address ?>,+<?= $contact->zip_code ?>+<?= $contact->city; ?>"> <?php echo $contact->address; ?>,<br><?php echo $contact->city; ?> <?php echo $contact->zip_code; ?></a></p>
          <p class="text-muted">Telefony:
            <a href="tel:<?php echo $contact->phone1; ?>" class="text-muted"><?php echo $contact->phone1; ?></a>
            <?php if($contact->phone2 != ''): ?>
              ;
              <a href="tel:<?php echo $contact->phone2; ?>" class="text-muted"><?php echo $contact->phone2; ?></a>
            <?php endif; ?>
          </p>
          <p class="text-muted">E-maile:
            <a href="mailto:<?php echo $contact->email1; ?>" class="text-muted"><?php echo $contact->email1; ?></a>
            <?php if($contact->email2 != ''): ?>
              ;
              <a href="mailto:<?php echo $contact->email2; ?>" class="text-muted"><?php echo $contact->email2; ?></a>
            <?php endif; ?>
          </p>
        </div>
      </div>
    </div>
  </div>
</div>
</footer>
<div class="footer_foot">
  <div class="row">
    <div class="col-md-8 text-muted mb-3 mb-md-0">© <?= date('Y'); ?> Copyright: <a class="text-muted" href="https://www.agencjamedialna.pro/"><?= $contact->company ?></a> | <a href="<?php echo base_url(); ?>uploads/<?= $settings->privace; ?>" class="text-muted">Polityka prywatności</a></div>
    <div class="col-md-4 text-right text-muted">
      <?php if($settings->fb_link != ''): ?>
        <a href="<?php echo $settings->fb_link; ?>" class="footer_icon"><i class="fab fa-facebook-f"></i></a>
      <?php endif; ?>
      <?php if($settings->tw_link != ''): ?>
        <a href="<?php echo $settings->tw_link; ?>" class="footer_icon px-3"><i class="fab fa-twitter"></i></a>
      <?php endif; ?>
      <?php if($settings->inst_link != ''): ?>
        <a href="<?php echo $settings->inst_link; ?>" class="footer_icon pr-3"><i class="fab fa-instagram"></i></a>
      <?php endif; ?>
      <?php if($settings->yt_link != ''): ?>
        <a href="<?php echo $settings->yt_link; ?>" class="footer_icon"><i class="fab fa-youtube"></i></a>
      <?php endif; ?>
    </div>
  </div>
</div>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/front/js/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/front/js/popper.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/front/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/front/js/mdb.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/front/dist/owl.carousel.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/front/js/initializator.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/front/js/script.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/front/js/counter.js"></script>
<script src="<?php echo base_url(); ?>assets/front/lib/AlloyFinger/alloy_finger.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/front/js/cookies.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/front/dist/js/lightbox.js"></script>
<script type="text/javascript">
  function hasWebP() {
    var rv = $.Deferred(), img = new Image();
    img.onload = function() { rv.resolve(); };
    img.onerror = function() { rv.reject(); };
    img.src = "https://www.gstatic.com/webp/gallery/1.webp";
    return rv.promise();
  }
  hasWebP().then(function() {
    nowebp = document.getElementsByClassName('no-webp');
    for(i = 0; i < nowebp.length; i++) {
      nowebp[i].style.display = "none";
    }
    console.log("Hooray!!  WebP is enabled.  Things will be wonderful now.");
  }, function() {
    webp = document.getElementsByClassName('webp');
    for(i = 0; i < webp.length; i++) {
      webp[i].style.display = "none";
    }
    nowebp = document.getElementsByClassName('no-webp');
    for(i = 0; i < nowebp.length; i++) {
      nowebp[i].style.display = "block";
    }
    console.log("Note: your browser does not support the new Google WebP format. Please remain where you are while our support team locates you to begin the reeducation process.");
  });
</script>
<script type="text/javascript">
  if($(window).width() > 992) {
    $(document).ready(function () {
     var NavY = $('#navbar').offset().top;
     var stickyNav = function () {
      var ScrollY = $(window).scrollTop();
      if (ScrollY > NavY) {
       $('#navbar').addClass('sticky');
     } else {
       $('#navbar').removeClass('sticky');
     }
   };
   stickyNav();
   $(window).scroll(function () {
    stickyNav();
  });
 });
  }

  <?php if(in_array($this->uri->segment(1), ['', 'galeria', 'ofirmie'])): ?>
    $(document).ready(function() {
      var executed = false;
      var NavY = $('#counter_start').offset().top;
      var counterStart = function() {
        var ScrollY = $(window).scrollTop() + $(window).height();
        if (ScrollY > NavY && executed == false) {
          startWhen();
          executed = true;
        }
      };
      counterStart();
      $(window).scroll(function() {
        counterStart();
      });
    });
  <?php endif; ?>
</script>
<script>
  window.addEventListener("load", function(){
    window.cookieconsent.initialise({
      "palette": {
        "popup": {
          "background": "<?php echo $settings->first_color; ?>",
          "text": "<?php echo $settings->font_color_alt; ?>"
        },
        "button": {
          "background": "<?php echo $settings->second_color; ?>",
          "text": "<?php echo $settings->font_color; ?>"
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
    })});
  </script>
  <script>
    $('#contact-form').submit(function(event) {
      event.preventDefault();
      var email = $('#email').val();
      grecaptcha.ready(function() {
        grecaptcha.execute('<?= $settings->captcha ?>', {action: 'mailer/send'}).then(function(token) {
          $('#contact-form').prepend('<input type="hidden" name="secret_key" value="<?= $settings->captcha_secret ?>">');
          $('#contact-form').unbind('submit').submit();
        });;
      });
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