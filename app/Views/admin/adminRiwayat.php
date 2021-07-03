<?= $this->extend('layouts/adminLayout') ?>

<?= $this->section('content') ?>
<h1 class="adminRiwayat_title">Riwayat Transaksi</h1>
<form class="form-inline admin_top_form-inline">
    <div class="admin_searchbox">
        <i class="fas fa-search"></i>
        <input class="admin_searchBar" type="search" placeholder="Cari Riwayat...">
    </div>
</form>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Tanggal</th>
      <th scope="col">Nama</th>
      <th scope="col">Metode Pembayaran</th>
      <th scope="col">Total Pembayaran</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">05/05/2021</th>
      <td>Beni</td>
      <td>Indomaret</td>
      <td>Rp 235.000</td>
      <td><a href="<?= base_url('/admin/riwayat/detail') ?>" class="btn adminRiwayat_detailButton">Lihat Detail</a></td>
    </tr>
    <tr>
      <th scope="row">05/05/2021</th>
      <td>Beni</td>
      <td>Indomaret</td>
      <td>Rp 235.000</td>
      <td><a href="#" class="btn adminRiwayat_detailButton">Lihat Detail</a></td>
    </tr>
  </tbody>
</table>
<?= $this->endsection() ?>