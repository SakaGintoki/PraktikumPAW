<?php
    class Mahasiswa
    {
        // Propertinya
        public $nim;
        public $nama;
        public $prodi;
        
        // Constructor
        public function __construct($nim = "null", $nama = "null", $prodi = "null") {
            $this->nim = $nim;
            $this->nama = $nama;
            $this->prodi = $prodi;
        }
        

        // Fungsi
        function kuliah(){
            $nim = $this->nim;
            $nama = $this->nama;
            $prodi = $this->prodi;
            echo "\nMahasiswa dengan NIM $nim dan nama $nama yang berasal dari $prodi sedang berkuliah.";
        }
        function ujian(){
            $nim = $this->nim;
            $nama = $this->nama;
            $prodi = $this->prodi;
            echo "\nMahasiswa dengan NIM $nim dan nama $nama yang berasal dari $prodi sedang mengikuti ujian.";
        }
        function praktikum(){
            $nim = $this->nim;
            $nama = $this->nama;
            $prodi = $this->prodi;
            echo "\nMahasiswa dengan NIM $nim dan nama $nama yang berasal dari $prodi sedang menjalani praktikum.";
        }

        function set_nim($nim){
            $this->nim = $nim;
        }
        function set_nama($nama){
            $this->nama = $nama;
        }
        function set_prodi($prodi){
            $this->prodi = $prodi;
        }
    }

    $haris = new Mahasiswa();
    $bram = new Mahasiswa();

    // Bisa pakai constructor tapi saya pakai setter 
    $haris->set_nama("Malvinshah Haris Athala");
    $haris->set_nim("235150207111042");
    $haris->set_prodi("Teknik Informatika");
    
    $haris->kuliah();
    $haris->ujian();
    $haris->praktikum();
    
    echo "\n";
    
    // Bisa pakai constructor tapi saya pakai setter 
    $bram->set_nama("Brahmantio Jati Pambudi");
    $bram->set_nim("235150201111028");
    $bram->set_prodi("Teknik Informatika");
    
    $bram->kuliah();
    $bram->ujian();
    $bram->praktikum();

?>