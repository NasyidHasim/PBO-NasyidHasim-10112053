<?php include "class_employee.php"; ?>

<h2>Input Data Karyawan</h2>

<form method="post">
    <label>Nama:</label><br>
    <input type="text" name="nama" required><br><br>

    <label>Gaji Pokok:</label><br>
    <input type="number" name="gaji" required><br><br>

    <label>Lama Kerja (tahun):</label><br>
    <input type="number" name="lama" required><br><br>

    <label>Pilih Jabatan:</label><br>
    <select name="jabatan" required>
        <option value="programmer">Programmer</option>
        <option value="direktur">Direktur</option>
        <option value="mingguan">Pegawai Mingguan</option>
    </select>
    <br><br>

    <!-- BAGIAN KHUSUS PEGAWAI MINGGUAN -->
    <div style="border:1px solid #ccc; padding:10px; width:300px;">
        <h4>Untuk Pegawai Mingguan</h4>
        Harga Barang: <input type="number" name="harga"><br><br>
        Stock Barang: <input type="number" name="stock"><br><br>
        Terjual: <input type="number" name="terjual"><br><br>
    </div>

    <button type="submit">Proses</button>
</form>


