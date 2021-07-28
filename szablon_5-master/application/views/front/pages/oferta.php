<section class="icon_section padding_section">
  <h3 class="text-center mb-4 section_title"></i><?php echo $services_header->title; ?></h3>
  <div class="separate_line"></div>
  <div class="container">
    <div class="row">
    <?php $i=0; foreach ($offer as $row):?>
      <div class="col-md-4">
          <div class="d-flex p-3 bg_flex">
            <div class="icon_flex">
            <picture>
              <source srcset="<?= base_url().'uploads/'.$row->photo ?>.webp" type="image/webp"  class="service_icon">
              <source srcset="<?= base_url().'uploads/'.$row->photo ?>" type="image/jpeg"  class="service_icon"> 
              <img src="<?= base_url().'uploads/'.$row->photo ?>" alt="<?= $row->alt ?>"  class="service_icon">
            </picture>
            </div>
            <div class="title_flex">
              <h5 class="mb-3 section_small_title"><?php echo $row->title; ?></h5>
              <div class="font-small"><?php echo $row->description; ?></div>
            </div>
          </div>
      </div>
    <?php $i++; endforeach; ?> 
    </div>
  </div>
  </div>
</section>
