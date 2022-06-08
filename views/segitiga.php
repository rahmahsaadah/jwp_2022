<?php
    include '../helpers/function.php';
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SEGITIGA</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
</head>
<body>
    <!--navbar-->
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
                                    <h5><label class="small mb-1" for="">Alas Segitiga</label></h5>
                                    <input class="form-control py-4" name="alas" id="" type="text" onkeypress="return isNumberKey(event)" placeholder="Masukkan Alas Segitiga"/>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <h5><label class="small mb-1" for="">Tinggi Segitiga</label></h5>
                                    <input class="form-control py-4" name="tinggi" id="" type="text" onkeypress="return isNumberKey(event)" placeholder="Masukkan Tinggi Segitiga"/>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <button type="submit" name="simpan" class="btn btn-info">
                                    Hitung
                                </button>
                                <input type="button" value="Refresh" class="btn btn-warning" onclick="window.location.href='segitiga.php'"/>
                            </div>
                            </div>
                        </form>

        <br>
        <?php 
        if(isset($_POST['simpan'])){ // proses s
        $alas=$_POST['alas']; //melakukan pengecekan apakah data itu ada isinya 
        $tinggi=$_POST['tinggi'];

        // menghitung luas segitiga
        $luasSegitiga=lSegitiga($alas, $tinggi);

        //Tanggal dan waktu sekarang
        date_default_timezone_set('Asia/Makassar');
        $tgl=date("l,d-m-Y H:i:s");   
        
        // Format data yang akan diparsing
        $data = "\n $alas|$tinggi|$luasSegitiga|$tgl";

        // Buka file segitiga.txt, kemudian tuliskan isi variabel di atas kedalam segitiga.txt
        $fh = fopen("../output/segitiga.txt", "a");
        fwrite($fh, $data);

        // Tutup file data.txt
        fclose($fh);

        echo "Hasil Perhitungan Luas Segitiga : <br />";
        echo "Pada Tanggal $tgl <br />";
        echo "Alas = $alas<br />";
        echo "Tinggi = $tinggi<br />";
        echo "Luas Segitiga[ ($alas x $tinggi)/2 ] = $luasSegitiga<br />";

    }  ?>
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