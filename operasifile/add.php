<?php
$myFile = "guestbook.txt";
$fh = fopen($myFile, 'a') or die("can't open file");
$nama = $_POST['nama'];
$komen = $_POST['komentar']."\n";
fwrite($fh, $nama.';'.$komen);
fclose($fh);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>tambah komentar</title>
  </head>
  <body>
    <h2>Terima kasih <?php echo $_POST['nama'] ?>, komentar anda telah direkam!</h2>
    <a href="lookup.php">lihat semua komentar</a>
  </body>
</html>
