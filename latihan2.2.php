<?php 
Class belanja{
    public $namapembeli ;
    public $namabarang ;
    public $hargabarang ;
    public $jumlahbarang ;
    public $totalbayar;
    public $diskon ; 
    public $pajak = 0.02 ;
    public function totalharga(){
     $subtotal = $this->hargabarang * $this->jumlahbarang;
      return $subtotal;
    }
    public function total(){
        $total = $this->totalharga() - ($this->totalharga() * $this->diskon) + ($this->pajak * $this->totalharga());
        return $total;
    }
}

$belanja1 = new belanja();
$belanja1->namapembeli ="miftah";
$belanja1->namabarang = "sampo";
$belanja1->hargabarang = 9000;
$belanja1->jumlahbarang = 2;
$belanja1->diskon = 0.1;

echo "<pre>";
echo "------------------------------Warung Tegal-------------------------". "\n";
echo "-------------------------------------------------------------------". "\n";
echo "kasir : Sistem". "\n";
echo "Nama Pembeli : " . $belanja1->namapembeli. "\n";
echo "-------------------------------------------------------------------". "\n";
echo "Nama Barang : " . $belanja1->namabarang . "\n";
echo "Harga Barang : RP." . $belanja1->hargabarang . "\n";
echo "Jumlah Barang : " . $belanja1->jumlahbarang . "\n";
echo "-------------------------------------------------------------------". "\n";
echo "subtotal harga : RP.". $belanja1->totalharga(). "\n";
echo "diskon : RP." . ($belanja1->totalharga() * $belanja1->diskon). "\n";
echo "pajak : RP." . ($belanja1->pajak * $belanja1->totalharga()). "\n";
echo "-------------------------------------------------------------------". "\n";
echo "total harga yang harus dibayar : RP." . $belanja1->total(). "\n";
echo "</pre>";
?>