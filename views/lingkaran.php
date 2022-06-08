<?php
    include '../helpers/function.php';
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LINGKARAN</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
</head>
<body>
    <!--nAV bAR  -->
    <?php include '../component/navbar.php';?>   
    <br><br><br>
    <div class="container">

        <div class="row justify-content-center">
        </div>
                <br>
                <br>     

            <!-- FORM INPUT -->
            <form method="post" action="">
                            <div class="row mt-1">  
                            <div class="col-md-12">
                                <div class="form-group">
                                    <h5><label class="small mb-1" for="">Jari-Jari Lingkaran</label></h5>
                                    <input class="form-control py-4" name="jari" id="" type="text" onkeypress="return isNumberKey(event)" placeholder="Masukkan Jari-Jari Lingkaran"/>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <button type="submit" name="simpan" class="btn btn-info">
                                    Hitung
                                </button>
                                <input type="button" value="Refresh" class="btn btn-warning" onclick="window.location.href='lingkaran.php'"/>
                            </div>
                            </div>
                        </form>
            
        <br>   

        <?php 
        if(isset($_POST['simpan'])){
        $jari=$_POST['jari'];

            // menghitung luas lingkaran
            $luasLingkaran= (3.14*$jari*$jari); 

            //Tanggal dan waktu sekarang
            date_default_timezone_set('Asia/Makassar');
            $tgl=date("l,d-m-Y H:i:s");  
        
            // Format data yang akan diparsing
            $data = "\n $jari|$luasLingkaran|$tgl";

            // Buka file lingkaran.txt, kemudian tuliskan isi variabel di atas kedalam lingkaran.txt
            $fh = fopen("../output/lingkaran.txt", "a");
            fwrite($fh, $data);

            // Tutup file data.txt
            fclose($fh);

            echo "Hasil Perhitungan Luas Lingkaran<br />";
            echo "Pada Tanggal  $tgl  <br />";
            echo "Jari-jari = $jari<br />";
            echo "Luas Lingkaran [ (3.14*$jari*$jari)] = $luasLingkaran <br />";
        
    } ?>
    </div>

    <script language=Javascript>
        function isNumberKey(evt)
        {
            var charCode = (evt.which) ? evt.which : evt.keyCode;
            if (charCode != 46 && charCode > 31 
            && (charCode < 48 || charCode > 57))
                return false;

            return true;
        }
    </script>
</body>
</html>