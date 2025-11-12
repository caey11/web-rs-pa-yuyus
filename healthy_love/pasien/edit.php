<?php include '../koneksi.php';
$id = intval($_GET['id'] ?? 0);
$res = mysqli_query($koneksi, "SELECT * FROM pasien WHERE id = $id");
$row = mysqli_fetch_array($res);
if(!$row) { header('Location: index.php'); exit; }

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $nama = mysqli_real_escape_string($koneksi, $_POST['nama']);
    $umur = mysqli_real_escape_string($koneksi, $_POST['umur']);
    $alamat = mysqli_real_escape_string($koneksi, $_POST['alamat']);
    $no_hp = mysqli_real_escape_string($koneksi, $_POST['no_hp']);
    $sql = "UPDATE pasien SET nama='" . $nama . "', umur='" . $umur . "', alamat='" . $alamat . "', no_hp='" . $no_hp . "' WHERE id=$id";
    if(mysqli_query($koneksi, $sql)) header('Location: index.php');
    else echo 'Error: '.mysqli_error($koneksi);
}
?>
<!doctype html><html lang="id"><head>
<meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1">
<title>Edit Pasien</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="../assets/css/style.css" rel="stylesheet">
</head><body class="bg-softpink">
<div class="container py-5">
  <div class="d-flex justify-content-between align-items-center mb-4">
    <h3 class="pink-700">Edit Pasien</h3>
    <a href="index.php" class="btn btn-light">Batal</a>
  </div>
  <div class="card card-soft p-4">
    <form method="post">

        <div class="mb-3">
          <label class="form-label">Nama Pasien</label>
          <input type="text" name="nama" class="form-control" value="<?= htmlspecialchars($row['nama']); ?>" required>
        </div>

        <div class="mb-3">
          <label class="form-label">Umur</label>
          <input type="text" name="umur" class="form-control" value="<?= htmlspecialchars($row['umur']); ?>" required>
        </div>

        <div class="mb-3">
          <label class="form-label">Alamat</label>
          <textarea name="alamat" class="form-control" required><?= htmlspecialchars($row['alamat']); ?></textarea>
        </div>

        <div class="mb-3">
          <label class="form-label">No. HP</label>
          <input type="text" name="no_hp" class="form-control" value="<?= htmlspecialchars($row['no_hp']); ?>" required>
        </div>

      <button class="btn btn-pink">Update</button>
    </form>
  </div>
</div>
</body></html>
