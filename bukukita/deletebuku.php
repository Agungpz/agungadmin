<?php
// delete.php
include_once 'Database.php';
include_once 'buku.php';

$database = new Database();
$db = $database->getConnection();

$buku = new Buku($db);

if(isset($_GET['id'])) {
    $buku->id_buku = $_GET['id'];
    
    if($buku->delete()) {
        echo "Buku berhasil dihapus.";
        header("Location: index.php");
    } else {
        echo "Gagal menghapus buku.";
    }
} else {
    echo "ID buku tidak diberikan.";
}
?>