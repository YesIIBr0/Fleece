<?php
// Establecemos la conexión a la base de datos
session_start();
$db_host = "127.0.0.1";
$db_user = "root";
$db_password = "";
$db_name = "fleecedb";
$conn = mysqli_connect($db_host, $db_user, $db_password, $db_name);

if (!$conn) {
	die("Conexión fallida: " . mysqli_connect_error());
}

//Comprobar inicio de sesión
if (!isset($_SESSION['username'])) {
    header("Location: http://localhost/fleece-master/index.php?error=notLoggedIn");
    exit();
}

session_start(); // Inicia la sesión
if(isset($_SESSION['cart'])) {
    $carrito = $_SESSION['cart']; // Transfiere la información del carrito a una variable
} else {//En caso de que el carrito no exista
    header("Location: http://localhost/fleece-master/index.php?error=NoCart");
    exit();
}

foreach($carrito as $producto) {
    $id_producto = $producto['id'];
    $cantidad = $producto['cantidad'];
    
    // Actualiza la cantidad del producto en la base de datos
    $sql = "UPDATE productos SET cantidad = cantidad - $cantidad WHERE id = $id_producto";
    mysqli_query($conexion, $sql);
}
?>