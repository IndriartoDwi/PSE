<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="css/skeleton.css">
    <link rel="stylesheet" href="css/normalize.css">
    <style>
      .wrapper {
        max-width: 1200px;
        padding: 30px 0;
        margin: 0 auto;
      }
      input {
        margin-bottom: 20px;
      }
    </style>
  </head>
<body>
<?php
        $perolehan=null;
        $residu=null;
        $umur=null;
        if (isset($_GET['perolehan'])) {
            $perolehan=$_GET['perolehan'];
            $residu=$_GET['residu'];
            $umur=$_GET['umur'];
            $jml_umur = 0;
            for ($i=1; $i<=$umur ; $i++) { 
                $jml_umur = $jml_umur + $i;
            }
            $hasil = ($perolehan - $residu) * $umur / $jml_umur;    
        }
    ?>
  <div class="wrapper">
    <form action="" method="get">
      <label for="txtA">Harga Perolehan</label>
      <input class="u-full-width" type="text" id="txtA" name="perolehan" value="<?php echo $perolehan; ?>">

      <label for="txtC">Nilai Residu</label>
      <input class="u-full-width" type="text" id="txtC" name="residu" value="<?php echo $residu; ?>">

      <label for="txtC">Umur Ekonomis (Tahun)</label>
      <input class="u-full-width" type="text" id="txtC" name="umur" value="<?php echo $umur; ?>">

      <button type="button" class="button" onclick="location.href='index.php'">Back</button>
      <button type="submit" class="button-primary">Hitung</button>
    </form>
    <?php
        if (isset($_GET['perolehan'])) {
            $hasil = "Hasil depresiasi menggunakan metode Sum of The Year pada tahun ke-" . $umur . " adalah " .number_format($hasil,0,',',);
            echo "<h1>$hasil</h1>" ;
        }
        ?>
  </div>
</body>
</html>