<div class="container">
  <section class="my-5 top_margin">
    <h2 class="font-weight-bold text-center header__text"><?= $current_page->subtitle ?></h2>
    <div class="text-center w-responsive mx-auto mb-5"><?= $current_page->description ?></div>
    <?php foreach ($blog as $key):?>
    <div class="row">
      <div class="col-lg-5">
        <a  href="<?= base_url(); ?>wpis/<?= $key->id.'/'.slug($key->title); ?>">
          <div class="view overlay rounded z-depth-2 mb-lg-0 mb-4">
            <picture class="">
              <source data-srcset="<?= base_url().'uploads/'.$key->photo ?>.webp" type="image/webp" class="card-img-top">
              <source data-srcset="<?= base_url().'uploads/'.$key->photo ?>" type="image/jpeg" class="card-img-top">
              <img data-src="<?= base_url().'uploads/'.$key->photo ?>" alt="<?= $key->alt ?>" class="card-img-top h-100 lazy ">
            </picture>
            <div class="mask rgba-white-slight blog-list-photo"></div>
          </div>
        </a>
      </div>
      <div class="col-lg-7">
        <h3 class="font-weight-bold mb-3"><strong><?= $key->title ?></strong></h3>
        <p><?= substr($key->description, 0,230); ?>...</p>
        <p>dodał <a><strong>Moderator</strong></a>, <?= date('Y-m-d',strtotime($key->created)); ?></p>
        <a title="Czytaj więcej o <?= $key->title ?>" target="_blank" href="<?= base_url(); ?>wpis/<?= $key->id.'/'.slug($key->title); ?>" class="btn button-dark btn-md my__btn__dark">Czytaj więcej <i class="fas fa-angle-right"></i></a>
      </div>
    </div>
    <hr class="my-5">
    <?php endforeach; ?>
    
  </section>
</div>