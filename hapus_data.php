<?php
// Koneksi ke database (sama seperti pada file get_data.php)

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    
    // Query untuk menghapus data berdasarkan ID
    $query = "DELETE FROM manajemen_izin WHERE id = $id";
    
    if ($koneksi->query($query) === TRUE) {
        echo "Data berhasil dihapus";
    } else {
        echo "Error: " . $query . "<br>" . $koneksi->error;
    }
} else {
    echo "ID tidak valid";
}

$koneksi->close();
?>
