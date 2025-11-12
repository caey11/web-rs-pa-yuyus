<?php include 'koneksi.php'; ?>
<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Healthy Love Clinic</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
</head>
<body class="bg-softpink">
<nav class="navbar navbar-expand-lg navbar-light py-3 shadow-sm" style="background: linear-gradient(90deg,#ffd6ea,#ffb3d1);">
  <div class="container">
    <a class="navbar-brand fw-bold text-white" href="#"><span class="me-2">💖</span>Healthy Love</a>
    <div class="collapse navbar-collapse">
      <ul class="navbar-nav ms-auto gap-2">
        <li class="nav-item"><a class="nav-link link-white" href="dokter/index.php">Dokter</a></li>
        <li class="nav-item"><a class="nav-link link-white" href="pasien/index.php">Pasien</a></li>
        <li class="nav-item"><a class="nav-link link-white" href="penyakit/index.php">Penyakit</a></li>
        <li class="nav-item"><a class="nav-link link-white" href="rawat_jalan/index.php">Rawat Jalan</a></li>
        <li class="nav-item"><a class="nav-link link-white" href="rawat_inap/index.php">Rawat Inap</a></li>
      </ul>
    </div>
  </div>
</nav>

<header class="py-5 text-center">
  <div class="container">
    <h1 class="display-5 fw-bold pink-700">Healthy Love</h1>
    <p class="lead text-muted">WebSite Data-Data Klinik Pelayanan Kesehatan Masyarakat</p>
  </div>
</header>

<main class="container mb-5">
  <div class="row g-4">
    <div class="col-md-4">
      <div class="card card-soft h-100">
        <div class="card-body">
          <h5 class="card-title">Data Dokter</h5>
          <p class="card-text">Kelola daftar dokter dan spesialisasinya.</p>
          <a href="dokter/index.php" class="btn btn-pink">Buka</a>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card card-soft h-100">
        <div class="card-body">
          <h5 class="card-title">Data Pasien</h5>
          <p class="card-text">Kelola data pasien.</p>
          <a href="pasien/index.php" class="btn btn-pink">Buka</a>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card card-soft h-100">
        <div class="card-body">
          <h5 class="card-title">Data Penyakit</h5>
          <p class="card-text">Daftar jenis penyakit, gejala, dan pengobatan.</p>
          <a href="penyakit/index.php" class="btn btn-pink">Buka</a>
        </div>
      </div>
    </div>

    <div class="col-md-6">
      <div class="card card-soft">
        <div class="card-body">
          <h5 class="card-title">Rawat Jalan</h5>
          <p class="card-text">Catatan kunjungan pasien (rawat jalan).</p>
          <a href="rawat_jalan/index.php" class="btn btn-pink">Buka</a>
        </div>
      </div>
    </div>

    <div class="col-md-6">
      <div class="card card-soft">
        <div class="card-body">
          <h5 class="card-title">Rawat Inap</h5>
          <p class="card-text">Catatan pasien rawat inap dan kamar.</p>
          <a href="rawat_inap/index.php" class="btn btn-pink">Buka</a>
        </div>
      </div>
    </div>

  </div>
</main>

<footer class="text-center py-4">
  <small class="text-muted">© Healthy Love - Klinik Sederhana</small>
</footer>

</body>
</html>
