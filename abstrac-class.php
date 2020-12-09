<?php 

abstract class Produk {
  private $judul = "judul",
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

  abstract public function getInfoProduk();

  public function getInfo() {
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
    $str = "Komik : " . $this->getInfo() . " - {$this->halaman} halaman.";
    return $str;
  }
}

class Games extends Produk {
  public $waktu;
  public function __construct( $judul,$penulis,$penerbit,$harga,$waktu ){
    parent::__construct($judul,$penulis,$penerbit,$harga);
    $this->waktu = $waktu;
  }

  public function setDiskon( $diskon ) {
    return $this->diskon = $diskon;
  }

  public function getInfoProduk() {
    $str = "Komik : " . $this->getInfo() . " - {$this->waktu} waktu.";
    return $str;
  }
}

class CetakInfoProduk {
  public $dafrarProduk = array();

  public function tambahProduk( Produk $produk ) {
    $this->daftarProduk[] = $produk;
  }

  public function cetak() {
    $str = "DAFTAR PRODUK : <br>";
    foreach( $this->daftarProduk as $p ) {
      $str .= "- {$p->getInfoProduk()} <br>";
    }

    return $str;
  }
}

$produk1 = new Buku("Buku","PUBG Kishimoto","Shonen Jump", 30000, 100);
$produk2 = new Games("Naruto","Masashi Kishimoto","Shonen Jump", 30000, 50);

$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk( $produk1 );
$cetakProduk->tambahProduk( $produk2 );
echo $cetakProduk->cetak(); 

