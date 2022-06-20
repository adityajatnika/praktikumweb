<!DOCTYPE html>
<html lang=”en”>
  <head>
    <link rel="stylesheet" href="css/style.css">
    <script>
      function change() {
        let cname = document.getElementById('color').value;
        //document.body.style.backgroundColor = "blue";
        var text;
        switch(cname) {
          case 'merah':
          document.body.style.backgroundColor = "red";
            break;
          case 'jingga':
          document.body.style.backgroundColor = "orange";
          document.getElementById('pesan').innerHTML = '';
            break;
          case 'kuning':
          document.body.style.backgroundColor = "yellow";
          document.getElementById('pesan').innerHTML = '';
            break;
          case 'hijau':
          document.body.style.backgroundColor = "green";
          document.getElementById('pesan').innerHTML = '';
            break;
          case 'biru':
          document.body.style.backgroundColor = "blue";
          document.getElementById('pesan').innerHTML = '';
            break;
          case 'nila':
          document.body.style.backgroundColor = "indigo";
          document.getElementById('pesan').innerHTML = '';
            break;
          case 'ungu':
          document.body.style.backgroundColor = "purple";
          document.getElementById('pesan').innerHTML = '';
            break;
          default:
          document.getElementById('pesan').innerHTML = "punten, adanya warna pelangi doang";
        }
      }
    </script>
  </head>
  <body>
    <p>Suka warna apa : </p>
    <input type="text" id="color">
    <button type="button" name="button" onclick="change()">Coba Klik</button>
    <p id="pesan"></p>
  </body>
</html>
