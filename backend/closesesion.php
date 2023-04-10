<?php
session_start();
$db_host = "127.0.0.1";
$db_user = "root";
$db_password = "";
$db_name = "fleecedb";
$conn = mysqli_connect($db_host, $db_user, $db_password, $db_name);

if (!$conn) {
	die("Conexión fallida: " . mysqli_connect_error());
}

if (!isset($_SESSION['username'])) {
    echo '<script type="text/javascript">'; 
    echo 'alert("No Sesion to close.");'; 
    echo 'window.location.href ="http://localhost/fleece-master/index.php";';
    echo '</script>';
    exit();
}
else
{
    unset($_SESSION['username']);
    echo '<script type="text/javascript">'; 
    echo 'alert("Sesion closed.");'; 
    echo 'window.location.href ="http://localhost/fleece-master/index.php";';
    echo '</script>';
    exit();
}

?>