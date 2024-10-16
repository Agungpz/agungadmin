<?php
require_once 'peminjamancontroller.php';

if (isset($_GET['id']) && isset($_GET['status'])) {
    $id = $_GET['id'];
    $status = $_GET['status'];
    $tanggal_kembalian = date('Y-m-d'); // Tanggal saat ini

    // Panggil fungsi updateStatus dari controller yang sudah memiliki koneksi
    $peminjamanController = new PeminjamanController();
    $success = $peminjamanController->updateStatus($id, $status, $tanggal_kembalian);

    if ($success) {
        echo "<script>
                Swal.fire({
                    title: 'Status Updated',
                    text: 'Status peminjaman berhasil diupdate',
                    icon: 'success'
                }).then(() => {
                    window.location.href = 'viewpeminjaman.php'; // Redirect ke halaman viewpeminjaman.php
                });
              </script>";
    } else {
        echo "<script>
                Swal.fire({
                    title: 'Error',
                    text: 'Gagal mengupdate status peminjaman',
                    icon: 'error'
                }).then(() => {
                    window.location.href = 'viewpeminjaman.php';
                });
              </script>";
    }
} else {
    echo "Invalid request!";
}
?>
