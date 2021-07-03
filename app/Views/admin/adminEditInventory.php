<?= $this->extend('layouts/adminLayout') ?>

<?= $this->section('content') ?>
<h1 class="adminAddInventory_title">Edit Inventory Penjualan</h1>
<div class="adminAddInventory_content">
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-6">
                    <form action="/admin/inventory/editIventory/edit/<?= $supplies['id']; ?>" method="post" enctype="multipart/form-data">
                    <?= csrf_field(); ?>
                    <input type="hidden" name="suppliesImageOld" value="<?= $supplies['suppliesImage'] ?>">
                    <div class="form-group">
                        <label for="suppliesName">Nama</label>
                        <input type="text" class="form-control adminAddInventory_formAdd" id="suppliesName" name="suppliesName" placeholder="Chow chow" value="<?= $supplies['suppliesName'] ?>">
                    </div>
                    <div class="form-group">
                        <label class="control-label ">Kategori</label>
                        <select name="suppliesCategory" class="form-control adminAddInventory_formAdd">
                          <option selected="selected" value="<?= $supplies['suppliesCategory'] ?>"><?= $supplies['suppliesCategory'] ?></option>
                          <option value="hewan">Hewan</option>
                          <option value="perlengkapan">Perlengkapan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="suppliesPrice">Harga</label>
                        <input type="text" class="form-control adminAddInventory_formAdd" id="suppliesPrice" name="suppliesPrice" placeholder="1000" value="<?= $supplies['suppliesPrice'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="suppliesQuantity">Kuantitas</label>
                        <input type="text" class="form-control adminAddInventory_formAdd" id="suppliesQuantity" name="suppliesQuantity" placeholder="10" value="<?= $supplies['suppliesQuantity'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="suppliesDescription">Deskripsi</label>
                        <input type="text" class="form-control adminAddInventory_formAdd" id="suppliesDescription" name="suppliesDescription" placeholder="guguk imut..." value="<?= $supplies['suppliesDescription'] ?>">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                <div class="col-md-6">
                    <div class="custom-file">
                        <div class="row">
                            <div class="col-sm-2">
                                <img src="<?= base_url('/img/' . $supplies['suppliesImage']) ?>" alt="default" class="img-thumbnail img-preview">
                            </div>
                            <div class="col-sm-10">
                                <input type="file" class="custom-file-input" id="suppliesImage" name="suppliesImage" onchange="previewImage()">
                                <label class="custom-file-label" for="SuppliesImage"><?= $supplies['suppliesImage'] ?></label>
                            </div>
                        </div>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?= $this->endsection() ?>

<?= $this->section('javascript') ?>
<script>
    function previewImage() {
        const suppliesImage = document.querySelector('#suppliesImage');
        const suppliesImageLabel = document.querySelector('.custom-file-label');
        const imgPreview = document.querySelector('.img-preview');
    
        suppliesImageLabel.textContent = suppliesImage.files[0].name;
    
        const suppliesImageFile = new FileReader();
        suppliesImageFile.readAsDataURL(suppliesImage.files[0]);
    
        suppliesImageFile.onload = function(e) {
            imgPreview.src = e.target.result;
        }
    }
</script>
<?= $this->endsection() ?>