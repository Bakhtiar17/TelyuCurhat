<!-- Pertama Layout Postingan -->
<?php foreach ($profile as $p) { ?>
    <section class="statistic">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <i class="fa fa-user"></i>
                                <strong class="card-title pl-2">Profile </strong>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close" data-toggle="tooltip" data-placement="top" title="Edit Profil"><a style="color:black"  href="<?= base_url() ?>/user/vieweditprofile"><i class='zmdi zmdi-edit'></i></a></button>
                            </div>
                            <div class="card-body">
                                <div class="mx-auto d-block">
                                    <img class="rounded-circle mx-auto d-block" src="<?= base_url('assets/') ?>images/icon/user_gray.png" style="width:10%;">
                                    <h5 class="text-sm-center mt-2 mb-1"><?= $p['nama'] ?></h5>
                                    <div class="location text-sm-center"><?= $p['nim'] ?></div>
                                    <div class="location text-sm-center">Telkom University</div>
                                </div>
                                <hr>
                                <div class="card-text text-sm-center">
                                    <h5 class="text-sm-center mt-2 mb-1">Postingan Saya</h5>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

    </section>
<?php } ?>
<!-- Akhir Layout Postingan -->

<?php foreach ($myStatus as $mys) { ?>
    <!-- Pertama Layout Postingan -->
    <section class="statistic">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="au-card au-card--no-shadow au-card--no-pad m-b-40 au-card--border">
                            <div class="au-card-title">
                                <h4>
                                    <?= $mys['judul_status'] ?>
                                </h4>
                                <button class="au-btn-plus">
                                    <div class="header-button-item js-item-menu" style="padding: 50%;">
                                        <i class="zmdi zmdi-more-vert"></i>
                                        <div class="setting-dropdown js-dropdown">
                                            <div class="account-dropdown__body">
                                                <div class="account-dropdown__item">
                                                    <a href="<?= base_url('user/viewEditPost/') . $mys['id_status'] ?>">Edit</a>
                                                </div>

                                                <div class="account-dropdown__item">
                                                    <a href="<?= base_url('user/hapusPos/') . $mys['id_status'] ?>">Hapus</a>
                                                </div>



                                            </div>

                                        </div>
                                    </div>
                                </button>
                            </div>
                            <div class="card-header user-header alt bg-white">
                                <div class="au-task__title">

                                    <div class="media">
                                        <a href="#">
                                            <img class="align-self-center rounded-circle mr-3" style="width:55px; height:55px;" alt="" src="<?= base_url('assets/') ?>images/icon/user_gray.png">
                                        </a>
                                        <div class="media-body">
                                            <h3><?= $mys['nama'] ?></h3>
                                            <p><?= date('d F Y', $mys['date']) ?></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="au-task__title">
                                    <p><?= $mys['status'] ?></p>
                                </div>

                                <div class="au-task__footer">
                                    <a href="<?= base_url('user/viewComment/') . $mys['id_status'] ?>" class="au-btn au-btn-load js-load-btn" style="color:  #fff;">Lihat Komentar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

    </section>
    <!-- Akhir Layout Postingan -->
<?php } ?> <br><br><br><br><br>