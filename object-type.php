<?php 

class Produk {
  public $judul,$penulis,$penerbit,$harga;
  public function __construct($judul = "judul",$penulis = "penulis",$penerbit = "penerbit",$harga = 0) {
    $this->judul = $judul;
    $this->penulis = $penulis;
    $this->penerbit = $penerbit;
    $this->harga = $harga;
  }

  public function getLabel() {
    return "$this->penulis, $this->penerbit";
  }
}

class CetakInfoProduk {
  public function cetak( Produk $produ ) { //objec dengan tipe dada sendiri. (Produk = tipe data, $produk = Objec)
    $str = "{$produ->judul} | {$produ->getLabel()} (Rp. {$produ->harga})";
    return $str;
  }
}

$produk1 = new Produk("Naruto","Masashi Kishimoto","Shonen Jump", 30000);
echo "Komik : " . $produk1->getLabel();
echo "<br>";

$infoProduk1 = new CetakInfoProduk();
echo $infoProduk1->cetak($produk1);

