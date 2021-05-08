<?php
$nombre = $_POST['nombre'];
$apass = $_POST['pass'];
$bpass = $_POST['rpass'];
$tusuario = $_POST['tipoUsuario'];




require "bancoconexion.php";
$sql = "SELECT * FROM cliente WHERE nit='$apass'";
$checkNit = mysqli_query($conexion, $sql);
$check_nit = mysqli_num_rows($checkNit);


if ($apass == $bpass) {
	if ($check_nit > 0) {

		echo ' <script language="javascript">alert("Atencion, ya existe un usuario con el mismo NIT ");</script> ';
		echo "<script>location.href='index.php'</script>";
	} else {

		mysqli_query($conexion, "INSERT INTO cliente (cod_cliente, nit, nombre_cliente, rol)  SELECT MAX(cod_cliente)+1, '$apass', '$nombre', '$tusuario' FROM cliente");

		echo ' <script language="javascript">alert("Gracias por tu registro \n '.$nombre.'");</script> ';
		echo "<script>location.href='index.php'</script>";
	}
} else {
	echo 'NIT no coincide';
}
