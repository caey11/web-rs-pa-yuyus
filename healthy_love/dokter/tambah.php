<?php include '../koneksi.php';
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $nama = mysqli_real_escape_string($koneksi, $_POST['nama']);
    $spesialis = mysqli_real_escape_string($koneksi, $_POST['spesialis']);
    $no_hp = mysqli_real_escape_string($koneksi, $_POST['no_hp']);
    $sql = "INSERT INTO dokter (nama, spesialis, no_hp) VALUES ('" . $nama . "','" . $spesialis . "','" . $no_hp . "')";
    if(mysqli_query($koneksi, $sql)) header('Location: index.php');
    else echo 'Error: '.mysqli_error($koneksi);
}
?>
<!doctype html><html lang="id"><head>
<meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1">
<title>Tambah Dokter</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="../assets/css/style.css" rel="stylesheet">
</head><body class="bg-softpink">
<div class="container py-5">
  <div class="d-flex justify-content-between align-items-center mb-4">
    <h3 class="pink-700">Tambah Dokter</h3>
    <a href="index.php" class="btn btn-light">Batal</a>
  </div>
  <div class="card card-soft p-4">
    <form method="post">

        <div class="mb-3">
          <label class="form-label">Nama Dokter</label>
          <input type="text" name="nama" class="form-control" required>
        </div>

        <div class="mb-3">
          <label class="form-label">Spesialis</label>
          <input type="text" name="spesialis" class="form-control" required>
        </div>

        <div class="mb-3">
          <label class="form-label">No. HP</label>
          <input type="text" name="no_hp" class="form-control" required>
        </div>

      <button class="btn btn-pink">Simpan</button>
    </form>
  </div>
</div>
</body></html>
