<?php 
    class komputer
    {
        public $pemilik = "Anim";
        public $merk = "Acer";
        public $ukuranlayar = "12 inch";

        public function kondisi1()
        {
            return "Dinyalakan";
        }
        public function kondisi2()
        {
            return "Dimatikan";
        }
    }
    $komputer1 = new komputer();
    echo "Pemilik Komputer : ".$komputer1->pemilik."<br>";
    echo "Merk komputer : ".$komputer1->merk."<br>";
    echo "Ukuran Layar Komputer : ".$komputer1->ukuranlayar."<br>";
    echo "Kondisi Komputer : ".$komputer1->kondisi1();
    echo "<hr>";
    $komputer2 = new komputer();
    echo "Pemilik Komputer : ".$komputer2->pemilik='Farrel'."<br>";
    echo "Merk komputer : ".$komputer2->merk='Redmi'."<br>";
    echo "Ukuran Layar Komputer : ".$komputer2->ukuranlayar='13.8 inch'."<br>";
    echo "Kondisi Komputer : ".$komputer2->kondisi2();
    echo "<hr>";
    $komputer3 = new komputer();
    echo "Pemilik Komputer : ".$komputer3->pemilik='Dante'."<br>";
    echo "Merk komputer : ".$komputer3->merk='Republic of Gamer'."<br>";
    echo "Ukuran Layar Komputer : ".$komputer3->ukuranlayar='14 inch'."<br>";
    echo "Kondisi Komputer : ".$komputer3->kondisi1();
    echo "<hr>";
    $komputer4 = new komputer();
    echo "Pemilik Komputer : ".$komputer4->pemilik='Aida'."<br>";
    echo "Merk komputer : ".$komputer4->merk='Lenovo'."<br>";
    echo "Ukuran Layar Komputer : ".$komputer4->ukuranlayar='13 inch'."<br>";
    echo "Kondisi Komputer : ".$komputer4->kondisi2();
    echo "<hr>";
    $komputer5 = new komputer();
    echo "Pemilik Komputer : ".$komputer5->pemilik='Nagisa'."<br>";
    echo "Merk komputer : ".$komputer5->merk='Asus'."<br>";
    echo "Ukuran Layar Komputer : ".$komputer5->ukuranlayar='14.5 inch'."<br>";
    echo "Kondisi Komputer : ".$komputer5->kondisi1();
?>      