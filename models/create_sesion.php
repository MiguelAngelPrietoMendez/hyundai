<?php

session_start();

include 'access_db.php';//incluimos el acceso a la base de datos


$itMail = $mysqli->real_escape_string($_POST["itMail"]);//validar sql injection
$itPass = $mysqli->real_escape_string($_POST["itPass"]);//validar sql injection

//consulta si exite el usuario
$result = $mysqli->query("SELECT * FROM tbl_usuarios WHERE correo_usuario='" . $itMail . "'  AND contrasena='" . $itPass . "'");
$total = $result->num_rows;
if ($total > 0) 
{
    $row = $result->fetch_array();

    $_SESSION['id_usuario'] = $row['id_usuario'];
    $_SESSION['nombre_usuario'] = $row["nombre_usuario"];

    header("Location: ../administrador/php/crear.php");
} else {
    $_SESSION['errorSesion'] = 1;
    header("Location: ../administrador/login.php");
}
?>
