<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = htmlspecialchars($_POST["nama"]);
    $nim = htmlspecialchars($_POST["nim"]);
    $email = htmlspecialchars($_POST["email"]);

    $data = "Nama: " . $nama . "NIM: " . $nim . "Email: " . $email . "\n";
    // pengecekan apakah file data.txt sudah ada atau belum?

    // kalau ada //

    //kelau belum
    file_put_contents("data.txt", $data);
    echo "Data berhasil disimpan";
}
