<?php
include "koneksi.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nim = ($_POST['nim']);
    $namaDepan = ($_POST['namaDepan']);
    $namaBelakang = ($_POST['namaBelakang']);
    $email = ($_POST['email']);

    $strSQL = "INSERT INTO datamahasiswa (nim, namaDepan, namaBelakang, email) VALUES ('$nim', '$namaDepan', '$namaBelakang', '$email')";

    $execStrSQL = mysqli_query($con, $strSQL);
    if ($execStrSQL) {
        echo "Success add data";
    } else {
        echo "Failed add data";
    }
}