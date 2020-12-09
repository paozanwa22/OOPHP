<?php 

class Games extends Produk implements InfoProduk {
  public $waktu;
  public function __construct( $judul,$penulis,$penerbit,$harga,$waktu ){
    parent::__construct($judul,$penulis,$penerbit,$harga);
    $this->waktu = $waktu;
  }

  public function setDiskon( $diskon ) {
    return $this->diskon = $diskon;
  }

  public function getInfo() {
    $str = "{$this->judul} {$this->getLabel()} {$this->harga}";
    return $str;
  }

  public function getInfoProduk() {
    $str = "Komik : " . $this->getInfo() . " - {$this->waktu} waktu.";
    return $str;
  }
}