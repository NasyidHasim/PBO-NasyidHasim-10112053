<?php

class Employee {
    public $nama;
    public $gaji;
    public $lamaKerja;

    public function __construct($nama, $gaji, $lamaKerja){
        $this->nama = $nama;
        $this->gaji = $gaji;
        $this->lamaKerja = $lamaKerja;
    }

    public function getInfo(){
        return "Nama: $this->nama | Gaji: Rp ".number_format($this->gaji,0,',','.') .
               " | Lama Kerja: $this->lamaKerja tahun";
    }
}

class Programmer extends Employee {

    public function getInfo(){
        $bonus = 0;

        if ($this->lamaKerja >= 1 && $this->lamaKerja <= 10){
            $bonus = 0.01 * $this->lamaKerja;
        } elseif ($this->lamaKerja > 10){
            $bonus = 0.02 * $this->lamaKerja;
        }

        $total = $this->gaji + ($this->gaji * $bonus);

        return "Programmer: $this->nama | Gaji Akhir: Rp ".number_format($total,0,',','.');
    }
}

class Direktur extends Employee {

    public function getInfo(){
        $bonus = 0.5 * $this->lamaKerja;
        $tunjangan = 0.1 * $this->lamaKerja;

        $total = $this->gaji + ($this->gaji * $bonus) + ($this->gaji * $tunjangan);

        return "Direktur: $this->nama | Gaji Akhir: Rp ".number_format($total,0,',','.');
    }
}

class PegawaiMingguan extends Employee {
    public $hargaBarang;
    public $terjual;
    public $stock;

    public function __construct($nama, $gaji, $lamaKerja, $hargaBarang, $stock, $terjual){
        parent::__construct($nama, $gaji, $lamaKerja);
        $this->hargaBarang = $hargaBarang;
        $this->stock = $stock;
        $this->terjual = $terjual;
    }

    public function getInfo(){
        $persen = ($this->terjual / $this->stock) * 100;

        if ($persen > 70){
            // bonus 10% / barang terjual
            $bonus = 0.10 * $this->hargaBarang * $this->terjual;
        } else {
            // bonus 3% / barang terjual
            $bonus = 0.03 * $this->hargaBarang * $this->terjual;
        }

        $total = $this->gaji + $bonus;

        return "Pegawai Mingguan: $this->nama | Gaji Akhir: Rp ".number_format($total,0,',','.');
    }
}
if ($_POST){

    $nama  = $_POST["nama"];
    $gaji  = $_POST["gaji"];
    $lama  = $_POST["lama"];
    $jab   = $_POST["jabatan"];

    if ($jab == "programmer"){
        $obj = new Programmer($nama, $gaji, $lama);

    } elseif ($jab == "direktur"){
        $obj = new Direktur($nama, $gaji, $lama);

    } else {
        $harga = $_POST["harga"];
        $stock = $_POST["stock"];
        $terjual = $_POST["terjual"];

        $obj = new PegawaiMingguan($nama, $gaji, $lama, $harga, $stock, $terjual);
    }

    echo "<h3>Hasil Perhitungan</h3>";
    echo $obj->getInfo();
}
?>