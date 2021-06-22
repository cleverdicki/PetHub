<?= $this->extend('layouts/template.php') ?>

<?= $this->section('content') ?>
<div class="main">
    <div class="jumbotron">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-6">
                    <div class="jumbotron_landingPage_left">
                        <h1 class="jumbotron_landingPage_h1">Beli Peliharaan dan Kebutuhannya Jadi Mudah</h1>
                        <p>Dengan PupHub, Kamu bisa mencari hewan peliharaan dan kebutuhannya dengan mudah, cepat, dan aman. Yuk belanja sekarang!</p>
                        <button type="button" class="btn jumbotron_landingPage_btn">Mulai Belanja</button>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="jumbotron_landingPage_right">
                        <img src="<?= base_url("images/gugukLandingPage.png") ?>" alt="gugukLandingPage" class="jumbotron_landingPage_imageRight">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endsection() ?>