<div class="header">
  <nav class="navbar navbar-expand-lg navbar-light">
    <a class="navbar-brand" href="<?= site_url('/') ?>">
      <img src="<?= base_url("images/logo.png") ?>" alt="PubHub">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="<?= site_url('/') ?>">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= site_url('/shop/animals') ?>">Hewan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= site_url('/shop/supplies') ?>">Perlengkapan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Tentang</a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="<?= site_url('/register') ?>">Daftar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= site_url('/login') ?>">Login</a>
        </li>
      </ul>
    </div>
  </nav>
</div>