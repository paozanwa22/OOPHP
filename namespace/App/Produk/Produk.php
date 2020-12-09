<?php 

abstract class Produk {
  protected $judul = "judul",
    $penulis = "penulis",
    $penerbit = "penerbit",
    $diskon = 0,
    $harga;

  public function __construct($judul,$penulis,$penerbit,$harga = 0) {
    $this->judul = $judul;
    $this->penulis = $penulis;
    $this->penerbit = $penerbit;
    $this->harga = $harga;
  }

  public function setJudul( $judul ) {
    if( !is_string($judul) ) {
      throw new Exception("Judul harus string");
    }
    return $this->judul = $judul;
  }

  public function getJudul() {
    return $this->judul;
  }

  public function setPenulis( $penulis ) {
    return $this->penulis = $penulis;
  }

  public function getPenulis() {
    return $this->penulis;
  }

  public function setPenerbit( $penerbit ) {
    return $this->penerbit = $penerbit;
  }
  
  public function getPenerbit() {
    return $this->penerbit;
  }

  public function setHarga( $harga ) {
    return $this->harga = $harga;
  }

  public function getHarga() {
    return $this->harga - ( $this->harga * $this->diskon / 100 );
  }

  public function getLabel() {
    return "$this->penulis, $this->penerbit";
  }

  abstract public function getInfo();

}