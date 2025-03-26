<?php
    echo "Indexed Array : \n\n";
    
    $jurusan = [
        "Teknik Informatika", 
        "Teknik Komputer", 
        "Ilmu Komputer", 
        "Sistem Informasi", 
        "Teknologi Informasi", 
        "Pendidikan Teknologi Informasi"
    ];
    
    foreach ($jurusan as $index => $nama) {
        if ($index > 0){
            echo "\nJurusan ke-" . ($index + 1) . ": $nama.";
        }
        else echo "Jurusan ke-" . ($index + 1) . ": $nama.";
    }
    
    echo "\n\n";
    
    echo "Associative Array : \n\n";
    $mahasiswa = [
        "nama" => "Malvinshah Haris Athala",
        "nim" => "235150207111042",
        "fakultas" => "Ilmu Komputer",
        "jurusan" => "Teknik Informatika",
        "angkatan" => 2023
    ];
    
    foreach ($mahasiswa as $key => $mahasiswa1) {
        echo ucfirst($key) . ": $mahasiswa1 \n";
    }
?>
