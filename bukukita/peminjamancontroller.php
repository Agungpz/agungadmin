<?php
require_once 'Database.php';
require_once 'peminjaman.php';

class PeminjamanController {
    private $peminjaman;

    public function __construct() {
        $database = new Database();
        $db = $database->getConnection();
        $this->peminjaman = new Peminjaman($db);
    }

    // Fetch all borrowings
    public function getAllPeminjaman() {
        return $this->peminjaman->getAllPeminjaman();
    }

    // Update borrowing status
    public function updateStatus($id, $status, $tanggal_kembalian) {
        // Gunakan instance $this->peminjaman yang sudah ada
        return $this->peminjaman->updateStatus($id, $status, $tanggal_kembalian);
    }

    // Delete borrowing
    public function deletePeminjaman($id) {
        return $this->peminjaman->deletePeminjaman($id);
    }
}
?>
