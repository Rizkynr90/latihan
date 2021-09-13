<html>
    <head></head>
    <body>
        <form action="" method="POST">
            <table>
                <tr>
                    <td><b>Masukan Bilangan ke-1</b></td>
                    <td>:</td>
                    <td><input type="number" name="bil1"> </td>
                </tr>
                <tr>
                    <td><b>Masukan Bilangan ke-2</b></td>
                    <td>:</td>
                    <td><input type="number" name="bil2"> </td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" name="hitung" value="Menghitung"></td>
                </tr>
            </table>
        </form>
    </body>
</html>
<?php
if (isset($_POST['hitung'])) {
    $bil1 = $_POST['bil1'];
    $bil2 = $_POST['bil2'];

    class kalkulator
    {
        public $bil1;
        public $bil2;

        public function __construct($a, $b)
        {
            $this->bil1 = $a;
            $this->bil2 = $b;
        }
        public function penjumlahan()
        {
            return ($this->bil1 + $this->bil2);
        }
        public function pengurangan()
        {
            return ($this->bil1 - $this->bil2);
        }
        public function perkalian()
        {
            return ($this->bil1 * $this->bil2);
        }
        public function pembagian()
        {
            return ($this->bil1 / $this->bil2);
        }
        public function modulus()
        {
            return ($this->bil1 % $this->bil2);
        }
    }
    $aritmatika1 = new kalkulator($bil1, $bil2);
    echo "$bil1 + $bil2 : " . $aritmatika1->penjumlahan();
    echo "<br>";
    $aritmatika2 = new kalkulator($bil1, $bil2);
    echo "$bil1 - $bil2 : " . $aritmatika2->pengurangan();
    echo "<br>";
    $aritmatika3 = new kalkulator($bil1, $bil2);
    echo "$bil1 * $bil2 : " . $aritmatika3->perkalian();
    echo "<br>";
    $aritmatika4 = new kalkulator($bil1, $bil2);
    echo "$bil1 / $bil2 : " . $aritmatika4->pembagian();
    echo "<br>";
    $aritmatika5 = new kalkulator($bil1, $bil2);
    echo "$bil1 % $bil2 : " . $aritmatika5->modulus();
}
?>