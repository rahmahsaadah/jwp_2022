<?php
    include '../helpers/function.php';
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PERSEGI</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
</head>
<body>
    <!--navbar  -->
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
                                    <h5><label class="small mb-1" for="">Sisi Persegi</label></h5>
                                    <input class="form-control py-4" name="sisi" id="sisi" type="text" onkeypress="return isNumberKey(event)" placeholder="Masukkan Sisi Persegi"/>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <button type="submit" name="simpan" class="btn btn-info">
                                    Hitung
                                </button>
                                <input type="button" value="Refresh" class="btn btn-warning" onclick="window.location.href='persegi.php'"/>
                            </div>
                            </div>
                        </form>
            
            <?php 
            if(isset($_POST['simpan'])){ //proses setelah hitung di klik

            $sisi=$_POST['sisi']; //melakukan pengecekan apakah data itu ada isinya     

           //menghitung luas persegi
            $luas_persegi=lPersegi($sisi);

            //Tanggal dan waktu sekarang
            date_default_timezone_set('Asia/Makassar');
            $tgl=date("l,d-m-Y H:i:s");  
    
            // Format data yang akan diparsing
            $data = "\n $sisi|$sisi|$luas_persegi|$tgl";

            // Buka file persegi.txt, kemudian tuliskan isi variabel di atas kedalam persegi.txt
            $fh = fopen("../output/persegi.txt", "a"); // fopen pre-existing  file txt
            fwrite($fh, $data); // di tulis (menambah $fh=lokasinya, $data=datanya)

            // Tutup file data.txt
            fclose($fh);

            // menampilkan hasil perhitungan
            echo "Hasil Perhitungan Luas Persegi<br />";
            echo "Pada Tanggal $tgl <br />";
            echo "Sisi = $sisi <br />";       
            echo "Luas Persegi [ $sisi x $sisi ] = $luas_persegi <br />";

    }  ?>
    </div>

    <!-- validasi agar tidak bisa menginputkan huruf-->
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