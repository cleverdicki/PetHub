<?= $this->extend('layouts/adminLayout') ?>

<?= $this->section('content') ?>
<h1 class="adminInventory_title">Kelola Inventory Penjualan</h1>
<form class="form-inline admin_top_form-inline">
    <div class="admin_searchbox">
        <i class="fas fa-search"></i>
        <input class="admin_searchBar" type="search" placeholder="Cari hewan...">
    </div>
</form>
<div class="adminInventory_linkCategory">
    <a href="<?= site_url('/admin/inventory') ?>" class="adminInventory_category">Hewan</a>
    <a href="<?= site_url('/admin/inventory/stuff') ?>" class="adminInventory_category">Perlengkapan</a>
</div>
<div class="adminIventory_content">
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-3">
                    <a href="<?= site_url('/admin/inventory/addInventory') ?>" class="btn adminInventory_addInventoryButton">Tambah Inventory</a>
                </div>
                <?php foreach ($supplies as $data) : ?>
                <div class="col-md-3">
                    <div class="card adminInventory_card mx-auto" style="width: 20rem;">
                        <img src="<?= base_url('/img/' . $data['suppliesImage']) ?>" class="adminInventory_card-image" alt="imagesAnimals">
                        <div class="card-body">
                            <h3 class="adminInventory_card-price">Rp <?= $data['suppliesPrice'] ?></h3>
                            <h5 class="adminInventory_card-title"><?= $data['suppliesName'] ?></h5>
                            <p class="adminInventory_card-text"><?= $data['suppliesDescription'] ?></p>
                            <h5 class="adminInventory_card-total">Tersedia: <?= $data['suppliesQuantity'] ?></h5>
                            <div class="adminInventory_card-button">
                                <a href="<?= site_url('/admin/inventory/edit/' . $data['id']) ?>" class="btn adminInventory_card-btn">Edit</a>
                                <form action="<?= site_url('/admin/inventory/' . $data['id']) ?>" method="post" class="d-inline">
                                    <?= csrf_field(); ?>
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button type="submit" class="btn btn-danger adminInventory_card-btnDelete" onclick="return confirm('Apakah anda yakin?');">Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>
<?= $this->endsection() ?>