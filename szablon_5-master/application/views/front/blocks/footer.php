<footer class="footer padding_section">
  <div class="container footer_padding">
    <div class="row">
      <div class="col-md-12">
        <div class="row">
          <div class="col-lg-3 col-md-12">
            <p class="text-white mb-3 mt-3">O firmie</p>
            <div class="text-white"><?php echo $settings->description; ?></div>
          </div>
          <div class="col-lg-3 col-sm-6 mt-4 mt-sm-0">
            <p class="text-white mb-3 mt-3">Przydatne linki</p>
            <a href="<?php echo base_url(); ?>o_firmie" class="footer_href"><?php echo $about_nav->title; ?></a><br>
            <a href="<?php echo base_url(); ?>blog" class="footer_href"><?php echo $blog_nav->title; ?></a><br>
            <a href="<?php echo base_url(); ?>uslugi" class="footer_href"><?php echo $services_nav->title; ?></a><br>
            <a href="<?php echo base_url(); ?>galeria" class="footer_href"><?php echo $gallery_nav->title; ?></a><br>
            <a href="<?php echo base_url(); ?>kontakt" class="footer_href"><?php echo $contact_nav->title; ?></a>
          </div>
          <div class="col-lg-3 col-sm-6 mt-4 mt-sm-0">
            <p class="text-white mb-3 mt-3">Najnowsze wpisy na blogu</p>
            <?php $i=0; foreach ($blog as $row):?>
            <?php if($row->id < 4): ?>
              <p class="text-muted"><i><?php echo $row->author; ?></i></p>
              <p class="text-white"><a href="<?php echo base_url(); ?>wpis/<?php echo $row->id; ?>" class="text-white"><?php echo $row->title; ?></a></p>
            <?php endif;?>
            <?php $i++; endforeach; ?>
          </div>
          <div class="col-lg-3 col-sm-6 mt-4 mt-sm-0">
            <p class="text-white mb-3 mt-3">Kontakt</p>
            <p class="text-muted">Adres: <a class="text-muted" target="_blank" href="https://www.google.com/maps/place/<?= $contact->address ?>,+<?= $contact->zip_code ?>+<?= $contact->city; ?>"><?php echo $contact->address; ?> <br> <?php echo $contact->city; ?>, <?php echo $contact->zip_code; ?></a></p>
            <p class="text-muted">Telefon: <a href="tel:<?php echo $contact->phone1; ?>" class="text-muted">
              <?php echo $contact->label1; ?><?php echo $contact->phone1; ?></a>
              <?php if($contact->phone2 != ''): ?>
                ;<a href="tel:<?= $contact->phone2 ?>"><?= $contact->phone2 ?></a>
              <?php endif; ?>
            </p>
            <p class="text-muted">E-mail: <a href="mailto:<?php echo $contact->email1; ?>" class="text-muted"><?php echo $contact->email1; ?></a></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>
<div class="footer_foot">
  <div class="row">
    <div class="col-md-8 text-muted mb-3 mb-md-0">AD Awards <?= date('Y'); ?>. All Rights Reserved.Terms of Use and Privacy Policy</div>
    <div class="col-md-4 text-right text-muted">
      <a href="<?php echo $settings->fb_link; ?>" class="footer_icon"><i class="fab fa-facebook-f"></i></a>
      <a href="<?php echo $settings->tw_link; ?>" class="footer_icon px-3"><i class="fab fa-twitter"></i></a>
      <a href="<?php echo $settings->inst_link; ?>" class="footer_icon pr-3"><i class="fab fa-instagram"></i></a>
      <a href="<?php echo $settings->yt_link; ?>" class="footer_icon"><i class="fab fa-youtube"></i></a>
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
<script src="https://cdn.jsdelivr.net/npm/vanilla-lazyload@17.1.2/dist/lazyload.min.js"></script>
<script src="<?php echo base_url(); ?>assets/front/lib/AlloyFinger/alloy_finger.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/front/js/cookies.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/front/dist/js/lightbox.js"></script>

<script>
  var lazyLoadInstance = new LazyLoad({
  // Your custom settings go here
});
  window.addEventListener("load", function(){
    window.cookieconsent.initialise({
      "palette": {
        "popup": {
          "background": "#000",
          "text": "#fff"
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

  <script type="text/javascript">
    $(document).ready(function() {
      var NavY = $('#navbar').offset().top; 
      var stickyNav = function() {
        var ScrollY = $(window).scrollTop();
        if (ScrollY > NavY) { 
          $('#navbar').addClass('sticky');
        } else {
          $('#navbar').removeClass('sticky'); 
        }
      };
      stickyNav();
      $(window).scroll(function() {
        stickyNav();
      });
    });

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
  </script>
</body>

</html>