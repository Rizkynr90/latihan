<?php 
    class segitiga 
    {
        public $setengah = 2;
        public $alas = 20;
        public $tinggi = 30;
        public function luassegitiga($setengah,$alas,$tinggi)
        {   
            $luas =  ($alas * $tinggi) / $setengah;
            return $luas;
        }
        public function kelilingsegitiga($panjangsisi)
        {
            $keliling = 3 * $panjangsisi;
            return $keliling;
        }
    }
    $segitiga1 = new segitiga();
    echo "<b>Luas Segitiga</b><br>";
    echo "Setengah : ".$segitiga1->setengah." cm"."<br>";
    echo "Alas : ".$segitiga1->alas." cm"."<br>";
    echo "Tinggi : ".$segitiga1->tinggi." cm"."<br>";
    echo "Luas Segitiga : ".$segitiga1->luassegitiga(0.5,20,30)." cm";
    echo "<hr>";
    $segitiga2 = new segitiga();
    echo "<b>Keliling Segitiga</b><br>";
    echo "Panjang Sisi : ".$segitiga2->panjangsisi=" 50"." cm"."<br>";
    echo "Keliling Segitiga : ".$segitiga2->kelilingsegitiga(50)." cm";
?>      