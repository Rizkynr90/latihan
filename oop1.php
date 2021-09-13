<?php
class kucing
{
    public $warna = "Coklat";
    public $jumlahkaki = 4;
    public $jenisbulu = "Panjang";
    public $makananfavorite = "Pindang";

    public function bersuara()
    {
        return "meong.....meong......meong";
    }
    public function berburu()
    {
        return "Berburu Ikan";
    }
}

$kucing1 = new kucing();
echo "Warna Kucing : " . $kucing1->warna . "<br>";
echo "Suara Kucing : " . $kucing1->bersuara() . "<br>";

$kucing2 = new kucing();
echo "Warna Kucing : " . $kucing2->warna = 'Putih' . "<br>";
echo "Suara Kucing : " . $kucing2->bersuara()
?>
