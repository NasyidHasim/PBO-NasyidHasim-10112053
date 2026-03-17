<html>
    <head>
        <title>Belajar OOP - form produk</title>
    </head>
    <body>
        <h2>Input Data Perhitungan Bangun Ruang</h2>
<form method="post" action="Proses Tugas 6.php">

        Jenis          :
        <input list="menu" name="jenis[]">

    <datalist id="menu">
        <option value="Bola">
        <option value="Kerucut">
        <option value="Limas Segi Empat">
        <option value="Kubus">
        <option value="Tabung">
    </datalist>
    <input list="menu1" name="jenis[]">
    <datalist id="menu1">
        <option value="Bola">
        <option value="Kerucut">
        <option value="Limas Segi Empat">
        <option value="Kubus">
        <option value="Tabung">
    </datalist>
    <input list="menu2" name="jenis[]">
    <datalist id="menu2">
        <option value="Bola">
        <option value="Kerucut">
        <option value="Limas Segi Empat">
        <option value="Kubus">
        <option value="Tabung">
    </datalist>
    <input list="menu3" name="jenis[]">
    <datalist id="menu3">
        <option value="Bola">
        <option value="Kerucut">
        <option value="Limas Segi Empat">
        <option value="Kubus">
        <option value="Tabung">
    </datalist>
    <input list="menu4" name="jenis[]">
    <datalist id="menu4">
        <option value="Bola">
        <option value="Kerucut">
        <option value="Limas Segi Empat">
        <option value="Kubus">
        <option value="Tabung">
    </datalist>
    <br><br>
        sisi           :
        <input type="text" name="sisi[]">
        <input type="text" name="sisi[]">
        <input type="text" name="sisi[]">
        <input type="text" name="sisi[]">
        <input type="text" name="sisi[]"><br><br>
        jari           :
        <input type="text" name="jari[]">
        <input type="text" name="jari[]">
        <input type="text" name="jari[]">
        <input type="text" name="jari[]">
        <input type="text" name="jari[]"><br><br>
        tinggi         : 
        <input type="text" name="tinggi[]">
        <input type="text" name="tinggi[]">
        <input type="text" name="tinggi[]">
        <input type="text" name="tinggi[]">
        <input type="text" name="tinggi[]"><br><br>
        
        <button type="submit" name="submit">simpan</button>
        </form>
    </body>
</html>