<?php
 session_start();
 $_SESSION["nilai"] = $_POST["nilai"];
 header("location:Lat3_3c.php");
