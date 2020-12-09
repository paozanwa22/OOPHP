<?php 

class Produk {
  public 
    $judul = "judul",
    $penulis = "penulis",
    $penerbit = "penerbit",
    $harga = 0;

  public function __construct($judul,$penulis,$penerbit,$harga) {
    $this->judul = $judul;
    $this->penulis = $penulis;
    $this->penerbit = $penerbit;
    $this->harga = $harga;
  }

  public function getLabel() {
    return "$this->penulis, $this->penerbit";
  }

  public function getInfoProduk() {
    $str = "{$this->judul} {$this->getLabel()} {$this->harga}";
    return $str;
  }
}

class Buku extends Produk {
  public $halaman;
  public function __construct( $judul,$penulis,$penerbit,$harga,$halaman ){
    parent::__construct($judul,$penulis,$penerbit,$harga);
    $this->halaman = $halaman;
  }
  public function getInfoProduk() {
    $str = "Komik : " . parent::getInfoProduk() . " - {$this->halaman} halaman.";
    return $str;
  }
}

class Games extends Produk {
  public $waktu;
  public function __construct( $judul,$penulis,$penerbit,$harga,$waktu ){
    parent::__construct($judul,$penulis,$penerbit,$harga);
    $this->waktu = $waktu;
  }
  public function getInfoProduk() {
    $str = "Komik : " . parent::getInfoProduk() . " - {$this->waktu} waktu.";
    return $str;
  }
}

$produk1 = new Buku("Buku","PUBG Kishimoto","Shonen Jump", 30000, 100);
$produk2 = new Games("Naruto","Masashi Kishimoto","Shonen Jump", 30000, 50);
echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();