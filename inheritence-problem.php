<?php 

class Produk {
  public 
    $judul = "judul",
    $penulis = "penulis",
    $penerbit = "penerbit",
    $harga = 0,
    $halaman = 0,
    $waktu = 0,
    $tipe = 0;

  public function __construct($judul,$penulis,$penerbit,$harga,$halaman,$waktu,$tipe) {
    $this->judul = $judul;
    $this->penulis = $penulis;
    $this->penerbit = $penerbit;
    $this->harga = $harga;
    $this->halaman = $halaman;
    $this->waktu = $waktu;
    $this->tipe = $tipe;
  }

  public function getLabel() {
    return "$this->penulis, $this->penerbit";
  }

  
  public function getInfoLengkap() {
    // $buku = new Produk("Naruto","Masashi Kishimoto","Shonen Jump", 30000, 100, 0, "buku");
    $str = "{$this->judul} {$this->getLabel()} {$this->harga}";
    if( $this->tipe == "buku" ) {
      $str .= " - {$this->halaman} halaman.";
    } else if( $this->tipe == "games" ) {
      $str .= " ~ {$this->waktu} Jam.";
    }
    return $str;
  }
}

class CetakInfoProduk {
  public function cetak( Produk $produ ) {
    $str = "{$produ->judul} | {$produ->getLabel()} (Rp. {$produ->harga}) {$produ->halaman} {$produ->waktu}";
    return $str;
  }
}

$produk1 = new Produk("Naruto","Masashi Kishimoto","Shonen Jump", 30000, 100, 0, "buku");
$produk2 = new Produk("Naruto","Masashi Kishimoto","Shonen Jump", 30000, 0, 50, "games");
echo $produk2->getInfoLengkap();