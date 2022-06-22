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
        $pemakaian = null;
        $kapasitas_max=null;
        if (isset($_GET['perolehan'])) {
            $perolehan=$_GET['perolehan'];
            $residu=$_GET['residu'];
            $pemakaian=$_GET['pemakaian'];
            $kapasitas_max=$_GET['kap_max'];
            $hasil=0;
                    $hasil = ($perolehan - $residu) * ($pemakaian / $kapasitas_max);
        }
    ?>
  <div class="wrapper">
    <form action="" method="get">
      <label for="txtA">Harga Perolehan</label>
      <input class="u-full-width" type="text" id="txtA" name="perolehan" value="<?php echo $perolehan; ?>">

      <label for="txtC">Nilai Residu</label>
      <input class="u-full-width" type="text" id="txtC" name="residu" value="<?php echo $residu; ?>">

      <label for="txtC">Pemakaian</label>
      <input class="u-full-width" type="text" id="txtC" name="pemakaian" value="<?php echo $pemakaian; ?>">

      <label for="txtC">Kapasitas Max</label>
      <input class="u-full-width" type="text" id="txtC" name="kap_max" value="<?php echo $kapasitas_max; ?>">

      <button type="button" class="button" onclick="location.href='index.php'">Back</button>
      <button type="submit" class="button-primary">Hitung</button>
    </form>
    <?php
            if (isset($_GET['perolehan'])) {
                $hasil = "Hasil depresiasi menggunakan metode Unit of Activity adalah " .number_format($hasil,0,',','.');
                echo "<h1>$hasil</h1>" ;
            }
        ?>
  </div>
</body>
</html>