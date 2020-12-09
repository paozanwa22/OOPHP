<?php 

class Produk {
  public $judul,$penulis,$penerbit,$harga;

  //membuat constructor //nemapung nilai dari objec 
  public function __construct($judul = "judul",$penulis = "penulis",$penerbit = "penerbit",$harga = 0) { //memberi nilai default
    $this->judul = $judul;
    $this->penulis = $penulis;
    $this->penerbit = $penerbit;
    $this->harga = $harga;
  }

  public function getLabel() {
    return "$this->penulis, $this->penerbit";
  }
}

$produk1 = new Produk("Naruto","Masashi Kishimoto","Shonen Jump", 30000);
$produk2 = new Produk("Uncharted","Neil Drucmann","Sony Computer", 250000);

echo "Komik : " . $produk1->getLabel();
echo "<br>";
echo "Games : " . $produk2->getLabel();






















//karna tidak ada tag HTML di bawah, penutup php boleh tidak di tulis