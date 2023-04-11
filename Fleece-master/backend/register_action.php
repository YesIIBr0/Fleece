
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

// Recuperar los datos del formulario de registro
$username = mysqli_real_escape_string($conn, $_POST['username']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$password = mysqli_real_escape_string($conn, $_POST['password']);
$hash = password_hash($password, PASSWORD_DEFAULT);


//Medidas de seguridad
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    // El correo electronico no es válido
    echo '<script type="text/javascript">'; 
    echo 'alert(" El correo electronico no es válido.");'; 
    echo 'window.location.href = "http://localhost/fleece-master/Registro.php";';
    echo '</script>';
    exit();
}

if (!preg_match("/^[a-zA-Z0-9]+$/", $username)) {
    // El nombre de usuario contiene caracteres no permitidos
    echo '<script type="text/javascript">'; 
    echo 'alert(" El nombre de usuario contiene caracteres no permitidos.");'; 
    echo 'window.location.href = "http://localhost/fleece-master/Registro.php";';
    echo '</script>';
    exit();
}

if (empty($password)) {
    // La contraseña esta vacia
    echo '<script type="text/javascript">'; 
    echo 'alert("La contraseña esta vacia.");'; 
    echo 'window.location.href = "http://localhost/fleece-master/Registro.php";';
    echo '</script>';
    exit();
}
    // Consultar la base de datos para comprobar si el correo electronico ya esta registrado
$sql = "SELECT * FROM usuarios WHERE email = '$email'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // El correo electrónico ya esta registrado
    echo '<script type="text/javascript">'; 
    echo 'alert("El Correo electronico ya esta registrado.");'; 
    echo 'window.location.href = "http://localhost/fleece-master/Registro.php";';
    echo '</script>';
    exit();
}

// Consulta SQL para insertar el usuario en la base de datos
$sql = "INSERT INTO usuarios (username, email, password) VALUES ('$username', '$email', '$hash')";

if (mysqli_query($conn, $sql)) {
	// Registro exitoso, redirigir al usuario a la pagina de inicio de sesion
	echo '<script type="text/javascript">'; 
    echo 'alert("Cuenta creada!");'; 
    echo 'window.location.href = "http://localhost/fleece-master/Login.php";';
    echo '</script>';
   
	exit();
} else {
	// Error al insertar el usuario en la base de datos
	echo "Error: " . mysqli_error($conn);
	exit();
}
?>
