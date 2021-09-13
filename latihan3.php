<?php
class persegi
{
    public $panjang = 10;
    public $lebar = 20;
    public function luaspersegi($panjang, $lebar)
    {
        $luas = $panjang * $lebar;
        return $luas;
    }
    public function kelilingpersegi($panjang, $lebar)
    {
        $keliling = $panjang * $panjang * $lebar * $lebar;
        return $keliling;
    }
}
$persegi1 = new persegi();
echo "<b>Luas persegi</b><br>";
echo "Alas : " . $persegi1->panjang . " cm" . "<br>";
echo "Tinggi : " . $persegi1->lebar . " cm" . "<br>";
echo "Luas Segitiga : " . $persegi1->luaspersegi(10, 20) . " cm";
echo "<hr>";
$persegi2 = new persegi();
echo "<b>Keliling Segitiga</b><br>";
echo "Alas : " . $persegi2->panjang . " cm" . "<br>";
echo "Tinggi : " . $persegi2->lebar . " cm" . "<br>";
echo "Keliling Segitiga : " . $persegi2->kelilingpersegi(10, 20) . " cm";
