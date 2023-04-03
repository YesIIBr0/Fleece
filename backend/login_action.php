<?php
// Conexion a la base de datos
$db_host = "localhost";
$db_user = "usuario_db";
$db_password = "contraseña_db";
$db_name = "nombre_db";
$conn = mysqli_connect($db_host, $db_user, $db_password, $db_name);

if (!$conn) {
	die("Conexión fallida: " . mysqli_connect_error());
}

// Recuperar los datos del formulario de inicio de sesion
$username = mysqli_real_escape_string($conn, $_POST['username']);
$password = mysqli_real_escape_string($conn, $_POST['password']);

//Medidas de seguridad
if (!preg_match("/^[a-zA-Z0-9]+$/", $username)) {
    // El nombre de usuario contiene caracteres no permitidos
    header("Location: Log In.php?error=nombre_de_usuario_invalido");
    exit();
}

if (empty($password)) {
    // La contraseña esta vacía
    header("Location: Log In.php?error=contraseña_vacia");
    exit();
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    // El correo electronico no es valido
    header ("Location: Log In.php?error=correo_invalido");
    exit();
}

// Consulta SQL para buscar el usuario en la base de datos
$sql = "SELECT * FROM usuarios WHERE username = '$username' OR email = '$username' LIMIT 1";
$result = mysqli_query($conn, $sql);

// Verificar si se encontro el usuario
if (mysqli_num_rows($result) > 0) {
	$user = mysqli_fetch_assoc($result);
	$hash = $user['password'];
	
	// Verificar la contraseña
	if (password_verify($password, $hash)) {
		// Inicio de sesion exitoso, redirigir al usuario a la pagina de inicio
		session_start();
		
		//Medida de seguridad para que un usuario no inicie sesion luego de haber iniciado una
        if (session_status() === PHP_SESSION_ACTIVE && isset($_SESSION['user_id'])) {
            header("Location: index.php?error=SesionYaIniciada");
            exit();
        }

		$_SESSION['username'] = $user['username'];
		header("Location: index.php");
		exit();
	} else {
		// Contraseña incorrecta
		header("Location: Log In.php?error=campos_incorrectos");
		exit();
	}
} else {
	// Usuario no encontrado
	header("Location: Log In.php?error=campos_incorrectos");
	exit();
}
?>