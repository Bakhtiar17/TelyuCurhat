<!-- Pertama Layout Postingan -->
<section class="statistic">
    <?php foreach ($status as $st) { ?>
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="au-card au-card--no-shadow au-card--no-pad m-b-40 au-card--border">
                            <div class="au-card-title">
                                <h4>
                                    <?= $st['judul_status'] ?>
                                </h4>
                                
                            </div>
                            <div class="card-header user-header alt bg-white">
                                <div class="au-task__title">

                                    <div class="media">
                                        <a href="#">
                                            <img class="align-self-center rounded-circle mr-3" style="width:55px; height:55px;" alt="" src="<?= base_url('assets/') ?>images/icon/user_gray.png">
                                        </a>
                                        <div class="media-body">
                                            <h3><?= $st['nama'] ?></h3>
                                            <p><?= date('d F Y', $st['date']) ?></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="au-task__title">
                                    <p><?= $st['status'] ?></p>
                                </div>
                            <?php } ?>




                            <?php foreach ($koment as $k) { ?>
                                <div class="card-header user-header alt bg-white">
                                    <div class="au-task__title">
                                        <div class="media">
                                            <a href="#">

                                                <img class="align-self-center rounded-circle mr-3" style="width:55px; height:55px;" alt="" src="<?= base_url('assets/') ?>images/icon/user_gray.png">
                                            </a>
                                            <div class="media-body">
                                                <h3><?= $k['nama'] ?> <button type="button" class="close" data-dismiss="alert" aria-label="Close" data-toggle="tooltip" data-placement="top" title="Hapus Komentar"> <a style="color:black" href="<?= base_url("/user/hapusComment/" . $k['id_komentar']) ?>"><i class='zmdi zmdi-delete'></i></a></button> </h3>
                                                <p><?= date('d F Y', $k['date']) ?></p>


                                            </div>
                                        </div>
                                    </div>
                                    <div class="au-task__title">
                                        <p><?= $k['komentar'] ?></p>
                                    </div>
                                </div>
                            <?php } ?>
                            <?php foreach ($status as $s) { ?>
                                <div class="au-chat-textfield">
                                    <form class="au-form-icon" action="<?= base_url('user/insertComment/') . $s['id_status'] ?>" method="post">
                                    <?php } ?>
                                    <input type="hidden" name="nim" value="<?= $this->session->userdata('nim'); ?>">
                                    <input class="au-input au-input--full au-input--h65" id="comment" name="comment" type="text" placeholder="Ketik Komentar">
                                    <button type="submit" class=" au-input-icon"> <i class='zmdi zmdi-arrow-right'></i> </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
<br><br><br><br><br>