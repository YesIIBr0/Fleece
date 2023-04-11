<?php
// Establecemos la conexión a la base de datos
$db_host = "127.0.0.1";
$db_user = "root";
$db_password = "";
$db_name = "fleecedb";
$conn = mysqli_connect($db_host, $db_user, $db_password, $db_name);

if (!$conn) {
	die("Conexión fallida: " . mysqli_connect_error());
}

session_start(); // Inicia la sesión
if(isset($_SESSION['cart'])) {
    $carrito = $_SESSION['cart']; // Transfiere la información del carrito a una variable
} else {//En caso de que el carrito no exista
    header("Location: http://localhost/fleece-master/index.php?error=NoCart");
    exit();
}

foreach($carrito as $producto) {
    $id = $producto['id_producto'];
    $cantidad = $producto['unidades'];
    
    // Actualiza la cantidad del producto en la base de datos
    $sql = "UPDATE productos SET unidades = unidades - $cantidad WHERE id_producto = $id";
    mysqli_query($conn, $sql);
}

echo '<script type="text/javascript">'; 
echo 'alert("Su compra ha sido procesada exitosamente.");'; 
echo 'window.location.href = "http://localhost/fleece-master/Buy_now.php";';
echo '</script>';
unset($_SESSION['cart'][$id]);
exit();
?>