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
                        <a href="<?= base_url('/shop/animals') ?>" class="btn jumbotron_landingPage_btn">Mulai Belanja</a>
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
    <div class="landingPage_main">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-4">
                        <h3 class="landingPage_title">Yang Lagi Rame Dibeli!</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card landingPage_card mx-auto" style="width: 20rem;">
                            <img src="<?= base_url("images/ropeBall.png") ?>" class="landingPage_card-image" alt="imagesAnimals">
                            <div class="card-body">
                                <h3 class="landingPage_card-price">Rp 18.000</h3>
                                <h5 class="landingPage_card-title">Rope Ball Cat Toy</h5>
                                <p class="landingPage_card-text">Mainan bola kucing yang terbuat dari tali</p>
                                <a href="#" class="btn landingPage_card-btn">Beli Sekarang</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card landingPage_card mx-auto" style="width: 20rem;">
                            <img src="<?= base_url("images/food.png") ?>" class="landingPage_card-image" alt="imagesAnimals">
                            <div class="card-body">
                                <h3 class="landingPage_card-price">Rp 250.000</h3>
                                <h5 class="landingPage_card-title">Drools | 3KG</h5>
                                <p class="landingPage_card-text">Makanan anjing rasa telur ukuran 3kg</p>
                                <a href="#" class="btn landingPage_card-btn">Beli Sekarang</a>
                            </div>
                        </div>    
                    </div>
                    <div class="col-md-4">
                        <div class="card landingPage_card mx-auto" style="width: 20rem;">
                            <img src="<?= base_url("images/poodle.png") ?>" class="landingPage_card-image" alt="imagesAnimals">
                            <div class="card-body">
                                <h3 class="landingPage_card-price">Rp 4.000.000</h3>
                                <h5 class="landingPage_card-title">Black Poodle</h5>
                                <p class="landingPage_card-text">Anjing dengan jenis poodle yang imut</p>
                                <a href="#" class="btn landingPage_card-btn">Beli Sekarang</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endsection() ?>