<?php 

class Produk {
  //property
  public $judul = "judul",
         $penulis = "penulis",
         $penerbit = "penerbit",
         $harga = 0;

  //method
  public function getLabel() {
    return "$this->penulis, $this->penerbit"; //$this untuk mengakses variable yang di luar
  }
}

// $produk1 = new Produk();
// $produk1->judul = "Naruto";
// var_dump($produk1);

// $produk2 = new Produk();
// $produk2->judul = "Uncharted";
// var_dump($produk2->judul);

// $produk3 = new Produk();
// $produk3->judul = "Uncharted";
// $produk3->tambahProperty = "Alhamdulillah";
// var_dump($produk3);

$produk4 = new Produk();
$produk4->judul = "Naruto";
$produk4->penulis = "Masashi Kishimoto";
$produk4->penerbit = "Shonen Jump";
$produk4->harga = 30000;

$produk5 = new Produk();
$produk5->judul = "Uncharted";
$produk5->penulis = "Neil Drucmann";
$produk5->penerbit = "Sony Computer";
$produk5->harga = 250000;

echo "Komik : " . $produk4->getLabel();
echo "<br>";
echo "Games : " . $produk5->getLabel();


//karna tidak ada tag HTML di bawah, penutup php boleh tidak di tulis