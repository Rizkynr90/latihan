<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
        <form action="" method="POST">
            <table>
            <tr>
                <td>Nama Kucing</td>
                <td> : </td>
                <td><input type="text" name="kucing"></td>
            </tr>
            <tr>
                <td>Warna Kucing</td>
                <td> : </td>
                <td><input type="text" name="warna"></td>
            </tr>
            <tr>
                <td>Jumlah Kaki Kucing</td>
                <td> : </td>
                <td><input type="number" name="jumlahKaki" min="0" max="5"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name="save" value="Save">
            </tr>
            </table>
        </form>
</body>
</html>

<?php
if (isset($_POST['save'])) {
    $kucing = $_POST['kucing'];
    $warna = $_POST['warna'];
    $jumlahKaki = $_POST['jumlahKaki'];

    class kucing
    {
        public $kucing;
        public $warna;
        public $jumlahKaki;

        public function __construct($kucing, $warna)
        {
            $this->kucing = $kucing;
            $this->warna = $warna;
        }
        public function jumlahKaki($jumlahKaki)
        {
            if ($jumlahKaki <= 3) {
                $ket = "cingked";
            } else if ($jumlahKaki == 4) {
                $ket = "Normal";
            } else if ($jumlahKaki > 4) {
                $ket = "Siluman";
            }
            return $ket;
        }
    }
    $kucing1 = new kucing($kucing, $warna);
    echo "Nama Kucing : " . $kucing1->kucing . "<br>";
    echo "Warna Kucing : " . $kucing1->warna . "<br>";
    echo "Jumlah Kaki : " . $kucing1->jumlahKaki($jumlahKaki);
}