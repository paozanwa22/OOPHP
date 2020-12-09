<?php 

// class ContohStatic {
//   public static $angka = 1; //visibility keyword variable = value;

//   public static function halo() {
//     return "Halo " . self::$angka++ . " kali.";
//   }
// }

// // cara mengakses property $angka
// echo ContohStatic::$angka;
// echo "<br>";
// echo ContohStatic::halo();
// echo ContohStatic::halo();


class Contoh {
  public static $angka = 1;

  public function halo() {
    return "Halo " . self::$angka++ . " Kali. <br>";
  }
}

$obj = new Contoh;
echo $obj->halo();
echo $obj->halo();
echo $obj->halo();

echo "<hr>";

$obj2 = new Contoh;
echo $obj2->halo();
echo $obj2->halo();
echo $obj2->halo();



?>