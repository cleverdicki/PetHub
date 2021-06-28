<?= $this->extend('layouts/template.php') ?>

<?= $this->section('content') ?>
<div class="register_main">
    <div class="register_form">
        <form class="register_register_form" action="" method="">
          <h1 class="register_h1">Daftar, yuk!</h1>
          <label class="register_label_title">Daftar dengan mudah</label>
          <div class="register_form_input">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="register_label">Nama Depan</label>
                                <input type="name" class="form-control input_register" id="first_name" name="last_name" placeholder="Aldi">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="register_label">Nama Belakang</label>
                                <input type="name" class="form-control input_register" id="last_name" name="first_name" placeholder="Radian">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group">
              <label class="register_label">E-mail</label>
              <input type="email" class="form-control" id="email" name="email" placeholder="aldi.radian@gmail.com">
            </div>
            <div class="form-group">
                <label class="register_label">Password</label>
                <input type="password" class="form-control input_register" id="password" name="password" placeholder="Password harus memiliki minimal 8 karakter">
            </div>
            <div class="form-group">
                <label class="register_label">Tanggal Lahir</label><br>
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-4">
                                <select class="register_date_dropdown" name="day" style="width: 140px;">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                    <option value="13">13</option>
                                    <option value="14">14</option>
                                    <option value="15">15</option>
                                    <option value="16">16</option>
                                    <option value="17">17</option>
                                    <option value="18">18</option>
                                    <option value="19">19</option>
                                    <option value="20">20</option>
                                    <option value="21">21</option>
                                    <option value="22">22</option>
                                    <option value="23">23</option>
                                    <option value="24">24</option>
                                    <option value="25">25</option>
                                    <option value="26">26</option>
                                    <option value="27">27</option>
                                    <option value="28">28</option>
                                    <option value="29">29</option>
                                    <option value="30">30</option>
                                    <option value="31">31</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <select class="register_date_dropdown" name="month" style="width: 140px;">
                                    <option value="Januari">Januari</option>
                                    <option value="Februari">Februari</option>
                                    <option value="Maret">Maret</option>
                                    <option value="April">April</option>
                                    <option value="Mei">Mei</option>
                                    <option value="Juni">Juni</option>
                                    <option value="Juli">Juli</option>
                                    <option value="Agustus">Agustus</option>
                                    <option value="September">September</option>
                                    <option value="Oktober">Oktober</option>
                                    <option value="November">November</option>
                                    <option value="Desember">Desember</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <select class="register_date_dropdown" name="year" style="width: 140px;">
                                    <option value="2021">2005</option>
                                    <option value="2022">2004</option>
                                    <option value="2023">2003</option>
                                    <option value="2024">2002</option>
                                    <option value="2025">2000</option>
                                    <option value="2026">1999</option>
                                    <option value="2027">1998</option>
                                    <option value="2028">1997</option>
                                    <option value="2029">1996</option>
                                    <option value="2030">1995</option>
                                    <option value="2030">1994</option>
                                    <option value="2030">1993</option>
                                    <option value="2030">1992</option>
                                    <option value="2030">1991</option>
                                    <option value="2030">1990</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-lg btn-block register_button">Daftarkan Saya</button>
            <div class="register_createAccount">
                <h6 class="h6_register mt-4 mb-4">Dengan menekan tombol di atas saya setuju dengan Ketentuan yang ada pada PetHub yang dapat dilihat <a href="#">disini</a></h6>
            </div>
          </div>
        </form>
    </div>
    <img style="float: right;" class="register_cat_image" src="<?= base_url("images/meongBobo.png") ?>" alt="meongBobo">
</div>
<?= $this->endsection() ?>