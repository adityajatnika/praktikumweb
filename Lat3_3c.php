<?php
 session_start();
 if (empty($_SESSION["nilai"])) {
   echo "Maaf, anda belum memasukkan nilai";
 } else {

?>
<!DOCTYPE html>
<html lang=”en”>
 <head>
 <meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>  <title>Mencari Faktorial</title>
 </head>
 <body>
 Nilai Faktorial dari <?php
   $nilai = $_SESSION["nilai"];
   echo $nilai;
   $fak = $nilai;
   while($nilai!=1){
     $temp = $nilai-1;
     $fak = $fak*$temp;
     $nilai-=1;
   }
   echo " adalah ".$fak;
   session_destroy();
  ?>. <br>
 <form id="form1" name="form1" method="post" action="Lat3_3a.php">  <input type="submit" name="button" id="button" value="Kembali" />  </form>
 </body>
</html>
<?php } ?>
