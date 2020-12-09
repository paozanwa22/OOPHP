<?php 

class Komik extends Produk implements InfoProduk {
  public $halaman;
  public function __construct( $judul,$penulis,$penerbit,$harga,$halaman ){
    parent::__construct($judul,$penulis,$penerbit,$harga);
    $this->halaman = $halaman;
  }

  public function getInfo() {
    $str = "{$this->judul} {$this->getLabel()} {$this->harga}";
    return $str;
  }
  
  public function getInfoProduk() {
    $str = "Komik : " . $this->getInfo() . " - {$this->halaman} halaman.";
    return $str;
  }
}