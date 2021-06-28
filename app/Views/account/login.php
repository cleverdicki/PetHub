<?= $this->extend('layouts/template.php') ?>

<?= $this->section('content') ?>
<div class="login_main">
    <div class="login_form">
        <form class="login_register_form" action="" method="">
          <h1 class="login_h1">Selamat Datang</h1>
          <div class="form_input_login">
            <div class="form-group">
              <label class="login_label">Login dengan email</label>
              <input type="email" class="form-control input_login" id="email" name="email" aria-describedby="emailHelp" placeholder="E-mail">
            </div>
            <div class="form-group">
              <input type="password" class="form-control input_login" id="password" name="password" placeholder="Password">
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <input type="checkbox" id="login_rememberMe" name="login_rememberMe">
                                        </div>
                                        <div class="col-md-10">
                                            <p class="login_rememberMe_text">Ingat saya</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="login_forgotPassword">
                                <a href="#" class="login_forgotPassword_text">Lupa Password?</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-lg btn-block login_button">Masuk</button>
            <div class="login_createAccount">
                <h6 class="h6_login mt-4">Or <a href="#" style="font-weight:bold;">Create</a> an account</h6>
            </div>
          </div>
        </form>
    </div>
</div>
<?= $this->endsection() ?>