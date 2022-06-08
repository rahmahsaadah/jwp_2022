<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perhitungan Luas Bangun Datar</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
</head>
<body>
    <br><br>
    <!--navbar -->
    <?php include '../component/navbar.php';?>    
    <br><br>

    <br>
    <!-- Menampilkan Tabel Perhitungan segitiga -->
	<?php include '../helpers/perhitungan_segitiga.php';?> 

    <br>
	<!-- Menampilkan Tabel Perhitungan Persegi -->
	<?php include '../helpers/perhitungan_persegi.php';?> 

    <br>
    <!-- Menampilkan Tabel Perhitungan lingkaran -->
	<?php include '../helpers/perhitungan_lingkaran.php';?> 
    
    <br>
    <!-- Menampilkan Persentase Perhitungan -->
    <?php include '../helpers/perhitungan_persentase.php';?> 
    <br>
    
    <!-- Menampilkan Persentase Perhitungan -->
    <?php include '../helpers/max_min.php';?> 


    <script src="../assets/js/bootstrap.min.js"></script>
</body>
</html>