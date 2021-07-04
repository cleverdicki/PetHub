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
                    <?php foreach ($supplies as $data) : ?>
                    <div class="col-md-4">
                        <div class="card shop_supplies_card" style="width: 20rem;">
                            <img src="<?= base_url('img/' . $data['suppliesImage']) ?>" class="shop_supplies_card-image" alt="imagessupplies">
                            <div class="card-body">
                                <h3 class="shop_supplies_card-price">Rp <?= $data['suppliesPrice'] ?></h3>
                                <h5 class="shop_supplies_card-title"><?= $data['suppliesName'] ?></h5>
                                <p class="shop_supplies_card-text"><?= $data['suppliesDescription'] ?></p>
                                <button type="button" class="btn shop_supplies_card-btn" data-toggle="modal" data-target="#exampleModal-<?= $data['id'] ?>">
                                    Beli Sekarang
                                </button>
                                <div class="modal fade shop_animals_modal" id="exampleModal-<?= $data['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog shop_animals_modal-dialog">
                                        <div class="modal-content shop_animals_modal-content">
                                            <div class="modal-header shop_animals_modal-header">
                                                <h5 class="modal-title shop_animals_modal-title" id="exampleModalLabel">Detail Transaksi</h5>
                                                <button type="submit" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body shop_animals_modal-body">
                                                <div class="shop_animals_modal-body_header">
                                                    <h3 class="modal_title">Barang yang dibeli</h3>
                                                </div>
                                                <div class="shop_animals_modal-body_detail">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <img src="<?= base_url('img/' . $data['suppliesImage']) ?>" alt="food" class="modal_transaction-image">
                                                                </div>
                                                                <div class="col-md-8">
                                                                    <h3 class="modal_transaction-name"><?= $data['suppliesName'] ?></h3>
                                                                    <h6 class="modal_transaction-description"><?= $data['suppliesDescription'] ?></h6>
                                                                    <h5 class="modal_transaction-quantity">Kuantitas: 1</h5>
                                                                    <h3 class="modal_transaction-price">Rp <?= $data['suppliesPrice'] ?></h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="shop_animals_modal-body_result">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="row">
                                                                <div class="col-md-8">
                                                                    <div class="modal_transaction-order-result">
                                                                        <h3 class="modal_transaction-order-result_title">Ringkasan Pesanan</h3>
                                                                        <div class="row">
                                                                            <div class="col-md-12">
                                                                                <div class="row">
                                                                                    <div class="col-md-6">
                                                                                        <p class="modal_transaction-order-result_left">Subtotal</p>
                                                                                        <p class="modal_transaction-order-result_left">Shipping</p>
                                                                                    </div>
                                                                                    <div class="col-md-6">
                                                                                        <p class="modal_transaction-order-result_right">Rp <?= $data['suppliesPrice'] ?></p>
                                                                                        <p class="modal_transaction-order-result_right">Rp 25.000</p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <div class="row">
                                                                                <div class="col-md-6">
                                                                                    <p class="modal_transaction-order-result_left">Total</p>
                                                                                </div>
                                                                                <div class="col-md-6">
                                                                                    <p class="modal_transaction-order-result_right">Rp 230.000</p>
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
                                            <div class="shop_modal-footer">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="row">
                                                            <div class="col-md-4 modal_transaction_button_group">
                                                                <button type="button" class="btn btn-danger modal_transaction_button" data-dismiss="modal">Batal</button>
                                                            </div>
                                                            <div class="col-md-4 modal_transaction_button_group">
                                                                <select name="" id="" class="modal_select">
                                                                    <option disabled selected>Pilih Metode Pembayaran</option>
                                                                    <option value="OVO" class="modal_select_option_group option_ovo">OVO</option>
                                                                    <option value="Go Pay" class="modal_select_option_group option_gopay">Go Pay</option>
                                                                    <option value="Indomaret" class="modal_select_option_group option_indomaret">Indomaret</option>
                                                                    <option value="Transfer" class="modal_select_option_group option_transfer">Transfer</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-md-4 modal_transaction_button_group">
                                                                <a href="<?= base_url('/shop/successPayment') ?>" class="btn btn-success modal_transaction_button">Bayar</a>
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
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endsection() ?>

<?= $this->section('javascript') ?>
<script>
</script>
<?= $this->endsection() ?>