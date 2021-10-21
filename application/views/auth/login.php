<!-- Title Page-->

<title>Login #TelyuCurhat</title>

<div class="page-wrapper">
    <div class="container">
        <div class="login-wrap">
            <div class="login-content">
                <div class="login-logo">
                    <a href="#">
                        <img src="<?= base_url('assets/'); ?>images/icon/logo-mini.png" class="icon-telkom">

                    </a>
                    <label class="jarak-tulisan-login"> Login</label>

                </div>
                <div class="login-form">
                    <?= $this->session->flashdata('message') ?>
                    <form method="post" action="<?= base_url('auth'); ?>">
                        <div class="form-group">
                            <label>Your Nim</label>
                            <input required  class="au-input au-input--full" type="text" id='nim' name="nim" placeholder="NIM" value="<?= set_value('nim'); ?>">
                            <small class='text-danger'><?= form_error('nim'); ?></small>
                        </div>

                        <div class="form-group">
                            <label>Password</label>
                            <input required  class="au-input au-input--full" type="password" id='password' name="password" placeholder="Password" value="<?= set_value('password'); ?>">
                            <small class='text-danger'><?= form_error('password'); ?></small>
                        </div>

                        <div class="login-checkbox">
                            <label class="text-move-right">
                                
                            </label>
                        </div>
                        <div class="social-button">
                            <button class="au-btn au-btn--block btn btn-danger m-b-20" type="submit">LOGIN</button>
                        </div>
                        <div class="social-login-content">

                            <div class="social-button">
                                <a href="<?= base_url('auth/register'); ?>" class="au-btn au-btn--block btn btn-secondary m-b-20"> Activate Account</a>
                            </div>
                        </div>
                    </form>


                </div>
            </div>
        </div>
    </div>
</div>

</div>