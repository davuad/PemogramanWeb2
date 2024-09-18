## Jobsheet 1: Menggunakan Konsep Kelas dan Objek dalam PHP
### Mahasiswa (<a href="mahasiswa.php">Mahasiswa.php</a>)
#### 1. Membuat class dan Object
> Membuat class Mahasiswa yang memiliki atribut nama, nim dan jurusan
> Aksesibilitas yang digunakan adalah semua atribut adalah public yang Dapat diakses dari mana saja.
```sh
<?php
class Mahasiswa {
    // Atribut
    public $nama;
    public $nim;
    public $jurusan;

```
> metode atau function tampilkanData() ini digunakan untuk mengambil seluruh data pada taribut nama, nim, dan jurusan dan menampilkan nya

```sh
    // Metode untuk menampilkan data mahasiswa
    public function tampilkanData() {
        echo "Nama: " . $this->nama . "<br>";
        echo "NIM: " . $this->nim . "<br>";
        echo "Jurusan: " . $this->jurusan . "<br>";
    }
}
```
> Pembuatan objek atau instansiasi dari class mahasiswa dengan keyword 'new'
> Inisialisasi dilakukan secara manual karna tidak adanya metode __construct()
> Untuk menampilkan data panggil function tampilkanData()

```sh
// Instansiasi objek dari class Mahasiswa
$mahasiswa1 = new Mahasiswa();

// Inisialisasi atribut secara manual
$mahasiswa1->nama = "Budi";
$mahasiswa1->nim = "12345678";
$mahasiswa1->jurusan = "Teknik Informatika";

// Tampilkan data mahasiswa
$mahasiswa1->tampilkanData();
?>
```
> Berikut ini adalah Output atau hasil dari program:
![Screenshot 2024-09-18 092654](https://github.com/user-attachments/assets/0886083e-d3aa-42de-b2c7-8ee6580e89fc)

#### 2. Implementasi Constructor
> Copy semua script diatas, dan tambahkan metode atau function __construct() yang menginisialisasi atribut nama, nim, dan jurusan.
```sh
<?php
class Mahasiswa {
    // Atribut
    public $nama;
    public $nim;
    public $jurusan;

    public function __construct($nama, $nim, $jurusan){
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }

    // Metode untuk menampilkan data mahasiswa
    public function tampilkanData() {
        return "Haloo, nama saya adalah $this->nama dengan $this->nim dari jurusan $this->jurusan.";
    }
}
```
> Ketika sudah terdapat function __construct(), inisialisasi dapat dilakukan lebih simple
>  Untuk menampilkan data panggil function tampilkanData()
```sh
$mhs = new Mahasiswa("Davu Andrias", 230102077, "Komputer dan Bisnis");
echo $mhs->tampilkanData();
?>
```
> Berikut ini adalah Output atau hasil dari program:
![Screenshot 2024-09-18 092858](https://github.com/user-attachments/assets/0d7a6d63-082f-4054-b945-912e36932717)



#### 3. Membuat Metode Tambahan
> Copy semua script diatas, tambahkan metode atau function updateJurusan() yang berfungsi untuk mengedit jurusan
```sh
<?php
class Mahasiswa {
    // Atribut
    public $nama;
    public $nim;
    public $jurusan;

    public function __construct($nama, $nim, $jurusan){
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }

    // Metode untuk menampilkan data mahasiswa
    public function tampilkanData() {
        return "Haloo, nama saya adalah $this->nama dengan $this->nim dari jurusan $this->jurusan.";
    }

    //Metode untuk mengupdate jurusan
    public function updateJurusan($jurusan) {
        $this->jurusan = $jurusan;
    }
}

$mhs = new Mahasiswa("Davu Andrias", 230102077, "Komputer dan Bisnis");
echo $mhs->tampilkanData();
echo "<br>";
```
> Mengubah isi jurusan dengan memanggil function updateJurusan() dan menampilkan data dengan tampilkanData()

```sh
$mhs->updateJurusan("Rekayasa Mesin dan Industri Pertanian");
echo $mhs->tampilkanData();

?>
```
> Berikut ini adalah Output atau hasil dari program:
![Screenshot 2024-09-18 093035](https://github.com/user-attachments/assets/2f048647-97d1-42e5-8f6d-74d3986fd562)


#### 4. Penggunaan Atribut dan Metode
> Copy semua script diatas, dan tambahkan metode atau function setNim() yang berfungsi untuk mengubah nilai nim
```sh
<?php
class Mahasiswa {
    // Atribut
    public $nama;
    public $nim;
    public $jurusan;

    public function __construct($nama, $nim, $jurusan){
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }

    // Metode untuk menampilkan data mahasiswa
    public function tampilkanData() {
        return "Haloo, nama saya adalah $this->nama dengan $this->nim dari jurusan $this->jurusan.";
    }

    //Metode untuk mengupdate jurusan
    public function updateJurusan($jurusan) {
        $this->jurusan = $jurusan;
    }
}
 //Metode untuk mengupdate NIM
    public function setNim($nim) {
        $this->nim = $nim;
    } 
}

$mhs = new Mahasiswa("Davu Andrias", 230102077, "Komputer dan Bisnis");
echo $mhs->tampilkanData();
echo "<br>";
$mhs->updateJurusan("Rekayasa Mesin dan Industri Pertanian");
echo $mhs->tampilkanData();
echo "<br>";
```
> Ubah nim dengan memnaggil setNim dan tampilkan hasilnya dengan memanggil function tampilkanData()

```sh
$mhs->setNim(22222222);
echo $mhs->tampilkanData();
?>
```
> Berikut ini adalah Output atau hasil dari program:
![Screenshot 2024-09-18 093504](https://github.com/user-attachments/assets/167e2eb4-435c-40a4-8f40-9e8015395a65)


### Tugas (<a href="Dosen.php">Dosen.php</a>)
> Membuat class Dosen yang memiliki atribut nama, nip, dan nip
> aksebilitas yang digunakan adalah public yang dapat diakses dimana saja.
```sh
<?php
// Membuat class Dosen
class Dosen {
    public $nama, $nip, $mataKuliah;

    public function __construct($nama, $nip, $mataKuliah) {
        $this->nama = $nama;
        $this->nip = $nip;
        $this->mataKuliah = $mataKuliah;
    }
```
> Membuat metode atau function tampilkanDosen() untuk menampilkan seluruh data
```sh
    public function tampilkanDosen() {
        return "Selamat datang $this->nama, dengan NIP $this->nip sebagai pengampu mata kuliah $this->mataKuliah.";
    }
}
```
> Intansiasi objek dari class Dosen dan tampilkan seluruh data dengan memanggil function tampilkanDosen()
```sh
$dosenn = new Dosen("Indraa", 23012020, "Algoritma Pemograman");
echo $dosenn->tampilkanDosen();
?>
```
> Berikut ini adalah Output atau hasil dari program:
![Screenshot 2024-09-18 093612](https://github.com/user-attachments/assets/83ca3f73-118a-4ffb-bdd2-f03bb9179f5d)
