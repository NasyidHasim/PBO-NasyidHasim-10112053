<?php

class BangunRuang {

    public $jenis;
    public $sisi;
    public $jari;
    public $tinggi;

    function __construct($jenis,$sisi,$jari,$tinggi){
        $this->sisi = $sisi;
        $this->jari = $jari;
        $this->tinggi = $tinggi;
        $this->jenis = $jenis;
    }

    function hitungVolume(){

        switch($this->jenis){

            case "Bola":
                return (4/3) * pi() * pow($this->jari,3);
            break;

            case "Kerucut":
                return (1/3) * pi() * pow($this->jari,2) * $this->tinggi;
            break;

            case "Limas Segi Empat":
                return (1/3) * pow($this->sisi,2) * $this->tinggi;
            break;

            case "Kubus":
                return pow($this->sisi,3);
            break;

            case "Tabung":
                return pi() * pow($this->jari,2) * $this->tinggi;
            break;

        }
        return 0;
    }

}



?>

<html>
<head>
<title>Volume Bangun Ruang</title>
<style>
table{
border-collapse:separate;
width:70%;
}
th{
background:blue;
color:white;
padding:8px;
border: 1px groove black;
}
td{
border:1px ridge black;
padding:8px;
text-align:center;
}
td:nth-child(1){
border:1px ridge black;
padding:8px;
text-align:justify;
}
</style>
</head>

<body>

<h2>Tabel Perhitungan Volume Bangun Ruang</h2>

<table>

<tr>
<th>Jenis Bangun Ruang</th>
<th>Sisi</th>
<th>Jari-jari</th>
<th>Tinggi</th>
<th>Volume</th>
</tr>

<?php

 $data = []; // array penampung objek

if (isset($_POST['submit'])) {

    if (isset($_POST['jenis']) || is_array($_POST['jenis'])) {
        
        for ($i = 0; $i < count($_POST['jenis']); $i++) {

            if (!empty($_POST['jenis'][$i])) {

                $br = new BangunRuang(
                    $_POST['jenis'][$i],
                    $_POST['sisi'][$i],
                    $_POST['jari'][$i],
                    $_POST['tinggi'][$i]
                );

                $data[] = $br;
            }
        }
    }
    
}

foreach($data as $br){

echo "<tr>
<td>".$br->jenis."</td>
<td>".$br->sisi."</td>
<td>".$br->jari."</td>
<td>".$br->tinggi."</td>
<td>".$br->hitungVolume()."</td>
</tr>";

}

?>

</table>

</body>
</html>