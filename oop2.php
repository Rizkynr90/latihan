<?php
class ucapan
{
    public function siang()
    {
        return "Selamat Siang";
    }
    public function sore()
    {
        return "Selamat Sore";
    }
    public function __construct()
    {
        echo "Selamat Pagi";
    }
}

$selamat = new ucapan();
echo "<br>";
echo $selamat->siang() . "<br>";
echo $selamat->sore() . "<br>";
