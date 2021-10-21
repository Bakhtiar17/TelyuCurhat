    <!-- Title Page-->

    <title>Registrasi #TelyuCurhat</title>

    <div class="page-wrapper">
        <div class="container">
            <div class="login-wrap">
                <div class="login-content">
                    <div class="login-logo">
                        <a href="#">
                            <img src="<?= base_url('assets/'); ?>images/icon/logo-mini.png" class="icon-telkom">
                        </a>
                        <label class="jarak-tulisan-login"> Registrasi</label>
                    </div>

                    <div class="login-form">
                        <form method="post" action="<?= base_url('auth/register'); ?>">
                            <div class="form-group">
                                <label>Name</label>
                                <input class="au-input au-input--full" required type="text" id='email' name="email" placeholder="Name" value="<?= set_value('email'); ?>">
                                <small class='text-danger'><?= form_error('email'); ?></small>
                            </div>

                            <div class="form-group">
                                <label>Your Nim</label>
                                <input class="au-input au-input--full" required type="text" id='nim' name="nim" placeholder="NIM" value="<?= set_value('nim'); ?>">
                                <small class='text-danger'><?= form_error('nim'); ?></small>
                            </div>


                            <div class="form-group">
                                <label>Email</label>
                                <input class="au-input au-input--full" required type="text" id='email1' name="email1" placeholder="Email" value="<?= set_value('email1'); ?>">
                                <small class='text-danger'><?= form_error('email1'); ?></small>
                            </div>

                            <div class="form-group">
                                <label>Password</label>
                                <input class="au-input au-input--full" type="password" required id='password' name="password" placeholder="Password">
                                <small class='text-danger'><?= form_error('password'); ?></small>
                            </div>

                            <div class="form-group">
                                <label>Repeat Password</label>
                                <input class="au-input au-input--full" type="password" required id='repeatpassword' name="repeatpassword" placeholder="Repeat Password">
                            </div>
                            <div class="login-checkbox">

                                <label class="text-move-right">
                                </label>
                            </div>
                            <div class="social-login-content"></div>

                            <div class="social-button">
                                <button class="au-btn au-btn--block btn btn-danger m-b-20" type="submit">Activate Account</button>
                            </div>
                    </div>
                    <div class="text-center">
                        <a class="text-center" class="small" href="<?= base_url('auth'); ?>">Already have an account? Login!</a>
                    </div>
                    </form>


                </div>
            </div>
        </div>
    </div>
    </div>

    </div>