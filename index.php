<?php
if ($_COOKIE["user"]) {
    echo $_COOKIE["user"];
} else {
    header("Location: login.php");
}
