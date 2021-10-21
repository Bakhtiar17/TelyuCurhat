<!-- Pertama Layout Postingan -->
<?php foreach ($status as $st) { ?>
    <section class="statistic">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="au-card au-card--no-shadow au-card--no-pad m-b-40 au-card--border">
                            <div class="au-card-title">
                                <h4> <?= $st['judul_status'] ?></h4>
                              
                            </div>
                            <div class="card-header user-header alt bg-white">
                                <div class="au-task__title">

                                    <div class="media">
                                        <a href="#">
                                            <img class="align-self-center rounded-circle mr-3" style="width:55px; height:55px;" alt="" src="<?= base_url('assets/') ?>images/icon/user_gray.png">
                                        </a>
                                        <div class="media-body">
                                            <h3><?= $st['nama'] ?> </h3>
                                            <p><?= date('d F Y', $st['date']) ?></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="au-task__title">
                                    <p><?= $st['status'] ?> </p>
                                </div>

                                <div class="au-task__footer">
                                    <a href="<?= base_url('index.php/user/viewComment/') . $st['id_status'] ?>" class="au-btn au-btn-load js-load-btn" style="color:  #fff;">Komentar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php } ?> <br><br><br><br><br>