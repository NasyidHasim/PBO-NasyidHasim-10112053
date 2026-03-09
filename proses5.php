<?php 
class belanja{
    public $harga;
    public $member;

    public function diskon() {
        if ($this->member=="iya" && $this->harga > 500000) {
            return 50000;
        }
        elseif ($this->member=="iya" && $this->harga >100000) {
            return 15000;
        }
        elseif ($this->member=="tidak" && $this->harga >100000) {
            return 5000;
        }
            return 0;
        }
        
        
    
    public function totalBayar() {
         if ($this->member=="iya" && $this->harga > 500000) {
            return $this->harga - 50000;
         }
         elseif ($this->member=="iya" && $this->harga >100000) {
            return $this->harga - 15000;            
         }
         elseif ($this->member=="tidak" && $this->harga >100000) {
            return $this->harga - 5000;
         }
         
            return $this->harga;
        }
        
    
    public function ketMember() {
        if ($this->member=="iya") {
            return "mempunyai member";
        }
        else {
            return "tidak mempunyai member";
        }
    }
}





$belanja1 = new belanja();
$belanja1->harga= htmlspecialchars ($_POST['harga']); 
$belanja1->member = htmlspecialchars ($_POST['member']);

if ($belanja1->harga==""  ||  $belanja1->member=="") {
    echo"<h1>maaf harus diisi semua</h1>";
}elseif ($belanja1->harga<0) {
    echo "<h1>maaf kak gak boleh minus</h1>";
}
 else{


echo "<h2>Sistem Hitung Kasir</h2>";
echo "____________________________________________________________"."<br>";
echo "Keterangan Member :". $belanja1->ketMember()."<br>";
echo "Diskon            :". $belanja1->diskon()."<br>";
echo "____________________________________________________________"."<br>";
echo "harga             :". $belanja1->harga."<br>";
echo "total bayar       :". $belanja1->totalBayar()."<br>";
}
?>