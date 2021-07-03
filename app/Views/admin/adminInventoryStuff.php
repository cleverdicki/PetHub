<?= $this->extend('layouts/adminLayout') ?>

<?= $this->section('content') ?>
<h1 class="adminInventory_title">Kelola Inventory Penjualan</h1>
<form class="form-inline admin_top_form-inline">
    <div class="admin_searchbox">
        <i class="fas fa-search"></i>
        <input class="admin_searchBar" type="search" placeholder="Cari Perlengkapan...">
    </div>
</form>
<div class="adminInventory_linkCategory">
    <a href="/admin/inventory" class="adminInventory_category">Hewan</a>
    <a href="/admin/inventory/stuff" class="adminInventory_category">Perlengkapan</a>
</div>
<div class="adminIventory_content">
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-3">
                    <a href="/admin/inventory/addInvent" class="btn adminInventory_addInventoryButton">Tambah Inventory</a>
                </div>
                <div class="col-md-3">
                    <div class="card adminInventory_card mx-auto" style="width: 20rem;">
                        <img src="<?= base_url("images/food.png") ?>" class="adminInventory_card-image" alt="imagesAnimals">
                        <div class="card-body">
                            <h3 class="adminInventory_card-price">Rp 18.000</h3>
                            <h5 class="adminInventory_card-title">Rope Ball Cat Toy</h5>
                            <p class="adminInventory_card-text">Mainan bola kucing yang terbuat dari tali</p>
                            <h5 class="adminInventory_card-total">Tersedia: 10</h5>
                            <a href="#" class="btn adminInventory_card-btn">Beli Sekarang</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endsection() ?>