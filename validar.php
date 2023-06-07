<?php
$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];
session_start();
$_SESSION['usuario'] = $usuario;

include("db.php");

$consulta = "SELECT*FROM mp where usuario='$usuario' and contrasena='$contrasena'";
$resultado = mysqli_query($conn, $consulta);

$filas = mysqli_fetch_array($resultado);


if ($filas['id_cargo'] == 1) { //administrador
    header("location:index.php");
} else
if ($filas['id_cargo'] == 2 && ['id'] == 'id') { //cliente
    header("location:index.php");
} else {
?>
    <?php
    include("index.html");
    ?>
    <h1 class="bad">ERROR EN LA AUTENTIFICACION</h1>
<?php
}
mysqli_free_result($resultado);
mysqli_close($conn);
