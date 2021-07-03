<?= $this->extend('layouts/adminLayout') ?>

<?= $this->section('content') ?>
<h1 class="adminAddInventory_title">Tambah Inventory Penjualan</h1>
<div class="adminAddInventory_content">
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-6">
                    <form action="/admin/inventory/addIventory/create" method="post" enctype="multipart/form-data">
                    <?= csrf_field(); ?>
                    <div class="form-group">
                        <label for="suppliesName">Nama</label>
                        <input type="text" class="form-control adminAddInventory_formAdd" id="suppliesName" name="suppliesName" placeholder="Chow chow">
                    </div>
                    <div class="form-group">
                        <label class="control-label ">Kategori</label>
                        <select name="suppliesCategory" class="form-control adminAddInventory_formAdd">
                          <option value=""></option>
                          <option value="hewan">Hewan</option>
                          <option value="perlengkapan">Perlengkapan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="suppliesPrice">Harga</label>
                        <input type="text" class="form-control adminAddInventory_formAdd" id="suppliesPrice" name="suppliesPrice" placeholder="1000">
                    </div>
                    <div class="form-group">
                        <label for="suppliesQuantity">Kuantitas</label>
                        <input type="text" class="form-control adminAddInventory_formAdd" id="suppliesQuantity" name="suppliesQuantity" placeholder="10">
                    </div>
                    <div class="form-group">
                        <label for="suppliesDescription">Deskripsi</label>
                        <input type="text" class="form-control adminAddInventory_formAdd" id="suppliesDescription" name="suppliesDescription" placeholder="guguk imut...">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                <div class="col-md-6">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="suppliesImage" name="suppliesImage">
                        <label class="custom-file-label" for="SuppliesImage">Klik Disini untuk Menambah Gambar</label>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?= $this->endsection() ?>