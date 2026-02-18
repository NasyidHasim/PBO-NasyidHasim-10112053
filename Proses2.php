<?php
class produk {
    public $pinjaman;
    public static $bunga = 10;
    public $lama;

    public function Totalpinjaman(){
        return $this->pinjaman + ($this->pinjaman / self::$bunga);
    }
    public function Angsuran(){
        return $this->Totalpinjaman() / $this->lama;  
    }
}
$produk1 = new produk();
$produk1->pinjaman = htmlspecialchars($_POST['nama']);
$produk1->lama = htmlspecialchars($_POST['lama']);


echo "<h2>toko pegadaian syariah</h2>"."<br>";
echo "____________________________________________________________"."<br>";
echo "besar pinjaman :RP " . $produk1->pinjaman . "<br>";
echo "besar bunga : " . produk::$bunga . "%" . "<br>";
echo "lama pinjaman : " . $produk1->lama . " bulan" . "<br>";
echo "___________________________________________________________"."<br>";
echo "Total pinjaman :RP " . $produk1->Totalpinjaman() . "<br>";
echo "besaran angsuran :RP " . $produk1->Angsuran() . "<br>";
echo "____________________________________________________________"."<br>";
?>
