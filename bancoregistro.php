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
		

		$sql2 = ("SELECT * FROM cliente WHERE nit = '$apass'");
 		$query2 = mysqli_query($conexion, $sql2);
 		$row2 = $query2->fetch_assoc();
        $nuevoCod = $row2['cod_cliente'];

		mysqli_query($conexion, "INSERT INTO cuenta (ncta, saldo, cod_cliente)  SELECT MAX(ncta)+1, '0', '$nuevoCod' FROM cuenta");

		$sql3 = ("SELECT * FROM cuenta WHERE cod_cliente = '$nuevoCod'");
 		$query3 = mysqli_query($conexion, $sql3);
 		$row3 = $query3->fetch_assoc();
        $nuevoNcta = $row3['ncta'];

		mysqli_query($conexion, "INSERT INTO transacciones (cod_transac, monto, tipo, ncta, fecha)  SELECT MAX(cod_transac)+1, '100', 'deposito', '$nuevoNcta', CURDATE() FROM transacciones");

		echo ' <script language="javascript">alert("Gracias por tu registro \n '.$nombre.'");</script> ';
		echo ' <script language="javascript">alert("'.$nombre.' \n por la apertura de tu cuenta se te ha otorgado un BONO: $100");</script> ';
		echo ' <script language="javascript">alert("POR FAVOR TOMA NOTA! \n para ingresar a tu cuenta necesitas Codigo de Cliente \n Codigo: '.$nuevoCod.' \n Contraseña: '.$apass.'");</script> ';
		echo "<script>location.href='index.php'</script>";
	}
} else {
	echo 'NIT no coincide';
}
