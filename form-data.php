<html>
<head>
    <title>Toko Pegadaian Syariah</title>
</head>
<body>
    <h2>Toko Pegadaian</h2>
    <h2>terimakasih telah menggunakan layanan kami</h2>
    <h4>input data produk dengan denda keterlambatan</h4>
    <form action="proses.php" method="post">
        besar pinjaman:
        <input type="text" name="pinjaman"> <br>
        
        lama pinjaman:
        <input type="number" name="lama"> <br>
       
        keterlambatan: 
        <input type="number" name="keterlambatan"> <br>

        <input type="submit" value="Simpan">

    </form>
    <h4>input data produk dengan tanpa denda </h4>
    <form action="proses2.php" method="post">
        besar pinjaman:
        <input type="text" name="nama"> <br>

        lama pinjaman:
        <input type="number" name="lama"> <br>
    
        <input type="submit" values="simpan">

    </form>
</body>
</html>
