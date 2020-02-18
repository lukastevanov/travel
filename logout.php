<?php
session_start();

function logoutuser(){

if (isset($_SESSION['lemail']))
{
    unset($_SESSION['lemail']);
}
header("location:index.php");
}
try {
    logoutuser();
}
catch (Exception $e) {
    echo $e->getMessage();
}

?>