<?php
// Koneksi ke database
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'dinas_adkek_palu';
$koneksi = new mysqli($host, $username, $password, $database);

// koneksi
if ($koneksi->connect_error) {
    die("Koneksi ke database gagal: " . $koneksi->connect_error);
}

// query untuk mengambil data perizinan
$query = "SELECT * FROM manajemen_izin";
$result = $koneksi->query($query);

// array untuk menyimpan data
$data = array();

// menambahkan ke dalam array
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
}

// mengonversi array ke JSON
echo json_encode($data);

// tutup koneksi ke database
$koneksi->close();

?>
