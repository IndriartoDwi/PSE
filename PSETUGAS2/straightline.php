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
            $hasil=0;
            $hasil = ($perolehan-$residu)/$umur;  
        }
    ?>
  <div class="wrapper">
    <form action="" method="get">
      <label for="txtA">Harga Perolehan</label>
      <input class="u-full-width" type="text" id="txtA" name="perolehan" value="<?php echo $perolehan; ?>">
      
      <label for="txtB">Nilai Residu</label>
      <input class="u-full-width" type="text" id="txtB" name="residu" value="<?php echo $residu; ?>">

      <label for="txtC">Umur Ekonomis (Tahun)</label>
      <input class="u-full-width" type="text" id="txtC" name="umur" value="<?php echo $umur; ?>">

      <button type="button" class="button" onclick="location.href='index.php'">Back</button>
      <button type="submit" class="button-primary">Hitung</button>
    </form>
    <?php
            if (isset($_GET['perolehan'])) {
                $hasil = "Hasil depresiasi pertahunnya selama ". $umur . " tahun menggunakan metode Straight Line adalah " .number_format($hasil,0,',','.');
                echo "<h1>$hasil</h1>" ;
            }
        ?>
  </div>
</body>
</html>