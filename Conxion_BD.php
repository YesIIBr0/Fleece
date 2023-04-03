<?php
//conexion a la base de datos

$conexion = new mysqli("localhost","root","","BD_proyecto","3306")
$conexion -> set_charset("utf8")

//controladores 
if(!empty($_POST['enviar'])){
	if(empty($_POST["usuario"] and empty($_POST["clave"]))){
		echo "LOS CAMPOS ESTAN VACIOS";
	}else{
		
	}
}
?> 