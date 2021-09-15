<?php
echo "<h3>Penilangan</h3>";

class sim
{
    public $nama = "RizkyN";
    protected $nik = "3202321004";
    private $masa_berlaku = "Aktif";

    public function lolos()
    {
        $a = $this->nik;
        $b = $this->masa_berlaku;
        if ($a == "3202321004" && $b == "Aktif") {
            $c = "Anda Lolos Tilang";
        } else {
            $c = "Anda Kami Tilang";
        }
        return $c;
    }
    public function info()
    {
        $a = $this->nik;
        $b = $this->nama;
        $c = "NIK : " . $a . " Nama : " . $b;
        return $c;
    }
}
$sim = new sim();
echo "<b>Nama :</b> " . $sim->nama . "<br>";
echo "<b>Info Data</b>: " . $sim->info() . "<br>";
echo "<b>Kondisi</b> : " . $sim->lolos();
