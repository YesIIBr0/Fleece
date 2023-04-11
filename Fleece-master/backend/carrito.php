
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

//Comprobar inicio de sesión
if (!isset($_SESSION['username'])) {
    echo '<script type="text/javascript">'; 
    echo 'alert("You have to log in to add to cart");'; 
    echo 'window.location.href = "http://localhost/fleece-master/Buy_now.php";';
    echo '</script>';
    exit();
}

// Agregar producto al carrito
if(isset($_POST['add_to_cart'])) {
    $id = $_POST['id_producto'];
    $quantity = $_POST['unidades'];

    // Si el carrito de compras está vacío, lo inicializamos
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = array();
    }

    // Verificar si el producto ya está en el carrito
    if(isset($_SESSION['cart'][$id])) {
        // Si ya está, simplemente agregamos la cantidad
        $_SESSION['cart'][$id]['unidades'] += $quantity;
    } else {
        // Si no está, agregamos el producto completo
        $sql = "SELECT * FROM productos WHERE id_producto = '$id'";
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            $row['unidades'] = $quantity;
            $_SESSION['cart'][$row['id_producto']] = $row;
        } else {
            // Producto no encontrado en la base de datos (ARREGLAR)
            echo '<script type="text/javascript">'; 
            echo 'alert("WEO HAY PROBLEMAAAA");'; 
            echo 'window.location.href = "http://localhost/fleece-master/Buy_now.php";';
            echo '</script>';
            exit();
        }
    }
}

//(SIN IMPLEMENTAR) Eliminar carrito por completo
if(isset($_POST['remove_cart'])) {    
    unset($_SESSION['cart']);
}

// Eliminar producto del carrito
if(isset($_POST['remove_from_cart'])) {
    $id = $_POST['id_producto'];
    unset($_SESSION['cart'][$id]);
}

// Actualizar cantidad de un producto en el carrito
if(isset($_POST['update_cart'])) {
    $cart = $_SESSION['cart'];
    foreach($cart as $id => $quantity) {
        if(isset($_SESSION['cart'][$id])) {
            $_SESSION['cart'][$id]['unidades'] = $quantity;
        }
    }
}

// Mostrar el carrito de compras
if(isset($_SESSION['cart']) && count($_SESSION['cart']) > 0) {
    echo '<table>';
    echo '<thead><tr><th>Nombre del Producto</th><th>Precio</th><th>Cantidad</th><th>Total</th><th>Acciones</th></tr></thead>';
    echo '<tbody>';
    $total = 0;
    foreach($_SESSION['cart'] as $item) {
        $id = $item['id_producto'];
        $name = $item['nombre_producto'];
        $price = $item['precio'];
        $quantity = $item['unidades'];
        $subtotal = $price * $quantity;
        $total += $subtotal;

        // Mostramos la información del producto en una fila de la tabla
        echo '<tr>';
        echo '<td>' . $name . '</td>';
        echo '<td>' . number_format($price, 2) . '</td>';
        echo '<td>';
        echo '<form method="post">';
        echo '<input type="hidden" name="id" value="' . $id . '">';
        echo '<input type="number" name="quantity" min="1" max="10" value="' . $quantity . '">';
        echo '<button type="submit" name="update_cart">Actualizar</button>';
        echo '</form>';
        echo '</td>';
        echo '<td>' . number_format($subtotal, 2) . '</td>';
        echo '<td>';
        echo '<form method="post">';
        echo '<input type="hidden" name="id" value="' . $id . '">';
        echo '<button type="submit" name="remove_from_cart">Eliminar</button>';
        echo '<button type="submit" name="remove_cart">Eliminar Carro</button>';
        echo '</form>';
        echo '</td>';
        echo '</tr>';
    }
    echo '<tr>';
    echo '<td colspan="3">Total:</td>';
    echo '<td>$' . number_format($total, 2) . '</td>';    
    echo '</tr>';    
    echo '</table>';

    // Mostramos el botón para proceder al pago    
    echo '<form action="pago.php" method="post">';
    echo '<input type="hidden" name="total" value="' . $total . '">';
    echo '<input type="submit" value="Proceder al pago">';
    echo '</form>';
}

?>
