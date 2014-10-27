<?php
/*
* Contoh Pembuatan Class, Property dan Method
*/
class NamaClass
{
  public $variabel; // Property
  
  // Method
  function NamaFungsi()
  {
    // Isi Fungsi / Method 
  }
}

/*
* Contoh Pembuatan Class Mahasiswa
*/
class Mahasiswa
{
  // Property
  public $nim;
  public $nama;
  public $nilai;

  // Method
  function StatusNilai()
  {
    if ($this->nilai >= 70) {
      $status = "Lulus";
    } else {
      $status = "Gagal";
    }
    return $status;
  }
}

// Instantisasi Object

$objek = new Mahasiswa();

/*
Untuk mengisi value property objek tadi, mari kita buat kode seperti berikut ini.
*/

class MahasiswaUnsera
{
  // Property
  public $nim;
  public $nama;
  public $nilai;

  // Method
  function StatusNilai()
  {
    if ($this->nilai >= 70) {
      $status = "Lulus";
    } else {
      $status = "Gagal";
    }
    return $status;
  }
}

// Instantisasi Objek
$mahasiswa = new MahasiswaUnsera();

// Memberikan Nilai Pada Property
$mahasiswa->nim   = 11212262;
$mahasiswa->nama  = "Nurul Imam";
$mahasiswa->nilai = 90;

// Mencetak Hasil
echo "NIM : ".$mahasiswa->nim."<br />";
echo "Nama : ".$mahasiswa->nama."<br />";
echo "Nilai : ".$mahasiswa->nilai."<br />";
echo "Status : ".$mahasiswa->StatusNilai()."<br /><br />";

/*
* Memberikan Nilai Property Dengan Method
*/
class MahasiswaUntirta
{
  public $nim;
  public $nama;
  public $nilai;

  function StatusNilai()
  {
    if ($this->nilai >= 70) {
      $status = "Lulus";
    } else {
      $status = "Gagal";
    }
    return $status;
  }

  function SetNim($nim)
  {
    $this->nim = $nim;
  }

  function SetNama($nama)
  {
    $this->nama = $nama;
  }

  function SetNilai($nilai)
  {
    $this->nilai = $nilai;
  }

  function BacaNim()
  {
    echo $this->nim;
  }

  function BacaNama()
  {
    echo $this->nama;
  }

  function BacaNilai()
  {
    echo $this->nilai;
  }
}

$mahasiswabaru = new MahasiswaUntirta();
$mahasiswabaru->SetNim(11212267);
$mahasiswabaru->SetNama('Zaenal Muttaqien');
$mahasiswabaru->SetNilai(65);
$mahasiswabaru->StatusNilai();

echo "Nim : ";
$mahasiswabaru->BacaNim();
echo "<br />";
echo "Nama : ";
$mahasiswabaru->BacaNama();
echo "<br />";
echo "Nilai : ";
$mahasiswabaru->BacaNilai();
echo "<br />";
echo "Status : ";
echo $mahasiswabaru->StatusNilai();
?>