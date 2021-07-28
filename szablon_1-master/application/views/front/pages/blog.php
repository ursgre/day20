  <div class="container mt-4 mb-3">
    <div class="row">
      <div class="col-md-12 d-inline">
        <h4 class="text-uppercase"><a href="<?= base_url() ?>" class="first-color home-text font-weight-normal">HOME</a> > <span class="font-weight-bold first-color"><?= $current_page->title; ?></span></h4>
      </div>
    </div>
  </div>
  <section class="text-center">
    <div class="container mt-5">
          <!--Grid row-->
          <div class="row mb-4 wow fadeIn">
          <?php foreach ($blog as $key):?>
            <!--Grid column-->
            <div class="col-lg-4 col-md-12 mb-4 fadeIn">

              <!--Card-->
              <div class="card">

                <!--Card image-->
                <div class="view overlay">
                  <picture>
                    <source srcset="<?= base_url().'uploads/'.$key->photo ?>.webp" type="image/webp" class="card-img-top">
                    <source srcset="<?= base_url().'uploads/'.$key->photo ?>" type="image/jpeg" class="card-img-top"> 
                    <img src="<?= base_url().'uploads/'.$key->photo ?>" alt="<?= $key->alt ?>" class="card-img-top">
                  </picture>
                  <a href="<?= base_url(); ?>blog/<?= $key->id.'/'.slug($key->title); ?>" >
                    <div class="mask rgba-white-slight"></div>
                  </a>
                </div>
                <a class="first-color" href="<?= base_url(); ?>blog/<?= $key->id.'/'.slug($key->title); ?>">
                <!--Card content-->
                <div class="card-body">
                  <!--Title-->
                  <h4 class="card-title"><?= $key->title; ?></h4>
                  <!--Text-->
                  <p class="card-text first-color mb-3"><?= substr(strip_tags($key->description), 0,100); ?>...</p>
                  <a href="<?= base_url(); ?>blog/<?= $key->id.'/'.slug($key->title); ?>" 
                    class="contact_btn btn_blog">Czytaj więcej
                  </a>
                </div>
              </a>

              </div>
              <!--/.Card-->

            </div>
          <?php endforeach; ?>
            <!--Grid column-->
          </div>
           

          <!--Pagination
          <nav class="d-flex justify-content-center wow fadeIn">
            <ul class="pagination pg-blue">

             
              <li class="page-item disabled">
                <a class="page-link" href="#" aria-label="Previous">
                  <span aria-hidden="true">&laquo;</span>
                  <span class="sr-only">Previous</span>
                </a>
              </li>

              <li class="page-item active">
                <a class="page-link page-link-active" href="#">1
                  <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="page-item">
                <a class="page-link" href="#">2</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="#">3</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="#">4</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="#">5</a>
              </li>

              <li class="page-item">
                <a class="page-link" href="#" aria-label="Next">
                  <span aria-hidden="true">&raquo;</span>
                  <span class="sr-only">Next</span>
                </a>
              </li>
            </ul>
          </nav>
          Pagination-->
      </div>
    </section>