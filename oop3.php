<?php
class kucing
{
    public $warna;

    public function __construct($a)
    {
        $this->warna = $a;
    }

    public function bersuara()
    {
        return "meong...meong...meong";
    }
}

$kucing1 = new kucing("Hitam");
echo "Warna Kucing : " . $kucing1->warna . "<br>";

$kucing2 = new kucing("Oren");
echo "Warna Kucing : " . $kucing2->warna . "<br>";
