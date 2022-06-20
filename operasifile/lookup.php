<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Daftar Tamu</title>
  </head>
  <body>
    <h3>Daftar Tamu</h3>
    <table border="1">
      <tr>
        <th>Nama</th>
        <th>Komentar</th>
      </tr>
      <?php
      $file = "guestbook.txt" or die("can't open file");
      $fh = fopen($file, 'r');
      while(!feof($fh)){
        $data = fgets($fh);
        $pisah = explode(";", $data);
        echo "<tr>";
        if($pisah[0]!=null){
          foreach ($pisah as $key => $value) {
            echo "<td>".$value;
          }
        }
      }
       ?>
    </table>
    <br>
    <a href="index.php">Tambah Komentar</a>
  </body>
</html>
