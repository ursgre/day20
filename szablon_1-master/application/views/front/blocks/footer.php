    <footer class="main-footer elegant-color-dark mt-0 p-3">
        <div class="container">
            <div class="row">
                <div class="main-footer__col col-lg-4">
                    <a href="<?= base_url() ?>" class="mx-auto">
                        <img class="main-footer__logo icon_filtr mb-0" src="<?= images() . $settings->logo; ?>"
                            alt="logo adawards" height="43px">
                    </a>


                </div>
                <div class="main-footer__col col-lg-8">
                    <ul class="main-footer__list mb-0">
                        <?php foreach ($subpages as $subpage) : ?>
                        <li class="main-footer__list-item">
                            <a href="<?= base_url() . $subpage->page ?>"
                                class="main-footer__link"><?= $subpage->title; ?></a>
                        </li>
                        <?php endforeach; ?>
                    </ul>

                </div>
            </div>
        </div>
    </footer>
    <footer class="copyrights elegant-color">
        <div class="copyrights__container container">
            <span> <?= date('Y'); ?> © Ad Awards Wszystkie prawa zastrzeżone</span>
            <span>Projekt i wdrożenie <a href="https://agencjamedialna.pro/"
                    class="copyrights__link">AdAwards</a></span>
        </div>
    </footer>

    </main>

    <script type="text/javascript" src="<?= assets(); ?>js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="<?= assets(); ?>js/popper.min.js"></script>
    <script type="text/javascript" src="<?= assets(); ?>js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?= assets(); ?>js/mdb.min.js"></script>
    <script type="text/javascript" src="<?= assets(); ?>dist/owl.carousel.min.js"></script>
    <script type="text/javascript" src="<?= assets(); ?>js/initializator.js"></script>
    <script type="text/javascript" src="<?= assets(); ?>lib/AlloyFinger/alloy_finger.min.js"></script>
    <script type="text/javascript" src="<?= assets(); ?>js/lc_lightbox.lite.js"></script>
    <script type="text/javascript" src="<?= assets(); ?>js/lightbox.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/vanilla-lazyload@12.4.0/dist/lazyload.min.js"></script>
    <script type="text/javascript">
document.querySelector('#lang_select').addEventListener('change', () => {
    var uri = '<?= $this->uri->uri_string() ?>';
    var uri = uri.split('/');
    var redirect = '';
    for (var i = 0; i < uri.length; i++) {
        redirect += uri[i] + '_';
    }
    var base_url = '<?= base_url(); ?>';
    document.querySelector('#redirect_input').value = redirect;
    document.querySelector('#form_lang').action = base_url + 'home/set_lang/';
    document.querySelector('#form_lang').submit();
});
var lazyLoadInstance = new LazyLoad({
    elements_selector: ".lazy"
    // ... more custom settings?
});

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
    console.log(
        "Note: your browser does not support the new Google WebP format. Please remain where you are while our support team locates you to begin the reeducation process."
    );
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
        $('#contact-form').prepend(
            '<input type="hidden" name="secret_key" value="<?= $settings->captcha_secret ?>">');
        $('#contact-form').prepend('<input type="hidden" name="action" value="mailer/send">');
        $('#contact-form').unbind('submit').submit();
    });;
});
    </script>
    <?php endif; ?>

    <script>
window.addEventListener("load", function() {
    window.cookieconsent.initialise({
        "palette": {
            "popup": {
                "background": "<?= $settings->first_color ?>",
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
    })
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
    <script>
new WOW().init();
    </script>

    <?= $scripts->js ?>
    </body>

    </html>