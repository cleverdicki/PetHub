<?= $this->extend('layouts/template.php') ?>

<?= $this->section('content') ?>
<div class="shop_supplies">
    <div class="shop_supplies_top">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-6">
                            <h1 class="shop_supplies_top_title">Perlengkapan</h1>
                        </div>
                        <div class="col-md-6">
                        <form class="form-inline shop_supplies_top_form-inline">
                            <div class="shop_supplies_top_searchbox">
                                <i class="fas fa-search"></i>
                                <input class="searchBar" type="search" placeholder="Search">
                            </div>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card shop_animals_card" style="width: 20rem;">
                            <img src="<?= base_url("images/ropeBall.png") ?>" class="shop_animals_card-image" alt="imagesAnimals">
                            <div class="card-body">
                                <h3 class="shop_animals_card-price">Rp 18.000</h3>
                                <h5 class="shop_animals_card-title">Rope Ball Cat Toy</h5>
                                <p class="shop_animals_card-text">Mainan bola kucing yang terbuat dari tali</p>
                                <button type="button" class="btn shop_animals_card-btn" data-toggle="modal" data-target="#exampleModal">
                                    Beli Sekarang
                                </button>
                                <div class="modal fade supplies_modal" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog supplies_modal-dialog">
                                        <div class="modal-content supplies_modal-content">
                                            <div class="modal-header supplies_modal-header">
                                                <h5 class="modal-title supplies_modal-title" id="exampleModalLabel">Detail Transaksi</h5>
                                                <button type="submit" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body supplies_modal-body">
                                                ...
                                            </div>
                                            <div class="modal-footer supplies_modal-footer">
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                                                <a href="<?= base_url('/shop/successPayment') ?>" class="btn btn-success">Bayar</a>
                                            </div>
                                        </div> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endsection() ?>

<?= $this->section('javascript') ?>
$('#myModal').on('shown.bs.modal', function () {
  $('#myInput').trigger('focus')
})
<?= $this->endsection() ?>