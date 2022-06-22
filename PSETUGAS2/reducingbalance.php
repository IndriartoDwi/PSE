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
        $umur=null;
        if (isset($_GET['perolehan'])) {
            $perolehan=$_GET['perolehan'];
            $umur=$_GET['umur'];
            $hasil=0;
            $hasil = ($perolehan-$residu)/$umur;  
        }
    ?>
  <div class="wrapper">
    <form action="" method="get">
      <label for="txtA">Harga Perolehan</label>
      <input class="u-full-width" type="text" id="txtA" name="perolehan" value="<?php echo $perolehan; ?>">

      <label for="txtC">Umur Ekonomis (Tahun)</label>
      <input class="u-full-width" type="text" id="txtC" name="umur" value="<?php echo $umur; ?>">

      <button type="button" class="button" onclick="location.href='index.php'">Back</button>
      <button type="submit" class="button-primary">Hitung</button>
    </form>
    <?php
            if (isset($_GET['perolehan'])) {
                $perolehan=$_GET['perolehan'];
                $umur=$_GET['umur'];
                $hasil = ($perolehan / $umur) * 2;
                $hasila = "Hasil depresiasi menggunakan metode Reducing Balance pada tahun pertama adalah " .number_format($hasil,0,',','.');
                echo "<h1>$hasila</h1>";
                for ($i=2; $i <= $umur; $i++) { 
                    $hasill = (($perolehan-$hasil) / $umur) * 2;
                    $hasilla = "Hasil depresiasi menggunakan metode Reducing Balance pada tahun ke " .$i. " adalah " .number_format($hasill,0,',','.');
                    echo "<h1>$hasilla</h1>";
                    $perolehan = $perolehan - $hasill;
                    $hasill = ($perolehan/$umur)*2;
                }
            }
        ?>
  </div>
</body>
</html>