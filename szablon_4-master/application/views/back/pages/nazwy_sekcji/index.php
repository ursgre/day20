    <!-- ########## START: MAIN PANEL ########## -->
    <div class="br-mainpanel">
      <div class="pd-30">
        <h4 class="tx-gray-800 mg-b-5"><?php echo ucfirst(str_replace('_', ' ', $this->uri->segment(2))); ?></h4>
        <p class="mg-b-0"><?php echo subtitle(); ?></p>
        <hr>
      </div><!-- d-flex -->
      <div class="br-pagebody mg-t-0 pd-x-30">
        <?php if(isset($_SESSION['flashdata'])): ?>
        <div id="alert-box"><?php echo $_SESSION['flashdata']; ?></div>
        <?php endif; ?>
          <div class="table-wrapper">
            <table id="datatable1" class="table display responsive nowrap">
              <thead>
                <tr>
                  <th class="wd-5p align-top">L.p.</th>
                  <th class="wd-10p align-top">Włączony</th>
                  <th class="wd-20p align-top">Sekcja</th>
                  <th class="wd-35p align-top">Tytuł</th>
                  <th class="wd-30p text-right no-sort">
                  </th>
                </tr>
              </thead>
              <tbody>
                <?php $i=0; foreach ($rows as $value): $i++; ?>
                <tr>
                  <td class="align-middle"><?php echo $i; ?>.</td>
                  <td class="align-middle">
                    <label class="ckbox">
                        <input type="checkbox" id="check<?php echo $value->id; ?>" onchange="active(<?php echo $value->id; ?>, '<?php echo $this->uri->segment(2); ?>');" <?php if($value->active == 1){echo 'checked';} ?>>
                        <span></span>
                      </label>
                  </td>
                  <td class="align-middle">Sekcja <?php echo $i; ?></td>
                  <td class="align-middle"><?php echo substr($value->title,0, 70); if(strlen($value->title) > 70) echo '...' ?></td>
                  <td class="text-right">
                      <a href="<?php echo base_url(); ?>panel/<?php echo $this->uri->segment(2); ?>/form/update/<?php echo $value->id; ?>" class="btn btn-sm btn-info"><i class="icon ion-compose mg-r-10"></i> Edytuj</a>
                  </td>
                </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div><!-- table-wrapper -->

    <script type="text/javascript">
      function active(id, table) {
        value = document.getElementById('check'+id).checked;
        if(value == true) { value = 1;} else {value = 0;}
        $.ajax({  
             type: "post", 
             url:"<?php echo base_url(); ?>panel/<?php echo $this->uri->segment(2); ?>/active", 
             data: {id:id, value:value, table:table}, 
             cache: false,
             beforeSend:function(html){
               console.log(html);
             },
             complete:function(html){
               console.log(html);
             }  
        });  
      }
    </script>