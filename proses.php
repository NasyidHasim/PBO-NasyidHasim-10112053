<?php
// ====================================
// CLASS MAHASISWA (OOP)
// ====================================
class Mahasiswa {
    public $nama;
    public $kelas;
    public $matkul;
    public $nilai;

    public function __construct($nama, $kelas, $matkul, $nilai) {
        $this->nama  = $nama;
        $this->kelas = $kelas;
        $this->matkul = $matkul;
        $this->nilai = $nilai;
    }

    public function getStatus() {
        return ($this->nilai >= 60) ? "Lulus Kuis" : "Tidak Lulus Kuis";
    }
}

// ====================================
// PROSES DATA DARI FORM
// ====================================

if (isset($_POST['submit'])) {

    $data = []; // array penampung objek mahasiswa

    // Loop untuk setiap data input mahasiswa
    for ($i = 0; $i < count($_POST['nama']); $i++) {

        // Cek jika nama kosong → skip
        if (!empty($_POST['nama'][$i])) {
            
            // Buat object Mahasiswa per index
            $mhs = new Mahasiswa(
                $_POST['nama'][$i],
                $_POST['kelas'][$i],
                $_POST['matkul'][$i],
                $_POST['nilai'][$i]
            );

            // Masukkan ke array
            $data[] = $mhs;
        }
    }

    // ==============================
    // TAMPILKAN OUTPUT
    // ==============================
    echo "<h2>Data Nilai Mahasiswa</h2>";

    foreach ($data as $mhs) {
        echo "Nama : " . $mhs->nama . "<br>";
        echo "Kelas : " . $mhs->kelas . "<br>";
        echo "Mata Kuliah : " . $mhs->matkul . "<br>";
        echo "Nilai : " . $mhs->nilai . "<br>";
        echo $mhs->getStatus();
        echo "<hr>";
    }
}
?>