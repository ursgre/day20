
<section class="padding_section">
  <h3 class="text-center mb-4 section_title"><?php echo $blog_header->title; ?></h3>
  <div class="separate_line"></div>
  <div class="container">
    <div class="row">
    <?php $i=0; foreach ($blog as $row):?>
    <?php if($row->id < 4): ?>
      <div class="col-md-4">
      <a href="<?php echo base_url(); ?>wpis/<?php echo $row->id; ?>"><div class="photo_recent" style="background-image: url('<?php echo base_url(); ?>uploads/<?php echo $row->photo; ?>')"></div></a>
        <div class="content_recent">
          <a href="<?php echo base_url(); ?>wpis/<?php echo $row->id; ?>"><h5 class="mb-3"><?php echo $row->title; ?></h5></a>
          <a href="<?php echo base_url(); ?>wpis/<?php echo $row->id; ?>">
            <p class="font-small mb-3 text-muted date_post">
              <span class="main-colorText"><?php echo $row->date; ?></span> <?php echo $row->author; ?>
            </p>
          </a>
          <div class="font-small"><?php echo substr("$row->description", 0, 100); ?>...</div>
        </div>
      </div>
      <?php endif;?>
      <?php $i++; endforeach; ?>
    </div>
  </div>
</section>