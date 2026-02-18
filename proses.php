<?php
class produk {
    public $pinjaman;
    public static $bunga = 10 ;
    public $lama;
    public static $denda = 0.0015;
    public $keterlambatan;
    public function Totalpinjaman(){
        return $this->pinjaman + ($this->pinjaman / self::$bunga);
    }
    public function Angsuran(){
        return $this->Totalpinjaman() / $this->lama;
    }
    public function besar_denda(){
        return $this->Angsuran() * ($this->keterlambatan * self::$denda);
}
    Public function angsuran_denda(){
        return $this->Angsuran() + $this->besar_denda();
}
}
$produk1 = new produk();
$produk1->pinjaman = htmlspecialchars($_POST['pinjaman']);
$produk1->lama = htmlspecialchars($_POST['lama']);
$produk1->keterlambatan = htmlspecialchars($_POST['keterlambatan']);


echo "<h2>toko pegadaian syariah</h2>"."<br>";
echo "____________________________________________________________"."<br>";
echo "besar pinjaman :RP " . $produk1->pinjaman . "<br>";
echo "besar bunga : " . produk::$bunga . "%" . "<br>";
echo "lama pinjaman : " . $produk1->lama . " bulan" . "<br>";
echo "___________________________________________________________"."<br>";
echo "Total pinjaman :RP " . $produk1->Totalpinjaman() . "<br>";
echo "besaran angsuran :RP " . $produk1->Angsuran() . "<br>";
echo "____________________________________________________________"."<br>";
echo "keterlambatan : " . $produk1->keterlambatan . " hari" . "<br>";
echo "besaran denda :RP " . $produk1->besar_denda() . "<br>";
echo "besaran angsuran + denda :RP " . $produk1->angsuran_denda() . "<br>";
echo "============================================================"."<br>";
?>
