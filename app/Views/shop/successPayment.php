<?= $this->extend('layouts/template.php') ?>

<?= $this->section('content') ?>
<div class="container">
    <div class="successPayment_content">
        <h1 class="successPayment_title">Pembayaran Berhasil</h1>
        <h2 class="successPayment_subtitle">Terima kasih telah berbelanja di <img src="<?= base_url("images/logo.png") ?>" alt="PubHub"></h2>
    </div>
    <div class="images">
        <img class="successPayment_image" src="<?= base_url('images/CatImage.png') ?>" alt="CatImage">
    </div>
</div>
<?= $this->endsection() ?>