<?php
// Membuat class Dosen
class Dosen {
    public $nama, $nip, $mataKuliah;

    public function __construct($nama, $nip, $mataKuliah) {
        $this->nama = $nama;
        $this->nip = $nip;
        $this->mataKuliah = $mataKuliah;
    }

    public function tampilkanDosen() {
        return "Selamat datang $this->nama, dengan NIP $this->nip sebagai pengampu mata kuliah $this->mataKuliah.";
    }
}

$dosenn = new Dosen("Indraa", 23012020, "Algoritma Pemograman");
echo $dosenn->tampilkanDosen();
?>