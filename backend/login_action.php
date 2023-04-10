
<?php
// Conexion a la base de datos
$db_host = "127.0.0.1";
$db_user = "root";
$db_password = "";
$db_name = "fleecedb";
$conn = mysqli_connect($db_host, $db_user, $db_password, $db_name);

if (!$conn) {
	die("Conexión fallida: " . mysqli_connect_error());
}

// Recuperar los datos del formulario de inicio de sesion
$email = mysqli_real_escape_string($conn, $_POST['email']);
$password = mysqli_real_escape_string($conn, $_POST['password']);

if (empty($password)) {
    // La contraseña esta vacía
   echo '<script type="text/javascript">'; 
    echo 'alert("Usuario o contraseña incorrecta");'; 
    echo 'window.location.href = "http://localhost/fleece-master/Login.php";';
    echo '</script>';
    exit();
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    // El correo electronico no es valido
    echo '<script type="text/javascript">'; 
    echo 'alert("Usuario o contraseña incorrecta");'; 
    echo 'window.location.href = "http://localhost/fleece-master/Login.php";';
    echo '</script>';
    exit();
}

// Consulta SQL para buscar el usuario en la base de datos
$sql = "SELECT * FROM usuarios WHERE username = '$email' OR email = '$email' LIMIT 1";
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
            header("Location: .../index.php?error=SesionYaIniciada");
            exit();
        }

		$_SESSION['username'] = $user['username'];
		
	echo '<script type="text/javascript">'; 
    echo 'alert("Inicio de sesion correcto, bienvenido!");'; 
    echo 'window.location.href = "http://localhost/fleece-master/index.php";';
    echo '</script>';
		exit();
	} else {
	echo '<script type="text/javascript">'; 
    echo 'alert("Usuario o contraseña incorrecta");'; 
    echo 'window.location.href = "http://localhost/fleece-master/Login.php";';
    echo '</script>';
		;
		exit();
	}
} else {
	// Usuario no encontrado
	echo '<script type="text/javascript">'; 
    echo 'alert("Usuario o contraseña incorrecta");'; 
    echo 'window.location.href = "http://localhost/fleece-master/Login.php";';
    echo '</script>';
	exit();
}
?>
