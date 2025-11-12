<?php include '../koneksi.php';
$id = intval($_GET['id'] ?? 0);
$res = mysqli_query($koneksi, "SELECT * FROM rawat_jalan WHERE id=$id");
$row = mysqli_fetch_array($res);
if(!$row) { header('Location:index.php'); exit; }
if($_SERVER['REQUEST_METHOD']=='POST'){
  $id_pasien = intval($_POST['id_pasien']);
  $id_dokter = intval($_POST['id_dokter']);
  $tanggal = mysqli_real_escape_string($koneksi, $_POST['tanggal']);
  $keluhan = mysqli_real_escape_string($koneksi, $_POST['keluhan']);
  mysqli_query($koneksi, "UPDATE rawat_jalan SET id_pasien=$id_pasien, id_dokter=$id_dokter, tanggal='$tanggal', keluhan='$keluhan' WHERE id=$id");
  header('Location:index.php'); exit;
}
$pasien = mysqli_query($koneksi, "SELECT * FROM pasien");
$dokter = mysqli_query($koneksi, "SELECT * FROM dokter");
?>
<!doctype html><html lang="id"><head><meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1">
<title>Edit Rawat Jalan</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="../assets/css/style.css" rel="stylesheet">
</head><body class="bg-softpink">
<div class="container py-5">
  <div class="d-flex justify-content-between align-items-center mb-4">
    <h3 class="pink-700">Edit Rawat Jalan</h3>
    <a href="index.php" class="btn btn-light">Batal</a>
  </div>
  <div class="card card-soft p-4">
    <form method="post">
      <div class="mb-3"><label class="form-label">Pasien</label>
        <select name="id_pasien" class="form-control" required>
          <?php while($p = mysqli_fetch_array($pasien)){ $sel = $p['id']==$row['id_pasien'] ? 'selected' : ''; ?>
            <option value="<?= $p['id']; ?>" <?= $sel; ?>><?= htmlspecialchars($p['nama']); ?></option>
          <?php } ?>
        </select>
      </div>

      <div class="mb-3"><label class="form-label">Dokter</label>
        <select name="id_dokter" class="form-control" required>
          <?php while($d = mysqli_fetch_array($dokter)){ $sel = $d['id']==$row['id_dokter'] ? 'selected' : ''; ?>
            <option value="<?= $d['id']; ?>" <?= $sel; ?>><?= htmlspecialchars($d['nama']); ?> (<?= htmlspecialchars($d['spesialis']); ?>)</option>
          <?php } ?>
        </select>
      </div>

      <div class="mb-3"><label class="form-label">Tanggal</label>
        <input type="date" name="tanggal" class="form-control" value="<?= $row['tanggal']; ?>" required>
      </div>

      <div class="mb-3"><label class="form-label">Keluhan</label>
        <textarea name="keluhan" class="form-control" required><?= htmlspecialchars($row['keluhan']); ?></textarea>
      </div>

      <button class="btn btn-pink">Update</button>
    </form>
  </div>
</div></body></html>
