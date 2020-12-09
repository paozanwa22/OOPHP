<?php 

class Produk {
  public 
    $judul = "judul",
    $penulis = "penulis",
    $penerbit = "penerbit",
    $harga = 0,
    $halaman = 0,
    $waktu = 0;

  public function __construct($judul,$penulis,$penerbit,$harga,$halaman,$waktu) {
    $this->judul = $judul;
    $this->penulis = $penulis;
    $this->penerbit = $penerbit;
    $this->harga = $harga;
    $this->halaman = $halaman;
    $this->waktu = $waktu;
  }

  public function getLabel() {
    return "$this->penulis, $this->penerbit";
  }

  public function getInfoProduk() {
    $str = "{$this->judul} {$this->getLabel()} {$this->harga}";
    return $str;
  }
}

class CetakInfoProduk {
  public function cetak( Produk $produ ) {
    $str = "{$produ->judul} | {$produ->getLabel()} (Rp. {$produ->harga}) {$produ->halaman} {$produ->waktu}";
    return $str;
  }
}

class Buku extends Produk {
  public function getInfoProduk() {
    $str = "Komik : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) - {$this->halaman} Halaman.";
    return $str;
  }
}

class Games extends Produk {
  public function getInfoProduk() {
    $str = "Games : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) ~ {$this->waktu} Jam.";
    return $str;
  }
}

$produk1 = new Buku("Naruto","Masashi Kishimoto","Shonen Jump", 30000, 100, 0);
$produk2 = new Games("Naruto","Masashi Kishimoto","Shonen Jump", 30000, 0, 50);
echo $produk2->getInfoProduk();