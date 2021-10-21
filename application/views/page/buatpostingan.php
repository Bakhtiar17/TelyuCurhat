<!-- Pertama Layout Buat Postingan -->
<section class="statistic">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <i class="fa fa-edit"></i>
                            <strong class="card-title pl-2">Buat Postingan </strong>
                        </div>
                        <div class="card-body card-block">
                            <form action="<?= base_url('index.php/') ?>user/insertStatus" method="post" enctype="multipart/form-data" class="form-horizontal">
                                <input type="hidden" name="nim" value="<?= $this->session->userdata('nim'); ?>">
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="judul_status" class=" form-control-label">Judul Curahan Hati</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="judul_status" required name="judul_status" placeholder="Judul Curahan Hati" class="form-control">
                                    </div>
                                </div>


                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="status" class=" form-control-label">Isi Curahan Hati</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <textarea rows="5" cols="40" id="status" required name="status" placeholder="Curahan Hati" class="form-control"></textarea>
                                    </div>
                                </div>

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-danger btn-sm">
                                        <i class="fa fa-send"></i>&nbsp; Posting
                                    </button>
                                </div>
                            </form>
                        </div>

                    </div>

                </div>

            </div>
        </div>

         <br><br><br><br><br>