<?php include '../koneksi.php'; ?>
<!doctype html><html lang="id"><head>
<meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1">
<title>Rawat Jalan - Healthy Love</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="../assets/css/style.css" rel="stylesheet">
</head><body class="bg-softpink">
<div class="container py-5">
  <div class="d-flex justify-content-between align-items-center mb-4">
    <h3 class="pink-700">Rawat Jalan</h3>
    <div>
      <a href="../index.php" class="btn btn-light me-2">Kembali</a>
      <a href="tambah.php" class="btn btn-pink">+ Tambah</a>
    </div>
  </div>

  <div class="card card-soft p-3">
    <table class="table table-striped table-bordered mb-0">
      <thead>
        <tr><th>No</th><th>Pasien</th><th>Dokter</th><th>Tanggal</th><th>Keluhan</th><th>Aksi</th></tr>
      </thead>
      <tbody>
        <?php
        $no=1;
        $q = "SELECT r.*, p.nama AS pasien, d.nama AS dokter FROM rawat_jalan r LEFT JOIN pasien p ON r.id_pasien=p.id LEFT JOIN dokter d ON r.id_dokter=d.id ORDER BY r.tanggal DESC";
        $data = mysqli_query($koneksi, $q);
        while($r = mysqli_fetch_array($data)){
        ?>
        <tr>
          <td><?= $no++; ?></td>
          <td><?= htmlspecialchars($r['pasien']); ?></td>
          <td><?= htmlspecialchars($r['dokter']); ?></td>
          <td><?= $r['tanggal']; ?></td>
          <td><?= htmlspecialchars($r['keluhan']); ?></td>
          <td>
            <a href="edit.php?id=<?= $r['id']; ?>" class="btn btn-sm btn-warning">Edit</a>
            <a href="hapus.php?id=<?= $r['id']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Hapus?')">Hapus</a>
          </td>
        </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>

</div></body></html>
