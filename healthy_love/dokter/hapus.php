<?php include '../koneksi.php';
$id = intval($_GET['id'] ?? 0);
if($id){ mysqli_query($koneksi, "DELETE FROM dokter WHERE id=$id"); }
header('Location: index.php');
exit;
?>
