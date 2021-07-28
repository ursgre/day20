    <!-- ########## START: MAIN PANEL ########## -->
    <div class="br-mainpanel">
        <div class="pd-30">
            <h4 class="tx-gray-800 mg-b-5"><?php echo ucfirst(str_replace('_', ' ', $this->uri->segment(2))); ?></h4>
            <p class="mg-b-0"><?php echo subtitle(); ?></p>
            <hr>
        </div>

        <div class="br-pagebody mg-t-0 pd-x-30">
            <?php if (isset($_SESSION['flashdata'])) : ?>
            <div id="alert-box"><?php echo $_SESSION['flashdata']; ?></div>
            <?php endif; ?>

            <form class="form-layout form-layout-2"
                action="<?php echo base_url(); ?>panel/<?php echo $this->uri->segment(2); ?>/action/update/seo/<?php echo @$value->id; ?>"
                method="post" enctype="multipart/form-data">

                <div class="row no-gutters">
                    <div class="col-md-12">

                        <div class="row">

                            <div class="col-md-12 pr-0">
                                <div class="form-group bd-b-0-force">
                                    <label class="form-control-label">Skrypty css:</label>
                                    <textarea rows="30" class="form-control"
                                        name="css"><?php echo @$value->css; ?></textarea>
                                </div>
                            </div>
                            <div class="col-md-12 pr-0">
                                <div class="form-group bd-b-0-force">
                                    <label class="form-control-label">Skrypty js (z tagami):</label>
                                    <textarea rows="30" class="form-control"
                                        name="js"><?php echo @$value->js; ?></textarea>
                                </div>
                            </div>
                            <div class="col-md-12 pr-0">
                                <div class="form-group bd-b-0-force">
                                    <label class="form-control-label">Skrypt Google Analytics:</label>
                                    <textarea rows="10" class="form-control"
                                        name="analytics"><?php echo @$value->analytics; ?></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 pr-0">
                                <div class="form-layout-footer bd pd-20">
                                    <button class="btn btn-info" type="submit">Zapisz</button>
                                    <button class="btn btn-secondary"
                                        onclick="window.history.go(-1); return false;">Anuluj</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </form>