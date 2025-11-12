<?php include '../koneksi.php';
if($_SERVER['REQUEST_METHOD']=='POST'){
  $id_pasien = intval($_POST['id_pasien']);
  $id_dokter = intval($_POST['id_dokter']);
  $kamar = mysqli_real_escape_string($koneksi, $_POST['kamar']);
  $tanggal_masuk = mysqli_real_escape_string($koneksi, $_POST['tanggal_masuk']);
  $tanggal_keluar = mysqli_real_escape_string($koneksi, $_POST['tanggal_keluar']);
  $keterangan = mysqli_real_escape_string($koneksi, $_POST['keterangan']);
  mysqli_query($koneksi, "INSERT INTO rawat_inap (id_pasien,id_dokter,kamar,tanggal_masuk,tanggal_keluar,keterangan) VALUES ($id_pasien,$id_dokter,'$kamar','$tanggal_masuk','$tanggal_keluar','$keterangan')");
  header('Location: index.php'); exit;
}
$pasien = mysqli_query($koneksi, "SELECT * FROM pasien");
$dokter = mysqli_query($koneksi, "SELECT * FROM dokter");
?>
<!doctype html><html lang="id"><head><meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1">
<title>Tambah Rawat Inap</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="../assets/css/style.css" rel="stylesheet">
</head><body class="bg-softpink">
<div class="container py-5">
  <div class="d-flex justify-content-between align-items-center mb-4">
    <h3 class="pink-700">Tambah Rawat Inap</h3>
    <a href="index.php" class="btn btn-light">Batal</a>
  </div>
  <div class="card card-soft p-4">
    <form method="post">
      <div class="mb-3"><label class="form-label">Pasien</label>
        <select name="id_pasien" class="form-control" required>
          <option value="">-- Pilih Pasien --</option>
          <?php while($p = mysqli_fetch_array($pasien)){ ?>
            <option value="<?= $p['id']; ?>"><?= htmlspecialchars($p['nama']); ?></option>
          <?php } ?>
        </select>
      </div>

      <div class="mb-3"><label class="form-label">Dokter</label>
        <select name="id_dokter" class="form-control" required>
          <option value="">-- Pilih Dokter --</option>
          <?php while($d = mysqli_fetch_array($dokter)){ ?>
            <option value="<?= $d['id']; ?>"><?= htmlspecialchars($d['nama']); ?> (<?= htmlspecialchars($d['spesialis']); ?>)</option>
          <?php } ?>
        </select>
      </div>

      <div class="row">
        <div class="col-md-4 mb-3"><label class="form-label">Kamar</label><input name="kamar" class="form-control" required></div>
        <div class="col-md-4 mb-3"><label class="form-label">Tanggal Masuk</label><input type="date" name="tanggal_masuk" class="form-control" required></div>
        <div class="col-md-4 mb-3"><label class="form-label">Tanggal Keluar</label><input type="date" name="tanggal_keluar" class="form-control"></div>
      </div>

      <div class="mb-3"><label class="form-label">Keterangan</label><textarea name="keterangan" class="form-control"></textarea></div>

      <button class="btn btn-pink">Simpan</button>
    </form>
  </div>
</div></body></html>
