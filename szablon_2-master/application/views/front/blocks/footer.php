    <footer class="page-footer font-small pt-4">

      <div class="container text-center text-md-left">

        <div class="row text-center text-md-left mt-3 pb-3">

          <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
            <a href="<?= base_url() ?>"><h6 class="text-uppercase mb-4 font-weight-bold"><?= $contact->company; ?></h6></a>
            <p><?= $settings->description; ?>
            </p>
          </div>

          <hr class="w-100 clearfix d-md-none">

          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
            <a href="<?= base_url() ?>oferta"><h6 class="text-uppercase mb-4 font-weight-bold">Oferta</h6></a>
            <?php foreach ($oferta as $key):?>
	            <p>
	              <a href="<?= base_url() ?>oferta-szczegoly/<?= $key->id.'/'.slug($key->title) ?>"><?= $key->title; ?></a>
	            </p>
        	<?php endforeach; ?>
          </div>

          <hr class="w-100 clearfix d-md-none">

          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
            <h6 class="text-uppercase mb-4 font-weight-bold">Przydatne linki</h6>
            <?php foreach ($subpages as $page):?>
              <p>
                <a href="<?= base_url(). $page->page ?>"><?= $page->title ?></a>
              </p>
            <?php endforeach; ?>
          </div>

          <hr class="w-100 clearfix d-md-none">

          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
            <a href="<?= base_url() ?>kontakt"><h6 class="text-uppercase mb-4 font-weight-bold">Kontakt</h6></a>
            <a href="https://www.google.com/maps/place/<?= $contact->address ?>,+<?= $contact->zip_code ?>+<?= $contact->city; ?>/ ">
              <p>
                <i class="fas fa-home mr-3"></i><?= $contact->zip_code; ?> <?= $contact->city; ?>, <?= $contact->address; ?>
              </p>
            </a>
            <a href="mailto: <?= $contact->email1; ?>">
              <p>
                <i class="fas fa-envelope mr-3"></i><?= $contact->email1; ?>
              </p>
            </a>
            <a href="tel: <?= $contact->phone1; ?>">
              <p>
                <i class="fas fa-phone mr-3"></i><?= $contact->phone1; ?>
              </p>
            </a>
          </div>

        </div>

        <hr>

        <div class="row d-flex align-items-center">

          <div class="col-md-7 col-lg-8">

            <p class="text-center text-md-left">© <?= date('Y'); ?> Copyright:
              <a href="https://agencjamedialna.pro/">
                <strong>Ad Awards</strong>
              </a>
            </p>

          </div>

          <div class="col-md-5 col-lg-4 ml-lg-0">

            <div class="text-center text-md-right">
              <ul class="list-unstyled list-inline">
          		<?php if($settings->fb_link): ?>
                <li class="list-inline-item">
                  <a class="btn-floating btn-sm rgba-white-slight mx-1" href="<?= $settings->fb_link ?>">
                    <i class="fab fa-facebook-f"></i>
                  </a>
                </li>
          		<?php endif; if($settings->tw_link): ?>
                <li class="list-inline-item">
                  <a class="btn-floating btn-sm rgba-white-slight mx-1" href="<?= $settings->tw_link ?>">
                    <i class="fab fa-twitter"></i>
                  </a>
                </li>
          		<?php endif; if($settings->inst_link): ?>
                <li class="list-inline-item">
                  <a class="btn-floating btn-sm rgba-white-slight mx-1" href="<?= $settings->inst_link ?>">
                    <i class="fab fa-instagram"></i>
                  </a>
                </li>
            	<?php endif; ?>
              </ul>
            </div>

          </div>

        </div>

      </div>

    </footer>

  <script type="text/javascript" src="<?= base_url() ?>assets/front/js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="<?= base_url() ?>assets/front/js/popper.min.js"></script>
  <script type="text/javascript" src="<?= base_url() ?>assets/front/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="<?= base_url() ?>assets/front/js/mdb.min.js"></script>
  <!-- <script type="text/javascript" src="<?= base_url() ?>assets/front/dist/owl.carousel.min.js"></script> -->
  <script type="text/javascript" src="<?= base_url() ?>assets/front/js/initializator.js"></script>
  <script src="<?= base_url() ?>assets/front/lib/AlloyFinger/alloy_finger.min.js" type="text/javascript"></script>
  <script src="<?= base_url() ?>assets/front/js/lc_lightbox.lite.js" type="text/javascript"></script>
  <script src="https://cdn.jsdelivr.net/npm/vanilla-lazyload@17.1.2/dist/lazyload.min.js"></script>

  <script>
    window.addEventListener("load", function(){
    window.cookieconsent.initialise({
      "palette": {
        "popup": {
          "background": "#1C2331!important",
          "text": "#fff"
        },
        "button": {
          "background": "#eee",
          "text": "#1C2331!important"
        }
      },
      "type": "opt-out",
      "content": {
        "message": "Nasza strona internetowa korzysta z plików cookie. Dzięki temu możemy zapewnić naszym użytkownikom satysfakcjonujące wrażenia z przeglądania naszej witryny i jej prawidłowe funkcjonowanie.",
        "dismiss": "Rozumiem",
        "deny": "",
        "allow": "Rozumiem",
        "link": "Czytaj więcej...",
        "href": "<?php echo base_url(); ?>uploads/<?= $settings->privace;  ?>"
      }
    })});
  </script>
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
    var lazyLoadInstance = new LazyLoad({
  // Your custom settings go here
});
  </script>
  <?php if($this->uri->segment(1) == ''): ?>
  <script type="text/javascript">
    var lFollowX = 0,
    lFollowY = 0,
    x = 0,
    y = 0,
    friction = 1 / 30;

      function moveBackground() {
        x += (lFollowX - x) * friction;
        y += (lFollowY - y) * friction;
        
        translate = 'translate(' + x + 'px, ' + y + 'px) scale(1.1)';

        $('.moving__photo').css({
          '-webit-transform': translate,
          '-moz-transform': translate,
          'transform': translate
        });

        window.requestAnimationFrame(moveBackground);
      }

      $(".view").on('mousemove click', function(e) {

        var lMouseX = Math.max(-100, Math.min(100, $(window).width() / 6 - e.clientX));
        var lMouseY = Math.max(-100, Math.min(100, $(window).height() / 6 - e.clientY));
        lFollowX = (40 * lMouseX) / 100; // 100 : 12 = lMouxeX : lFollow
        lFollowY = (30 * lMouseY) / 100;

      });

      moveBackground();
  </script>
  <?php endif; ?>
  <?php if($this->uri->segment(1) == 'kontakt'): ?>
    <script src="https://www.google.com/recaptcha/api.js?render=<?= $settings->captcha ?>" defer></script>
    <script defer>

    $('#contact-form').submit(function(event) {
        event.preventDefault();
        var email = $('#email').val();

               grecaptcha.execute('<?= $settings->captcha ?>', {action: 'mailer/send'}).then(function(token) {
                   $('#contact-form').prepend('<input type="hidden" name="token" value="' + token + '">');
                   $('#contact-form').prepend('<input type="hidden" name="secret_key" value="<?= $settings->captcha_secret ?>">');
                   $('#contact-form').prepend('<input type="hidden" name="action" value="mailer/send">');
                   $('#contact-form').unbind('submit').submit();
               });;
           });
    </script>
    <script type="text/javascript">
      links = document.querySelectorAll("link");
      for (var i = links.length - 1; i >= 0; i--) {
          if (links[i].getAttribute('rel') == 'preload') {
              links[i].setAttribute("rel", "stylesheet");
          }
      }
  </script>
  <?php endif; ?>
  
  <script>
    new WOW().init();
  </script>
  </body>

  </html>